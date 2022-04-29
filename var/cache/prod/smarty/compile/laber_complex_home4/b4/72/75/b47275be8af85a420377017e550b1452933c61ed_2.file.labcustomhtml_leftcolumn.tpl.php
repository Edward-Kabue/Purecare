<?php
/* Smarty version 3.1.43, created on 2022-04-28 14:45:42
  from '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/modules/labcustomhtml/views/templates/hook/labcustomhtml_leftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_626a7e66bc3072_73782975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b47275be8af85a420377017e550b1452933c61ed' => 
    array (
      0 => '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/modules/labcustomhtml/views/templates/hook/labcustomhtml_leftcolumn.tpl',
      1 => 1650978073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626a7e66bc3072_73782975 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Static Block module -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block_list']->value, 'block');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
	<?php if ((isset($_smarty_tpl->tpl_vars['block']->value['content']))) {?>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['content'],'quotes','UTF-8' ));?>

	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- /Static block module --><?php }
}
