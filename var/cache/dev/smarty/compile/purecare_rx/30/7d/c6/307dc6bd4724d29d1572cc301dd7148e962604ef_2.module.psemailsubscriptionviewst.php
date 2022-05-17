<?php
/* Smarty version 3.1.43, created on 2022-05-17 11:29:31
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62835ceb4058e0_91077513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1581584408,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62835ceb4058e0_91077513 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\laragon\www\purecare/themes/purecare_rx/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl -->
<div class="ft_newsletter col-footer"> 
	<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
	<div class="col col_form">
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
			<input
			class="btn btn-primary"
			name="submitNewsletter"
			type="submit"
			value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
			>
			<div class="input-wrapper">
			<input
			name="email"
			type="email"
			value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
			placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"
			>
			</div>
			<input type="hidden" name="action" value="0">
			<div class="clearfix"></div>
			<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
			<p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

			</p>
			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value))) {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

			<?php }?>
		</form>
	</div>
</div>
<!-- end C:\laragon\www\purecare/themes/purecare_rx/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><?php }
}
