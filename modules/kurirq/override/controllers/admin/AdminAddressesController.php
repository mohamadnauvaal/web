<?php

class AdminAddressesController extends AdminAddressesControllerCore
{
    public function setMedia($isNewTheme = false)
    {
        parent::setMedia();
        $kurirq = Module::getInstanceByName('kurirq');
        Media::addJsDef(array('district_list' => $kurirq->listDistrict, 'subdistrict_list' => $kurirq->listSubDistrict));

        $this->addJS(_MODULE_DIR_.'kurirq/views/js/bo.js');
    }
}
