<?php /* Smarty version Smarty-3.1.7, created on 2021-09-04 10:34:23
         compiled from "C:\wamp64\www\vtigercrm\includes\runtime/../../layouts/v7\modules\Vtiger\Tag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54594077761334baf01e061-62256138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e94c446062ae1222f9fe6d848965c1e555f0e5ba' => 
    array (
      0 => 'C:\\wamp64\\www\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\Tag.tpl',
      1 => 1627027149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54594077761334baf01e061-62256138',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ACTIVE' => 0,
    'TAG_MODEL' => 0,
    'NO_EDIT' => 0,
    'NO_DELETE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61334baf0311c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61334baf0311c')) {function content_61334baf0311c($_smarty_tpl) {?>
 
 <span class="tag <?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value==true){?> active <?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getName();?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getType();?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getId();?>
">
    <i class="activeToggleIcon fa <?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value==true){?> fa-circle-o <?php }else{ ?> fa-circle <?php }?>"></i>
    <span class="tagLabel display-inline-block textOverflowEllipsis" title="<?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getName();?>
"><?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getName();?>
</span>
    <?php if (!$_smarty_tpl->tpl_vars['NO_EDIT']->value){?>
        <i class="editTag fa fa-pencil"></i>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['NO_DELETE']->value){?>
        <i class="deleteTag fa fa-times"></i>
    <?php }?>
</span><?php }} ?>