<?php
/* Smarty version 3.1.39, created on 2021-07-02 14:01:21
  from '/Applications/MAMP/htdocs/peintu/prestashop_1.7.7.5/admin925obpygb/themes/new-theme/template/components/layout/confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60df0011b3cd42_32743028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70b87a739fb5bc655fd35cffe1601b7d19066d62' => 
    array (
      0 => '/Applications/MAMP/htdocs/peintu/prestashop_1.7.7.5/admin925obpygb/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1624262287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60df0011b3cd42_32743028 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['confirmations']->value)) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
$_smarty_tpl->tpl_vars['conf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
