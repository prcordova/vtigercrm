<?php /* Smarty version Smarty-3.1.7, created on 2021-09-04 10:36:19
         compiled from "C:\wamp64\www\vtigercrm\includes\runtime/../../layouts/v7\modules\Documents\partials\SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76564676061334c2373cbb3-04365535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef5ec9e64ccf549a9615aef399ed7c3d737a7b42' => 
    array (
      0 => 'C:\\wamp64\\www\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Documents\\partials\\SidebarHeader.tpl',
      1 => 1627027149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76564676061334c2373cbb3-04365535',
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
  'unifunc' => 'content_61334c23777fa',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61334c23777fa')) {function content_61334c23777fa($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>
<div class="col-sm-12 col-xs-12 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
 moduleIcon">
    <div class="row" title="<?php echo vtranslate("Documents",$_smarty_tpl->tpl_vars['MODULE']->value);?>
">
		<span class="app-indicator-icon fa vicon-documents"></span>
    </div>
</div>
    
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>