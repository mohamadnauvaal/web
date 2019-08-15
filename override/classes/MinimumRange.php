<?php
/**
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class MinimumRange extends ObjectModel
{
    public $id_carrier;
    public $id_country;
    public $id_state;
    public $id_district;
    public $rule;
    public $weight;
    public $price;
    public $action;

    protected $table = 'minimum_range';
    protected $identifier = 'id_minimum_range';
    
    public static $definition = array(
        'table' => 'minimum_range',
        'primary' => 'id_minimum_range',
        'multilang' => false,
        'fields' => array(
            'id_carrier' =>  array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'id_country' =>  array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'id_state' =>    array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'id_district' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'rule' =>        array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'weight' =>      array('type' => self::TYPE_FLOAT, 'validate' => 'isUnsignedFloat', 'required' => true),
            'price' =>       array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => true),
            'action' =>      array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true)
        ),
    );
}
