<?php
/* Smarty version 3.1.43, created on 2022-05-18 15:12:39
  from 'C:\laragon\www\purecare\themes\purecare_rx\templates\errors\not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6284e2b7819530_23711750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '756cb6c47a407f5749faa3e28e2e5bc457c3e619' => 
    array (
      0 => 'C:\\laragon\\www\\purecare\\themes\\purecare_rx\\templates\\errors\\not-found.tpl',
      1 => 1580523042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6284e2b7819530_23711750 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20059197556284e2b78138b3_78470599', 'page_content');
?>

</section>
<?php }
/* {block 'search'} */
class Block_19008811426284e2b7816c36_55534777 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_14449860526284e2b78184a3_37909101 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_20059197556284e2b78138b3_78470599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_20059197556284e2b78138b3_78470599',
  ),
  'search' => 
  array (
    0 => 'Block_19008811426284e2b7816c36_55534777',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_14449860526284e2b78184a3_37909101',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19008811426284e2b7816c36_55534777', 'search', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14449860526284e2b78184a3_37909101', 'hook_not_found', $this->tplIndex);
?>


  <?php
}
}
/* {/block 'page_content'} */
}
