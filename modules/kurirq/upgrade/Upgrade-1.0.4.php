<?php
/*
*
* CHANGELOG:
* 
* - Multicurrency support
* - Delivery fee cache is separated
* - Prepare for international shipping (set countries zone to KURIRQ)
* - Setting for insurance and wood packaging
* - Add KURIRQ updates to dashboard
* - Add 2 new subdistrict
*
*/
if (!defined('_PS_VERSION_')) {
    exit;
}
 
function upgrade_module_1_0_4($module)
{
    $sql = array();
    // local cache ongkir
    $sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'kurirq_cache` (
               `key`  varchar(255) NOT NULL,
               `value` text NOT NULL,
               `expiration` int(11) NOT NULL,
               UNIQUE KEY `cache_key_unique` (`key`),
               PRIMARY KEY (`key`),
               INDEX (`key`)
             ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';
    
    foreach ($sql as $query) {
        Db::getInstance()->execute($query);
    }

    // preparing international shipping, set countries zone to KURIRQ
    $zone = Db::getInstance()->getRow('SELECT id_zone FROM '._DB_PREFIX_.'zone WHERE name =\'KURIRQ\'');
    Db::getInstance()->Execute('UPDATE '._DB_PREFIX_.'country SET id_zone='.$zone['id_zone'].' WHERE id_country <> 111');
    Db::getInstance()->execute('UPDATE '._DB_PREFIX_.'state SET id_zone='.$zone['id_zone'].' WHERE id_country <> 111');
    
    // kurirq news at dashboard
    $module->registerHook('dashboardZoneOne');
    $module->updatePosition(Hook::getIdByName('dashboardZoneOne'), 0, 1);

    // default cache expiration
    Configuration::updateValue('KURIRQ_CACHE_EXPIRATION', strtotime("3 months"));
    
    // new sub district
    $subdistrict = array();

    $subdistrict[] = array(
        'id_subdistrict' => 209,
        'id_district' => 503,
        'name' => 'Pasie Raya'
        );
    
    $subdistrict[] = array(
        'id_subdistrict' => 4289,
        'id_district' => 653,
        'name' => 'Pasie Ranai'
        );

    Db::getInstance()->insert('kurirq_subdistrict', $subdistrict);

    $url = $module->api_endpoint.'api/paket/'.Configuration::get('KURIRQ_API');
    $result = Tools::jsonDecode(Tools::file_get_contents($url));
    if ($result && $result->status == 1) {
        Configuration::updateValue('KURIRQ_PAKET', $result->paket);
    }
    
    return true;
}
