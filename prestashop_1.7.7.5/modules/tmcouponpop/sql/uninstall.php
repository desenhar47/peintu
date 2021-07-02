<?php
/**
 * 2010-2019 Templatemelathemes
 *
 * NOTICE OF LICENSE
 *
 * DISCLAIMER
 *
 *  @Module Name: TM CouponPop Module
 *  @author    templatemela <support@templatemela.com>
 *  @copyright 2010-2019 templatemela
 *  @license   http://www.templatemela.com - prestashop template provider
 */

/**
* In some cases you should not drop the tables.
* Maybe the merchant will just try to reset the module
* but does not want to loose all of the data associated to the module.
*/

$sql = array();
$sql[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'tmcouponpop_lang`';
$sql[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'tmcouponpop_shop`';
$sql[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'tmcouponpop`';

foreach ($sql as $query)
	if (Db::getInstance()->execute($query) == false)
		return false;
