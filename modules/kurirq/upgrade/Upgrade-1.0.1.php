<?php
/*
*
* CHANGELOG:
* 
* - PrestaShop 1.7 compability 
*
*/
if (!defined('_PS_VERSION_')) {
    exit;
}
 
function upgrade_module_1_0_1($module)
{
    return ($module->registerHook('actionAdminControllerSetMedia')
      && $module->registerHook('actionObjectAddressAddAfter')
      && $module->registerHook('actionObjectAddressUpdateAfter'));
}
