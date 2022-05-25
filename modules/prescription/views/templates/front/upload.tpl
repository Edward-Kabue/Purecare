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
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
{extends file='page.tpl'}

{block name='page_header_container'}{/block}



{block name='page_content'}
{if isset($multi) && $multi}
    {if $labelpos == 0 || $labelpos == 3}
        <div class="form-group multifileupload_box">
        	{if $labelpos == 0}
        	<label for="{$idatt|escape:'html':'UTF-8'}" {if $required} class="required_label"{/if}>{$label|escape:'html':'UTF-8'}</label>
            {/if}
        	<input  data-no-uniform="true"  multiple type="file" name="{$name|escape:'html':'UTF-8'}[]" id="{$idatt|escape:'html':'UTF-8'}" class="form-control {$classatt|escape:'html':'UTF-8'} filestyle multifileupload" data-buttonName="btn-primary"  data-buttonText="{literal}{if isset($button_upload_text)}{$button_upload_text}{else}{l s='Choose file' mod='gformbuilderpro'}{/if}{/literal}" />
            {if $description!=''}<p class="help-block">{$description|escape:'html':'UTF-8'}</p>{/if}
         </div>
    {else}
        <div class="form-group multifileupload_box">
            <div class="row">
                {if $labelpos == 1}
                <div class="col-xs-12 col-md-4">
            	   <label for="{$idatt|escape:'html':'UTF-8'}" {if $required} class="required_label"{/if}>{$label|escape:'html':'UTF-8'}</label>
                </div>  
                {/if} 
                <div class="col-xs-12 col-md-8">
                    <input data-no-uniform="true" multiple type="file" name="{$name|escape:'html':'UTF-8'}[]" id="{$idatt|escape:'html':'UTF-8'}" class="form-control {$classatt|escape:'html':'UTF-8'} filestyle multifileupload" data-buttonName="btn-primary"  data-buttonText="{literal}{if isset($button_upload_text)}{$button_upload_text}{else}{l s='Choose file' mod='gformbuilderpro'}{/if}{/literal}" />
        	       {if $description!=''}<p class="help-block">{$description|escape:'html':'UTF-8'}</p>{/if}
                </div>
                {if $labelpos == 2}
                <div class="col-xs-12 col-md-4">
            	   <label for="{$idatt|escape:'html':'UTF-8'}" {if $required} class="required_label"{/if}>{$label|escape:'html':'UTF-8'}</label>
                </div>  
                {/if}
            </div>
        </div>
    {/if}
{else}
    {if $labelpos == 0 || $labelpos == 3}
        <div class="form-group fileupload_box">
        	{if $labelpos == 0}
        	<label for="{$idatt|escape:'html':'UTF-8'}" {if $required} class="required_label"{/if}>{$label|escape:'html':'UTF-8'}</label>
            {/if}
        	<input type="file" name="{$name|escape:'html':'UTF-8'}" id="{$idatt|escape:'html':'UTF-8'}" class="form-control {$classatt|escape:'html':'UTF-8'} filestyle" data-buttonName="btn-primary"  data-buttonText="{literal}{if isset($button_upload_text)}{$button_upload_text}{else}{l s='Choose file' mod='gformbuilderpro'}{/if}{/literal}" />
            {if $description!=''}<p class="help-block">{$description|escape:'html':'UTF-8'}</p>{/if}
         </div>
    {else}
        <div class="form-group fileupload_box">
            <div class="row">
                {if $labelpos == 1}
                <div class="col-xs-12 col-md-4">
            	   <label for="{$idatt|escape:'html':'UTF-8'}" {if $required} class="required_label"{/if}>{$label|escape:'html':'UTF-8'}</label>
                </div>  
                {/if}
                <div class="col-xs-12 col-md-8">
                    <input type="file" name="{$name|escape:'html':'UTF-8'}" id="{$idatt|escape:'html':'UTF-8'}" class="form-control {$classatt|escape:'html':'UTF-8'} filestyle" data-buttonName="btn-primary"  data-buttonText="{literal}{if isset($button_upload_text)}{$button_upload_text}{else}{l s='Choose file' mod='gformbuilderpro'}{/if}{/literal}" />
        	       {if $description!=''}<p class="help-block">{$description|escape:'html':'UTF-8'}</p>{/if}
                </div>
                {if $labelpos == 2}
                <div class="col-xs-12 col-md-4">
            	   <label for="{$idatt|escape:'html':'UTF-8'}" {if $required} class="required_label"{/if}>{$label|escape:'html':'UTF-8'}</label>
                </div>  
                {/if}
            </div>
        </div>
    {/if}
{/if}
 {hook h='displayGform' id='1'}
{/block}
