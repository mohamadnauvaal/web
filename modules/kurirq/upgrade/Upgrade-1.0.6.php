<?php
/*
*
* CHANGELOG:
* 
* - Insurance calculation for JNE
*
*/
if (!defined('_PS_VERSION_')) {
    exit;
}
 
function upgrade_module_1_0_6($module)
{
    Configuration::updateValue('KURIRQ_JNE_ADMINISTRATION_FEE', '5000');
    $module->registerHook('dashboardZoneOne');
    $module->updatePosition(Hook::getIdByName('dashboardZoneOne'), 0, 1);
    $module->registerHook('displayBeforeCarrier');
    
    $carriers = $module->getCarrier();
    foreach ($carriers as $array => $carrier) {
        $c = new Carrier(Configuration::get($carrier['slug']));
        if (Validate::isLoadedObject($c)) {
            $c->is_module = 1;
            $c->save();
        }
    }
    return true;
}
