<?php
/*
*
* CHANGELOG:
* 
* - District install at local database
*
*/
if (!defined('_PS_VERSION_')) {
    exit;
}
 
function upgrade_module_1_0_3($module)
{
    $sql = array();
    $sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'kurirq_district` (
               `id_district` int(10) unsigned NOT NULL AUTO_INCREMENT,
               `id_state` int(10) unsigned NOT NULL,
               `name` varchar(50) NOT NULL,
               PRIMARY KEY (`id_district`,`name`)
             ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

    $sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'kurirq_subdistrict` (
               `id_subdistrict` int(10) unsigned NOT NULL AUTO_INCREMENT,
               `id_district` int(10) unsigned NOT NULL,
               `name` varchar(50) NOT NULL,
               PRIMARY KEY (`id_subdistrict`,`name`)
             ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';
    
    foreach ($sql as $query) {
        Db::getInstance()->execute($query);
    }
    $module->installDistrict();
    $module->installMinRange();
    Configuration::updateValue('KURIRQ_INSTALLED', 1);
    return true;
}
