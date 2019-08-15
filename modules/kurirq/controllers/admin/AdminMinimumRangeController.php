<?php
/*
* 
* TODO : Add include handling fee option
* 
 */
class AdminMinimumRangeController extends ModuleAdminController
{
    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'minimum_range';
        $this->identifier = 'id_minimum_range';
        $this->className = 'MinimumRange';
        $this->allow_export = true;
        $this->lang = false;
        $this->context = Context::getContext();
        $this->multishop_context = Shop::CONTEXT_ALL;

        parent::__construct();
    }

    public function renderList()
    {
        $this->addRowAction('edit');
        $this->addRowAction('delete');

        $this->bulk_actions = array(
            'delete' => array(
                'text' => $this->l('Delete selected'),
                'confirm' => $this->l('Delete selected items?')
                )
            );
        
        $this->_select = 'ca.`name` AS carrier, c.`name` AS country, s.`name` AS state, d.`name` AS district';
        $this->_join = ' JOIN '._DB_PREFIX_.'carrier ca ON ca.`id_carrier`=a.`id_carrier`
                         JOIN '._DB_PREFIX_.'country_lang c ON c.`id_country`=a.`id_country`
                         JOIN '._DB_PREFIX_.'state s ON a.`id_state` = s.`id_state`
                         JOIN '._DB_PREFIX_.'kurirq_district d ON a.`id_district` = d.`id_district`';
        $this->_where = 'AND c.`id_lang` = '.$this->context->language->id;

        $this->fields_list = array(
            'id_minimum_range' => array(
                'title' => $this->l('ID'),
                'align' => 'left',
                'width' => 20
            ),
            'carrier' => array(
                'title' => $this->l('Carrier'),
                'width' => 'auto',
                'search' => false
            ),
            'country' => array(
                'title' => $this->l('Country'),
                'width' => 'auto',
                'search' => false
            ),
            'state' => array(
                'title' => $this->l('State'),
                'width' => 'auto',
                'search' => false
            ),
            'district' => array(
                'title' => $this->l('District'),
                'width' => 'auto',
                'search' => false
            ),
            'rule' => array(
                'title' => $this->l('Rule'),
                'width' => 20,
                'callback' => 'displayRule',
            ),
            'weight' => array(
                'title' => $this->l('Weight'),
                'width' => 20,
                'align' => 'left',
                'search' => false
            ),
            'price' => array(
                'title' => $this->l('Price'),
                'width' => 20,
                'align' => 'left',
                'search' => false
            ),
            'action' => array(
                'title' => $this->l('Action'),
                'width' => 20,
                'callback' => 'displayAction'
            )
        );

        $lists = parent::renderList();

        parent::initToolbar();

        return $lists;
    }

    public function displayRule($value, $tr)
    {
        $val = '';
        switch ($value) {
            case 0:
                $val = 'Over';
                break;
            case 1:
                $val = 'Minimum';
                break;
            case 2:
                $val = 'Country';
                break;
            case 3:
                $val = 'State';
                break;
        }
        return $val;
    }

    public function displayAction($value, $tr)
    {
        return ($value == 0 ? 'Free Shipping': 'Disable carrier');
    }

    public function renderForm()
    {
        if (!($obj = $this->loadObject(true))) {
            return;
        }

        $carrier = Carrier::getCarriers($this->context->language->id, true, false, false, null, Carrier::PS_CARRIERS_AND_CARRIER_MODULES_NEED_RANGE);
        $zone = Zone::getZones(true);

        $this->fields_form = array(
            'legend' => array(
            'title' => $this->l('KURIRQ Minimum Range'),
            'icon' => 'icon-cogs',
            ),
            'input' => array(
                array(
                    'type' => 'select',
                    'label' => $this->l('Carrier'),
                    'name' => 'id_carrier',
                    'options' => array(
                    'query' => $carrier,
                    'id' => 'id_carrier',
                    'name' => 'name'
                    ),
                    'hint' => $this->l('Select carrier')
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Country'),
                    'name' => 'id_country',
                    'required' => true,
                    'default_value' => (int)$this->context->country->id,
                    'options' => array(
                        'query' => Country::getCountries($this->context->language->id, false),
                        'id' => 'id_country',
                        'name' => 'name',
                    )
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('State'),
                    'name' => 'id_state',
                    'required' => true,
                    'options' => array(
                        'query' => array(),
                        'id' => 'id_state',
                        'name' => 'name'
                    )
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Rule'),
                    'name' => 'rule',
                    'options' => array(
                        'query' => array(
                            array(
                                'id' => 0,
                                'name' => $this->l('Over')
                            ),
                            array(
                                'id' => 1,
                                'name' => $this->l('Minimum')
                            ),
                            array(
                                'id' => 2,
                                'name' => $this->l('Country')
                            ),
                            array(
                                'id' => 3,
                                'name' => $this->l('State')
                            )
                        ),
                        'id' => 'id',
                        'name' => 'name'
                    ),
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Weight'),
                    'name' => 'weight',
                    'required' => true,
                    'maxlength' => 3,
                    'class' => 'fixed-width-xs',
                    'hint' => $this->l('Set 0 to disabled')
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Price'),
                    'name' => 'price',
                    'required' => true,
                    'class' => 'fixed-width-md',
                    'hint' => $this->l('Set 0 to disabled')
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Action'),
                    'name' => 'action',
                    'options' => array(
                        'query' => array(
                            array(
                                'id' => 0,
                                'name' => $this->l('Free Shipping')
                            ),
                            array(
                                'id' => 1,
                                'name' => $this->l('Disabled')
                            )
                        ),
                        'id' => 'id',
                        'name' => 'name'
                    ),
                ),
            ),
            'submit' => array(
            'title' => $this->l('Save')
            )
        );

        return parent::renderForm();
    }

    public function setMedia()
    {
        parent::setMedia();
        $kurirq = Module::getInstanceByName('kurirq');
        Media::addJsDef(array('district_list' => $kurirq->listDistrict, 'subdistrict_list' => $kurirq->listSubDistrict));

        $this->addJS(_MODULE_DIR_.'kurirq/views/js/bo.js');
        $this->addJS(_MODULE_DIR_.'kurirq/views/js/nosubdistrict.js');
    }
}
