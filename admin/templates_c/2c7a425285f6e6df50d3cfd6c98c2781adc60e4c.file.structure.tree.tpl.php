<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 15:02:57
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/modules/structure.tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95468647253146161e93a89-64347960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c7a425285f6e6df50d3cfd6c98c2781adc60e4c' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/modules/structure.tree.tpl',
      1 => 1393844284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95468647253146161e93a89-64347960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
    'structure' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_53146161f124d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53146161f124d')) {function content_53146161f124d($_smarty_tpl) {?><script type="text/javascript">
    
    var messages = {
        move_item: '<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('structure','item_move_confirm_text');?>
'
    };
    
</script>

<div class="tree_table">
    <div id="tools_container">
        <div id="item_tools">
            <div class="tools_inner">
                <a title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('structure','item_up');?>
" href="javascript:void(0)" onclick="turnUpItem($(this))" id="turnUpItem"><i class="icon-up-big"></i></a>
                <span id="turnUpItemUnactive"><i class="unactive icon-up-big"></i></span>

                <a title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('structure','item_down');?>
" href="javascript:void(0)" onclick="turnDownItem($(this))" id="turnDownItem"><i class="icon-down-big"></i></a>
                <span id="turnDownItemUnactive"><i class="unactive icon-down-big"></i></span>

                <a class="path-link" title="Перейти к узлу на сайте" href="" target="_blank"><i class="icon-export"></i></a>

                <a href="javascript:void(0)" title="Дублировать" onclick="dublicateItem(this)" id="dublicateItem"><i class="icon-docs"></i></a>
                <a href="javascript:void(0)" title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('structure','item_publish');?>
" onclick="publishItem(this)" id="publishItem"><i class="icon-eye"></i></a>
                <a href="javascript:void(0)" title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('structure','item_hide');?>
" onclick="hideItem(this)" id="hideItem"><i class="icon-eye-off"></i></a>
                <a href="javascript:void(0)" title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('structure','item_delete');?>
" onclick="delItem(this, '<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('structure','item_delete_confirm_text');?>
')" id="delItem"><i class="red icon-cancel"></i></a>
                <a href="javascript:void(0)" title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('structure','item_add');?>
" onclick="addChildItem(this)" id="addChildItem"><i class="icon-plus-squared"></i></a>
            </div>
        </div>
    </div>

    <ul class="tt_list" id="tag_tree">
        <li id="item_1" class="tree_item root <?php if ($_smarty_tpl->tpl_vars['structure']->value->getNodeData(1,'publish')==1){?>active<?php }else{ ?>hided<?php }?>" data-url="/">
            <div class="item_container">
                <div class="item_container_inner">
                    <a href="/admin/?option=structure&suboption=edit&id=1"><?php echo $_smarty_tpl->tpl_vars['structure']->value->getNodeData(1,'name');?>
</a>
                </div>
            </div>
        </li>

        <?php echo $_smarty_tpl->tpl_vars['structure']->value->getRenderedBranch();?>

    </ul>
</div><?php }} ?>