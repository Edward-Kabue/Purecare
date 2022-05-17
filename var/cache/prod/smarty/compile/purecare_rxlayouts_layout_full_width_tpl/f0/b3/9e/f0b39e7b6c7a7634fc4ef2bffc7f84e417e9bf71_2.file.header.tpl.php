<?php
/* Smarty version 3.1.43, created on 2022-05-17 11:31:30
  from 'C:\laragon\www\purecare\themes\purecare_rx\templates\checkout\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62835d62e7fb89_14058586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0b39e7b6c7a7634fc4ef2bffc7f84e417e9bf71' => 
    array (
      0 => 'C:\\laragon\\www\\purecare\\themes\\purecare_rx\\templates\\checkout\\_partials\\header.tpl',
      1 => 1581906036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62835d62e7fb89_14058586 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145674944362835d62e78b11_39941890', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193446787962835d62e79580_15860164', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188327336562835d62e7b5d7_94603422', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_145674944362835d62e78b11_39941890 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_145674944362835d62e78b11_39941890',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="header-banner">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_193446787962835d62e79580_15860164 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_193446787962835d62e79580_15860164',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav class="header-nav">
	<div class="container-fluid">
		<div class="hidden-md-down">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav'),$_smarty_tpl ) );?>

		</div>
	</div>
	<div class="container">
		<div class="hidden-lg-up  mobile">
			<div id="_mobile_static"></div>
			<div class="row row-mobile">
				<div class="col-mobile col-md-4 col-xs-4">
					<div class="float-xs-left" id="menu-icon">
						<i class="ion-android-menu"></i>
					</div>
					<div id="mobile_top_menu_wrapper" class="row hidden-lg-up" style="display:none;">
						<div class="top-header-mobile">							
							<div id="_mobile_compare"></div>
							<div id="_mobile_wishtlist"></div>
						</div>
						<div id="_mobile_currency_selector"></div>
						<div id="_mobile_language_selector"></div>				
						<div class="menu-close"> 
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'menu','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 <i class="material-icons float-xs-right">arrow_back</i>
						</div>
						<div class="menu-tabs">							
							<div class="js-top-menu-bottom">												
								<div id="_mobile_megamenu"></div>
								
							</div>
							
						</div>
					 </div>
				</div>
				<div class="col-mobile col-md-4 col-xs-4 mobile-center">
					<div class="top-logo" id="_mobile_logo"></div>
				</div>
				<div class="col-mobile col-md-4 col-xs-4 mobile-right">
					<div id="_mobile_cart_block"></div>
					<div id="_mobile_user_info"></div>
				</div>
			</div>
			<div id="_mobile_search_category"></div>
		</div>
	</div>
</nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_188327336562835d62e7b5d7_94603422 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_188327336562835d62e7b5d7_94603422',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="header-top top_bg hidden-md-down">
	<div class="container-fluid">
		<div class="row">
			<div class="col col col-md-2" id="_desktop_logo">
				<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
				<img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
				</a>
				<?php } else { ?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
				<img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
				</a>
				<?php }?>
			</div>
			<div class=" col col-md-10 col-sm-12 position-static">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaymegamenu'),$_smarty_tpl ) );?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

			</div>
			
		</div>
	</div>

</div>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
