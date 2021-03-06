{if !$default}
<a href="javascript:void(0)" class="icon_action icon_delete_instance" onclick="fieldsEditor.deleteField('{if $new}{$new}{else}{$item.id}{/if}', '{$main->getText('sections', 'form_editor_delete_field_confirm')}', {if $new}0{else}{$main->item_data.id}{/if})" title="{$main->getText('sections', 'form_editor_delete_field')}"></a>

<a href="javascript:void(0)" onclick="fieldsEditor.openCloseItemTools($(this))" class="expand_collapse expand" title="{$main->getText('sections', 'form_editor_expand_collapse')}"></a>
{/if}

<div class="collapsable_fieldlist_item_tools">
    <fieldset>
    
    	<table cellpadding="0" cellspacing="0" border="0" class="item_tools_table">
    		
    		<tr>
    			<td class="label_col">
    				<label for="label_{if $new}{$new}{else}{$item.id}{/if}">{$main->getText('sections', 'form_edit_item_label')}</label>
    			</td>
    			<td class="content_col">
    				{if $new}
			            <input class="textfield" type="text" value="{$main->getText('sections', 'form_editor_tools_file')}" name="label**__**{$new}" id="label_new_{$item.new}" />
			        {else}
			            <input class="textfield" type="text" value="{$item.label}" name="label**__**{$item.id}" id="label_{$item.id}" />
			        {/if}
    			</td>
    		</tr>
    		
    		<tr>
    			<td class="label_col">
    				<label for="description_{if $new}{$new}{else}{$item.id}{/if}">{$main->getText('sections', 'form_edit_item_description')}</label>
    			</td>
    			<td class="content_col">
    				<input class="textfield" type="text" value="{$item.description}" name="description**__**{if $new}{$new}{else}{$item.id}{/if}" id="description_{if $new}{$new}{else}{$item.id}{/if}" />
    			</td>
    		</tr>

            <tr>
    			<td class="label_col">
    				<label for="folder_{if $new}{$new}{else}{$item.id}{/if}">{$main->getText('sections', 'form_edit_item_folder_files')}</label>
    			</td>
    			<td class="content_col">
    				<input class="textfield" type="text" value="{$item.folder}" name="folder**__**{if $new}{$new}{else}{$item.id}{/if}" id="folder_{if $new}{$new}{else}{$item.id}{/if}" />
    			</td>
    		</tr>

			<tr id="custom_{if $new}{$new}{else}{$item.id}{/if}" style="display: none;">
    			<td class="label_col">
    				<label for="options_custom_{if $new}{$new}{else}{$item.id}{/if}">{$main->getText('sections', 'form_edit_item_file_customs')}</label>
    			</td>
    			<td class="content_col">
    				<input autocomplete="off" type="hidden" value="{$item.extensions}" name="extensions**__**{if $new}{$new}{else}{$item.id}{/if}" id="options_custom_{if $new}{$new}{else}{$item.id}{/if}" />
    				<div id="options_custom_parsed_{if $new}{$new}{else}{$item.id}{/if}"></div>
    			</td>
    		</tr>
    		
    		<tr>
    			<td class="label_col">
    				<label for="list_{if $new}{$new}{else}{$item.id}{/if}">{$main->getText('sections', 'form_edit_item_list')}</label>
    			</td>
    			<td class="content_col">
    				<input type="checkbox" value="1" name="list**__**{if $new}{$new}{else}{$item.id}{/if}" {if $item.list == '1'}checked="checked"{/if} id="list_{if $new}{$new}{else}{$item.id}{/if}" />
    			</td>
    		</tr>
    	</table>
        
        <input type="hidden" value="file" name="type**__**{if $new}{$new}{else}{$item.id}{/if}" />
        <input type="hidden" value="{$item.sort}" name="sort**__**{if $new}{$new}{else}{$item.id}{/if}" rel="sort" />
    </fieldset>
</div>

<script type="text/javascript">
	fieldsEditor.selectItemInit('select_{if $new}{$new}{else}{$item.id}{/if}', '{$item.options_source}', '{$item.default}', 'file');
</script>