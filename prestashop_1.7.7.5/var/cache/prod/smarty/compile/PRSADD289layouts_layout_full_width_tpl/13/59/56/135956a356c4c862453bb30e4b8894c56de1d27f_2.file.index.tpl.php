<?php
/* Smarty version 3.1.39, created on 2021-07-02 14:01:17
  from '/Applications/MAMP/htdocs/peintu/prestashop_1.7.7.5/themes/PRSADD289/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60df000ddf04b6_36042590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '135956a356c4c862453bb30e4b8894c56de1d27f' => 
    array (
      0 => '/Applications/MAMP/htdocs/peintu/prestashop_1.7.7.5/themes/PRSADD289/templates/index.tpl',
      1 => 1624267426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60df000ddf04b6_36042590 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165987225660df000ddea3c5_99525982', 'page_content_container');
?>

	
	
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_179146846360df000ddeaff5_13424489 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_52522214560df000dded9b4_67027228 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

        <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_62799472660df000ddece73_43379059 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52522214560df000dded9b4_67027228', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_165987225660df000ddea3c5_99525982 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_165987225660df000ddea3c5_99525982',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_179146846360df000ddeaff5_13424489',
  ),
  'page_content' => 
  array (
    0 => 'Block_62799472660df000ddece73_43379059',
  ),
  'hook_home' => 
  array (
    0 => 'Block_52522214560df000dded9b4_67027228',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179146846360df000ddeaff5_13424489', 'page_content_top', $this->tplIndex);
?>

        
		<!-- Templatemela start -->
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopColumn'),$_smarty_tpl ) );?>
    

		<!-- Templatemela end -->
		
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62799472660df000ddece73_43379059', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
