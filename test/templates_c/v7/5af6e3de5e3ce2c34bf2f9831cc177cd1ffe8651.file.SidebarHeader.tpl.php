<?php /* Smarty version Smarty-3.1.7, created on 2021-09-04 10:36:22
         compiled from "C:\wamp64\www\vtigercrm\includes\runtime/../../layouts/v7\modules\MailManager\partials\SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57069025061334c265dc552-62252794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5af6e3de5e3ce2c34bf2f9831cc177cd1ffe8651' => 
    array (
      0 => 'C:\\wamp64\\www\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\MailManager\\partials\\SidebarHeader.tpl',
      1 => 1630435119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57069025061334c265dc552-62252794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_MENU_CATEGORY' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61334c265e99c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61334c265e99c')) {function content_61334c265e99c($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>
<div class="col-sm-12 col-xs-12 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
    <div class="row" title="<?php echo strtoupper(vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value));?>
">
        <span class="app-indicator-icon fa vicon-mailmanager"></span>
    </div>
</div>
    
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>