<?php
/* Smarty version 3.1.43, created on 2022-05-17 11:21:44
  from 'module:posstaticblocksviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62835b18c29c93_33239891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0829da04d5d5f17e8e472e3ded17d4886e54661f' => 
    array (
      0 => 'module:posstaticblocksviewstempl',
      1 => 1580523040,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62835b18c29c93_33239891 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\laragon\www\purecare/modules/posstaticblocks/views/templates/hook/staticblocks.tpl --><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlocks']->value, 'linkBlock');
$_smarty_tpl->tpl_vars['linkBlock']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['linkBlock']->value) {
$_smarty_tpl->tpl_vars['linkBlock']->do_else = false;
?>
  <?php echo $_smarty_tpl->tpl_vars['linkBlock']->value['content'];?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- end C:\laragon\www\purecare/modules/posstaticblocks/views/templates/hook/staticblocks.tpl --><?php }
}
