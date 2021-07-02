<?php
/* Smarty version 3.1.39, created on 2021-07-02 14:01:18
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60df000e162c11_36570053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1624267427,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60df000e162c11_36570053 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="block_newsletter links">
<div class="title h3 block_title hidden-lg-up" data-target="#newsletter_footer" data-toggle="collapse">
	<span class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'join our newsletter now','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
	<span class="pull-xs-right">
	  <span class="navbar-toggler collapse-icons">
		<i class="material-icons add">&#xE147;</i>
		<i class="material-icons remove">&#xE15C;</i>
	  </span>
	</span>
  </div>
  <div id="newsletter_footer" class="collapse block_content">
    <h3 class="block_title ">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign Up And Subscribe To Newsletter','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

    </h3>

   <!--  <p class="newspara">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get E-mail updates about our latest shop and special offers.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

    </p>  -->   
    <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
    <p class="news-info"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
    <?php }?>
    
    <div class="block_content">
    <div class="block_email_toggle">
      <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
        <div class="row">
          <div class="col-xs-12">
            <input
              class="btn btn-primary pull-xs-right hidden-xs-down"
              name="submitNewsletter"
              type="submit"
              value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
            >
            <input
              class="btn btn-primary pull-xs-right hidden-sm-up"
              name="submitNewsletter"
              type="submit"
              value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
            >
            <div class="input-wrapper">
              <input
                name="email"
                type="email"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'enter your email address ...','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
aria-labelledby="block-newsletter-label"
              >
            </div>
            <input type="hidden" name="action" value="0">
            <div class="clearfix"></div>
          </div>
          <div class="col-xs-12">
              <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
                <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

                </p>
              <?php }?>
          </div>
        </div>
      </form>
    </div>
    </div>
</div>
</div><?php }
}
