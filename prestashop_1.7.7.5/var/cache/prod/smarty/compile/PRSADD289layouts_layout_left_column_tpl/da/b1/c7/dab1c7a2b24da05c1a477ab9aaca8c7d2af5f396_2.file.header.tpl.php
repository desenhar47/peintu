<?php
/* Smarty version 3.1.39, created on 2021-07-02 14:01:19
  from '/Applications/MAMP/htdocs/peintu/prestashop_1.7.7.5/themes/PRSADD289/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60df000f1c3820_35966150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dab1c7a2b24da05c1a477ab9aaca8c7d2af5f396' => 
    array (
      0 => '/Applications/MAMP/htdocs/peintu/prestashop_1.7.7.5/themes/PRSADD289/templates/_partials/header.tpl',
      1 => 1624267426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60df000f1c3820_35966150 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104157283760df000f1b88b3_07342360', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212656101660df000f1bb619_00250338', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11296435560df000f1be0b2_96507500', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_104157283760df000f1b88b3_07342360 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_104157283760df000f1b88b3_07342360',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_212656101660df000f1bb619_00250338 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_212656101660df000f1bb619_00250338',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav class="header-nav">
        <div class="container">
		<div class="hidden-md-down">
			
			<div class="left-nav">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

			</div>
			<div class="right-nav">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

			</div>
			
		</div>
		
		<div class="hidden-lg-up text-xs-center mobile">
		
						
                        <div class="top-logo" id="_mobile_logo"></div>
                    
			<div class="text-xs-left mobile hidden-lg-up mobile-menu">
						  <div class="container menu-container">
						    <div class="menu-icon">
						     <div class="cat-title"> <i class="material-icons menu-open">&#xE5D2;</i></div>
						    </div>

						  </div>
			  </div>
			<div class="pull-xs-right" id="_mobile_cart"></div>
			<div class="pull-xs-right" id="_mobile_user_info"></div>			
			<div class="clearfix"></div>
		
		</div>
        </div>
</nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_11296435560df000f1be0b2_96507500 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_11296435560df000f1be0b2_96507500',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="header-top">
	<div class="container">
		
			<div class="header_logo hidden-md-down" id="_desktop_logo">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
					<img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
				</a>
			</div>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>


			<div id="mobile_top_menu_wrapper" class="row hidden-lg-up">
				<div class="mobile-menu-inner">
				 	<div class="menu-icon">
				       	<div class="cat-title title2">   
				       		<i class="material-icons menu-close">&#xE5CD;</i>    
				       	</div>
				    </div>
					<div class="js-top-menu mobile" id="_mobile_top_menu"></div>
					<div id="_mobile_currency_selector"></div>
					<div id="_mobile_language_selector"></div>
					<div id="_mobile_contact_link"></div>
				</div>
			</div>
		
	</div>
</div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
