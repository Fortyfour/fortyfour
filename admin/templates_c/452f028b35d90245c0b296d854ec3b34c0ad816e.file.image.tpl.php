<?php /* Smarty version Smarty 3.1.4, created on 2014-03-25 19:48:37
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/system/form_fields/image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6080204905331a5550f3e77-30144685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '452f028b35d90245c0b296d854ec3b34c0ad816e' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/system/form_fields/image.tpl',
      1 => 1393844289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6080204905331a5550f3e77-30144685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'main' => 0,
    'filelist' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5331a55538435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5331a55538435')) {function content_5331a55538435($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date')) include '/var/www/fortyfour/data/www/fortyfour.ru/smarty/plugins/modifier.date.php';
if (!is_callable('smarty_modifier_filesize')) include '/var/www/fortyfour/data/www/fortyfour.ru/smarty/plugins/modifier.filesize.php';
?><?php $_smarty_tpl->tpl_vars["filelist"] = new Smarty_variable($_smarty_tpl->tpl_vars['main']->value->getImagesList(0,$_smarty_tpl->tpl_vars['item']->value['name'],$_smarty_tpl->tpl_vars['main']->value->dataset['params']['table'],$_smarty_tpl->tpl_vars['main']->value->dataset['params']['item_params']['id']), null, 0);?>
    <div class="item_block">
        <label class="label" for="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['help'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</label>
        <div class="cl"></div>

        <div class="upload_tools" id="file_list_<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
_uploader" <?php if ($_smarty_tpl->tpl_vars['filelist']->value){?>style="display: none;"<?php }?>>
            <div id="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"></div>
            <div class="cl"></div>

            <script type="text/javascript">
                createImagesUploader(
                    '<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
',
                    '<?php echo $_smarty_tpl->tpl_vars['item']->value['folder'];?>
',
                    '0',
                    <?php echo $_smarty_tpl->tpl_vars['main']->value->dataset['params']['item_params']['id'];?>
,
                    '<?php echo $_smarty_tpl->tpl_vars['main']->value->dataset['params']['table'];?>
',
                    false,
                    '<?php echo $_smarty_tpl->tpl_vars['item']->value['thumbs'];?>
'
                );
            </script>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['filelist']->value){?>
        <div class="gallery" id="file_list_<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
            <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
                <div class="image">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['file']->value['path'];?>
<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
<?php if ($_smarty_tpl->tpl_vars['file']->value['extension']){?>.<?php echo $_smarty_tpl->tpl_vars['file']->value['extension'];?>
<?php }?>" target="_blank">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['file']->value['path'];?>
._thumb_<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
<?php if ($_smarty_tpl->tpl_vars['file']->value['extension']){?>.<?php echo $_smarty_tpl->tpl_vars['file']->value['extension'];?>
<?php }?>"/>
                    </a>

                    <div class="image_tools">
                        <div class="it_buttons">
                            <a title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('form','form_button_delete_image');?>
" onclick="deleteImage('<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
', 'file_list_<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
', true, '<?php echo $_smarty_tpl->tpl_vars['item']->value['thumbs'];?>
');" href="javascript:void(0)" class="del_button"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('common','delete');?>
</a>
                        </div>
                    </div>
                </div>

                <div class="single_image_info">
                    <h3><strong><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['file']->value['path'];?>
<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
<?php if ($_smarty_tpl->tpl_vars['file']->value['extension']){?>.<?php echo $_smarty_tpl->tpl_vars['file']->value['extension'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
<?php if ($_smarty_tpl->tpl_vars['file']->value['extension']){?>.<?php echo $_smarty_tpl->tpl_vars['file']->value['extension'];?>
<?php }?></a></strong></h3>
                    <table cellpadding="0" cellspacing="0" border="0" class="image_info_tab">
                        <tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('form','form_image_date');?>
</th>
                            <td><?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['file']->value['date'],"datetime");?>
</td>
                        </tr>
                        <tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('form','form_image_size');?>
</th>
                            <td><?php echo smarty_modifier_filesize($_smarty_tpl->tpl_vars['file']->value['size']);?>
</td>
                        </tr>
                        <tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('form','form_image_dimensions');?>
</th>
                            <td><?php echo $_smarty_tpl->tpl_vars['file']->value['width'];?>
 x <?php echo $_smarty_tpl->tpl_vars['file']->value['height'];?>
</td>
                        </tr>
                    </table>
                </div>
            <?php } ?>
            <div class="cl"></div>
        </div>
        <script type="text/javascript">
            initUploadedPhoto('<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
');
        </script>
        <?php }else{ ?>
        <div class="gallery" id="file_list_<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
            <div class="cl"></div>
        </div>
        <?php }?>
    </div><?php }} ?>