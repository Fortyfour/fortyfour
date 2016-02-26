<?php /* Smarty version Smarty 3.1.4, created on 2014-02-27 01:53:31
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/admin/templates/system/form_fields/param.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2017219510530e625b8a9161-06667291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48b77becb2fc04b0b98dfa23d4bd7bfaa60699b9' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/admin/templates/system/form_fields/param.tpl',
      1 => 1389258877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2017219510530e625b8a9161-06667291',
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
  'unifunc' => 'content_530e625b9f118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530e625b9f118')) {function content_530e625b9f118($_smarty_tpl) {?><div class="item_block">
    <label class="label" for="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['help'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</label>
    <div class="cl"></div>
    <div class="param">
        <table class="param_tab">
            <tr>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['prefix']){?>
                <td class="prefix">
                    <div><?php echo $_smarty_tpl->tpl_vars['item']->value['prefix'];?>
</div>
                </td>
                <?php }?>

                <td>
                    <input class="text<?php if ($_smarty_tpl->tpl_vars['item']->value['email']){?> email<?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value['number']){?> number<?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value['required']){?> required<?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value['urlconversion']){?> remote<?php }?>" type="text" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
" />
                </td>

                <?php if ($_smarty_tpl->tpl_vars['item']->value['suffix']){?>
                <td class="suffix">
                    <div><?php echo $_smarty_tpl->tpl_vars['item']->value['suffix'];?>
</div>
                </td>
                <?php }?>
            </tr>
        </table>
    </div>
    <div class="cl"></div>
</div>
<?php if ($_smarty_tpl->tpl_vars['item']->value['unique']){?>
<script type="text/javascript">
    $(document).ready(function(){
        checkUniqueField('<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['main']->value->dataset['params']['item_params']['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['main']->value->dataset['params']['table'];?>
');
    });
</script>
<?php }?><?php }} ?>