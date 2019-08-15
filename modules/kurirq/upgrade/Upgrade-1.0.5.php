<?php
/*
*
* CHANGELOG:
* 
* - Automatically add new carrier
* - Maintenance mode & PHP version checking
* - Refresh district data
*
*/
if (!defined('_PS_VERSION_')) {
    exit;
}
 
function upgrade_module_1_0_5($module)
{
    Configuration::deleteByName('KURIRQ_DISTRICT');

    return true;
}
