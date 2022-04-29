<?php
/* Smarty version 3.1.43, created on 2022-04-28 15:06:17
  from '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/themes/laber_complex_home4/templates/checkout/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_626a8339422a19_08004811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6f14e6de4362a7254f550010b1072f065939758' => 
    array (
      0 => '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/themes/laber_complex_home4/templates/checkout/_partials/footer.tpl',
      1 => 1500104010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626a8339422a19_08004811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_477410831626a8339421fb2_53322818', 'footer');
?>

<?php }
/* {block 'footer'} */
class Block_477410831626a8339421fb2_53322818 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_477410831626a8339421fb2_53322818',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="text-xs-center">
  <i class="material-icons">&#xE90C;</i> 2016 - <strong>CLASSIC</strong> - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ecommerce software by','d'=>'Shop.Theme'),$_smarty_tpl ) );?>

  <strong>PrestaShop<sup>TM</sup></strong>
</div>
<?php
}
}
/* {/block 'footer'} */
}
