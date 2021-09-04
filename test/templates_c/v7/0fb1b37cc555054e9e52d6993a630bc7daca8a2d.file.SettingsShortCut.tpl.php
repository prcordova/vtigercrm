<?php /* Smarty version Smarty-3.1.7, created on 2021-08-31 18:40:36
         compiled from "C:\wamp64\www\vtigercrm\includes\runtime/../../layouts/v7\modules\Settings\Vtiger\SettingsShortCut.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20733221612e77a461af19-98688640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fb1b37cc555054e9e52d6993a630bc7daca8a2d' => 
    array (
      0 => 'C:\\wamp64\\www\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Settings\\Vtiger\\SettingsShortCut.tpl',
      1 => 1627027149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20733221612e77a461af19-98688640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SETTINGS_SHORTCUT' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_612e77a46306e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612e77a46306e')) {function content_612e77a46306e($_smarty_tpl) {?>
<span id="shortcut_<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getId();?>
" data-actionurl="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getPinUnpinActionUrl();?>
" class="col-lg-3 contentsBackground well cursorPointer moduleBlock" data-url="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getUrl();?>
" style="height: 100px; width: 23.5%;"><div><span><b class="themeTextColor"><?php echo vtranslate($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('name'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></span><span class="pull-right"><button data-id="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getId();?>
" title="<?php echo vtranslate('LBL_REMOVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" type="button" class="unpin close hiden"><i class="fa fa-close"></i></button></span></div><div><?php if ($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('description')&&$_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('description')!='NULL'){?><?php echo vtranslate($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('description'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?></div></span>
<?php }} ?>