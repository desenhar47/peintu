{* 
* @Module Name: TM CouponPop Module
* @Website: http://www.templatemela.com - prestashop template provider
* @author Templatemelathemes <support@templatemela.com>
* @copyright  2010-2019 Templatemelathemes 
*}

<script type="text/javascript">
    var tm_coupon_url = "{$tm_coupon_url|escape:'html':'UTF-8'}";
	var cookies_time = {$newsletter_setting.cookies_time|intval};
</script>
{if $newsletter_setting}
<div id="overlay" style="{if $cookies_time>0}display: none;{/if}" onclick="closeDialog(cookies_time)"></div>
<div class="newsletter-main" style="{if $cookies_time>0}display: none;{/if}">
	<div class="tm-newsletter-popup-close">
		<a class="tm_close" href="javascript:void(0)" onclick="closeDialog(cookies_time)">
			<i class="material-icons clear">&#xe14c;</i>
		</a>

	</div>
	<div class="left-block">
		{if $newsletter_setting.background != ''}
		<div class="tm-newsletter-popup">
			<img class="lazyload" data-src="{$newsletter_setting.background|escape:'html':'UTF-8'}">
		{else}
		<div class="tm-newsletter-popup">
		{/if}
		</div>
	</div>
	<div class="right-block">
	    <div class="inner">
	
			<div class="clearfix newsletter-content">
				{$newsletter_setting.content|escape:'quotes':'UTF-8' nofilter}
			</div>
			<div class="newsletter-form">
				<div class="newsletter-popup-form">
					<div class="input-wrapper">
						<input class="newsletter-input-email" id="newsletter_input_email" id="" type="text" name="email" size="18" placeholder="{l s='Enter your email address...' d='Shop.Theme.Global'}" value="" />
						<a onclick="regisNewsletter()" name="submitNewsletter" class="btn btn-default button">{l s='Subscribe' d='Shop.Theme.Global'}
							<i class="material-icons arrow_forward">&#xe5c8;</i>
						</a>
					</div>
				</div>
				<div id="regisNewsletterMessage"></div>
				
				{if $voucher_code != ''}
				<div class="coupon-side clearfix">
					<div class="coupon-wrapper clearfix">
						<div id="coupon-element" class="coupon" >
							<div class="dashed-border">
								<span id="coupon-text-before"  style="{if $show_voucher == 1}display: none;{else}display: block;{/if}">
								{l s='Your Coupon code shown here' d='Shop.Theme.Global'}</span>
								<span id="coupon-text-after" style="{if $show_voucher == 1}display: block;{else}display: none;{/if}">{l s='Coupon Code' d='Shop.Theme.Global'}: {$voucher_code|escape:'html':'UTF-8'}</span>
							</div>
						</div>
					</div>
				</div>
				{/if}
				<div class="newsletter-checkbox">                    
					<div class="checkbox">
						<input id="notshow" name="notshow" type="checkbox" value="1">
						{l s='Do not show this popup again' d='Shop.Theme.Global'}
					</div>
				</div>
			</div>
	    </div> 
    </div>   
</div>

<script type="text/javascript">
var regisNewsletterMessage = '{l s='You have subscribled successfully!' d='Shop.Theme.Global' js=1}';
var enterEmail = '{l s='Please enter your email!' d='Shop.Theme.Global' js=1}';
</script>
{/if}
<div class="tm-show-newsletter-popup {if $cookies_time>0}open{else}close{/if}">
	<div class="tm-coupon-small">
		<div class="tab-image"></div>
		<div class="shears-small"></div>
		<div class="dashes-d"></div>
		<div class="dashes-b"></div>
		<div class="share-coupon-small-wrapper"><a href="javascript: void(0)"><span>{l s='Discount' d='Shop.Theme.Global'}</span></a></div>
	</div>
</div>