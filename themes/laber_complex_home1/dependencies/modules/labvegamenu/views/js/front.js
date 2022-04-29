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

		
		
		


/* function addMoreResponsive(nIpadHorizontal,nIpadVertical,htmlLiH,htmlLiV,htmlMenu) 
{
	if(nIpadHorizontal>0 && nIpadVertical>0)
	{
		if($("#more_vegamenu").length>0)
			$(".lab-menu-vertical .container").html(htmlMenu);

		if($(window).width() > 750 && $(window).width() <= 992)
		{	
			if($("#more_vegamenu").length==0)
			{
				$('<li id="more_vegamenu" class="level-1 more-menu"><a href="#"><span class="icon-plus"></span>' + text_more + '</a><ul class="menu-dropdown cat-drop-menu lab-sub-auto">' + htmlLiV + '</ul></li>').insertAfter('.lab-menu-vertical ul.menu-content li.level-1:nth-child('+nIpadVertical+')');
			}
			if($("#more_vegamenu").length>0)
				for(var j=(nIpadVertical+2);j<=(vnumLiItem+1);j++)
				{
					$(".lab-menu-vertical ul.menu-content li:nth-child("+j+").level-1").remove();
					var delItem=nIpadVertical+2;
					$(".lab-menu-vertical ul.menu-content li:nth-child("+delItem+").level-1").remove();
				}
		}
		else if($(window).width() > 992 && $(window).width() <= 1199)
		{
			
			if($("#more_vegamenu").length==0)
				$('<li id="more_vegamenu" class="level-1 more-menu"><a href="#"><span class="icon-plus"></span>' + text_more + '</a><ul class="menu-dropdown cat-drop-menu lab-sub-auto">' + htmlLiH + '</ul></li>').insertAfter('.lab-menu-vertical ul.menu-content li.level-1:nth-child('+nIpadHorizontal+')');
			if($("#more_vegamenu").length>0)
				for(var j=(nIpadHorizontal+2);j<=(vnumLiItem+1);j++)
				{
					$(".lab-menu-vertical ul.menu-content li:nth-child("+j+").level-1").remove();
					var delItem=nIpadHorizontal+2;
					$(".lab-menu-vertical ul.menu-content li:nth-child("+delItem+").level-1").remove();
				}
		}
	}
} */

$(document).ready(function()
{
	
	$(document).on('click', '.lab-menu-vertical .icon-drop-mobile', function() {
		$(this).next().toggle('slow');
		$(this).toggleClass('opened');
	});
	vegamenuHorClick();
});

function addSticky(){
	//if($('#layer_cart').is(":visible"))
	//	$('.lab-menu-vertical').removeClass('lab-menu-sticky animated fadeInDown');		
	//else
	//{
		/* var hBeginSticky = $('#header').height();
		if($(this).scrollTop() > hBeginSticky){
			$('.container_lab_vegamenu').addClass('lab-menu-fixtop');			
			$('.lab-menu-vertical .menu-vertical').addClass('lab-menu-top');	
		}			
					
		else{
			$('.container_lab_vegamenu').removeClass('lab-menu-fixtop');
			$('.lab-menu-vertical .menu-vertical').removeClass('lab-menu-top');
		} */
			
	//}
} 

$(window).scroll(function() {
	if($(window).width() > 1006)
			addSticky();
	
});
$(window).resize(function(){
	
	/* addMoreResponsive(nIpadHorizontal,nIpadVertical,htmlLiH,htmlLiV,htmlMenu); */
	
	if($(window).width() < 1007)
	{
		$('.lab-menu-vertical').removeClass('lab-menu-sticky animated');
	}
});
function vegamenuHorClick()
{
	$(document).on('click', '.lab-menu-vertical .title-menu', function() {
		$(".lab-menu-vertical .menu-vertical").toggleClass('lab-active');
		
	});
	$(document).on('click', '.lab-menu-vertical .close-menu-content span', function() {
		$(".lab-menu-vertical .menu-vertical").toggleClass('lab-active');
		
	});
	
}