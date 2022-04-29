{**
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2017 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{$number_line = 2}
{$id_lang = Context::getContext()->language->id}
{foreach from=$group_cat_info item=cat_info name=g_cat_info}
<div class="out-content-prod column  col-md-4">
<div class="block-content clearfix">
	<div id="lab-prod-cat-{$cat_info.id_cat|intval}" class="row">
			<h3 style="color:{$cat_info.cat_color}">
				{if $cat_info.cat_icon!='' }
					<span class="icon_cat">
					   <img src="{$icon_path|escape:'html':'UTF-8'}{$cat_info.cat_icon|escape:'html':'UTF-8'}" alt=""/>
					</span>
				{/if}
				<a href="{$link->getCategoryLink($cat_info.id_cat, $cat_info.link_rewrite)|escape:'html':'UTF-8'}" title="{$cat_info.cat_name|escape:'html':'UTF-8'}">{$cat_info.cat_name|escape:'html':'UTF-8'}</a>
			</h3>
			<div class="cat-banner">
				{if $cat_info.cat_banner!='' }
					<a href="{$link->getCategoryLink($cat_info.id_cat, $cat_info.link_rewrite)|escape:'html':'UTF-8'}" title="{$cat_info.cat_name|escape:'html':'UTF-8'}"><img src="{$banner_path|escape:'html':'UTF-8'}{$cat_info.cat_banner|escape:'html':'UTF-8'}" alt=""/></a>
				{/if}
				
				{if $cat_info.cat_desc!='' }
				<div class="cat-desc">
					{$cat_info.cat_desc|escape:'quotes':'UTF-8' nofilter}
				</div>
				{/if}
				
			</div>

		
			
				
			<div class="sub-cat">
					<div class="laber-sub">
						<ul class="laber-mediaBody sub-cat-ul cat-{$cat_info.id_cat}" id="sub-cat-ul-{$group_cat.id_labgroupcategory}">
							<li 
								data-use_slider="{if isset($group_cat.use_slider) && $group_cat.use_slider == 1}1{else}0{/if}" 
								data-id-cat-main="{$cat_info.id_cat}" 
								data-id-cat="{$cat_info.id_cat|intval}" 
								data-lab-name-module="{$name_module|escape:'html':'UTF-8'}"  
								data-id-group="{$group_cat.id_labgroupcategory}" 
								data-number-prod="{$cat_info.number_prod|intval}" class="item pull-left active">
									<a style="" href="javascript:void(0);">{l s='All' d='Modules.LABProductCategory'}</a>
							</li>
							{foreach from = $cat_info.sub_cat item=sub_cat name=sub_cat_info}
								
								<li 
								data-use_slider="{if isset($group_cat.use_slider) && $group_cat.use_slider == 1}1{else}0{/if}" 
								data-id-cat-main="{$cat_info.id_cat}" 
								data-id-cat="{$sub_cat.id_category|intval}" 
								data-lab-name-module="{$name_module|escape:'html':'UTF-8'}"  
								data-id-group="{$group_cat.id_labgroupcategory}" 
								data-number-prod="{$cat_info.number_prod|intval}" class="item pull-left">
									<a style="" href="javascript:void(0);">{$sub_cat.name|escape}</a>
								</li>
								
								
							{/foreach}
						</ul>
						{*<style>
						.sub-cat-ul.cat-{$cat_info.id_cat} li a:before 
						{
							 background: {$cat_info.cat_color};
							  border-bottom: 2px solid {$cat_info.cat_color};
						}
						.sub-cat-ul.cat-{$cat_info.id_cat} li a:after 
						{
							 color: {$cat_info.cat_color} !important; 
						}
						
						.lab-prod-cat #lab-prod-cat-{$cat_info.id_cat} .left-block .lab-block-title a:after
						{
							content: "";
							-webkit-transform: rotate(-45deg);
							transform: rotate(-45deg);
							height: 6px;
							left: -80px;
							top: -87px;
							width: 436px;
							position: absolute
						}
								
						.lab-prod-cat #lab-prod-cat-{$cat_info.id_cat} .left-block .lab-block-title a:after
						{
							background:{$cat_info.cat_color};
						}
						
						</style>*}
					</div>
				</div>
	
			<div class="laberContentProduct laberContentProduct-{$cat_info.id_cat}-{$group_cat.id_labgroupcategory}">
				{if isset($cat_info.product_list) && count($cat_info.product_list) > 0}
				<div class="laber-container" id="laber-{$smarty.foreach.g_cat_info.iteration|escape:'html':'UTF-8'}">	
					<div class="laberProducts-List">
						<div id="cat-column-{$cat_info.id_cat}" class="product-list-cat">
						{foreach from=$cat_info.product_list item=product name=product_list}
							{if $smarty.foreach.product_list.iteration % $number_line == 1 || $number_line == 1}
								<div class="item-inner ajax_block_product">
							{/if}
								<div class="item">
									<div class="product_list product-list">
										{include file='./column_item.tpl'}				
									</div>
								</div>
							{if $smarty.foreach.product_list.iteration % $number_line == 0 || $smarty.foreach.product_list.last || $number_line == 1}
								</div>
							{/if}
						{/foreach}
						</div>
					</div>
				</div>
				
				
			 {else}
				<div class="item product-box no-product col-sm-12 col-md-12">
					<p class="alert alert-warning">{l s='No product at this category' d='Modules.LABProductCategory'}</p>
				</div>
			 {/if}
			</div><!-- end content product sub cat -->
		
	</div>
</div>

{if $cat_info.show_img == 1 && isset($cat_info.id_image) && $cat_info.id_image > 0}
<div class="cat-img">
	<a href="{$link->getCategoryLink($cat_info.id_cat, $cat_info.link_rewrite)|escape:'html':'UTF-8'}" title="{$cat_info.cat_name|escape:'html':'UTF-8'}">
		<img src="{$link->getCatImageLink($cat_info.link_rewrite, $cat_info.id_image, 'category_default')|escape:'html':'UTF-8'}"/>
	</a>
</div>
{/if}
</div>
{/foreach}

{foreach from=$group_cat_info item=cat_info name=g_cat_info}
{if $group_cat.use_slider == 1}	
	<script type="text/javascript">
	$(document).ready(function() {
		var owl = $("#cat-column-{$cat_info.id_cat}");
		owl.owlCarousel({
			items : 1,
			itemsDesktop : [1199,1],
			itemsDesktopSmall : [991,1],
			itemsTablet: [767,2],
			itemsMobile : [480,1],
			navigation : true,
			navigationText : ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
			rewindNav : false,
			autoPlay :  false,
			stopOnHover: false,
			pagination : false,
		});
	});
	</script>
{/if}
{/foreach}
