<?php
class AdminAddressesController extends AdminAddressesControllerCore
{
    /*
    * module: kurirq
    * date: 2019-08-09 09:16:06
    * version: 1.0.11
    */
    public function setMedia($isNewTheme = false)
    {
        parent::setMedia();
        $kurirq = Module::getInstanceByName('kurirq');
        Media::addJsDef(array('district_list' => $kurirq->listDistrict, 'subdistrict_list' => $kurirq->listSubDistrict));
        $this->addJS(_MODULE_DIR_.'kurirq/views/js/bo.js');
    }
}
