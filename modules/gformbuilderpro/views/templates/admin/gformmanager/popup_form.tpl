{*
* Do not edit the file if you want to upgrade the module in future.
*
* @author    Globo Software Solution JSC <contact@globosoftware.net>
* @copyright 2019 Globo JSC
* @license   please read license in file license.txt
* @link	     http://www.globosoftware.net
*/
*}

<div style="display:none;">
    <div id="popup_field_config">
        <div id="content"  class="bootstrap"></div>
    </div>
    <div id="popup_field_wp"></div>
    <div id="popup_field_config_hidden" class="bootstrap">
        <div id="popup_field_config_wp">
            <form id="module_form" action="{$gformbuilderpro_submit_link|escape:'html':'UTF-8'}" class="defaultForm form-horizontal" method="post" enctype="multipart/form-data" novalidate>
                <input type="hidden" name="addShortcode" value="1"/>
                <div class="">
                    <div class="panel-heading"><i class="icon-cogs"></i><span class="popup_field_type"></span>{l s='Settings' mod='gformbuilderpro'}</div>
                    <div class="form-wrapper popup_field_content">
                        <div class="form-group hide">
    						<input type="hidden" name="type" id="type" value="" />
                            <input type="hidden" name="id_gformbuilderprofields" id="id_gformbuilderprofields" value="" />
    					</div>
                        <div class="form-group">
                            <label class="control-label col-lg-3 required">{l s='Label' mod='gformbuilderpro'}</label>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    {foreach $languages as $language}
                                        <div class="translatable-field  lang-{$language.id_lang|escape:'html':'UTF-8'}" style="display:{if $language.id_lang == $defaultFormLanguage}block{else}none{/if};">
                                            <div class="col-lg-9">
                                                <input type="text" name="label_{$language.id_lang|escape:'html':'UTF-8'}" value="" class="label_{$language.id_lang|escape:'html':'UTF-8'} gvalidate_isRequired" />
                                            </div>
                                            {if $languages|count > 1}
                            					<div class="col-lg-2">
                            						<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                            							{$language.iso_code|escape:'html':'UTF-8'}
                            							<span class="caret"></span>
                            						</button>
                            						<ul class="dropdown-menu">
                            							{foreach from=$languages item=lang}
                            							<li><a href="javascript:hideOtherLanguage({$lang.id_lang|escape:'html':'UTF-8'});" tabindex="-1">{$lang.name|escape:'html':'UTF-8'}</a></li>
                            							{/foreach}
                            						</ul>
                            					</div>
                            				{/if}
                                        </div>
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                        <div class="form-group gfield_name">
                            <label class="control-label col-lg-3 required">{l s='Field Name' mod='gformbuilderpro'}</label>
                            <div class="col-lg-9">
                                <input type="text" name="name" id="name" value="" class="gvalidate gvalidate_isName gvalidate_isRequired" />
                             </div>
                        </div>

                        <div class="popup_field_content_box"></div>
                        <div class="form-group gfield_idatt">
                            <label class="control-label col-lg-3">{l s='Html id' mod='gformbuilderpro'}</label>
                            <div class="col-lg-9">
                                <input type="text" name="idatt" id="idatt" value="" class="gvalidate gvalidate_isId" />
                                <p class="help-block">{l s='Add your custom id so you can custom css for this field' mod='gformbuilderpro'}</p>
                            </div>
                        </div>
                        <div class="form-group gfield_classatt">
                            <label class="control-label col-lg-3">{l s='Html class' mod='gformbuilderpro'}</label>
                            <div class="col-lg-9">
                                <input type="text" name="classatt" id="classatt" value="" class="gvalidate gvalidate_isClass" />
                                <p class="help-block">{l s='Add your custom class so you can custom css for this field' mod='gformbuilderpro'}</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" value="1" id="module_form_submit_btn" name="addShortcode" class="btn btn-default pull-right">
                        <i class="process-icon-save"></i> {l s='Save change' mod='gformbuilderpro'}
                        </button>
                        <button type="submit" class="btn btn-default btn btn-default pull-left" name="cancelShortcode"><i class="process-icon-cancel"></i> {l s='Cancel' mod='gformbuilderpro'}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="popup_field_config_item">
        <div class="form-group gfield_labelpos">
            <label class="control-label col-lg-3">
            {l s='Label position' mod='gformbuilderpro'}
            </label>
            <div class="col-lg-9">
                <select name="labelpos" class=" fixed-width-xl" id="labelpos">
                </select>
            </div>
        </div>
        <div class="form-group gfield_placeholder">
            <label class="control-label col-lg-3">{l s='Placeholder' mod='gformbuilderpro'}</label>
            <div class="col-lg-9">
                <div class="form-group">
                    {foreach $languages as $language}
                        <div class="translatable-field  lang-{$language.id_lang|escape:'html':'UTF-8'}" style="display:{if $language.id_lang == $defaultFormLanguage}block{else}none{/if};">
                            <div class="col-lg-9">
                                <input type="text" value="" name="placeholder_{$language.id_lang|escape:'html':'UTF-8'}" class="placeholder_{$language.id_lang|escape:'html':'UTF-8'}" />
                            </div>
                            {if $languages|count > 1}
            					<div class="col-lg-2">
            						<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
            							{$language.iso_code|escape:'html':'UTF-8'}
            							<span class="caret"></span>
            						</button>
            						<ul class="dropdown-menu">
            							{foreach from=$languages item=lang}
            							<li><a href="javascript:hideOtherLanguage({$lang.id_lang|escape:'html':'UTF-8'});" tabindex="-1">{$lang.name|escape:'html':'UTF-8'}</a></li>
            							{/foreach}
            						</ul>
            					</div>
            				{/if}
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
        <div class="form-group gfield_required">
            <label class="control-label col-lg-3">{l s='Required field' mod='gformbuilderpro'}</label>
            <div class="col-lg-9">
                <span class="switch prestashop-switch fixed-width-lg">
                <input type="radio" name="required" class="need_change_id" data-id="required_on" value="1" />
                <label for="required_on">{l s='Yes' mod='gformbuilderpro'}</label>
                <input type="radio" name="required" class="need_change_id" data-id="required_off" value="0" checked="checked" />
                <label for="required_off">{l s='No' mod='gformbuilderpro'}</label>
                <a class="slide-button btn"></a>
                </span>
            </div>
        </div>
        <div class="form-group gfield_extra_switch">
            <label class="control-label col-lg-3">{l s='Register newsletter if input value is email' mod='gformbuilderpro'}</label>
            <div class="col-lg-9">
                <span class="switch prestashop-switch fixed-width-lg">
                <input type="radio" name="extra" class="need_change_id" data-id="extra_on" value="1" />
                <label for="extra_on">{l s='Yes' mod='gformbuilderpro'}</label>
                <input type="radio" name="extra" class="need_change_id" data-id="extra_off" value="0" checked="checked" />
                <label for="extra_off">{l s='No' mod='gformbuilderpro'}</label>
                <a class="slide-button btn"></a>
            </span>
            </div>
        </div>
        <div class="form-group gfield_extra_select">
            <label class="control-label col-lg-3">{l s='Country Option' mod='gformbuilderpro'}</label>
            <div class="col-lg-9">
                <select name="extra" class=" fixed-width-xl" id="extra"></select>
            </span>
            </div>
        </div>
        <div class="form-group gfield_extra_colorchoose">
            <label class="control-label col-lg-3">{l s='Colors' mod='gformbuilderpro'}</label>
            <div class="col-lg-9">
                <div class="input-group">
                    <input type="text" name="extra" class="tagify" data-addTagPrompt="{l s='Add Color' mod='gformbuilderpro'}" />
                </div>
                <p class="help-block">{l s='To add "Colors" click in the field, write color(ex: #ABCDEF), and then press "Enter".' mod='gformbuilderpro'}</p>
            </div>
        </div>
        <div class="form-group gfield_extra_tags">
            <label class="control-label col-lg-3"></label>
            <div class="col-lg-9">
                <input type="text" name="extra" class="tagify" data-addTagPrompt="{l s='Add Tag' mod='gformbuilderpro'}" />
                <p class="help-block">{l s='Click in the field, write and then press "Enter".' mod='gformbuilderpro'}</p>
            </div>
        </div>
        <div class="form-group gfield_extra_color">
            <label class="control-label col-lg-3"></label>
            <div class="col-lg-9">
                <div class="input-group">
                    <input data-hex="true" type="text" name="extra" class="gcolor" />
                </div>
            </div>
        </div>
        <div class="form-group gfield_extra_slidervalue">
            <label class="control-label col-lg-3"></label>
            <div class="col-lg-9">
        		<div class="row">
                    <input type="hidden" name="extra" class="gvalidate  gvalidate_isRequired3" id="slidervalue" value="" />
                    <div class="col-lg-3">
                        <div class="row">
                            <label class="col-lg-12" for="minval">{l s='Min' mod='gformbuilderpro'}</label>
                            <div class="col-lg-12">
                                <input type="text" name="minval" class="slidervalue" id="minval" placeholder="{l s='Min value' mod='gformbuilderpro'}" value="0" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <label class="col-lg-12" for="maxval">{l s='Max' mod='gformbuilderpro'}</label>
                            <div class="col-lg-12">
                                <input type="text" name="maxval" class="slidervalue" id="maxval" placeholder="{l s='Max value' mod='gformbuilderpro'}" value="100" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <label class="col-lg-12" for="rangeval">{l s='Range' mod='gformbuilderpro'}</label>
                            <div class="col-lg-12">
                                <input type="text" name="rangeval" class="slidervalue" id="rangeval" placeholder="{l s='Range value' mod='gformbuilderpro'}"  value="1"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <label class="col-lg-12" for="defaultval">{l s='Default' mod='gformbuilderpro'}</label>
                            <div class="col-lg-12">
                                <input type="text" name="defaultval" class="slidervalue" id="defaultval" placeholder="{l s='Default value' mod='gformbuilderpro'}"  value="100" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group gfield_extra_imagethumb">
            <label class="control-label col-lg-3"></label>
            <div class="col-lg-9">
        		<div class="row">
                    <div id="divThumbItems" class="col-lg-12"></div>
                    <br />
                    <input type="hidden" id="thumb_url" value="{$base_uri|escape:'html':'UTF-8'}modules/gformbuilderpro/views/img/thumbs/" />
                    <textarea name="extra" id="thumbchoose" class="hidden gvalidate  gvalidate_isRequired"></textarea>
                    <div class="col-lg-4">
                        <input type="file" name="thumb[]" id="imagethumbupload" class="imagethumbupload" multiple />
                    </div>
                    <div class="col-lg-6">
                        <button type="button" id="add_thumb_item_fromlist" class="btn btn-default">
        					<i class="icon-list"></i> {l s='Or choose from exist image' mod='gformbuilderpro'}
        				</button>

        			</div>
                    <div class="col-lg-12">
                        <div id="thumbs_fromlist"></div>
                        <button type="button" id="add_thumb_item" class="btn btn-default">
        					<i class="icon-plus-sign-alt"></i> {l s='Add thumbs' mod='gformbuilderpro'}
        				</button>
                        <p class="help-block">{l s='Click to button "Add thumbs" after select thumb' mod='gformbuilderpro'}</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="form-group gfield_extra_gformproduct">
            <label class="control-label col-lg-3"></label>
            <div class="col-lg-9">
        		<div class="row">
        			<div class="col-lg-6">
                        <input type="hidden" class="gvalidate gvalidate_isRequired need_change_id" name="extra" data-id="inputPackItems" value=""/>
                        <input type="hidden" data-id="ajaxaction" class="need_change_id" value="{$ajaxaction|escape:'html':'UTF-8'}" />
        				<input type="text" data-id="curPackItemName" name="curPackItemName" class="need_change_id form-control" />
                        <input type="hidden" data-id="curPackItemId" name="curPackItemId" class="need_change_id form-control" />
        			</div>
        			<div class="col-lg-2">
        				<button type="button" id="add_pack_item" class="btn btn-default">
        					<i class="icon-plus-sign-alt"></i> {l s='Add' mod='gformbuilderpro'}
        				</button>
        			</div>
                    <br />
                    <div  data-id="divPackItems" class="need_change_id col-lg-12 {if isset($loadjqueryselect2) && $loadjqueryselect2 !='1'} get_product_version_old {/if}">
                    </div>
        		</div>
        	</div>
        </div>
        <div class="form-group gfield_description_textarea">
            <label class="control-label col-lg-3"></label>
            <div class="col-lg-9">
                <div class="form-group">
                    {foreach $languages as $language}
                        <div class="translatable-field  lang-{$language.id_lang|escape:'html':'UTF-8'}" style="display:{if $language.id_lang == $defaultFormLanguage}block{else}none{/if};">
                            <div class="col-lg-9">
                                <textarea name="description_{$language.id_lang|escape:'html':'UTF-8'}" class="description_{$language.id_lang|escape:'html':'UTF-8'}"></textarea>
                            </div>
                            {if $languages|count > 1}
            					<div class="col-lg-2">
            						<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
            							{$language.iso_code|escape:'html':'UTF-8'}
            							<span class="caret"></span>
            						</button>
            						<ul class="dropdown-menu">
            							{foreach from=$languages item=lang}
            							<li><a href="javascript:hideOtherLanguage({$lang.id_lang|escape:'html':'UTF-8'});" tabindex="-1">{$lang.name|escape:'html':'UTF-8'}</a></li>
            							{/foreach}
            						</ul>
            					</div>
            				{/if}
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
        <div class="form-group gfield_description_multival">
            <label class="control-label col-lg-3"></label>
            <div class="col-lg-9">
                <div class="form-group">
                    {foreach $languages as $language}
                        <div class="translatable-field  lang-{$language.id_lang|escape:'html':'UTF-8'}" style="display:{if $language.id_lang == $defaultFormLanguage}block{else}none{/if};">
                            <div class="col-lg-9">
                                <textarea name="description_{$language.id_lang|escape:'html':'UTF-8'}" class="description_{$language.id_lang|escape:'html':'UTF-8'}"></textarea>
                                <p class="help-block">{l s='Each option per line' mod='gformbuilderpro'}</p>
                            </div>
                            {if $languages|count > 1}
            					<div class="col-lg-2">
            						<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
            							{$language.iso_code|escape:'html':'UTF-8'}
            							<span class="caret"></span>
            						</button>
            						<ul class="dropdown-menu">
            							{foreach from=$languages item=lang}
            							<li><a href="javascript:hideOtherLanguage({$lang.id_lang|escape:'html':'UTF-8'});" tabindex="-1">{$lang.name|escape:'html':'UTF-8'}</a></li>
            							{/foreach}
            						</ul>
            					</div>
            				{/if}
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
        <div class="form-group gfield_description_multival2">
            <label class="control-label col-lg-3"></label>
            <div class="col-lg-9">
                <div class="">
                    <div class="multival_box" id="multival_description" rel="description">
                        <div id="description_multival_newval" class="multival_newval">
                            <div style="display:none;" id="value_invalid" class="alert alert-danger" role="alert"><p>{l s='Value invalid' mod='gformbuilderpro'}</p></div>
                            <div class="form-group">
                            {foreach $languages as $language}
                                    <div class="translatable-field col-lg-12  lang-{$language.id_lang|escape:'html':'UTF-8'}" style="display:{if $language.id_lang == $defaultFormLanguage}block{else}none{/if}; float: left;">
                                        <div class="col-lg-6">
                                            <input type="text" value="" class="multival_newval_{$language.id_lang|escape:'html':'UTF-8'}" />
                                        </div>
                                        {if $languages|count > 1}
                        					<div class="col-lg-2">
                        						<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                        							{$language.iso_code|escape:'html':'UTF-8'}
                        							<span class="caret"></span>
                        						</button>
                        						<ul class="dropdown-menu">
                        							{foreach from=$languages item=lang}
                        							<li><a href="javascript:hideOtherLanguage({$lang.id_lang|escape:'html':'UTF-8'});" tabindex="-1">{$lang.name|escape:'html':'UTF-8'}</a></li>
                        							{/foreach}
                        						</ul>
                        					</div>
                        				{/if}
                                        <div class="col-lg-4">
                                            <a  class="add_multival_newval btn btn-default"><i class="icon-save"></i><span class="addlabel">{l s='Add' mod='gformbuilderpro'}</span><span class="updatelabel">{l s='Update' mod='gformbuilderpro'}</span></a>
                                            <a  class="cancel_multival_newval btn btn-danger" style="display:none;"><i class="icon-remove"></i></a>
                                        </div>
                                    </div>
                            {/foreach}
                            </div>
                        </div>
                        <hr />
                        <div id="description_multival_wp" rel="description"  class="multival_wp">
                        </div>
                        <div style="display:none;" class="multival_action_wp">
                            <div class="multival_action">
                                <a class="multival_move btn btn-default"><i class="icon-move"></i></a>
                                <a class="multival_edit btn btn-default"><i class="icon-edit"></i></a>
                                <a class="multival_delete  btn btn-danger"><i class="icon-trash"></i></a>
                            </div>
                        </div>
                        {foreach $languages as $language}
                            <input type="hidden" id="description_{$language.id_lang|escape:'html':'UTF-8'}" name="description_{$language.id_lang|escape:'html':'UTF-8'}" value="" />
                        {/foreach}
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group gfield_value_text">
            <label class="control-label col-lg-3">{l s='Value' mod='gformbuilderpro'}</label>
            <div class="col-lg-9">
                <div class="form-group">
                    {foreach $languages as $language}
                        <div class="translatable-field  lang-{$language.id_lang|escape:'html':'UTF-8'}" style="display:{if $language.id_lang == $defaultFormLanguage}block{else}none{/if};">
                            <div class="col-lg-9">
                                <input type="text" value="" name="value_{$language.id_lang|escape:'html':'UTF-8'}" class="value_{$language.id_lang|escape:'html':'UTF-8'}" />
                            </div>
                            {if $languages|count > 1}
            					<div class="col-lg-2">
            						<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
            							{$language.iso_code|escape:'html':'UTF-8'}
            							<span class="caret"></span>
            						</button>
            						<ul class="dropdown-menu">
            							{foreach from=$languages item=lang}
            							<li><a href="javascript:hideOtherLanguage({$lang.id_lang|escape:'html':'UTF-8'});" tabindex="-1">{$lang.name|escape:'html':'UTF-8'}</a></li>
            							{/foreach}
            						</ul>
            					</div>
            				{/if}
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
        <div class="form-group gfield_value_multival">
            <label class="control-label col-lg-3"></label>
            <div class="col-lg-9">
                <div class="form-group">
                    {foreach $languages as $language}
                        <div class="translatable-field  lang-{$language.id_lang|escape:'html':'UTF-8'}" style="display:{if $language.id_lang == $defaultFormLanguage}block{else}none{/if};">
                            <div class="col-lg-9">
                                <textarea name="value_{$language.id_lang|escape:'html':'UTF-8'}" class="value_{$language.id_lang|escape:'html':'UTF-8'}"></textarea>
                                <p class="help-block">{l s='Each option per line' mod='gformbuilderpro'}</p>
                            </div>
                            {if $languages|count > 1}
            					<div class="col-lg-2">
            						<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
            							{$language.iso_code|escape:'html':'UTF-8'}
            							<span class="caret"></span>
            						</button>
            						<ul class="dropdown-menu">
            							{foreach from=$languages item=lang}
            							<li><a href="javascript:hideOtherLanguage({$lang.id_lang|escape:'html':'UTF-8'});" tabindex="-1">{$lang.name|escape:'html':'UTF-8'}</a></li>
            							{/foreach}
            						</ul>
            					</div>
            				{/if}
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>

        <div class="form-group gfield_value_multival2">
            <label class="control-label col-lg-3"></label>
            <div class="col-lg-9">
                <div class="">
                    <div class="multival_box" id="multival_value" rel="value">
                        <div id="value_multival_newval" class="multival_newval">
                            <div style="display:none;" id="value_invalid" class="alert alert-danger" role="alert"><p>{l s='Value invalid' mod='gformbuilderpro'}</p></div>
                            <div class="form-group">
                            {foreach $languages as $language}
                                    <div class="translatable-field col-lg-12  lang-{$language.id_lang|escape:'html':'UTF-8'}" style="display:{if $language.id_lang == $defaultFormLanguage}block{else}none{/if}; float: left;">
                                        <div class="col-lg-6">
                                            <input type="text" value="" class="multival_newval_{$language.id_lang|escape:'html':'UTF-8'}" />
                                        </div>
                                        {if $languages|count > 1}
                        					<div class="col-lg-2">
                        						<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                        							{$language.iso_code|escape:'html':'UTF-8'}
                        							<span class="caret"></span>
                        						</button>
                        						<ul class="dropdown-menu">
                        							{foreach from=$languages item=lang}
                        							<li><a href="javascript:hideOtherLanguage({$lang.id_lang|escape:'html':'UTF-8'});" tabindex="-1">{$lang.name|escape:'html':'UTF-8'}</a></li>
                        							{/foreach}
                        						</ul>
                        					</div>
                        				{/if}
                                        <div class="col-lg-4">
                                            <a  class="add_multival_newval btn btn-default"><i class="icon-save"></i><span class="addlabel">{l s='Add' mod='gformbuilderpro'}</span><span class="updatelabel">{l s='Update' mod='gformbuilderpro'}</span></a>
                                            <a  class="cancel_multival_newval btn btn-danger" style="display:none;"><i class="icon-remove"></i></a>
                                        </div>
                                    </div>
                            {/foreach}
                            </div>
                        </div>
                        <hr />
                        <div id="value_multival_wp" rel="value"  class="multival_wp">
                        </div>
                        <div style="display:none;" class="multival_action_wp">
                            <div class="multival_action">
                                <a class="multival_move btn btn-default"><i class="icon-move"></i></a>
                                <a class="multival_edit btn btn-default"><i class="icon-edit"></i></a>
                                <a class="multival_delete  btn btn-danger"><i class="icon-trash"></i></a>
                            </div>
                        </div>
                        {foreach $languages as $language}
                            <input type="hidden" id="value_{$language.id_lang|escape:'html':'UTF-8'}" name="value_{$language.id_lang|escape:'html':'UTF-8'}" value="" />
                        {/foreach}
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group gfield_free"></div>
        <div class="form-group gfield_multi">
            <label class="control-label col-lg-3">
                {l s='Multi choose' mod='gformbuilderpro'}
            </label>
            <div class="col-lg-9">
                <span class="switch prestashop-switch fixed-width-lg">
                <input type="radio" name="multi" class="need_change_id" data-id="multi_on" value="1" />
                <label for="multi_on">{l s='Yes' mod='gformbuilderpro'}</label>
                <input type="radio" name="multi" class="need_change_id" data-id="multi_off" value="0" checked="checked" />
                <label for="multi_off">{l s='No' mod='gformbuilderpro'}</label>
                <a class="slide-button btn"></a>
                </span>
                <p class="help-block">
                    {l s='If on, then front-end user can select multi item.' mod='gformbuilderpro'}
                </p>
            </div>
        </div>
        <div class="form-group gfield_validate">
            <label class="control-label col-lg-3">
            {l s='Validation type' mod='gformbuilderpro'}
            </label>
            <div class="col-lg-9">
                <select name="validate" class=" fixed-width-xl" id="validate">
                </select>
            </div>
        </div>
    </div>
    <div id="gfield_datas">
        {if $fielddatas}
            {foreach $fielddatas as $fielddata}
                <div id="gfield_data_{$fielddata.id_gformbuilderprofields|intval}" class="gfield_data">
                    {foreach $fielddata as $field_name=> $field_val}
                        {if $field_name !='id_lang' && $field_name !='id_shop'}
                            {if $field_name !='description' && $field_name !='placeholder' && $field_name !='value' && $field_name !='label'}
                                <input type="text" class="{$field_name|escape:'html':'UTF-8'}" value="{$field_val|escape:'html':'UTF-8'}" />
                            {else}
                                {if $field_val}
                                    {foreach $field_val as $id_lang=> $val}
                                        <textarea class="{$field_name|escape:'html':'UTF-8'}_{$id_lang|intval}">{if $isps17}{$val nofilter}{else}{$val}{/if}</textarea>{* $val is html content. no need escape *}
                                    {/foreach}
                                {/if}
                            {/if}
                        {/if}
                    {/foreach}
                </div>
            {/foreach}
        {/if}
    </div>

</div>
