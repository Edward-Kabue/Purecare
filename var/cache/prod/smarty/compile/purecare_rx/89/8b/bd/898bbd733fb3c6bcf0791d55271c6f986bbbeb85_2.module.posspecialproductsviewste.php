<?php
/* Smarty version 3.1.43, created on 2022-05-17 16:25:30
  from 'module:posspecialproductsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6283a24a272f73_40915406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '898bbd733fb3c6bcf0791d55271c6f986bbbeb85' => 
    array (
      0 => 'module:posspecialproductsviewste',
      1 => 1582080477,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/customize/button-cart.tpl' => 4,
    'file:catalog/_partials/variant-links.tpl' => 4,
  ),
),false)) {
function content_6283a24a272f73_40915406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="pos-special-products " 
	data-items="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['number_item'], ENT_QUOTES, 'UTF-8');?>
" 
	data-speed="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['speed_slide'], ENT_QUOTES, 'UTF-8');?>
"
	data-autoplay="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['auto_play'], ENT_QUOTES, 'UTF-8');?>
"
	data-time="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['auto_time'], ENT_QUOTES, 'UTF-8');?>
"
	data-arrow="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['show_arrow'], ENT_QUOTES, 'UTF-8');?>
"
	data-pagination="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['show_pagination'], ENT_QUOTES, 'UTF-8');?>
"
	data-move="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['move'], ENT_QUOTES, 'UTF-8');?>
"
	data-pausehover="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['pausehover'], ENT_QUOTES, 'UTF-8');?>
"
	data-lg="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_lg'], ENT_QUOTES, 'UTF-8');?>
" 
	data-md="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_md'], ENT_QUOTES, 'UTF-8');?>
"
	data-sm="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_sm'], ENT_QUOTES, 'UTF-8');?>
"
	data-xs="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_xs'], ENT_QUOTES, 'UTF-8');?>
"
	data-xxs="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_xxs'], ENT_QUOTES, 'UTF-8');?>
">
	<div class="pos_title">
		<?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
		<h2>
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

		</h2>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['desc']->value) {?>
		<div class="desc_title">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['desc']->value, ENT_QUOTES, 'UTF-8');?>
 
		</div> 
		<?php }?>		
	</div>	
	<?php $_smarty_tpl->_assignInScope('rows', $_smarty_tpl->tpl_vars['slider_options']->value['rows']);?>
		<div class="row pos_content">
			<div class="special-item owl-carousel">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'myLoop', array (
  'index' => true,
  'first' => true,
  'iteration' => true,
  'last' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['total'];
?>
				<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'] : null)%$_smarty_tpl->tpl_vars['rows']->value == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] : null)) {?>
				<div class="item-product">
				<?php }?>	
				<!-- style products default -->
				 <?php if ($_smarty_tpl->tpl_vars['postheme']->value['grid_type'] == 0) {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13303524666283a24a16cc81_67226715', 'product_miniature_item');
?>

				 <!-- end style products default --> 
				 
				 <!-- style products default type 1 -->
				<?php } elseif ($_smarty_tpl->tpl_vars['postheme']->value['grid_type'] == 1) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11761514106283a24a1a7495_06020362', 'product_miniature_item');
?>

				 <!-- end style products default type 1 -->
				 
				  <!-- style products default type 2 -->
				<?php } elseif ($_smarty_tpl->tpl_vars['postheme']->value['grid_type'] == 2) {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19660054596283a24a1db414_23866501', 'product_miniature_item');
?>

				 <!-- end style products default type 2 -->
				 
				 <!-- style products default type 3 -->
				<?php } elseif ($_smarty_tpl->tpl_vars['postheme']->value['grid_type'] == 3) {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11513592716283a24a213454_13442996', 'product_miniature_item');
?>


				<?php }?>
				 <!-- end style products default type 3 -->  
				<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['rows']->value == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>
				</div>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
</div>


<?php }
/* {block 'product_thumbnail'} */
class Block_18586632166283a24a16e858_61506189 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
							  <img class="first-image "
							  src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" 
								alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
								data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
							  >
							   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"rotatorImg",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
	
							</a>
						  <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'quick_view'} */
class Block_8517909076283a24a1774c5_09000702 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<a class="quick_view" href="#" data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
								 <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
								</a>
								<?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_flags'} */
class Block_7985927196283a24a179913_36656765 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<ul class="product-flag">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
								<li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
							<?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_name'} */
class Block_11364530576283a24a181b46_48729635 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								  <h3 itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="product_name <?php if ($_smarty_tpl->tpl_vars['postheme']->value['name_length'] == 0) {?>one_line<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],50,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3> 
								<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_reviews'} */
class Block_9770384486283a24a185366_02289283 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div class="hook-reviews">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

									</div>
								<?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_price_and_shipping'} */
class Block_12557781796283a24a186433_12495738 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
									<div class="product-price-and-shipping">
									  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


										<span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
										<span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
									  <?php }?>

									  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


									  <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
									  <span itemprop="price" class="price <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>price-sale<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
									  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


									  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

										<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
											<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
											  <span class="discount-percentage discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
											<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
											  <span class="discount-amount discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
											<?php }?>
										  <?php }?>
									</div>
								  <?php }?>
								<?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_description_short'} */
class Block_2764921406283a24a1a0872_01503191 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="product-desc" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
							<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_variants'} */
class Block_7475905916283a24a1a2215_77676540 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
							<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, true);
?>
							<?php }?>
							<?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature_item'} */
class Block_13303524666283a24a16cc81_67226715 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_13303524666283a24a16cc81_67226715',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_18586632166283a24a16e858_61506189',
  ),
  'quick_view' => 
  array (
    0 => 'Block_8517909076283a24a1774c5_09000702',
  ),
  'product_flags' => 
  array (
    0 => 'Block_7985927196283a24a179913_36656765',
  ),
  'product_name' => 
  array (
    0 => 'Block_11364530576283a24a181b46_48729635',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_9770384486283a24a185366_02289283',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_12557781796283a24a186433_12495738',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_2764921406283a24a1a0872_01503191',
  ),
  'product_variants' => 
  array (
    0 => 'Block_7475905916283a24a1a2215_77676540',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<article class="style_product_default product-miniature js-product-miniature item_in" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
						<div class="img_block">
						  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18586632166283a24a16e858_61506189', 'product_thumbnail', $this->tplIndex);
?>

							<div class="quick-view">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8517909076283a24a1774c5_09000702', 'quick_view', $this->tplIndex);
?>

							</div>
					
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7985927196283a24a179913_36656765', 'product_flags', $this->tplIndex);
?>

						</div>
						<div class="product_desc">
							<div class="inner_desc">
								<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']))) {?>
								 <div class="manufacturer"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'manufacturer','id'=>$_smarty_tpl->tpl_vars['product']->value['id_manufacturer']),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars(Manufacturer::getnamebyid($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');?>
</a></div>
								<?php }?>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11364530576283a24a181b46_48729635', 'product_name', $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9770384486283a24a185366_02289283', 'product_reviews', $this->tplIndex);
?>
 
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12557781796283a24a186433_12495738', 'product_price_and_shipping', $this->tplIndex);
?>
 
						
								<ul class="add-to-links">	
									<li class="cart">
										<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/customize/button-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
									</li>
									<li>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

									</li>
									<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListCompare'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('displayProductListCompare', $_prefixVariable1);?>
									<?php if ($_smarty_tpl->tpl_vars['displayProductListCompare']->value) {?> 
									<li class="compare">	
										 <a href="#" class="poscompare-add compare-button js-poscompare-add"  data-id_product="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
"   onclick="posCompare.addCompare($(this),<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></a>
									</li>
									 <?php }?>
									
								</ul>
							</div>	
							<div class="availability"> 
						   <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?>
								<div class="availability-list in-stock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
: <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></div>

						   <?php } else { ?>

								<div class="availability-list out-of-stock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
: <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></div> 
							<?php }?>
							</div>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'timecountdown','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
 
								<span id="future_date_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_category_default'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
								class="id_countdown"></span>
							<div class="clearfix"></div>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2764921406283a24a1a0872_01503191', 'product_description_short', $this->tplIndex);
?>

						
							<div class="variant-links">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7475905916283a24a1a2215_77676540', 'product_variants', $this->tplIndex);
?>
 
							</div>
						
						</div>
					</article>
				<?php
}
}
/* {/block 'product_miniature_item'} */
/* {block 'product_thumbnail'} */
class Block_18805509116283a24a1a9125_56664590 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
							  <img class="first-image "
								src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" 
								alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
								data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
							  >
							   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"rotatorImg",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
	
							</a>
						  <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'quick_view'} */
class Block_13490997576283a24a1b6a39_75442821 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<a class="quick_view" href="#" data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
									 <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
									</a>
									<?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_flags'} */
class Block_9181847506283a24a1b8940_12988998 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<ul class="product-flag">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
								<li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
							<?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_name'} */
class Block_8612865586283a24a1c0361_52429632 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								  <h3 itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="product_name <?php if ($_smarty_tpl->tpl_vars['postheme']->value['name_length'] == 0) {?>one_line<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],50,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3> 
								<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_reviews'} */
class Block_1724427906283a24a1c4436_85312276 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div class="hook-reviews">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

									</div>
								<?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_price_and_shipping'} */
class Block_11168233006283a24a1c52a1_76185946 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
									<div class="product-price-and-shipping">
									  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


										<span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
										<span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
									  <?php }?>

									  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


									  <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
									  <span itemprop="price" class="price <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>price-sale<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
									  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


									  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

										<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
											<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
											  <span class="discount-percentage discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
											<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
											  <span class="discount-amount discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
											<?php }?>
										  <?php }?>
									</div>
								  <?php }?>
								<?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_description_short'} */
class Block_2209431096283a24a1d4d28_45076076 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="product-desc" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
							<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_variants'} */
class Block_17897007776283a24a1d66a4_17120185 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
							<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, true);
?>
							<?php }?>
							<?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature_item'} */
class Block_11761514106283a24a1a7495_06020362 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_11761514106283a24a1a7495_06020362',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_18805509116283a24a1a9125_56664590',
  ),
  'quick_view' => 
  array (
    0 => 'Block_13490997576283a24a1b6a39_75442821',
  ),
  'product_flags' => 
  array (
    0 => 'Block_9181847506283a24a1b8940_12988998',
  ),
  'product_name' => 
  array (
    0 => 'Block_8612865586283a24a1c0361_52429632',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_1724427906283a24a1c4436_85312276',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_11168233006283a24a1c52a1_76185946',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_2209431096283a24a1d4d28_45076076',
  ),
  'product_variants' => 
  array (
    0 => 'Block_17897007776283a24a1d66a4_17120185',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<article class="product-miniature js-product-miniature style_product1" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
						<div class="img_block">
						  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18805509116283a24a1a9125_56664590', 'product_thumbnail', $this->tplIndex);
?>

							<ul class="add-to-links">
								<li>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

								</li>
								<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListCompare'),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('displayProductListCompare', $_prefixVariable2);?>
								<?php if ($_smarty_tpl->tpl_vars['displayProductListCompare']->value) {?>
								<li class="compare">	
									 <a href="#" class="poscompare-add compare-button js-poscompare-add"  data-id_product="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
"   onclick="posCompare.addCompare($(this),<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></a>
								</li>
								 <?php }?>
								<li class="quick-view">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13490997576283a24a1b6a39_75442821', 'quick_view', $this->tplIndex);
?>

								</li>
								
							</ul> 
						
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9181847506283a24a1b8940_12988998', 'product_flags', $this->tplIndex);
?>

						</div>
						<div class="product_desc">
							<div class="inner_desc">
								<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']))) {?>
								 <div class="manufacturer"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'manufacturer','id'=>$_smarty_tpl->tpl_vars['product']->value['id_manufacturer']),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars(Manufacturer::getnamebyid($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');?>
</a></div>
								<?php }?>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8612865586283a24a1c0361_52429632', 'product_name', $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1724427906283a24a1c4436_85312276', 'product_reviews', $this->tplIndex);
?>
 
								
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11168233006283a24a1c52a1_76185946', 'product_price_and_shipping', $this->tplIndex);
?>

								<div class="cart">
									<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/customize/button-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
								</div>
							</div>
							<div class="availability"> 
						   <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?>
								<div class="availability-list in-stock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
: <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></div>

						   <?php } else { ?>

								<div class="availability-list out-of-stock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
: <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></div> 
							<?php }?>
							</div>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'timecountdown','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
 
								<span id="future_date_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_category_default'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
								class="id_countdown"></span>
							<div class="clearfix"></div>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2209431096283a24a1d4d28_45076076', 'product_description_short', $this->tplIndex);
?>

						
								<div class="variant-links">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17897007776283a24a1d66a4_17120185', 'product_variants', $this->tplIndex);
?>
 
							</div>
						
						</div>
					</article>
				<?php
}
}
/* {/block 'product_miniature_item'} */
/* {block 'product_thumbnail'} */
class Block_6657434936283a24a1dd0d5_45891663 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
							  <img class="first-image"
								src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
								alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
								data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
							  >
							   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"rotatorImg",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
	
							</a>
						  <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'quick_view'} */
class Block_4125855006283a24a1eb513_51846940 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<a class="quick_view" href="#" data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
									  <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
									</a>
									<?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_flags'} */
class Block_11010333516283a24a1ee262_90408889 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<ul class="product-flag">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
								<li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
							<?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_name'} */
class Block_16746885046283a24a1f4c01_20974476 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							  <h3 itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="product_name <?php if ($_smarty_tpl->tpl_vars['postheme']->value['name_length'] == 0) {?>one_line<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],50,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3> 
							<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_reviews'} */
class Block_3423857136283a24a1f85e3_20239147 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="hook-reviews">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

								</div>
							<?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_price_and_shipping'} */
class Block_17571311176283a24a1f9c24_16487369 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
								<div class="product-price-and-shipping">
								  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


									<span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
									<span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
								  <?php }?>

								  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


								  <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
								  <span itemprop="price" class="price <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>price-sale<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
								  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


								  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

									<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
										<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
										  <span class="discount-percentage discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
										<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
										  <span class="discount-amount discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
										<?php }?>
									  <?php }?>
								</div>
							  <?php }?>
							<?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_description_short'} */
class Block_7908472986283a24a20d6b3_43377345 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="product-desc" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
							<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_variants'} */
class Block_11489215466283a24a20ee56_89032224 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
							<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, true);
?>
							<?php }?>
							<?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature_item'} */
class Block_19660054596283a24a1db414_23866501 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_19660054596283a24a1db414_23866501',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_6657434936283a24a1dd0d5_45891663',
  ),
  'quick_view' => 
  array (
    0 => 'Block_4125855006283a24a1eb513_51846940',
  ),
  'product_flags' => 
  array (
    0 => 'Block_11010333516283a24a1ee262_90408889',
  ),
  'product_name' => 
  array (
    0 => 'Block_16746885046283a24a1f4c01_20974476',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_3423857136283a24a1f85e3_20239147',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_17571311176283a24a1f9c24_16487369',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_7908472986283a24a20d6b3_43377345',
  ),
  'product_variants' => 
  array (
    0 => 'Block_11489215466283a24a20ee56_89032224',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<article class="product-miniature js-product-miniature style_product2" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
						<div class="img_block">
						  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6657434936283a24a1dd0d5_45891663', 'product_thumbnail', $this->tplIndex);
?>

							<ul class="add-to-links">
								<li>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

								</li>
								<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListCompare'),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('displayProductListCompare', $_prefixVariable3);?>
								<?php if ($_smarty_tpl->tpl_vars['displayProductListCompare']->value) {?>
								<li class="compare">	
									 <a href="#" class="poscompare-add compare-button js-poscompare-add"  data-id_product="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
"   onclick="posCompare.addCompare($(this),<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></a>
								</li>
								 <?php }?>
								<li class="quick-view">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4125855006283a24a1eb513_51846940', 'quick_view', $this->tplIndex);
?>

								</li>
								<li class="cart"> 
									<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/customize/button-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
								</li>
							</ul> 
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11010333516283a24a1ee262_90408889', 'product_flags', $this->tplIndex);
?>

						</div>
						<div class="product_desc">
							<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']))) {?>
							 <div class="manufacturer"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'manufacturer','id'=>$_smarty_tpl->tpl_vars['product']->value['id_manufacturer']),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars(Manufacturer::getnamebyid($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');?>
</a></div>
							<?php }?>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16746885046283a24a1f4c01_20974476', 'product_name', $this->tplIndex);
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3423857136283a24a1f85e3_20239147', 'product_reviews', $this->tplIndex);
?>
 
							
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17571311176283a24a1f9c24_16487369', 'product_price_and_shipping', $this->tplIndex);
?>

							<div class="availability"> 
						   <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?>
								<div class="availability-list in-stock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
: <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></div>

						   <?php } else { ?>

								<div class="availability-list out-of-stock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
: <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></div> 
							<?php }?>
							</div>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'timecountdown','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
 
							<span id="future_date_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_category_default'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
								class="id_countdown"></span>
							<div class="clearfix"></div>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7908472986283a24a20d6b3_43377345', 'product_description_short', $this->tplIndex);
?>

						
								<div class="variant-links">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11489215466283a24a20ee56_89032224', 'product_variants', $this->tplIndex);
?>
 
							</div>
						
						</div>
					</article>
				<?php
}
}
/* {/block 'product_miniature_item'} */
/* {block 'product_thumbnail'} */
class Block_47733106283a24a2150f3_28609862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
							  <img class="first-image"
								src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" 
								alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
								data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
							  >
							   <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"rotatorImg",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
	
							</a>
						  <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'quick_view'} */
class Block_6596337466283a24a2237e2_06735330 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<a class="quick_view" href="#" data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
									 <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
									</a>
									<?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_flags'} */
class Block_16729706356283a24a226417_12003073 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<ul class="product-flag">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
								<li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
							<?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_name'} */
class Block_15609313696283a24a22d127_10870795 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							  <h3 itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="product_name <?php if ($_smarty_tpl->tpl_vars['postheme']->value['name_length'] == 0) {?>one_line<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],50,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3> 
							<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_reviews'} */
class Block_13175372916283a24a232dd4_60476253 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="hook-reviews">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

								</div>
							<?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_price_and_shipping'} */
class Block_2129638406283a24a234ae9_39251890 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
								<div class="product-price-and-shipping">
								  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


									<span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
									<span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
								  <?php }?>

								  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


								  <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
								  <span itemprop="price" class="price <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>price-sale<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
								  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


								  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

									<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
										<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
										  <span class="discount-percentage discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
										<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
										  <span class="discount-amount discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
										<?php }?>
									<?php }?>
								</div>
							  <?php }?>
							<?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_description_short'} */
class Block_97526876283a24a257494_44428695 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="product-desc" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
							<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_variants'} */
class Block_3836262636283a24a25cb24_60293491 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
							<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, true);
?>
							<?php }?>
							<?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature_item'} */
class Block_11513592716283a24a213454_13442996 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_11513592716283a24a213454_13442996',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_47733106283a24a2150f3_28609862',
  ),
  'quick_view' => 
  array (
    0 => 'Block_6596337466283a24a2237e2_06735330',
  ),
  'product_flags' => 
  array (
    0 => 'Block_16729706356283a24a226417_12003073',
  ),
  'product_name' => 
  array (
    0 => 'Block_15609313696283a24a22d127_10870795',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_13175372916283a24a232dd4_60476253',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_2129638406283a24a234ae9_39251890',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_97526876283a24a257494_44428695',
  ),
  'product_variants' => 
  array (
    0 => 'Block_3836262636283a24a25cb24_60293491',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<article class="product-miniature js-product-miniature style_product3" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
						<div class="img_block">
						  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47733106283a24a2150f3_28609862', 'product_thumbnail', $this->tplIndex);
?>

							<ul class="add-to-links">
								<li>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

								</li>
								<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListCompare'),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('displayProductListCompare', $_prefixVariable4);?>
								<?php if ($_smarty_tpl->tpl_vars['displayProductListCompare']->value) {?>
								<li class="compare">	
									 <a href="#" class="poscompare-add compare-button js-poscompare-add"  data-id_product="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
"   onclick="posCompare.addCompare($(this),<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to compare','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></a>
								</li>
								 <?php }?>
								<li class="quick-view">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6596337466283a24a2237e2_06735330', 'quick_view', $this->tplIndex);
?>

								</li>
								<li class="cart">
									<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/customize/button-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
								</li>
							</ul> 
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16729706356283a24a226417_12003073', 'product_flags', $this->tplIndex);
?>

						</div>
						<div class="product_desc">

							<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']))) {?>
							 <div class="manufacturer"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'manufacturer','id'=>$_smarty_tpl->tpl_vars['product']->value['id_manufacturer']),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars(Manufacturer::getnamebyid($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');?>
</a></div>
							<?php }?>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15609313696283a24a22d127_10870795', 'product_name', $this->tplIndex);
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13175372916283a24a232dd4_60476253', 'product_reviews', $this->tplIndex);
?>
 
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2129638406283a24a234ae9_39251890', 'product_price_and_shipping', $this->tplIndex);
?>

							<div class="availability"> 
						   <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?>
								<div class="availability-list in-stock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
: <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></div>

						   <?php } else { ?>

								<div class="availability-list out-of-stock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
: <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></div> 
							<?php }?>
							</div>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'timecountdown','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
 
							<span id="future_date_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_category_default'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
								class="id_countdown"></span>
							<div class="clearfix"></div>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97526876283a24a257494_44428695', 'product_description_short', $this->tplIndex);
?>

						
								<div class="variant-links">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3836262636283a24a25cb24_60293491', 'product_variants', $this->tplIndex);
?>
 
							</div>
						
						</div>
					</article>
					<?php
}
}
/* {/block 'product_miniature_item'} */
}
