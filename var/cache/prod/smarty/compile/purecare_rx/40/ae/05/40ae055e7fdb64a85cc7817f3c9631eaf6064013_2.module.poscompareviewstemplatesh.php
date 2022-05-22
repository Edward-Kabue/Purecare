<?php
/* Smarty version 3.1.43, created on 2022-05-21 18:38:05
  from 'module:poscompareviewstemplatesh' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6289075d713122_07366054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40ae055e7fdb64a85cc7817f3c9631eaf6064013' => 
    array (
      0 => 'module:poscompareviewstemplatesh',
      1 => 1652897474,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6289075d713122_07366054 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_compare">
	<div class="compare_top">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_dir']->value, ENT_QUOTES, 'UTF-8');?>
module/poscompare/comparePage">
			<i class="ion-ios-shuffle-strong"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','mod'=>'poscompare'),$_smarty_tpl ) );?>
 (<span
						id="poscompare-nb"></span>)</span>
		</a>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
var baseDir ='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_dir']->value, ENT_QUOTES, 'UTF-8');?>
'; 
<?php echo '</script'; ?>
>
<?php }
}
