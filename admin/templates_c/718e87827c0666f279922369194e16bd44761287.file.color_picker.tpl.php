<?php /* Smarty version Smarty 3.1.4, created on 2014-10-30 21:03:37
         compiled from "/home/fortyfour/web/fortyfour.ru/public_html/admin/templates/system/form_fields/color_picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123144428954526f69ec4ac0-93682795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '718e87827c0666f279922369194e16bd44761287' => 
    array (
      0 => '/home/fortyfour/web/fortyfour.ru/public_html/admin/templates/system/form_fields/color_picker.tpl',
      1 => 1411668641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123144428954526f69ec4ac0-93682795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'index' => 0,
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54526f69ef764',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54526f69ef764')) {function content_54526f69ef764($_smarty_tpl) {?><div class="item_block">
    <label class="label" for="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['help'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</label>
    <div class="cl"></div>

    <span class="hex_color_input_prefix"><span>#</span></span>
    <input class="text color_picker_input required" type="text" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
" />

    <div class="color_preview" style="background-color: #<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
;"></div>

    <div class="d-shadow-small color_picker_frame" id="color_picker_frame_<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
        <div class="d-shadow-small-wrap">
            <div class="calendar_frame" id="color_picker_instance_<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"></div>
            <div class="d-sh-small-cn d-sh-small-tl"></div>
            <div class="d-sh-small-cn d-sh-small-tr"></div>
        </div>
        <div class="d-sh-small-cn d-sh-small-bl"></div>
        <div class="d-sh-small-cn d-sh-small-br"></div>
    </div>

    <div class="regular_button round_button_holder">
        <a href="javascript:void(0)" class="round_button" title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('form','form_button_color_picker');?>
" onclick="colorpicker.openPicker('<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
')">
            <span class="color_picker"></span>
        </a>
    </div>

    <script type="text/javascript">
        $('#color_picker_instance_<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
').farbtastic('#<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
');
        colorpicker.setHexColorValidatorListener('<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
');
    </script>

    <div class="cl"></div>
</div><?php }} ?>