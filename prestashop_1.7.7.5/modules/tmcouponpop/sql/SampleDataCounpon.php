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

class SampleDataCounpon
{
	public function initData()
	{
		$return = true;
		$languages = Language::getLanguages(true);
		$id_shop = Configuration::get('PS_SHOP_DEFAULT');
		
		$return &= Db::getInstance()->Execute('INSERT IGNORE INTO `'._DB_PREFIX_.'tmcouponpop` (`id_tmcouponpop`, `cookies_time`, `active`) VALUES 
		(1, 864000, 1);
		');
		
		$return &= Db::getInstance()->Execute('INSERT IGNORE INTO `'._DB_PREFIX_.'tmcouponpop_shop` (`id_tmcouponpop`, `id_shop`, `cookies_time`, `active`) VALUES 
		(1, "'.$id_shop.'", 864000, 1);
		');
		
		$text = '<div class="innerbox-newsletter"><h3 class="newsletter_title">Subscribe Newsletter!</h3><div class="newsletter-text"><p>Get instant updates about our new products and promos! Special off 20% for your next buy..</p></div></div>';
		
		foreach ($languages as $language)
		{
			$return &= Db::getInstance()->Execute('INSERT IGNORE INTO `'._DB_PREFIX_.'tmcouponpop_lang` (`id_tmcouponpop`, `id_shop`, `id_lang`, `content`, `background`) VALUES 
			(1, "'.$id_shop.'", "'.$language['id_lang'].'", \''.$text.'\', "newsletter-banner.jpg");
			');
		}
		return $return;
	}
}
?>