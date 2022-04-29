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

{$number_line = 1}
{if $group_cat.use_slider != 1}
	{assign var='nbItemsPerLine' value=4}
	{assign var='nbItemsPerLineTablet' value=3}
	{assign var='nbItemsPerLineMobile' value=2}
{/if}
{$id_lang = Context::getContext()->language->id}
<div class="laber-media-body laberProductGrid">
	<div class="laberCateTitle">
		<h3>{$group_cat.group_cat}</h3>
	</div>
<div class="pull-left col-laber-2">
<ul class="nav nav-tabs laber-Tab1 clearfix">
	{foreach from=$group_cat_info item=cat_info name=g_cat_info}
		<li class="nav-item {if $smarty.foreach.g_cat_info.first }laber-active{/if}">
			<a data-toggle="tab" href="#labProdCat-{$group_cat.id_labgroupcategory}{$smarty.foreach.g_cat_info.index|intval}_tab" class="{if $smarty.foreach.g_cat_info.first} active{/if} nav-link">
				{if $cat_info.cat_icon !=''}
				<span class="icon_cat">
					<img src="{$icon_path nofilter}{$cat_info.cat_icon nofilter}" alt=""/>
				</span>
				{/if}
				 <span>{$cat_info.cat_name  nofilter} </span>
			</a>
			{if $group_cat.show_sub == 1}
				{if $cat_info.sub_cat}
					<div class="laberSub-cate">
						<div class="laber-sub">
							<ul class="laber-mediaBody sub-cat-ul cat-{$cat_info.id_cat}" id="sub-cat-ul-{$group_cat.id_labgroupcategory}{$smarty.foreach.g_cat_info.iteration|escape:'html':'UTF-8'}">
								{foreach from = $cat_info.sub_cat item=sub_cat name=sub_cat_info}
									<li 
									data-use_slider="{if isset($group_cat.use_slider) && $group_cat.use_slider == 1}1{else}0{/if}" 
									data-cat-info="{$smarty.foreach.g_cat_info.iteration|escape:'html':'UTF-8'}" 
									data-id-cat-main="{$cat_info.id_cat}" 
									data-id-cat="{$sub_cat.id_category|intval}" 
									data-lab-name-module="{$name_module|escape:'html':'UTF-8'}"  
									data-id-group="{$group_cat.id_labgroupcategory}" 
									data-number-prod="{$cat_info.number_prod|intval}" class="item ">
										<a style="" href="javascript:void(0);"><i class="laber-icon"></i>{$sub_cat.name|escape}</a>
									</li>
									
									
								{/foreach}
							</ul>
						</div>
					</div>
				{/if}
			{/if}
		</li>
	{/foreach}
</ul>
</div>
<div class="pull-left col-laber-8">
<div class="tab-content clearfix labContent">
{foreach from=$group_cat_info item=cat_info name=g_cat_info}
<div id="labProdCat-{$group_cat.id_labgroupcategory}{$smarty.foreach.g_cat_info.index|intval}_tab" class="tab-pane {if $smarty.foreach.g_cat_info.first} active{/if}">
<div class="out-content-prod">
<div class="block-content clearfix">
	<div id="laberProd-cat-{$cat_info.id_cat|intval}">
		<div class="laberCat-banner">
			{if $cat_info.show_img == 1 && isset($cat_info.id_image) && $cat_info.id_image > 0}
			<div class="laberCat-img">
				<a href="{$link->getCategoryLink($cat_info.id_cat, $cat_info.link_rewrite)|escape:'html':'UTF-8'}" title="{$cat_info.cat_name|escape:'html':'UTF-8'}">
					<img src="{$link->getCatImageLink($cat_info.link_rewrite, $cat_info.id_image, 'category_default')|escape:'html':'UTF-8'}"/>
				</a>
			</div>
			{/if}
			{if $cat_info.cat_banner!='' }
				<a href="{$link->getCategoryLink($cat_info.id_cat, $cat_info.link_rewrite)|escape:'html':'UTF-8'}" title="{$cat_info.cat_name|escape:'html':'UTF-8'}"><img src="{$banner_path|escape:'html':'UTF-8'}{$cat_info.cat_banner|escape:'html':'UTF-8'}" alt=""/></a>
			{/if}
			
			{if $cat_info.cat_desc!='' }
			<div class="laberCat-desc">
				{$cat_info.cat_desc|escape:'quotes':'UTF-8' nofilter}
			</div>
			{/if}
		</div>
			<div class="laberCateProducts">
				
				<div class="laberContentProduct laberContentProduct-{$cat_info.id_cat}-{$group_cat.id_labgroupcategory} clearfix">
					{if isset($cat_info.product_list) && count($cat_info.product_list) > 0}
					<div class="laberContainer" id="laber-{$group_cat.id_labgroupcategory}{$smarty.foreach.g_cat_info.iteration|escape:'html':'UTF-8'}">	
							<div class="laberProducts-Grid">
								<div id="laberOWL-{$smarty.foreach.g_cat_info.iteration|intval}-tab" class="Laber-product-list">
								{foreach from=$cat_info.product_list item=product name=product_list}
									{if $group_cat.use_slider != 1}
										<div class="item-inner col-lg-3 col-md-3 col-sm-4 col-xs-12
										{if $smarty.foreach.product_list.iteration%$nbItemsPerLine == 0} last-in-line
										{elseif $smarty.foreach.product_list.iteration%$nbItemsPerLine == 1} first-in-line{/if}
										{if $smarty.foreach.product_list.iteration%$nbItemsPerLineTablet == 0} last-item-of-tablet-line
										{elseif $smarty.foreach.product_list.iteration%$nbItemsPerLineTablet == 1} first-item-of-tablet-line{/if}
										{if $smarty.foreach.product_list.iteration%$nbItemsPerLineMobile == 0} last-item-of-mobile-line
										{elseif $smarty.foreach.product_list.iteration%$nbItemsPerLineMobile == 1} first-item-of-mobile-line{/if}
										wow fadeIn " data-wow-delay="{$smarty.foreach.product_list.iteration}00ms">
									{else}
										{if $smarty.foreach.product_list.iteration % $number_line == 1 || $number_line == 1}
										<div class="item-inner ajax_block_product wow fadeIn " data-wow-delay="{$smarty.foreach.product_list.iteration}00ms">
										{/if}
									{/if}
									
										{include file='./medium_item.tpl'}				
										
									{if $group_cat.use_slider != 1}
										</div>
									{else}
										{if $smarty.foreach.product_list.iteration % $number_line == 0 ||$smarty.foreach.product_list.last || $number_line == 1}
										</div>
										{/if}
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
		</div><!-- end content product sub cat -->
		
	</div>
</div>
</div>
</div>
{/foreach}

</div>
</div>
</div>

{foreach from=$group_cat_info item=cat_info name=g_cat_info}
	{if $group_cat.use_slider == 1}	
		<script type="text/javascript">
		$(document).ready(function() {
			var owl = $("#laberOWL-{$smarty.foreach.g_cat_info.iteration|intval}-tab");
			owl.owlCarousel({
				items : 4,
				itemsDesktop : [1199,3],
				itemsDesktopSmall : [991,3],
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


