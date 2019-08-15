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

$sql[] = "DELETE FROM "._DB_PREFIX_."state WHERE id_country = 111";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (500, 111, ".$zone['id_zone'].", 'Aceh', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (501, 111, ".$zone['id_zone'].", 'Bali', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (502, 111, ".$zone['id_zone'].", 'Banten', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (503, 111, ".$zone['id_zone'].", 'Bengkulu', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (504, 111, ".$zone['id_zone'].", 'Gorontalo', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (505, 111, ".$zone['id_zone'].", 'Jakarta', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (506, 111, ".$zone['id_zone'].", 'Jambi', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (507, 111, ".$zone['id_zone'].", 'Jawa Barat', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (508, 111, ".$zone['id_zone'].", 'Jawa Tengah', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (509, 111, ".$zone['id_zone'].", 'Jawa Timur', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (510, 111, ".$zone['id_zone'].", 'Kalimantan Barat', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (511, 111, ".$zone['id_zone'].", 'Kalimantan Selatan', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (512, 111, ".$zone['id_zone'].", 'Kalimantan Tengah', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (513, 111, ".$zone['id_zone'].", 'Kalimantan Timur', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (514, 111, ".$zone['id_zone'].", 'Kalimantan Utara', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (515, 111, ".$zone['id_zone'].", 'Kepulauan Bangka Belitung', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (516, 111, ".$zone['id_zone'].", 'Kepulauan Riau', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (517, 111, ".$zone['id_zone'].", 'Lampung', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (518, 111, ".$zone['id_zone'].", 'Maluku', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (519, 111, ".$zone['id_zone'].", 'Maluku Utara', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (520, 111, ".$zone['id_zone'].", 'Nusa Tenggara Barat', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (521, 111, ".$zone['id_zone'].", 'Nusa Tenggara Timur', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (522, 111, ".$zone['id_zone'].", 'Papua', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (523, 111, ".$zone['id_zone'].", 'Papua Barat', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (524, 111, ".$zone['id_zone'].", 'Riau', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (525, 111, ".$zone['id_zone'].", 'Sulawesi Barat', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (526, 111, ".$zone['id_zone'].", 'Sulawesi Selatan', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (527, 111, ".$zone['id_zone'].", 'Sulawesi Tengah', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (528, 111, ".$zone['id_zone'].", 'Sulawesi Tenggara', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (529, 111, ".$zone['id_zone'].", 'Sulawesi Utara', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (530, 111, ".$zone['id_zone'].", 'Sumatera Barat', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (531, 111, ".$zone['id_zone'].", 'Sumatera Selatan', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (532, 111, ".$zone['id_zone'].", 'Sumatera Utara', 'ID-', 0, 1)";
$sql[] = "INSERT INTO "._DB_PREFIX_."state (id_state, id_country, id_zone, name, iso_code, tax_behavior, active)  VALUES (533, 111, ".$zone['id_zone'].", 'Yogyakarta', 'ID-', 0, 1)";

return $sql;
