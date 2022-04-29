<?php
/* Smarty version 3.1.43, created on 2022-04-28 14:47:37
  from '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/admin4731rgoyj/themes/new-theme/template/components/layout/confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_626a7ed998c502_40071666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69ea28c3ebc1a5794fdf97275e6a6c11e7042cc7' => 
    array (
      0 => '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/admin4731rgoyj/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1650976303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626a7ed998c502_40071666 (Smarty_Internal_Template $_smarty_tpl) {
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
