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

//require_once(dirname(__FILE__).'../../../config/config.inc.php');
//require_once(dirname(__FILE__).'../../../init.php');
//require_once(dirname(__FILE__).'/tmcouponpop.php');

include_once('../../config/config.inc.php');
include_once('../../init.php');
include_once('tmcouponpop.php');

$module = new TmCouponPop();
$task = Tools::getValue('task');
if ($task == 'cancelRegisNewsletter')
{		
	$notshow = (int)Tools::getValue('notshow', 0);
	$cookies_time = Tools::getValue('cookies_time', 0);
	
	
	if ($notshow == '1')
	{
		Context::getContext()->cookie->__set('cookies_time', $cookies_time);
		Context::getContext()->cookie->__set('notshow', $notshow);
	}
	else
	{
		Context::getContext()->cookie->__set('notshow', $notshow);
	}
	
	die(Tools::jsonEncode('1'));
}
if ($task == 'showPopup')
{		
	Context::getContext()->cookie->__set('notshow', 0);
	Context::getContext()->cookie->__set('cookies_time', 0);
	die(Tools::jsonEncode('1'));
}
if ($task == 'regisNewsletter')
{
	$result = $module->newsletterRegistrationAjax();
	
	//$notshow = (int)Tools::getValue('notshow', 0);
	//Context::getContext()->cookie->__set('notshow', $notshow);
	//Context::getContext()->cookie->__set('show_voucher', 1);
	
	die(Tools::jsonEncode($result));
}