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

/**
* In some cases you should not drop the tables.
* Maybe the merchant will just try to reset the module
* but does not want to loose all of the data associated to the module.
*/

$sql = array();

$sql[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'kurirq`';
$sql[] = 'DELETE FROM `'._DB_PREFIX_.'state` WHERE id_state>=500 AND id_state<=533';
//$sql[] = 'ALTER TABLE `'._DB_PREFIX_.'address` DROP COLUMN id_district';
//$sql[] = 'ALTER TABLE `'._DB_PREFIX_.'address` DROP COLUMN id_subdistrict';
$sql[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'minimum_range`';
$sql[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'kurirq_district`';
$sql[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'kurirq_subdistrict`';
$sql[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'kurirq_cache`';

return $sql;
