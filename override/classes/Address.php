<?php
/**
 * 2007-2015 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author 	PrestaShop SA <contact@prestashop.com>
 *  @copyright  2007-2015 PrestaShop SA
 *  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */
class Address extends AddressCore
{
    /*
    * module: kurirq
    * date: 2019-08-09 09:16:06
    * version: 1.0.11
    */
    public $id_district;
    /*
    * module: kurirq
    * date: 2019-08-09 09:16:06
    * version: 1.0.11
    */
    public $id_subdistrict;
    /*
    * module: kurirq
    * date: 2019-08-09 09:16:06
    * version: 1.0.11
    */
    public function __construct($id_address = null, $id_lang = null)
    {
        self::$definition['fields']['id_district'] = array('type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId');
        self::$definition['fields']['id_subdistrict'] = array('type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId');
        parent::__construct($id_address, $id_lang);
    }
}
