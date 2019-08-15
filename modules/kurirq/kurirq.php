<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

if (!class_exists('CacheManager')) {
    include(dirname(__FILE__).'/classes/CacheManager.php');
}

class KurirQ extends CarrierModule
{
    public $_html;
    public $id_carrier;
    public $api_endpoint = 'https://api.kurirq.com/';
    public $listDistrict;
    public $listSubDistrict;
    public $kurirq_ajax_url;

    public function __construct()
    {
        $this->name = 'kurirq';
        $this->version = '1.0.11';
        $this->author = 'Prestanesia';
        $this->tab = 'shipping_logistics';

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('KurirQ');
        $this->description = $this->l('All in one Indonesian shipping module using carrier such as JNE, TIKI, WAHANA, POS, etc. Support domestic and international shipment.');
        $this->ps_versions_compliancy = array('min' => '1.7.2.4', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        $id_country = 0;

        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        $id_country = (int)Country::getByIso('ID', true);

        if ($id_country != 111) {
            $this->_errors[] = $this->l('Please make sure that country Indonesia (ID: 111) is exist and active (not disabled).');
            return false;
        }

        if (parent::install() &&
            $this->registerHook('displayBeforeCarrier') &&
            $this->registerHook('dashboardZoneOne') &&
            $this->registerHook('displayCartTotalPriceLabel') &&
            $this->registerHook('displayShoppingCartFooter') &&
            $this->registerHook('displayHeader') &&
            $this->registerHook('actionAdminControllerSetMedia') &&
            $this->registerHook('displayBackOfficeHeader') &&
            $this->registerHook('updateCarrier') &&
            $this->registerHook('actionObjectAddressAddAfter') &&
            $this->registerHook('actionObjectAddressUpdateAfter')
        ) {
            return $this->initConfig() && $this->installDB() && $this->installTab();
        }

        $oModule = Module::getInstanceByName('kurirq');
        $oModule->enable();

        return false;
    }

    public function initConfig()
    {
        Configuration::updateValue('PS_COUNTRY_DEFAULT', 111);
        Configuration::updateValue('KURIRQ_ROUNDING', 1);
        Configuration::updateValue('KURIRQ_RANDOMIZE', 0);
        Configuration::updateValue('KURIRQ_HIDE', 0);
        Configuration::updateValue('KURIRQ_VOL', 0);
        Configuration::updateValue('KURIRQ_WOOD_PACKAGING', 0);
        Configuration::updateValue('KURIRQ_WOOD_PACKAGING_ATTRIBUTE', 0);
        Configuration::updateValue('KURIRQ_INSURANCE', 0);
        Configuration::updateValue('KURIRQ_INSURANCE_ATTRIBUTE', '');
        Configuration::updateValue('KURIRQ_DOMAIN', 'Invalid API key');
        Configuration::updateValue('KURIRQ_CITY', 'Invalid API key');
        Configuration::updateValue('KURIRQ_CACHE_EXPIRATION', '3 months');
        Configuration::updateValue('KURIRQ_JNE_ADMINISTRATION_FEE', '5000');
        return true;
    }

    public function installDB()
    {
        $zone = Db::getInstance()->getRow("SELECT id_zone FROM "._DB_PREFIX_."zone WHERE name ='KURIRQ'");
        if (!$zone) {
            Db::getInstance()->Execute("INSERT INTO "._DB_PREFIX_."zone (name, active) VALUES('KURIRQ', 1)");
            $zone = Db::getInstance()->getRow("SELECT id_zone FROM "._DB_PREFIX_."zone WHERE name ='KURIRQ'");
        }

        $sql = require dirname(__FILE__).'/sql/install.php';
        foreach ($sql as $query) {
            Db::getInstance()->execute($query);
        }

        $sql = require dirname(__FILE__).'/sql/state.php';
        foreach ($sql as $query) {
            Db::getInstance()->execute($query);
        }

        Db::getInstance()->Execute('UPDATE '._DB_PREFIX_.'country SET id_zone='.$zone['id_zone'].' WHERE id_country <> 111');
        Db::getInstance()->execute('UPDATE '._DB_PREFIX_.'state SET id_zone='.$zone['id_zone'].' WHERE id_country <> 111');

        return true;
    }

    public function installDistrict()
    {
        Db::getInstance()->Execute('DELETE FROM '._DB_PREFIX_.'kurirq_district');
        Db::getInstance()->Execute('DELETE FROM '._DB_PREFIX_.'kurirq_subdistrict');

        $result = $this->fileGetContents($this->api_endpoint.'v1/getkabupaten');
        $districts = Tools::jsonDecode($result, false);
        $insert_district = array();
        foreach ($districts as $district) {
            $insert_district[] = array(
                'id_district' => (int)$district->id_district,
                'id_state' => (int)$district->id_state,
                'name' => addslashes($district->name)
            );
        }
        Db::getInstance()->insert('kurirq_district', $insert_district);

        $result = $this->fileGetContents($this->api_endpoint.'v1/getkota');
        $subdistricts = Tools::jsonDecode($result, false);
        $insert_subdistrict = array();
        foreach ($subdistricts as $subdistrict) {
            $insert_subdistrict[] = array(
                'id_subdistrict' => (int)$subdistrict->id_subdistrict,
                'id_district' => (int)$subdistrict->id_district,
                'name' => addslashes($subdistrict->name)
                );
        }
        
        Db::getInstance()->insert('kurirq_subdistrict', $insert_subdistrict);
        return true;
    }

    public function uninstallDB()
    {
        $sql = require dirname(__FILE__).'/sql/uninstall.php';
        foreach ($sql as $query) {
            Db::getInstance()->execute($query);
        }
        return true;
    }

    public function installTab()
    {
        // Minimum range
        $tab = new Tab();
        $tab->active = 1;
        $tab->class_name = 'AdminMinimumRange';
        $tab->name = array();

        foreach (Language::getLanguages(true) as $lang) {
            $tab->name[$lang['id_lang']] = 'KURIRQ Minimum Range';
        }

        $tab->id_parent = (int)Tab::getIdFromClassName('AdminParentShipping');
        $tab->module = $this->name;

        $tab->add();
        @copy(dirname(__FILE__).'/override/classes/MinimumRange.php', dirname(__FILE__).'/../../override/classes/MinimumRange.php');

        // Carrier Handler -> Include custom made carrier to use KURIRQ zone
        /*if (!Tab::getIdFromClassName('AdminCarrierHandler')) {
            $tab = new Tab();
            $tab->active = 1;
            $tab->class_name = "AdminCarrierHandler";
            $tab->module = $this->name;
            $tab->name = array();
            foreach (Language::getLanguages(true) as $lang) {
                $tab->name[$lang['id_lang']] = "KURIRQ Carrier Handler";
            }
            $tab->id_parent = (int)Tab::getIdFromClassName('AdminParentShipping');
            $tab->add();
        }*/

        return true;
    }

    public function uninstallTab()
    {
        /*$id_tab = (int)Tab::getIdFromClassName('AdminCarrierHandler');
        if ($id_tab > 0) {
            $tab = new Tab($id_tab);
            $tab->delete();
        }*/
        $id_tab = (int)Tab::getIdFromClassName('AdminMinimumRange');
        if ($id_tab > 0) {
            $tab = new Tab($id_tab);
            $tab->delete();
            @unlink(dirname(__FILE__).'/../../override/classes/MinimumRange.php');
        }

        return true;
    }

    public function generateCarrier()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        $zone = Db::getInstance()->getRow('SELECT id_zone FROM '._DB_PREFIX_.'zone WHERE name =\'KURIRQ\'');
        Db::getInstance()->Execute('UPDATE '._DB_PREFIX_.'country SET contains_states=1, id_zone='.$zone['id_zone'].', need_zip_code=1, active=1 WHERE id_country=111');
        Db::getInstance()->execute('UPDATE '._DB_PREFIX_.'state SET id_zone='.$zone['id_zone'].' WHERE id_country = 111');

        $carriers = $this->getCarrier();
        foreach ($carriers as $k => $v) {
            $eta = json_decode($v['eta']);
            $delay = get_object_vars($eta);

            $carrier = new Carrier();
            $carrier->name = $v['service'];
            $carrier->id_tax_rules_group = 1;
            $carrier->url = Tools::getShopDomain(true).__PS_BASE_URI__.$v['url'];
            $carrier->active = 1;
            $carrier->deleted = 0;
            $carrier->shipping_handling = 0;
            $carrier->range_behavior = 0;
            $carrier->is_module = 1;
            $carrier->shipping_external = 1;
            $carrier->external_module_name = $this->name;
            $carrier->need_range = 1;

            $languages = Language::getLanguages(true);
            foreach ($languages as $language) {
                if (array_key_exists($language['iso_code'], $delay)) {
                    $carrier->delay[$language['id_lang']] = $delay[$language['iso_code']];
                } else {
                    $carrier->delay[$language['id_lang']] = $delay['id'];
                }
            }
            /*foreach ($languages as $language) {
                if ($language['iso_code'] == 'id') {
                    $carrier->delay[(int)$language['id_lang']] = $delay[$language['iso_code']];
                }
                if ($language['iso_code'] == 'en') {
                    $carrier->delay[(int)$language['id_lang']] = $delay[$language['iso_code']];
                }
                if ($language['iso_code'] == Language::getIsoById(Configuration::get('PS_LANG_DEFAULT'))) {
                    $carrier->delay[(int)$language['id_lang']] = $delay['en'];
                }
            }*/

            if ($carrier->add()) {
                Configuration::updateValue($v['slug'], (int)$carrier->id);

                $groups = Group::getGroups(true);
                foreach ($groups as $group) {
                    Db::getInstance()->Execute('INSERT INTO '._DB_PREFIX_.'carrier_group VALUE (\''.(int)($carrier->id).'\',\''.(int)($group['id_group']).'\')');
                }

                $carrier->addZone($zone['id_zone']);

                $rangeWeight = new RangeWeight();
                $rangeWeight->id_carrier = $carrier->id;
                $rangeWeight->delimiter1 = '0';
                $rangeWeight->delimiter2 = '10000';
                $rangeWeight->add();

                copy(dirname(__FILE__)."/views/img/".strtolower($v['name']).'.jpg', _PS_SHIP_IMG_DIR_.'/'.$carrier->id.'.jpg');
            }
        }
        return true;
    }

    private function installCarrier($name, $id_zone)
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        $carriers = $this->getCarrier($name);
        
        foreach ($carriers as $k => $v) {
            $eta = json_decode($v['eta']);
            $delay = get_object_vars($eta);
            
            $carrier = new Carrier();
            $carrier->name = $v['service'];
            $carrier->id_tax_rules_group = 1;
            $carrier->url = Tools::getShopDomain(true).__PS_BASE_URI__.$v['url'];
            $carrier->active = 1;
            $carrier->deleted = 0;
            $carrier->delay = $delay;
            $carrier->shipping_handling = 0;
            $carrier->range_behavior = 0;
            $carrier->is_module = 1;
            $carrier->shipping_external = 1;
            $carrier->external_module_name = $this->name;
            $carrier->need_range = 1;

            $languages = Language::getLanguages(true);
            foreach ($languages as $language) {
                if (array_key_exists($language['iso_code'], $delay)) {
                    $carrier->delay[$language['id_lang']] = $delay[$language['iso_code']];
                } else {
                    $carrier->delay[$language['id_lang']] = $delay['id'];
                }
            }

            if ($carrier->add()) {
                Configuration::updateValue($v['slug'], (int)$carrier->id);

                $groups = Group::getGroups(true);
                foreach ($groups as $group) {
                    Db::getInstance()->Execute('INSERT INTO '._DB_PREFIX_.'carrier_group VALUE (\''.(int)($carrier->id).'\',\''.(int)($group['id_group']).'\')');
                }

                $carrier->addZone($id_zone);

                $rangeWeight = new RangeWeight();
                $rangeWeight->id_carrier = $carrier->id;
                $rangeWeight->delimiter1 = '0';
                $rangeWeight->delimiter2 = '10000';
                $rangeWeight->add();

                copy(dirname(__FILE__)."/views/img/".strtolower($v['name']).'.jpg', _PS_SHIP_IMG_DIR_.'/'.$carrier->id.'.jpg');
            }
        }
        return true;
    }

    public function getContent()
    {
        $this->_postProcess();

        $this->context->smarty->assign(
            array(
                'post_uri' => $_SERVER['REQUEST_URI'],
                'apikey' => Configuration::get('KURIRQ_API'),
                'domain' => Configuration::get('KURIRQ_DOMAIN'),
                'city' => ucfirst(Configuration::get('KURIRQ_CITY')),
                'paket' => Configuration::get('KURIRQ_PAKET'),
                'installed' => (int)Configuration::get('KURIRQ_INSTALLED'),
                'shopEnable' => (int)Configuration::get('PS_SHOP_ENABLE'),
                'oldPHPVersion' => (int)version_compare(substr(phpversion(), 0, 5), '5.3.0', '<=')
            )
        );

        $this->_html .= $this->context->smarty->fetch($this->local_path.'views/templates/admin/configure.tpl');
        $this->_html .= $this->renderSetting();
        return $this->_html;
    }

    protected function renderSetting()
    {
        $this->fields_form[0]['form'] = array(
            'legend' => array(
                'title' => $this->l('Active carrier'),
                'icon' => 'icon-truck',
            ),
            'input' => array(
                array(
                    'type' => 'order_state',
                    'label' => $this->l('Carrier'),
                    'name' => 'stateBox[]',
                    'values' => $this->getCarrier(),
                    'desc' => $this->l('Please mark carrier(s) that will be supported in your store.')
                )
            ),
            'submit' => array(
            'name' => 'submitSetting',
            'title' => $this->l('Save')
            )
        );

        $this->fields_form[1]['form'] = array(
            'legend' => array(
            'title' => $this->l('Configuration'),
            'icon' => 'icon-cogs',
            ),
            'input' => array(
                    array(
                    'type' => 'switch',
                    'label' => $this->l('0.3 rounding tolerance'),
                    'name' => 'KURIRQ_ROUNDING',
                    'is_bool' => true,
                    'desc' => $this->l('Enable 0.3 rounding tolerance'),
                    'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Unique payment'),
                        'name' => 'KURIRQ_RANDOMIZE',
                        'is_bool' => true,
                        'desc' => $this->l('Generate unique payment number'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                            'id' => 'active_off',
                            'value' => false,
                            'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Hide shipping fee to guest'),
                        'name' => 'KURIRQ_HIDE',
                        'is_bool' => true,
                        'desc' => $this->l('Hide shipping fee to guest customer/non logged-in user'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                            'id' => 'active_off',
                            'value' => false,
                            'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'col' => 4,
                        'type' => 'select',
                        'label' => $this->l('Cache duration'),
                        'name' => 'KURIRQ_CACHE_EXPIRATION',
                        'required' => false,
                        'desc' => $this->l('By default, delivery fee is cached. Set cache duration here.'),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id' => '1 month',
                                    'name' => $this->l('1 Month')),
                                array(
                                    'id' => '3 months',
                                    'name' => $this->l('3 Months')),
                                array(
                                    'id' => '6 months',
                                    'name' => $this->l('6 Months')),
                                array(
                                    'id' => '1 year',
                                    'name' => $this->l('1 Year'))
                            ),
                            'id' => 'id',
                            'name' => 'name'
                        )
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Activate volumetric'),
                        'name' => 'KURIRQ_VOL',
                        'is_bool' => true,
                        'desc' => $this->l('Activate volumetric calculation'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Enable wood packaging'),
                        'name' => 'KURIRQ_WOOD_PACKAGING',
                        'is_bool' => true,
                        'desc' => $this->l('Enable wood packaging for goods'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'col' => 3,
                        'type' => 'select',
                        'label' => $this->l('Wood packaging product attribute'),
                        'name' => 'KURIRQ_WOOD_PACKAGING_ATTRIBUTE',
                        'required' => false,
                        'options' => array(
                            'query' => AttributeGroup::getAttributesGroups($this->context->language->id),
                            'id' => 'id_attribute_group',
                            'name' => 'name'
                        )
                    ),
                     array(
                        'type' => 'switch',
                        'label' => $this->l('Enable insurance'),
                        'name' => 'KURIRQ_INSURANCE',
                        'is_bool' => true,
                        'desc' => $this->l('Enable insurance calculation'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'col' => 3,
                        'type' => 'select',
                        'label' => $this->l('Insurance Product Attribute'),
                        'name' => 'KURIRQ_INSURANCE_ATTRIBUTE',
                        'required' => false,
                        'options' => array(
                            'query' => AttributeGroup::getAttributesGroups($this->context->language->id),
                            'id' => 'id_attribute_group',
                            'name' => 'name'
                        )
                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'label' => $this->l('JNE Administration Fee'),
                        'name' => 'KURIRQ_JNE_ADMINISTRATION_FEE',
                        'required' => false
                    ),
            ),
            'submit' => array(
            'title' => $this->l('Save'),
            'name' => 'submitSetting',
            ),
        );

        $tmp = Configuration::get('KURIRQ_CARRIER');
        $boxes = explode(',', $tmp);

        if ($boxes && is_array($boxes)) {
            foreach ($boxes as $key => $value) {
                $this->fields_value[$value] = true;
            }
        }

        $this->fields_value['KURIRQ_ENABLED'] = Configuration::get('KURIRQ_ENABLED');
        $this->fields_value['KURIRQ_RANDOMIZE'] = Configuration::get('KURIRQ_RANDOMIZE');
        $this->fields_value['KURIRQ_HIDE'] = Configuration::get('KURIRQ_HIDE');
        $this->fields_value['KURIRQ_CACHE_EXPIRATION'] = Configuration::get('KURIRQ_CACHE_EXPIRATION');
        $this->fields_value['KURIRQ_VOL'] = Configuration::get('KURIRQ_VOL');
        $this->fields_value['KURIRQ_WOOD_PACKAGING'] = Configuration::get('KURIRQ_WOOD_PACKAGING');
        $this->fields_value['KURIRQ_WOOD_PACKAGING_ATTRIBUTE'] = Configuration::get('KURIRQ_WOOD_PACKAGING_ATTRIBUTE');
        $this->fields_value['KURIRQ_INSURANCE'] = Configuration::get('KURIRQ_INSURANCE');
        $this->fields_value['KURIRQ_INSURANCE_ATTRIBUTE'] = Configuration::get('KURIRQ_INSURANCE_ATTRIBUTE');
        $this->fields_value['KURIRQ_ROUNDING'] = Configuration::get('KURIRQ_ROUNDING');
        $this->fields_value['KURIRQ_JNE_ADMINISTRATION_FEE'] = Configuration::get('KURIRQ_JNE_ADMINISTRATION_FEE');

        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submit';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
        .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->fields_value = $this->fields_value;
        $helper->languages =  $this->context->controller->getLanguages();
        $helper->id_language =  $this->context->language->id;

        return $helper->generateForm($this->fields_form);
    }

    protected function getConfigFormValues()
    {
        return array(
            'KURIRQ_ENABLED' => Tools::getValue('KURIRQ_ENABLED', Configuration::get('KURIRQ_ENABLED')),
            'KURIRQ_RANDOMIZE' => Tools::getValue('KURIRQ_RANDOMIZE', Configuration::get('KURIRQ_RANDOMIZE')),
            'KURIRQ_HIDE' => Tools::getValue('KURIRQ_HIDE', Configuration::get('KURIRQ_HIDE')),
            'KURIRQ_VOL' => Tools::getValue('KURIRQ_VOL', Configuration::get('KURIRQ_VOL')),
            'KURIRQ_CACHE_EXPIRATION' => Tools::getValue('KURIRQ_CACHE_EXPIRATION', Configuration::get('KURIRQ_CACHE_EXPIRATION')),
            'KURIRQ_WOOD_PACKAGING`' => Tools::getValue('KURIRQ_WOOD_PACKAGING', Configuration::get('KURIRQ_WOOD_PACKAGING')),
            'KURIRQ_WOOD_PACKAGING_ATTRIBUTE' => Tools::getValue('KURIRQ_WOOD_PACKAGING_ATTRIBUTE', Configuration::get('KURIRQ_WOOD_PACKAGING_ATTRIBUTE')),
            'KURIRQ_INSURANCE' => Tools::getValue('KURIRQ_INSURANCE', Configuration::get('KURIRQ_INSURANCE')),
            'KURIRQ_ROUNDING' => Tools::getValue('KURIRQ_ROUNDING', Configuration::get('KURIRQ_ROUNDING')),
            'KURIRQ_INSURANCE_ATTRIBUTE' => Tools::getValue('KURIRQ_INSURANCE_ATTRIBUTE', Configuration::get('KURIRQ_INSURANCE_ATTRIBUTE')),
            'KURIRQ_JNE_ADMINISTRATION_FEE' => Tools::getValue('KURIRQ_JNE_ADMINISTRATION_FEE', Configuration::get('KURIRQ_JNE_ADMINISTRATION_FEE')),
        );
    }

    private function _postValidation()
    {
        if (Tools::isSubmit('submitSetting')) {
            $stateBoxes = Tools::getValue('stateBox');
            if (!is_array($stateBoxes)) {
                $this->_errors[] = $this->l('You must choose at least one carrier to be used in your store.');
            }
        }
    }

    protected function _postProcess()
    {
        if (Tools::isSubmit('submitSetting')) {
            Configuration::updateValue('KURIRQ_ENABLED', Tools::getValue('KURIRQ_ENABLED'));
            Configuration::updateValue('KURIRQ_ROUNDING', Tools::getValue('KURIRQ_ROUNDING'));
            Configuration::updateValue('KURIRQ_RANDOMIZE', (int)Tools::getValue('KURIRQ_RANDOMIZE'));
            Configuration::updateValue('KURIRQ_HIDE', (int)Tools::getValue('KURIRQ_HIDE'));
            Configuration::updateValue('KURIRQ_VOL', (int)Tools::getValue('KURIRQ_VOL'));
            Configuration::updateValue('KURIRQ_CACHE_EXPIRATION', Tools::getValue('KURIRQ_CACHE_EXPIRATION'));
            Configuration::updateValue('KURIRQ_WOOD_PACKAGING', Tools::getValue('KURIRQ_WOOD_PACKAGING'));
            Configuration::updateValue('KURIRQ_WOOD_PACKAGING_ATTRIBUTE', Tools::getValue('KURIRQ_WOOD_PACKAGING_ATTRIBUTE'));
            Configuration::updateValue('KURIRQ_INSURANCE', Tools::getValue('KURIRQ_INSURANCE'));
            Configuration::updateValue('KURIRQ_INSURANCE_ATTRIBUTE', (int)Tools::getValue('KURIRQ_INSURANCE_ATTRIBUTE'));
            Configuration::updateValue('KURIRQ_JNE_ADMINISTRATION_FEE', (int)Tools::getValue('KURIRQ_JNE_ADMINISTRATION_FEE'));

            $boxes = Tools::getValue('stateBox') ? implode(',', Tools::getValue('stateBox')) : '';
            Configuration::updateValue('KURIRQ_CARRIER', rtrim($boxes, ','));
        
            $selectedCarrier = explode(',', $boxes);
            $installedCarrier = $this->getInstalledCarrier();
            $kurir = $this->getCarrier();

            $carrierName = array();
            foreach ($selectedCarrier as $key => $value) {
                $kurir_aktual = array_search($value, array_column($kurir, 'id'));
                $carrierName[] = $kurir[$kurir_aktual]['service'];
            }

            Configuration::updateValue('KURIRQ_CARRIER_NAME', rtrim(implode(',', $carrierName), ','));
            // watchout for new carrier
            $zone = Db::getInstance()->getRow('SELECT id_zone FROM '._DB_PREFIX_.'zone WHERE name =\'KURIRQ\'');
            $result = array_diff($carrierName, $installedCarrier);
            if ($result && isset($result)) {
                foreach ($result as $carrier) {
                    $this->installCarrier($carrier, $zone['id_zone']);
                }
            }
            CacheManager::clear();
            $this->_html .= $this->displayConfirmation($this->l('Settings updated'));
        } elseif (Tools::isSubmit('submitCheckAPI')) {
            Configuration::updateValue('KURIRQ_API', Tools::getValue('apikey'));
            $url = $this->api_endpoint.'cek/'.Tools::getValue('apikey').'/'.base64_encode(Tools::getShopDomain(true).__PS_BASE_URI__);
            $result = Tools::jsonDecode(Tools::file_get_contents($url));
            if ($result && $result->status == 1) {
                Configuration::updateValue('KURIRQ_DOMAIN', $result->domain);
                Configuration::updateValue('KURIRQ_CITY', $result->kota);
                Configuration::updateValue('KURIRQ_PAKET', $result->paket);
                Configuration::loadConfiguration();
                $this->generateCarrier();
                $this->installDistrict();
                Configuration::updateValue('KURIRQ_INSTALLED', 1);
                $this->_html .= $this->displayConfirmation($this->l('Thank you, your API Key has been validated.'));
            } else {
                if (!Configuration::get('KURIRQ_TOKEN')) {
                    Configuration::updateGlobalValue('KURIRQ_TOKEN', Tools::getValue('apikey'));
                }
                $this->_html .= $this->displayError($this->l('Invalid API key or unable to contact Prestanesia server. Also note that the shop must not in maintenance mode.'));
            }
        } elseif (Tools::isSubmit('submitClearCache')) {
            CacheManager::clear();
            $this->_html .= $this->displayConfirmation($this->l('Delivery fee cache has been cleared!'));
        } elseif (Tools::isSubmit('submitResetDistrict')) {
            $this->installDistrict();
            $this->_html .= $this->displayConfirmation($this->l('District data has been re-installed!'));
        }
    }

    public function hookupdateCarrier($params)
    {
        $carriers = $this->getCarrier();
        foreach ($carriers as $array => $carrier) {
            if ($carrier['service'] == $params['carrier']->name) {
                Configuration::updateValue($carrier['slug'], (int)$params['carrier']->id);
                return;
            }
        }
    }

    public function hookactionObjectAddressAddAfter($params)
    {
        $this->updateAddress($params);
    }

    public function hookactionObjectAddressUpdateAfter($params)
    {
        $this->updateAddress($params);
    }

    public function hookDashboardZoneOne($params)
    {
        return $this->display(__FILE__, 'views/templates/admin/news.tpl');
    }

    public function hookExtraCarrier($params)
    {
        $jne = Configuration::getMultiple(array('JNE_REG', 'JNE_OKE', 'JNE_YES'));

        if ((int)Configuration::get('KURIRQ_INSURANCE') == 1 && in_array($params['cart']->id_carrier, $jne)) {
            $attributesGroups = AttributeGroup::getAttributesGroups($this->context->language->id);
            $attributeGroup = '';
            foreach ($attributesGroups as $key => $value) {
                if ($attributesGroups[$key]['id_attribute_group'] == Configuration::get('KURIRQ_INSURANCE_ATTRIBUTE')) {
                    $attributeGroup = strtolower($attributesGroups[$key]['name']);
                }
            }

            $jne_insurance_admin = (int)Configuration::get('KURIRQ_JNE_ADMINISTRATION_FEE');
            $insurance_fee = 0;
            $insurance_detail = '';
            $currency = new Currency((int)$params['cart']->id_currency);

            $cart = new Cart($params['cart']->id);
            $products = $cart->getProducts();
            if (count($products) > 0) {
                foreach ($products as $product) {
                    if (strpos(strtolower($product["attributes"]), $attributeGroup.' : y')) {
                        $insurance_fee += ((float)$product['price']*0.02);
                        $insurance_detail .= '
                        <tr>
                            <td>'.$this->l('Insurance for product').' "'.$product['name'].'"</td>
                            <td>'.Tools::displayPrice($insurance_fee, $currency).'</td>
                        </tr>';
                    }
                }
            }

            if (strlen($insurance_detail)) {
                $insurance_detail .= '
                <tr>
                    <td>'.$this->l('Administration Fee').'</td>
                    <td>'.Tools::displayPrice($jne_insurance_admin, $currency).'</td>
                </tr>';
            }

            $this->smarty->assign(array('insurance_detail' => $insurance_detail));
            return $this->display(__FILE__, 'views/templates/front/insurance-info.tpl');
        }
    }

    public function hookDisplayBeforeCarrier($params)
    {
        return $this->hookExtraCarrier($params);
    }

    private function updateAddress($params)
    {
        $address = $params['object'];
        if (!Validate::isLoadedObject($address)) {
            return false;
        }
        $id_address = $address->id;

        Db::getInstance()->Execute('UPDATE '._DB_PREFIX_.'address SET `id_district` = '.(int)Tools::getValue('id_district').', `id_subdistrict` = '.(int)Tools::getValue('id_subdistrict').' WHERE `id_address` = '.(int)$id_address);
    }

    public function getOrderShippingCost($params, $shipping_cost)
    {
        $cartValue = 0;
        $products = null;
        $totalWeight = (float)($params->getTotalWeight());
        $uniqueValue = 0;
        $kurir = null;
        $rule = 0;
        $weight_limit = 0;
        $price_limit = 0;
        $action = 0;
        $total_shopping = $params->getOrderTotal(true, Cart::BOTH_WITHOUT_SHIPPING);
        $jne_insurance_admin = (int)Configuration::get('KURIRQ_JNE_ADMINISTRATION_FEE');
        $insurance_fee = 0;

        if (!Module::isEnabled('kurirq') || $params->id_address_delivery == 0 || $totalWeight == 0) {
            return false;
        } else {
            $address = new Address($params->id_address_delivery);
            if ($address->id_country == 111 && (!$address->id_subdistrict || $address->id_subdistrict == 0)) {
                return false;
            }
        }

        if ((int)Configuration::get('KURIRQ_HIDE') == 1 && !$this->context->customer->isLogged() && (int)Configuration::get('PS_GUEST_CHECKOUT_ENABLED') == 0) {
            return false;
        }

        $currency = new Currency(Currency::getIdByIsoCode('IDR'));
        if ((int)Configuration::get('KURIRQ_RANDOMIZE') == 1 && ($params->id_currency == $currency->id)) {
            $uniqueValue = $this->updateUnique($params->id);
        }

        $handling_fee = Tools::convertPrice(Configuration::get('PS_SHIPPING_HANDLING'), Currency::getCurrency(intval($params->id_currency)));

        $uniqueValue += $handling_fee;

        $attributesGroups = AttributeGroup::getAttributesGroups($this->context->language->id);
        $attributeGroup = '';
        foreach ($attributesGroups as $key => $value) {
            if ($attributesGroups[$key]['id_attribute_group'] == Configuration::get('KURIRQ_INSURANCE_ATTRIBUTE')) {
                $attributeGroup = strtolower($attributesGroups[$key]['name']);
            }
        }

        if ((int)Configuration::get('KURIRQ_INSURANCE') == 1 || (int)Configuration::get('KURIRQ_VOL') == 1) {
            $cart = new Cart($params->id);
            $products = $cart->getProducts();
            $volumetricData = array();
            if (count($products) > 0) {
                foreach ($products as $product) {
                    $cartValue += (float)$product["total"];
                    $volumetricData[] = array('p' => $product["width"], 'l' => $product["depth"], 't' => $product["height"]);
                    if ((int)Configuration::get('KURIRQ_INSURANCE') == 1 && strpos(strtolower($product["attributes"]), $attributeGroup.' : y')) {
                        $insurance_fee += ((float)$product['price']*0.02);
                    }
                }
            }
        }

        $key = $address->id_country.$address->id_state.$address->id_subdistrict.'-'.$totalWeight;
        $end_point = $this->api_endpoint.'v1/ongkir';
        $selectedCarrier = Configuration::get('KURIRQ_CARRIER_NAME');

        $id_origin = 0;
        if (Module::isInstalled('kurirqmp')) {
            $id_customer = $params->id_customer;
            $seller = WkMpSeller::getSellerDetailByCustomerId($id_customer);
            if ($seller && $seller['active']) {
                $seller_carrier = Db::getInstance()->getRow('SELECT origin, carrier FROM '._DB_PREFIX_.'kurirq_mp WHERE `id_seller` ='.$seller['id_seller']);
                $id_origin = $seller_carrier['origin'];
                $key = $id_origin.'.'.$address->id_country.$address->id_state.$address->id_subdistrict.'-'.$totalWeight;
                $selectedCarrier = $seller_carrier['carrier'];
            }
        }

        $carrier = explode(',', $selectedCarrier);

        // START minimum range/weight
        $result = Db::getInstance()->ExecuteS('SELECT id_country, id_state, rule, weight, price, action from '._DB_PREFIX_.'minimum_range WHERE id_carrier='.$this->id_carrier.' AND id_district='.$address->id_district);
        if ($result && !Module::isInstalled('kurirqmp')) {
            $min_id_country = (int)($result[0]['id_country']);
            $min_id_state = (int)($result[0]['id_state']);
            $rule = (int)($result[0]['rule']);
            $weight_limit = (int)($result[0]['weight']);
            $price_limit = (int)($result[0]['price']);
            $action = (int)($result[0]['action']);
            $byWeight = ($weight_limit > 0) ? true : false;
            $byPrice = ($price_limit > 0) ? true : false;
            $byCountry = ($rule == 2) ? true : false;
            $minrangeResult = false;

            switch ($rule) {
                case 0: // over
                    if ($byWeight) {
                        if ($totalWeight >= $weight_limit) {
                            if ($action == 0) {
                                $minrangeResult = ((int)Configuration::get('KURIRQ_RANDOMIZE_FORCE') == 1 ? $uniqueValue : 0);
                            } else {
                                $minrangeResult = false;
                            }
                            return $minrangeResult;
                        }
                    } else {
                        if ($total_shopping >= $price_limit) {
                            if ($action == 0) {
                                $minrangeResult = ((int)Configuration::get('KURIRQ_RANDOMIZE_FORCE') == 1 ? $uniqueValue : 0);
                            } else {
                                $minrangeResult = false;
                            }
                            return $minrangeResult;
                        }
                    }
                    break;
                case 1: //min
                    if ($byWeight) {
                        if ($weight_limit <= $totalWeight) {
                            if ($action == 0) {
                                $minrangeResult = ((int)Configuration::get('KURIRQ_RANDOMIZE_FORCE') == 1 ? $uniqueValue : 0);
                            } else {
                                $minrangeResult = false;
                            }
                            return $minrangeResult;
                        }
                    } else {
                        if ($price_limit <= $total_shopping) {
                            if ($action == 0) {
                                $minrangeResult = ((int)Configuration::get('KURIRQ_RANDOMIZE_FORCE') == 1 ? $uniqueValue : 0);
                            } else {
                                $minrangeResult = false;
                            }
                            return $minrangeResult;
                        }
                    }
                    break;
                case 2: // country
                    if ($byWeight && ($address->id_country == $min_id_country)) {
                        if ($weight_limit <= $totalWeight) {
                            if ($action == 0) {
                                $minrangeResult = ((int)Configuration::get('KURIRQ_RANDOMIZE_FORCE') == 1 ? $uniqueValue : 0);
                            } else {
                                $minrangeResult = false;
                            }
                            return $minrangeResult;
                        }
                    }

                    if ($byPrice && ($address->id_country == $min_id_country)) {
                        if ($price_limit <= $total_shopping) {
                            if ($action == 0) {
                                $minrangeResult = ((int)Configuration::get('KURIRQ_RANDOMIZE_FORCE') == 1 ? $uniqueValue : 0);
                            } else {
                                $minrangeResult = false;
                            }
                            return $minrangeResult;
                        }
                    }
                    break;
                case 3: // state
                    if ($byWeight && ($address->id_state == $min_id_state)) {
                        if ($weight_limit <= $totalWeight) {
                            if ($action == 0) {
                                $minrangeResult = ((int)Configuration::get('KURIRQ_RANDOMIZE_FORCE') == 1 ? $uniqueValue : 0);
                            } else {
                                $minrangeResult = false;
                            }
                            return $minrangeResult;
                        }
                    }

                    if ($byPrice && ($address->id_state == $min_id_state)) {
                        if ($price_limit <= $total_shopping) {
                            if ($action == 0) {
                                $minrangeResult = ((int)Configuration::get('KURIRQ_RANDOMIZE_FORCE') == 1 ? $uniqueValue : 0);
                            } else {
                                $minrangeResult = false;
                            }
                            return $minrangeResult;
                        }
                    }
                    break;
            }
        }
        // END minimum range/weight
        if (!CacheManager::isStored($key)) {
            $payload = array("apikey" => Configuration::get('KURIRQ_API'),
                        "origin_id" => $id_origin,
                        "country_id" => $address->id_country,
                        "id_state" => $address->id_state,
                        "destination_id" => $address->id_subdistrict,
                        "weight" => $totalWeight,
                        "cartValue" => $cartValue,
                        "setting" => array("carrier" => $carrier,
                                      "volumetric" => Configuration::get('KURIRQ_VOL'),
                                      "volumetricdata" => ((int)Configuration::get('KURIRQ_VOL') == 1 ? $volumetricData : null),
                                      "jneroundingtolerance" => Configuration::get('KURIRQ_ROUNDING'),
                                      "shippinginsurance" => Configuration::get('KURIRQ_INSURANCE'),
                                      "woodpackaging" => Configuration::get('KURIRQ_WOOD_PACKAGING'),
                                      )
                        );

            $post_data = http_build_query(array(
                'payload' => Tools::jsonEncode($payload),
            ));

            $context = stream_context_create(array(
                'http' => array(
                    'method'  => 'POST',
                    'content' => $post_data,
                    'header'  => 'Content-type: application/x-www-form-urlencoded',
                    'timeout' => 5,
                )
            ));

            $data = $this->fileGetContents($end_point, false, $context);
            $kurir = Tools::jsonDecode($data);
            if (!$kurir || (isset($kurir) && $kurir->status == 0)) {
                return false;
            }
            CacheManager::set($key, $data);
        } else {
            $data = CacheManager::get($key);
            $kurir = Tools::jsonDecode($data);
        }

        $ongkir = get_object_vars($kurir->ongkir);
        $shipping_fee = false;
        $carriers = $this->getCarrier();

        if (is_array($carriers) || is_object($carriers)) {
            foreach ($carriers as $array => $carrier) {
                if ($this->id_carrier == Configuration::get($carrier['slug']) && isset($ongkir[$carrier['service']])) {
                    $shipping_fee = (int)$ongkir[$carrier['service']];
                }
            }
        }

        if ($shipping_fee == 0) {
            return false;
        }

        // JNE Insurance
        $jne = Configuration::getMultiple(array('JNE_REG', 'JNE_OKE', 'JNE_YES'));

        if ((int)Configuration::get('KURIRQ_INSURANCE') == 1 && in_array($this->id_carrier, $jne)) {
            $shipping_fee += $insurance_fee + $jne_insurance_admin;
        }

        $isIDRDefault = true;
        $defaultCurrency = Currency::getDefaultCurrency();
        if ($defaultCurrency->iso_code != 'IDR') {
            $isIDRDefault = false;
        }

        $carrier_in_USD = Configuration::getMultiple(array('JNE_INTL', 'TIKI_INTL'));
        $idr = new Currency((int)Currency::getIdByIsoCode('IDR'));
        if (!$isIDRDefault) {
            switch ($this->context->currency->iso_code) {
                case 'IDR':
                    $rate_USD = Currency::getCurrency(Currency::getIdByIsoCode('USD'))['conversion_rate'];
                    if (in_array($this->id_carrier, $carrier_in_USD)) {
                        $shipping_fee = $shipping_fee * $idr->conversion_rate;
                    } else {
                        $shipping_fee = $shipping_fee;
                    }
                    break;
                default:
                    if (!in_array($this->id_carrier, $carrier_in_USD)) {
                        $shipping_fee = $shipping_fee / $idr->conversion_rate;
                    }
                    break;
            }
        } else {
            switch ($this->context->currency->iso_code) {
                case 'IDR':
                    if (in_array($this->id_carrier, $carrier_in_USD)) {
                        $rate_USD = Currency::getCurrency(Currency::getIdByIsoCode('USD'))['conversion_rate'];
                        $shipping_fee = $shipping_fee / $rate_USD;
                    } else {
                        $shipping_fee = $shipping_fee;
                    }
                    break;
                default:
                    if (in_array($this->id_carrier, $carrier_in_USD)) {
                        $shipping_fee = $shipping_fee; // TODO * konversi
                    } else {
                        $shipping_fee = $shipping_fee * $this->context->currency->conversion_rate;
                    }
                    break;
            }
        }

        return $shipping_fee + $uniqueValue;
    }

    public function getOrderShippingCostExternal($params)
    {
        return false;
    }

    private function updateUnique($idCart)
    {
        $ret = Db::getInstance()->getValue('SELECT uniquevalue FROM '._DB_PREFIX_.'kurirq WHERE id_cart='.(int)$idCart);
        if (isset($ret) && $ret > 0) {
            return $ret;
        } else {
            Db::getInstance()->Execute('INSERT INTO '._DB_PREFIX_.'kurirq (id_cart, uniquevalue) VALUES ('.((int)$idCart).','.mt_rand(1, 99).')');
            return self::updateUnique($idCart);
        }
    }

    public function hookDisplayHeader($params)
    {        
        if ($this->context->controller->php_self == 'authentication' || $this->context->controller->php_self == 'address' || $this->context->controller->php_self == 'order-opc' || $this->context->controller->php_self == 'order') {
            $this->kurirq_ajax_url = $this->context->link->getModuleLink($this->name, 'ajax', array(), true);
            $this->assignDistrict();
            Media::addJsDefL('District', $this->l('District'));
            Media::addJsDefL('SubDistrict', $this->l('Sub District'));
            Media::addJsDef(array('kurirq_ajax_url' => $this->kurirq_ajax_url, 'kurirq_token' => Tools::getToken(false), 'district_list' => $this->listDistrict, 'subdistrict_list' => $this->listSubDistrict));
            $this->context->controller->registerJavascript('modules_kurirqfooter', 'modules/'.$this->name.'/views/js/footer.js', ['position' => 'bottom', 'priority' => 150]);
        }
    }
    
    public function hookActionAdminControllerSetMedia($params)
    {
        if (!$this->active || ($this->context->controller->controller_name != 'AdminAddresses' && $this->context->controller->controller_name != 'AdminMinimumRange')) {
            return;
        }
        
        $this->assignDistrict();
        Media::addJsDefL('District', $this->l('District'));
        Media::addJsDefL('SubDistrict', $this->l('Sub District'));
        Media::addJsDef(array(
                'kurirq_ajax_url' => $this->context->link->getModuleLink($this->name, 'ajax', array(), true),
                'kurirq_token' => Tools::getAdminTokenLite('AdminAddresses'),
            ));
    }

    public function hookdisplayBackOfficeHeader($params)
    {
        if (!$this->active || ($this->context->controller->controller_name != 'AdminAddresses' && $this->context->controller->controller_name != 'AdminMinimumRange')) {
            return;
        }

        if (method_exists($this->context->controller, 'addJquery')) {
            $this->context->controller->addJquery();
            $this->context->controller->addJS($this->_path.'views/js/bo.js');
        }
    }

    public function getDistrict($state)
    {
        $key = 'kurirq_getDistrict_'.$state;
        if (!Cache::isStored($key)) {
            $result = Db::getInstance()->ExecuteS('SELECT id_district as id, name from '._DB_PREFIX_.'kurirq_district WHERE id_state='.$state);
            if ($result) {
                Cache::store($key, $result);
            }
            return $result;
        }
        return Cache::retrieve($key);
    }

    public function getCity($district)
    {
        $key = 'kurirq_getCity_'.$district;
        if (!Cache::isStored($key)) {
            $result = Db::getInstance()->ExecuteS('SELECT id_subdistrict as id, name from '._DB_PREFIX_.'kurirq_subdistrict WHERE id_district='.$district);
            if ($result) {
                Cache::store($key, $result);
            }
            return $result;
        }
        return Cache::retrieve($key);
    }

    public function getCarrier($name = '')
    {
        if ($name == '') {
            $key = 'kurirq_getCarrier';
            $date = new DateTime();
            $expiration = strtotime('3 month');

            if ($date->getTimestamp() >= $expiration) {
                Cache::clean($key);
            }

            if (!Cache::isStored($key)) {
                $result = $this->fileGetContents($this->api_endpoint.'v1/getkurir');
                Cache::store($key, $result);
                return Tools::jsonDecode($result, true);
            }
            return Tools::jsonDecode(Cache::retrieve($key), true);
        } else {
            $result = $this->fileGetContents($this->api_endpoint.'v1/getkurir/'.base64_encode($name));
            return Tools::jsonDecode($result, true);
        }
    }

    private function getInstalledCarrier()
    {
        $installedCarrier = array();
        $sql = 'SELECT c.name FROM `'._DB_PREFIX_.'carrier` c WHERE c.external_module_name=\'kurirq\' AND c.deleted=0 AND c.active=1';
        $carriers = Db::getInstance()->executeS($sql);
        foreach ($carriers as $key => $carrier) {
            $installedCarrier[] = $carrier['name'];
        };
        return $installedCarrier;
    }

    public function assignDistrict()
    {
        $id_address = (int)Tools::getValue('id_address');
        $id_minimum_range = (int)Tools::getValue('id_minimum_range');
        $districts = null;
        $subDistricts = null;
        if ($id_address && $id_address > 0) {
            $_address = new Address($id_address);
            $districts = $this->getDistrict($_address->id_state);
            if ($_address->id_district > 0) {
                $subDistricts = $this->getCity($_address->id_district);
            }

            if ($districts) {
                foreach ($districts as $district) {
                    $selected = ((int)$district['id'] == $_address->id_district) ? ' selected="selected"' : '';
                    $this->listDistrict .= '<option value="'.(int)$district['id'].'"'.$selected.'>'.htmlentities($district['name'], ENT_COMPAT, 'UTF-8').'</option>';
                }
            }

            if ($subDistricts) {
                foreach ($subDistricts as $subdistrict) {
                    $selected = ((int)$subdistrict['id'] == $_address->id_subdistrict) ? ' selected="selected"' : '';
                    $this->listSubDistrict .= '<option value="'.(int)$subdistrict['id'].'"'.$selected.'>'.htmlentities($subdistrict['name'], ENT_COMPAT, 'UTF-8').'</option>';
                }
            }

            $this->context->smarty->assign(array(
                'district_list' => $this->listDistrict,
                'districts' => $districts, // TODO hapus
                'subdistrict_list' => $this->listSubDistrict,
                'subdistricts' => $subDistricts // TODO hapus
            ));
        }

        if ($id_minimum_range && $id_minimum_range > 0) {
            $min = new MinimumRange($id_minimum_range);
            if ($min) {
                $districts = $this->getDistrict($min->id_state);
                if ($districts) {
                    foreach ($districts as $district) {
                        $selected = ((int)$district['id'] == $min->id_district) ? ' selected="selected"' : '';
                        $this->listDistrict .= '<option value="'.(int)$district['id'].'"'.$selected.'>'.htmlentities($district['name'], ENT_COMPAT, 'UTF-8').'</option>';
                    }
                }
            }
        }
    }

    public function uninstall()
    {
        $carriers = $this->getCarrier();
        foreach ($carriers as $array => $carrier) {
            $c = new Carrier(Configuration::get($carrier['slug']));
            if (Validate::isLoadedObject($c)) {
                $c->deleted = true;
                $c->save();
            }
        }

        $carrier_list = Carrier::getCarriers($this->context->language->id, true, false, false, null, PS_CARRIERS_AND_CARRIER_MODULES_NEED_RANGE);
        foreach ($carrier_list as $carrier) {
            if ($carrier['active'] && !$carrier['deleted']) {
                Configuration::updateValue('PS_CARRIER_DEFAULT', $carrier['id_carrier']);
            }
        }

        Db::getInstance()->Execute('DELETE FROM '._DB_PREFIX_.'zone WHERE name =\'KURIRQ\'');

        Configuration::deleteByName('KURIRQ_ROUNDING');
        Configuration::deleteByName('KURIRQ_RANDOMIZE');
        Configuration::deleteByName('KURIRQ_VOL');
        Configuration::deleteByName('KURIRQ_WOOD_PACKAGING');
        Configuration::deleteByName('KURIRQ_WOOD_PACKAGING_ATTRIBUTE');
        Configuration::deleteByName('KURIRQ_INSURANCE');
        Configuration::deleteByName('KURIRQ_INSURANCE_ATTRIBUTE');
        Configuration::deleteByName('KURIRQ_DOMAIN');
        Configuration::deleteByName('KURIRQ_CITY');
        Configuration::deleteByName('KURIRQ_TOKEN');
        Configuration::deleteByName('KURIRQ_API');
        Configuration::deleteByName('KURIRQ_CARRIER');
        Configuration::deleteByName('KURIRQ_CARRIER_NAME');
        Configuration::deleteByName('KURIRQ_CACHE_EXPIRATION');
        Configuration::deleteByName('KURIRQ_INSTALLED');
        Configuration::deleteByName('KURIRQ_PAKET');
        $this->unregisterHook('displayBeforeCarrier');
        $this->unregisterHook('dashboardZoneOne');
        $this->unregisterHook('updateCarrier');
        $this->unregisterHook('displayHeader');
        $this->unregisterHook('displayShoppingCartFooter');
        $this->unregisterHook('displayCartTotalPriceLabel');
        $this->unregisterHook('actionAdminControllerSetMedia');
        $this->unregisterHook('displayBackOfficeHeader');
        $this->unregisterHook('actionObjectAddressAddAfter');
        $this->unregisterHook('actionObjectAddressUpdateAfter');
        $this->uninstallTab();
        $this->uninstallDB();
        
        return parent::uninstall();
    }

    private function fileGetContents($url, $use_include_path = false, $stream_context = null, $curl_timeout = 5)
    {
        $header = [
            'Authorization: Bearer '.Configuration::get('KURIRQ_TOKEN'),
            'Accept: application/json'
        ];
        if ($stream_context == null && preg_match('/^https?:\/\//', $url)) {
            $stream_context = @stream_context_create(array('http' => array('timeout' => $curl_timeout)));
        }
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($curl, CURLOPT_TIMEOUT, $curl_timeout);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        if ($stream_context != null) {
            $opts = stream_context_get_options($stream_context);
            if (isset($opts['http']['method']) && Tools::strtolower($opts['http']['method']) == 'post') {
                curl_setopt($curl, CURLOPT_POST, true);
                if (isset($opts['http']['content'])) {
                    parse_str($opts['http']['content'], $post_data);
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
                }
            }
        }
        $result = curl_exec($curl);
        if (curl_errno($curl)) {
            $result = false;
        }
        curl_close($curl);
        return $result;
    }

    public function installMinRange()
    {
        @copy(dirname(__FILE__).'/override/classes/MinimumRange.php', dirname(__FILE__).'/../../override/classes/MinimumRange.php');
        @unlink(_PS_ROOT_DIR_.'/cache/class_index.php');
        Cache::clean('*');
        Cache::getInstance()->flush();
        return true;
    }

    public function getDropshipOrigin()
    {
        $result = $this->fileGetContents($this->api_endpoint.'v1/dropship/origin');
        return Tools::jsonDecode($result, true);
    }

    public function getMarketplaceOrigin()
    {
        $result = $this->fileGetContents($this->api_endpoint.'v1/marketplace/origin');
        return Tools::jsonDecode($result, true);
    }
}
