<?php
/* Smarty version 3.1.43, created on 2022-04-28 14:45:42
  from '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/themes/laber_complex_home4/templates/catalog/_partials/miniatures/productGrid.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_626a7e66c08290_28030667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11f875c2b320890f16b3a983e85135b2229732db' => 
    array (
      0 => '/var/www/vhosts/purecare.co.ke/devv.purecare.co.ke/themes/laber_complex_home4/templates/catalog/_partials/miniatures/productGrid.tpl',
      1 => 1651146333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626a7e66c08290_28030667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php $_smarty_tpl->_assignInScope('nbItemsPerLine', 3);
$_smarty_tpl->_assignInScope('nbItemsPerLineTablet', 2);
$_smarty_tpl->_assignInScope('nbItemsPerLineMobile', 2);?>
<div class="item-inner 
		col-lg-4 col-md-6 col-sm-6 col-xs-12
		<?php if ($_smarty_tpl->tpl_vars['product_list']->value%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 0) {?> last-in-line
		<?php } elseif ($_smarty_tpl->tpl_vars['product_list']->value%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 1) {?> first-in-line<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['product_list']->value%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value == 0) {?> last-item-of-tablet-line
		<?php } elseif ($_smarty_tpl->tpl_vars['product_list']->value%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value == 1) {?> first-item-of-tablet-line<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['product_list']->value%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value == 0) {?> last-item-of-mobile-line
		<?php } elseif ($_smarty_tpl->tpl_vars['product_list']->value%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value == 1) {?> first-item-of-mobile-line<?php }?>">
<article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
  <div class="laberProduct-container item">
	  <div class="laberProduct-image">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_543765613626a7e66bf40d6_50472864', 'product_thumbnail');
?>

		<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['new'])) && $_smarty_tpl->tpl_vars['product']->value['new'] == 1) {?>
				<span class="laberNew-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
			<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])) && $_smarty_tpl->tpl_vars['product']->value['specific_prices'] && (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])) && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'] > 0) {?>
				<span class="laberSale-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'sale','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
			<?php }?>
		
		<div class="laberActions">
			<div class="laberActions-i">
				<div class="laberItem pull-left">		
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="Details" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Details','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
						<i class="ion-ios-eye-outline"></i>
					</a>
				</div>
				<div class="laberQuick laberItem pull-left">
				  <a href="#" class="quick-view" data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quickview','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
					<i class="ion-ios-search"></i>
				  </a>
				</div>
				<div class="laberItem pull-left">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

				</div>		
			</div>
		</div>
			</div>
    <div class="laber-product-description">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1609384046626a7e66bfa309_96623348', 'product_name');
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202947203626a7e66bfb686_94089085', 'product_price_and_shipping');
?>

		<div class="laberCart">
			<?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp'] || $_smarty_tpl->tpl_vars['product']->value['quantity'] > 0)) {?>
			<?php $_prefixVariable1 = 'Prescription only';
$_tmp_array = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['category'] = $_prefixVariable1;
$_smarty_tpl->_assignInScope('product', $_tmp_array);
if ($_prefixVariable1) {?>
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['prescription'], ENT_QUOTES, 'UTF-8');?>
" method="post">
				<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
				<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="id_product">
				<button data-button-action="add-to-cart" class="laberBottom" >
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload prescription','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
				</button>
				</form>
			<?php } else { ?>
				<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post">
				<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
				<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="id_product">
				<button data-button-action="add-to-cart" class="laberBottom" >
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
				</button>
				</form>
			<?php }?>
			<?php } else { ?>
				<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post">
				<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
				<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="id_product">
				<button data-button-action="add-to-cart" class="laberBottom disabled" disabled >
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
				</button>
				</form>
			<?php }?>
		</div>
    </div>
  </div>
</article>
</div><?php }
/* {block 'product_thumbnail'} */
class Block_543765613626a7e66bf40d6_50472864 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_543765613626a7e66bf40d6_50472864',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
			<img
			  src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
			  alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
			  data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
			>
		  </a>
		<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_1609384046626a7e66bfa309_96623348 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_1609384046626a7e66bfa309_96623348',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <h2 class="h2 productName" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],25,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h2>
      <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_202947203626a7e66bfb686_94089085 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_202947203626a7e66bfb686_94089085',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
          <div class="laber-product-price-and-shipping">
            <span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
			<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])) && $_smarty_tpl->tpl_vars['product']->value['show_price'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value))) {?>
				<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])) && $_smarty_tpl->tpl_vars['product']->value['specific_prices'] && (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])) && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'] > 0) {?>
					<span class="reduction_percent_display">
						
						<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices'] && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type'] == 'percentage') {?>
						-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'],'quotes','UTF-8' ))*100, ENT_QUOTES, 'UTF-8');?>
%
						<?php } else { ?>
						-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_without_reduction']-floatval($_smarty_tpl->tpl_vars['product']->value['price']), ENT_QUOTES, 'UTF-8');?>

						<?php }?>
						
					</span>
				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


              <span class="old-price regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


            

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

          </div>
        <?php }?>
      <?php
}
}
/* {/block 'product_price_and_shipping'} */
}
