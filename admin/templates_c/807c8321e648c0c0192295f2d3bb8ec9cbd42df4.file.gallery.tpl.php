<?php /* Smarty version Smarty 3.1.4, created on 2014-03-25 19:48:37
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/system/form_fields/gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11703089005331a5553b8476-55662127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '807c8321e648c0c0192295f2d3bb8ec9cbd42df4' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/system/form_fields/gallery.tpl',
      1 => 1393844288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11703089005331a5553b8476-55662127',
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
  'unifunc' => 'content_5331a5555031c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5331a5555031c')) {function content_5331a5555031c($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_filesize')) include '/var/www/fortyfour/data/www/fortyfour.ru/smarty/plugins/modifier.filesize.php';
if (!is_callable('smarty_modifier_date')) include '/var/www/fortyfour/data/www/fortyfour.ru/smarty/plugins/modifier.date.php';
?><?php $_smarty_tpl->tpl_vars["filelist"] = new Smarty_variable($_smarty_tpl->tpl_vars['main']->value->getImagesList(1,$_smarty_tpl->tpl_vars['item']->value['name'],$_smarty_tpl->tpl_vars['main']->value->dataset['params']['table'],$_smarty_tpl->tpl_vars['main']->value->dataset['params']['item_params']['id']), null, 0);?>

<div class="item_block">
    <label class="label" for="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['help'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</label>
    <div class="cl"></div>

    <div class="upload_tools">
        <div id="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"></div>
        <div class="cl"></div>

        <script type="text/javascript">
            createImagesUploader(
                '<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
',
                '<?php echo $_smarty_tpl->tpl_vars['item']->value['folder'];?>
',
                '1',
                <?php echo $_smarty_tpl->tpl_vars['main']->value->dataset['params']['item_params']['id'];?>
,
                '<?php echo $_smarty_tpl->tpl_vars['main']->value->dataset['params']['table'];?>
',
                true,
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
            <div rel="<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
" class="image">
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
                    <span class="handler_grid" title="Перетащите картирку для изменения порядка сортировки"></span>
                    <div class="it_buttons">
                        <a title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('form','form_button_edit_image');?>
" onclick="editImage('<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['file']->value['path'];?>
', '<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
<?php if ($_smarty_tpl->tpl_vars['file']->value['extension']){?>.<?php echo $_smarty_tpl->tpl_vars['file']->value['extension'];?>
<?php }?>', '<?php echo smarty_modifier_filesize($_smarty_tpl->tpl_vars['file']->value['size']);?>
', '<?php echo $_smarty_tpl->tpl_vars['file']->value['width'];?>
 x <?php echo $_smarty_tpl->tpl_vars['file']->value['height'];?>
', '<?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['file']->value['date'],"datetime");?>
');" href="javascript:void(0)" class="edit_button"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('common','edit');?>
</a>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('form','form_button_delete_image');?>
" onclick="deleteImage('<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
', 'file_list_<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
', false, '<?php echo $_smarty_tpl->tpl_vars['item']->value['thumbs'];?>
');" href="javascript:void(0)" class="del_button"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('common','delete');?>
</a>
                    </div>
                </div>
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