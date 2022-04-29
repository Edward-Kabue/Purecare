/**
* 2007-2016 PrestaShop
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
*  @copyright 2007-2016 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*
* Don't forget to prefix your containers with your own identifier
* to avoid any conflicts with others containers.
*/

$(document).ready(function(){
	var loanding="<p class='loanding'></p>";
	
	
	$('#laberProductsCateHome .sub-cat-ul li').click(function(){
		var id_cat_main = $(this).attr('data-id-cat-main');
		var id_cat = $(this).attr('data-id-cat');
		var use_slider = $(this).attr('data-use_slider');
		var cat_info = $(this).attr('data-cat-info');
		var id_group = $(this).attr('data-id-group');
		var number_prod = $(this).attr('data-number-prod');
		var name_module = $(this).attr('data-lab-name-module');
		
		$('.laberSub-cate #sub-cat-ul-'+id_group+''+cat_info+' li').removeClass('active');
		$(this).addClass('active');
		$('.laberContentProduct-'+id_cat_main+'-'+id_group).html(loanding);
		
		getProductCatHome(id_group, id_cat_main, id_cat, use_slider ,number_prod, name_module);
		
	});
	
	/* laberProductsCatePosition1 */
	
	$('#laberProductsCatePosition1 .sub-cat-ul li').click(function(){
		var id_cat_main = $(this).attr('data-id-cat-main');
		var id_cat = $(this).attr('data-id-cat');
		var use_slider = $(this).attr('data-use_slider');
		var cat_info = $(this).attr('data-cat-info');
		var id_group = $(this).attr('data-id-group');
		var number_prod = $(this).attr('data-number-prod');
		var name_module = $(this).attr('data-lab-name-module');

		$('.laberSub-cate #sub-cat-ul-'+id_group+''+cat_info+' li').removeClass('active');
		$(this).addClass('active');
		$('.laberContentProduct-'+id_cat_main+'-'+id_group).html(loanding);
		
		getProductCatPosition1(id_group, id_cat_main, id_cat, use_slider, number_prod, name_module);
		
	});

		/* laberProductsCatePosition2 */
	
	$('#laberProductsCatePosition2 .sub-cat-ul li').click(function(){
		var id_cat_main = $(this).attr('data-id-cat-main');
		var id_cat = $(this).attr('data-id-cat');
		var use_slider = $(this).attr('data-use_slider');
		var cat_info = $(this).attr('data-cat-info');
		var id_group = $(this).attr('data-id-group');
		var number_prod = $(this).attr('data-number-prod');
		var name_module = $(this).attr('data-lab-name-module');

		$('.laberSub-cate #sub-cat-ul-'+id_group+''+cat_info+' li').removeClass('active');
		$(this).addClass('active');
		$('.laberContentProduct-'+id_cat_main+'-'+id_group).html(loanding);
		
		getProductCatPosition2(id_group, id_cat_main, id_cat, use_slider, number_prod, name_module);
		
	});
	
		/* laberProductsCatePosition3 */
	
	$('#laberProductsCatePosition3 .sub-cat-ul li').click(function(){
		var id_cat_main = $(this).attr('data-id-cat-main');
		var id_cat = $(this).attr('data-id-cat');
		var use_slider = $(this).attr('data-use_slider');
		var cat_info = $(this).attr('data-cat-info');
		var cat_info = $(this).attr('data-cat-info');
		var id_group = $(this).attr('data-id-group');
		var number_prod = $(this).attr('data-number-prod');
		var name_module = $(this).attr('data-lab-name-module');

		$('.laberSub-cate #sub-cat-ul-'+id_group+''+cat_info+' li').removeClass('active');
		$(this).addClass('active');
		$('.laberContentProduct-'+id_cat_main+'-'+id_group).html(loanding);
		
		getProductCatPosition3(id_group, id_cat_main, id_cat, use_slider, number_prod, name_module);
		
	});
	
		/* laberProductsCatePosition4 */
	
	$('#laberProductsCatePosition4 .sub-cat-ul li').click(function(){
		var id_cat_main = $(this).attr('data-id-cat-main');
		var id_cat = $(this).attr('data-id-cat');
		var use_slider = $(this).attr('data-use_slider');
		var cat_info = $(this).attr('data-cat-info');
		var id_group = $(this).attr('data-id-group');
		var number_prod = $(this).attr('data-number-prod');
		var name_module = $(this).attr('data-lab-name-module');

		$('.laberSub-cate #sub-cat-ul-'+id_group+''+cat_info+' li').removeClass('active');
		$(this).addClass('active');
		$('.laberContentProduct-'+id_cat_main+'-'+id_group).html(loanding);
		
		getProductCatPosition4(id_group, id_cat_main, id_cat, use_slider, number_prod, name_module);
		
	});
});


function getProductCatHome(id_group, id_cat_main, id_cat, use_slider, number_prod, name_module) {
		var url_page_cart = $('#laberProductsCateHome').attr('data-url_page_cart');
		var static_token = $('#laberProductsCateHome').attr('data-static_token');
		
		$.post(
		    $('#laberProductsCateHome').attr('data-lab_base_ssl'), 
			{id_Cat: id_cat, use_Slider: use_slider, id_Group: id_group, number_Prod: number_prod, name_Module: name_module, Url_Page_Cart : url_page_cart, Static_Token : static_token},
			function(data) 
			{ 
				$('.laberContentProduct-'+id_cat_main+'-'+id_group).html(data);
			})
			.fail(function(error, textStatus, errorThrown) 
			{ 
				$('.laberContentProduct-'+id_cat_main+'-'+id_group).html(error.responseText);
			});
	
}

/* laberProductsCatePosition1 */
function getProductCatPosition1(id_group, id_cat_main, id_cat, use_slider, number_prod, name_module) {
		var url_page_cart = $('#laberProductsCatePosition1').attr('data-url_page_cart');
		var static_token = $('#laberProductsCatePosition1').attr('data-static_token');
		
		$.post(
		    $('#laberProductsCatePosition1').attr('data-lab_base_ssl'), 
			{id_Cat: id_cat, use_Slider: use_slider, id_Group: id_group, number_Prod: number_prod, name_Module: name_module, Url_Page_Cart : url_page_cart, Static_Token : static_token},
			function(data) 
			{ 
				$('.laberContentProduct-'+id_cat_main+'-'+id_group).html(data);
			})
			.fail(function(error, textStatus, errorThrown) 
			{ 
				$('.laberContentProduct-'+id_cat_main+'-'+id_group).html(error.responseText);
			});
	
}

/* laberProductsCatePosition2 */
function getProductCatPosition2(id_group, id_cat_main, id_cat, use_slider, number_prod, name_module) {
		var url_page_cart = $('#laberProductsCatePosition2').attr('data-url_page_cart');
		var static_token = $('#laberProductsCatePosition2').attr('data-static_token');
		
		$.post(
		    $('#laberProductsCatePosition2').attr('data-lab_base_ssl'), 
			{id_Cat: id_cat, use_Slider: use_slider, id_Group: id_group, number_Prod: number_prod, name_Module: name_module, Url_Page_Cart : url_page_cart, Static_Token : static_token},
			function(data) 
			{ 
				$('.laberContentProduct-'+id_cat_main+'-'+id_group).html(data);
			})
			.fail(function(error, textStatus, errorThrown) 
			{ 
				$('.laberContentProduct-'+id_cat_main+'-'+id_group).html(error.responseText);
			});
	
}

/* laberProductsCatePosition3 */
function getProductCatPosition3(id_group, id_cat_main, id_cat, use_slider, number_prod, name_module) {
		var url_page_cart = $('#laberProductsCatePosition3').attr('data-url_page_cart');
		var static_token = $('#laberProductsCatePosition3').attr('data-static_token');
		
		$.post(
		    $('#laberProductsCatePosition3').attr('data-lab_base_ssl'), 
			{id_Cat: id_cat, use_Slider: use_slider, id_Group: id_group, number_Prod: number_prod, name_Module: name_module, Url_Page_Cart : url_page_cart, Static_Token : static_token},
			function(data) 
			{ 
				$('.laberContentProduct-'+id_cat_main+'-'+id_group).html(data);
			})
			.fail(function(error, textStatus, errorThrown) 
			{ 
				$('.laberContentProduct-'+id_cat_main+'-'+id_group).html(error.responseText);
			});
	
}

/* laberProductsCatePosition4 */
function getProductCatPosition4(id_group, id_cat_main, id_cat, use_slider, number_prod, name_module) {
		var url_page_cart = $('#laberProductsCatePosition4').attr('data-url_page_cart');
		var static_token = $('#laberProductsCatePosition4').attr('data-static_token');
		
		$.post(
		    $('#laberProductsCatePosition4').attr('data-lab_base_ssl'), 
			{id_Cat: id_cat, use_Slider: use_slider, id_Group: id_group, number_Prod: number_prod, name_Module: name_module, Url_Page_Cart : url_page_cart, Static_Token : static_token},
			function(data) 
			{ 
				$('.laberContentProduct-'+id_cat_main+'-'+id_group).html(data);
			})
			.fail(function(error, textStatus, errorThrown) 
			{ 
				$('.laberContentProduct-'+id_cat_main+'-'+id_group).html(error.responseText);
			});
	
}

