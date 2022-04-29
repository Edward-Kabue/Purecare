<?php
/* Smarty version 3.1.43, created on 2022-04-28 15:10:03
  from '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/modules/labcustomhtml/views/templates/hook/labcustomhtml_displayPosition3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_626a841b1c5607_24356551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd113dad18e5b9d7da9051eff5511cb14d1cff744' => 
    array (
      0 => '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/modules/labcustomhtml/views/templates/hook/labcustomhtml_displayPosition3.tpl',
      1 => 1650978072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626a841b1c5607_24356551 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Static Block module -->
<?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'index') {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block_list']->value, 'block');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
	<?php if ((isset($_smarty_tpl->tpl_vars['block']->value['content']))) {?>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['content'],'quotes','UTF-8' ));?>

	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
<!-- /Static block module --><?php }
}
