<?php
/**
 * 2007-2016 PrestaShop.
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
 * @author     PrestaShop SA <contact@prestashop.com>
 * @copyright  2007-2016 PrestaShop SA
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

$sql = array();

$sql[] = '
	CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'kurirq` (
	  `id_cart` int(11) unsigned NOT NULL,
	  `uniquevalue` smallint(6) default NULL,
	  PRIMARY KEY (`id_cart`)
	  ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

$district_installed = Db::getInstance()->ExecuteS('SHOW COLUMNS FROM `'._DB_PREFIX_.'address` LIKE \'id_district\'');
if (!$district_installed) {
    $sql[] = 'ALTER TABLE `'._DB_PREFIX_.'address` ADD `id_district` INT(11) UNSIGNED NOT NULL DEFAULT \'0\'';
    $sql[] = 'ALTER TABLE `'._DB_PREFIX_.'address` ADD `id_subdistrict` INT(11) UNSIGNED NOT NULL DEFAULT \'0\'';
}

$sql[] = 'UPDATE `'._DB_PREFIX_.'address_format` SET format = "firstname lastname\r\ncompany\r\nvat_number\r\naddress1\r\naddress2\r\nCountry:name\r\nState:name\r\ncity postcode\r\nphone" WHERE id_country = 111';

$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'minimum_range` (
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

$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'kurirq_cache` (
           `key`  varchar(255) NOT NULL,
           `value` text NOT NULL,
           `expiration` int(11) NOT NULL,
           UNIQUE KEY `cache_key_unique` (`key`),
           PRIMARY KEY (`key`),
           INDEX (`key`)
         ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

return $sql;
