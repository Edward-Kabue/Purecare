<?php
/* Smarty version 3.1.43, created on 2022-04-28 15:16:09
  from '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/modules/labcustomhtml/views/templates/hook/labcustomhtml_displayFooterAfter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_626a85894cb585_99510855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a8f8e5aac2936620996cceb56dac0eb37af2e5e' => 
    array (
      0 => '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/modules/labcustomhtml/views/templates/hook/labcustomhtml_displayFooterAfter.tpl',
      1 => 1650978069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626a85894cb585_99510855 (Smarty_Internal_Template $_smarty_tpl) {
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
