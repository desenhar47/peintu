<?php
/* Smarty version 3.1.39, created on 2021-07-02 14:01:17
  from 'module:tmnewproductsviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60df000dc7efe2_56517949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90930f9e81a579f24cd772cf613d4489a67fc8c1' => 
    array (
      0 => 'module:tmnewproductsviewstemplat',
      1 => 1624267426,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_60df000dc7efe2_56517949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '107656549460df000dc576d7_48801621';
?>

<section class="newproducts clearfix">
	<div class="container">
	<h2 class="h1 products-section-title text-uppercase">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New products','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

	</h2>
	<div class="paraproduct">
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add our new arrivals to your weekly lineup Lorem Dolor Simply Text','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
	</div>
		<div id="spe_res">
	<div class="products">
		<?php $_smarty_tpl->_assignInScope('sliderFor', 6);?> <!-- Define Number of product for SLIDER -->
		<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
			<ul id="newproduct-carousel" class="tm-carousel product_list">
		<?php } else { ?>
			<ul id="newproduct-grid" class="newproduct_grid product_list grid row gridcount">
		<?php }?>
		
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
			<li class="<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>item<?php } else { ?>product_item col-xs-12 col-sm-6 col-md-4 col-lg-3<?php }?>">
			<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
			</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>		
		<?php if ($_smarty_tpl->tpl_vars['slider']->value == 0) {?>
			<li class="loadmore">
				<div class="tm-message"><i class="material-icons">&#xE811;</i>  No more products found!</div>
				<button class="btn btn-default gridcount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'reload more','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</button>
			</li>
		<?php }?>	
		</ul>
		
		<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
			<div class="customNavigation">
				<a class="btn prev newproduct_prev">&nbsp;</a>
				<a class="btn next newproduct_next">&nbsp;</a>
			</div>
		<?php }?>
		
	
	</div>
	</div>
</div>
</section>

<?php }
}
