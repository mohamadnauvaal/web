<?php

include(dirname(__FILE__). '/../../config/config.inc.php');
include(dirname(__FILE__). '/../../init.php');
include(dirname(__FILE__). '/kurirq.php');

$token = urlencode(Tools::getValue('token'));
$incomingkey = urlencode(Tools::getValue('key'));

if ($incomingkey == Configuration::get('KURIRQ_API')) {
    Configuration::updateGlobalValue('KURIRQ_TOKEN', $token);
}
