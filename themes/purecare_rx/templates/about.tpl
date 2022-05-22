{**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file='page.tpl'}
    {block name='page_content'}
   <div class="row">
    <div class="col-sm-6 bg-primary text-white">  
    <img src="data:image/png;base64,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"/>

    </div>
    <div class="col-sm-6 bg-dark text-white">
    <p>lorem ipsum dolor sit amet, consectetur lorem ipsum dolor si</p>
    <p>lorem ipsum dolor sit amet, consectetur lorem ipsum dolor si</p>
    <p>lorem ipsum dolor sit amet, consectetur lorem ipsum dolor si</p>
    <p>lorem ipsum dolor sit amet, consectetur lorem ipsum dolor si</p><p>lorem ipsum dolor sit amet, consectetur lorem ipsum dolor si</p><p>lorem ipsum dolor sit amet, consectetur lorem ipsum dolor si</p><p>lorem ipsum dolor sit amet, consectetur lorem ipsum dolor si</p>
    <p>lorem ipsum dolor sit amet, consectetur lorem ipsum dolor si</p>
    <p>lorem ipsum dolor sit amet, consectetur lorem ipsum dolor si</p>
    </div>
    
  </div>
  
   <div class="row">
  {block name='hook_test'}
            {$HOOK_TEST nofilter}
          {/block}
          </div>
        {/block}
