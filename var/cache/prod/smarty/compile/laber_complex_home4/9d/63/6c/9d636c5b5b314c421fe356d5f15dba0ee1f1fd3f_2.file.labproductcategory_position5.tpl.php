<?php
/* Smarty version 3.1.43, created on 2022-04-28 15:10:03
  from '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/themes/laber_complex_home4/modules/labproductcategory/views/templates/hook/labproductcategory_position5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_626a841b608f16_61209882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d636c5b5b314c421fe356d5f15dba0ee1f1fd3f' => 
    array (
      0 => '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/themes/laber_complex_home4/modules/labproductcategory/views/templates/hook/labproductcategory_position5.tpl',
      1 => 1500104008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./labproductcategory_accordion.tpl' => 1,
    'file:./labproductcategory_column.tpl' => 1,
    'file:./labproductcategory_tab.tpl' => 1,
  ),
),false)) {
function content_626a841b608f16_61209882 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_cat_result']->value, 'group_cat', false, NULL, 'group_cat_result', array (
));
$_smarty_tpl->tpl_vars['group_cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_cat']->value) {
$_smarty_tpl->tpl_vars['group_cat']->do_else = false;
?>
	<?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['group_cat']->value['id_labgroupcategory']);?>
	<?php $_smarty_tpl->_assignInScope('typeDisplay', $_smarty_tpl->tpl_vars['group_cat']->value['type_display']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
<!-- Module Product From Category -->
<?php if ($_smarty_tpl->tpl_vars['typeDisplay']->value == 'column') {?>
<div class="laberthemes laberProd-cate clearfix" id="laberProductsCatePosition5" 
	data-static_token="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
" 
	data-url_page_cart="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'],'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
	data-lab_base_ssl="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path_ssl']->value,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
modules/labproductcategory/ajax_cat_column.php">
<?php } elseif ($_smarty_tpl->tpl_vars['typeDisplay']->value == 'tab') {?>
<div class="laberthemes laberProd-cate clearfix" id="laberProductsCatePosition5" 
	data-static_token="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
" 
	data-url_page_cart="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'],'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
	data-lab_base_ssl="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path_ssl']->value,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
modules/labproductcategory/ajax_cat_tab.php">	
<?php } else { ?>
<div class="laberthemes laberProd-cate clearfix" id="laberProductsCatePosition5" 
	data-static_token="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
" 
	data-url_page_cart="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'],'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
	data-lab_base_ssl="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path_ssl']->value,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
modules/labproductcategory/ajax_cat.php">
<?php }?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_cat_result']->value, 'group_cat', false, NULL, 'group_cat_result', array (
));
$_smarty_tpl->tpl_vars['group_cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_cat']->value) {
$_smarty_tpl->tpl_vars['group_cat']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['group_cat']->value['type_display'] == 'accordion') {?>
			<?php $_smarty_tpl->_subTemplateRender("file:./labproductcategory_accordion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('group_cat_info'=>$_smarty_tpl->tpl_vars['group_cat']->value['cat_info'],'name_module'=>$_smarty_tpl->tpl_vars['name_module']->value), 0, true);
?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['group_cat']->value['type_display'] == 'column') {?>
			<?php $_smarty_tpl->_subTemplateRender("file:./labproductcategory_column.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('group_cat_info'=>$_smarty_tpl->tpl_vars['group_cat']->value['cat_info']), 0, true);
?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['group_cat']->value['type_display'] == 'tab') {?>
			<?php $_smarty_tpl->_subTemplateRender("file:./labproductcategory_tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('group_cat_info'=>$_smarty_tpl->tpl_vars['group_cat']->value['cat_info']), 0, true);
?>
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['group_cat']->value['use_slider'])) && $_smarty_tpl->tpl_vars['group_cat']->value['use_slider'] == 1) {?>
		<?php echo '<script'; ?>
 type="text/javascript">
		
			
		<?php echo '</script'; ?>
>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
</div>
<!-- /Module Product From Category --><?php }
}
