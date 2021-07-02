<?php
/* Smarty version 3.1.39, created on 2021-07-02 14:01:17
  from 'module:tmcmsblockviewstemplatesh' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60df000dd84ae5_26326422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ed12611fcfb194f4a86134efb268298a4ffc67b' => 
    array (
      0 => 'module:tmcmsblockviewstemplatesh',
      1 => 1624267426,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60df000dd84ae5_26326422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '83880230260df000dd81a98_23182320';
?>

<div id="tmcmsblock" class="parallax" data-source-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
megnor/parallax.jpg">
  <div class="container">
    <?php echo $_smarty_tpl->tpl_vars['tmcmsblockinfos']->value['text'];?>

  </div>
</div>
<?php }
}
