<?php
/* Smarty version 3.1.43, created on 2022-04-28 15:10:02
  from '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/themes/laber_complex_home4/modules/labproductfilter/views/templates/hook/labproductfilter_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_626a841aeed196_20831690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b891cef45ce86620f7c23393e3de21abaf5ebef' => 
    array (
      0 => '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/themes/laber_complex_home4/modules/labproductfilter/views/templates/hook/labproductfilter_home.tpl',
      1 => 1500104010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./labproductfilter_accordion.tpl' => 1,
    'file:./labproductfilter_column.tpl' => 1,
    'file:./labproductfilter_tab.tpl' => 1,
  ),
),false)) {
function content_626a841aeed196_20831690 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['path_']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
views/js/jquery-1.7.1.min.js"><?php echo '</script'; ?>
> -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_prod_fliter']->value, 'product_hook', false, NULL, 'product_hook', array (
));
$_smarty_tpl->tpl_vars['product_hook']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_hook']->value) {
$_smarty_tpl->tpl_vars['product_hook']->do_else = false;
?>
	<?php if ($_smarty_tpl->tpl_vars['product_hook']->value['type_display'] == 'accordion') {?>
		<?php $_smarty_tpl->_subTemplateRender("file:./labproductfilter_accordion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('use_slider'=>$_smarty_tpl->tpl_vars['product_hook']->value['use_slider'],'num_row'=>$_smarty_tpl->tpl_vars['product_hook']->value['num_row'],'num_column'=>$_smarty_tpl->tpl_vars['product_hook']->value['num_column'],'product_groups'=>$_smarty_tpl->tpl_vars['product_hook']->value['product_group']), 0, true);
?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['product_hook']->value['type_display'] == 'column') {?>
		<?php $_smarty_tpl->_subTemplateRender("file:./labproductfilter_column.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('use_slider'=>$_smarty_tpl->tpl_vars['product_hook']->value['use_slider'],'num_row'=>$_smarty_tpl->tpl_vars['product_hook']->value['num_row'],'num_column'=>$_smarty_tpl->tpl_vars['product_hook']->value['num_column'],'product_groups'=>$_smarty_tpl->tpl_vars['product_hook']->value['product_group']), 0, true);
?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['product_hook']->value['type_display'] == 'tab') {?>
		<?php $_smarty_tpl->_subTemplateRender("file:./labproductfilter_tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('use_slider'=>$_smarty_tpl->tpl_vars['product_hook']->value['use_slider'],'num_row'=>$_smarty_tpl->tpl_vars['product_hook']->value['num_row'],'num_column'=>$_smarty_tpl->tpl_vars['product_hook']->value['num_column'],'product_groups'=>$_smarty_tpl->tpl_vars['product_hook']->value['product_group']), 0, true);
?>
	<?php }?>
	
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
