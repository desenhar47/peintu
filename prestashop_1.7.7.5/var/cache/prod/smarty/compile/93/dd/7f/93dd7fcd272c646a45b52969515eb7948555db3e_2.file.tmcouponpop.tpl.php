<?php
/* Smarty version 3.1.39, created on 2021-07-02 14:01:18
  from '/Applications/MAMP/htdocs/peintu/prestashop_1.7.7.5/themes/PRSADD289/modules/tmcouponpop/views/templates/hook/tmcouponpop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60df000e247238_14118746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93dd7fcd272c646a45b52969515eb7948555db3e' => 
    array (
      0 => '/Applications/MAMP/htdocs/peintu/prestashop_1.7.7.5/themes/PRSADD289/modules/tmcouponpop/views/templates/hook/tmcouponpop.tpl',
      1 => 1624267426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60df000e247238_14118746 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var tm_coupon_url = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tm_coupon_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
	var cookies_time = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['newsletter_setting']->value['cookies_time']), ENT_QUOTES, 'UTF-8');?>
;
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['newsletter_setting']->value) {?>
<div id="overlay" style="<?php if ($_smarty_tpl->tpl_vars['cookies_time']->value > 0) {?>display: none;<?php }?>" onclick="closeDialog(cookies_time)"></div>
<div class="newsletter-main" style="<?php if ($_smarty_tpl->tpl_vars['cookies_time']->value > 0) {?>display: none;<?php }?>">
	<div class="tm-newsletter-popup-close">
		<a class="tm_close" href="javascript:void(0)" onclick="closeDialog(cookies_time)">
			<i class="material-icons clear">&#xe14c;</i>
		</a>

	</div>
	<div class="left-block">
		<?php if ($_smarty_tpl->tpl_vars['newsletter_setting']->value['background'] != '') {?>
		<div class="tm-newsletter-popup">
			<img class="lazyload" data-src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['newsletter_setting']->value['background'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
		<?php } else { ?>
		<div class="tm-newsletter-popup">
		<?php }?>
		</div>
	</div>
	<div class="right-block">
	    <div class="inner">
	
			<div class="clearfix newsletter-content">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['newsletter_setting']->value['content'],'quotes','UTF-8' ));?>

			</div>
			<div class="newsletter-form">
				<div class="newsletter-popup-form">
					<div class="input-wrapper">
						<input class="newsletter-input-email" id="newsletter_input_email" id="" type="text" name="email" size="18" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your email address...','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" value="" />
						<a onclick="regisNewsletter()" name="submitNewsletter" class="btn btn-default button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

							<i class="material-icons arrow_forward">&#xe5c8;</i>
						</a>
					</div>
				</div>
				<div id="regisNewsletterMessage"></div>
				
				<?php if ($_smarty_tpl->tpl_vars['voucher_code']->value != '') {?>
				<div class="coupon-side clearfix">
					<div class="coupon-wrapper clearfix">
						<div id="coupon-element" class="coupon" >
							<div class="dashed-border">
								<span id="coupon-text-before"  style="<?php if ($_smarty_tpl->tpl_vars['show_voucher']->value == 1) {?>display: none;<?php } else { ?>display: block;<?php }?>">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Coupon code shown here','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
								<span id="coupon-text-after" style="<?php if ($_smarty_tpl->tpl_vars['show_voucher']->value == 1) {?>display: block;<?php } else { ?>display: none;<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Coupon Code','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['voucher_code']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
							</div>
						</div>
					</div>
				</div>
				<?php }?>
				<div class="newsletter-checkbox">                    
					<div class="checkbox">
						<input id="notshow" name="notshow" type="checkbox" value="1">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not show this popup again','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

					</div>
				</div>
			</div>
	    </div> 
    </div>   
</div>

<?php echo '<script'; ?>
 type="text/javascript">
var regisNewsletterMessage = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have subscribled successfully!','d'=>'Shop.Theme.Global','js'=>1),$_smarty_tpl ) );?>
';
var enterEmail = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please enter your email!','d'=>'Shop.Theme.Global','js'=>1),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>
<?php }?>
<div class="tm-show-newsletter-popup <?php if ($_smarty_tpl->tpl_vars['cookies_time']->value > 0) {?>open<?php } else { ?>close<?php }?>">
	<div class="tm-coupon-small">
		<div class="tab-image"></div>
		<div class="shears-small"></div>
		<div class="dashes-d"></div>
		<div class="dashes-b"></div>
		<div class="share-coupon-small-wrapper"><a href="javascript: void(0)"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span></a></div>
	</div>
</div><?php }
}
