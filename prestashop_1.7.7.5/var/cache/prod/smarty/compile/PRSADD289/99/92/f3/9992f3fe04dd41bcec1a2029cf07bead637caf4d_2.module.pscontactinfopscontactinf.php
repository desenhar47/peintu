<?php
/* Smarty version 3.1.39, created on 2021-07-02 14:01:18
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60df000e1837d4_39636162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1624267426,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60df000e1837d4_39636162 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="footer-block block-contact col-md-4 links wrapper">
  
   		<h3 class="text-uppercase block-contact-title hidden-sm-down"><!-- <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['stores'], ENT_QUOTES, 'UTF-8');?>
"> --><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
<!-- </a> --></h3>
      
		<div class="title h3 clearfix block_title hidden-lg-up" data-target="#block-contact_list" data-toggle="collapse">
		  <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
		  <span class="pull-xs-right">
			  <span class="navbar-toggler collapse-icons">
				<i class="material-icons add">&#xE147;</i>
            <i class="material-icons remove">&#xE15C;</i>
			  </span>
		  </span>
		</div>
	  
	  <ul id="block-contact_list" class="collapse">
	   <li>
	  	<i class="material-icons">&#xE55F;</i>
	 <span class="contactdiv"> <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>
</span>
	  </li>
	 
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
	   <li>
       
        		<i class="material-icons">&#xE0B0;</i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		</li>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
	   <li>
       
                <i class="material-icons">&#xE324;</i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax: [1]%fax%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		</li>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
	  <li>
       
        		<i class="material-icons">&#xE554;</i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%email%[/1]','sprintf'=>array('[1]'=>(('<a href="mailto:').($_smarty_tpl->tpl_vars['contact_infos']->value['email'])).('" class="dropdown">'),'[/1]'=>'</a>','%email%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

		</li>
      <?php }?>
	  </ul>
  
</div><?php }
}
