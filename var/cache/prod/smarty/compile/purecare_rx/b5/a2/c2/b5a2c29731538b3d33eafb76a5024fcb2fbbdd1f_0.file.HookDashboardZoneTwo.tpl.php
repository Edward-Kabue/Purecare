<?php
/* Smarty version 3.1.43, created on 2022-05-17 16:25:07
  from 'C:\laragon\www\purecare\modules\ps_metrics\views\templates\hook\HookDashboardZoneTwo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6283a233c6b002_11982064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5a2c29731538b3d33eafb76a5024fcb2fbbdd1f' => 
    array (
      0 => 'C:\\laragon\\www\\purecare\\modules\\ps_metrics\\views\\templates\\hook\\HookDashboardZoneTwo.tpl',
      1 => 1652771191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6283a233c6b002_11982064 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathMetricsApp']->value,'htmlall','UTF-8' ));?>
" rel=preload as=script>

<div id="metrics-app"></div>
<link rel="stylesheet" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathMetricsAssets']->value ));?>
" type="text/css" media="all">

<?php echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathMetricsApp']->value,'htmlall','UTF-8' ));?>
" async defer><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['pathMetricsAppSourceMap']->value) {?>
  <?php echo '<script'; ?>
 type="application/json" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pathMetricsAppSourceMap']->value ));?>
" async defer><?php echo '</script'; ?>
>
<?php }
}
}
