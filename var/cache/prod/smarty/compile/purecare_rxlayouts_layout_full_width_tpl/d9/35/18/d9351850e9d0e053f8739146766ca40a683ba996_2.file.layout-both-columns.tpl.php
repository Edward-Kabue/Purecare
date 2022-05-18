<?php
/* Smarty version 3.1.43, created on 2022-05-18 15:12:37
  from 'C:\laragon\www\purecare\themes\purecare_rx\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6284e2b59a30d5_72303973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9351850e9d0e053f8739146766ca40a683ba996' => 
    array (
      0 => 'C:\\laragon\\www\\purecare\\themes\\purecare_rx\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1582084974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_6284e2b59a30d5_72303973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11202056146284e2b5987513_14058648', 'head');
?>

  </head>

  <body itemscope itemtype="http://schema.org/WebPage" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
"  class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
"> 

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6127057826284e2b598c110_96083265', 'hook_after_body_opening_tag');
?>


    <main>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_726552876284e2b598ca17_75142015', 'product_activation');
?>


      <header id="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2487206316284e2b598d241_90013679', 'header');
?>

      </header>
		<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
		<div class=" pos_bannerslide">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopColumn'),$_smarty_tpl ) );?>

		</div>
		<?php }?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18906480386284e2b598e3c3_56663663', 'notifications');
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19769924906284e2b598eb64_22315994', 'breadcrumb');
?>

     <div id="wrapper">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

        <div class="container">
			<div class="row">
			  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8553885886284e2b598f793_62054067', "left_column");
?>


			  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11300575606284e2b5990b31_83315043', "content_wrapper");
?>


			  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16412211636284e2b5991d46_29351387', "right_column");
?>

			</div>
			<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_440086516284e2b5993415_45244391', 'product_accessories');
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_839627226284e2b599f784_79004398', 'product_footer');
?>

			<?php }?>
	
        </div>
		<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFullbottom"),$_smarty_tpl ) );?>
 
		<div class="container">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContainerbottom"),$_smarty_tpl ) );?>
		
		</div>
		<?php }?>	
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

    </div>

    <footer id="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19318525956284e2b59a1427_80412724', "footer");
?>

    </footer>

    </main>
	<div class="back-top"><a href= "#" class="back-top-button"></a></div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12007018466284e2b59a1d16_84187602', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3560351116284e2b59a27b6_99272308', 'hook_before_body_closing_tag');
?>

  </body>

</html>
<?php }
/* {block 'head'} */
class Block_11202056146284e2b5987513_14058648 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_11202056146284e2b5987513_14058648',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_6127057826284e2b598c110_96083265 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_6127057826284e2b598c110_96083265',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_726552876284e2b598ca17_75142015 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_726552876284e2b598ca17_75142015',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_2487206316284e2b598d241_90013679 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_2487206316284e2b598d241_90013679',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_18906480386284e2b598e3c3_56663663 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_18906480386284e2b598e3c3_56663663',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_19769924906284e2b598eb64_22315994 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_19769924906284e2b598eb64_22315994',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
class Block_8553885886284e2b598f793_62054067 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_8553885886284e2b598f793_62054067',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
				  <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

				  <?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

				  <?php }?>
				</div>
			  <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_9471823256284e2b5991257_84670509 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<p>Hello world! This is HTML5 Boilerplate.</p>
				  <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_11300575606284e2b5990b31_83315043 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_11300575606284e2b5990b31_83315043',
  ),
  'content' => 
  array (
    0 => 'Block_9471823256284e2b5991257_84670509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">
				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

				  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9471823256284e2b5991257_84670509', "content", $this->tplIndex);
?>

				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

				</div>
			  <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_16412211636284e2b5991d46_29351387 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_16412211636284e2b5991d46_29351387',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
				  <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

				  <?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

				  <?php }?>
				</div>   
			  <?php
}
}
/* {/block "right_column"} */
/* {block 'product_miniature'} */
class Block_11151061766284e2b599e5e7_50518114 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value), 0, true);
?>
							<?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_440086516284e2b5993415_45244391 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_accessories' => 
  array (
    0 => 'Block_440086516284e2b5993415_45244391',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_11151061766284e2b599e5e7_50518114',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
					<section class="products-accessories clearfix">
						<div class="pos_title">
							<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h2>
							<div class="desc_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Related products to weekly line up','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</div>
						</div>
						<div class="row pos_content">
							<div class="product_accessoriesslide owl-carousel">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11151061766284e2b599e5e7_50518114', 'product_miniature', $this->tplIndex);
?>

							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						</div>
					</section>
					<?php }?>
				<?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_839627226284e2b599f784_79004398 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_footer' => 
  array (
    0 => 'Block_839627226284e2b599f784_79004398',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

				<?php
}
}
/* {/block 'product_footer'} */
/* {block "footer"} */
class Block_19318525956284e2b59a1427_80412724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_19318525956284e2b59a1427_80412724',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_12007018466284e2b59a1d16_84187602 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_12007018466284e2b59a1d16_84187602',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_3560351116284e2b59a27b6_99272308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_3560351116284e2b59a27b6_99272308',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
