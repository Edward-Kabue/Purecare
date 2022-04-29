<?php
/* Smarty version 3.1.43, created on 2022-04-28 15:16:09
  from 'module:pscontactinfonav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_626a8589259e13_03133287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eb2119957cbc13b240126b3ccd8fac8f109f1e2' => 
    array (
      0 => 'module:pscontactinfonav.tpl',
      1 => 1500104010,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626a8589259e13_03133287 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_contact_link">
  <div id="contact-link">
	<ul class="laber-contact-link media-body">
		<?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
		<li class="pull-left item email">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['email'], ENT_QUOTES, 'UTF-8');?>

			
		</li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
		<li class="pull-left item phone">
			<i class="fa fa-phone" aria-hidden="true"></i>

				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>

			
		</li>
		<?php }?>
		<!-- <li class=" pull-left item contact">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</a>
		</li> -->
	</ul>
  </div>
</div>
<?php }
}
