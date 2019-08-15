<?php
/*
*
* CHANGELOG:
* 
* - Add minimum range
*
*/
if (!defined('_PS_VERSION_')) {
    exit;
}
 
function upgrade_module_1_0_2($module)
{
    $sql = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'minimum_range` (
            `id_minimum_range` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
            `id_shop` int(11) UNSIGNED NOT NULL DEFAULT \'0\',
            `id_carrier` int(11) UNSIGNED NOT NULL DEFAULT \'0\',
            `id_country` int(11) UNSIGNED NOT NULL DEFAULT \'0\',
            `id_state` int(11) UNSIGNED NOT NULL DEFAULT \'0\',
            `id_district` int(11) UNSIGNED NOT NULL DEFAULT \'0\',
            `rule` tinyint(1) UNSIGNED NOT NULL DEFAULT \'0\',
            `weight` int(11) UNSIGNED NOT NULL DEFAULT \'0\',
            `price` decimal(20,6) UNSIGNED NOT NULL DEFAULT \'0\',
            `action` tinyint(1) UNSIGNED NOT NULL DEFAULT \'0\',
            PRIMARY KEY (`id_minimum_range`)
        ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';
    Db::getInstance()->Execute($sql);
    $module->uninstallTab();
    $module->installTab();
    return true;
}
