<?php
/* Smarty version 3.1.43, created on 2022-04-28 15:08:20
  from '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/modules/psgdpr/views/templates/front/customerAccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_626a83b4b73d75_85184431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61405c5e7816bd765709a046f86235e4bdfccd75' => 
    array (
      0 => '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/modules/psgdpr/views/templates/front/customerAccount.tpl',
      1 => 1650976459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626a83b4b73d75_85184431 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="psgdpr-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['front_controller']->value, ENT_QUOTES, 'UTF-8');?>
">
    <span class="link-item">
        <i class="material-icons">account_box</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GDPR - Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>

    </span>
</a>
<?php }
}
