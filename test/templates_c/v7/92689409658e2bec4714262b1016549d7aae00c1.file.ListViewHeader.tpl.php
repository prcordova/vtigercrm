<?php /* Smarty version Smarty-3.1.7, created on 2021-09-04 10:34:45
         compiled from "C:\wamp64\www\vtigercrm\includes\runtime/../../layouts/v7\modules\Users\ListViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181741180061334bc5907b11-74589831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92689409658e2bec4714262b1016549d7aae00c1' => 
    array (
      0 => 'C:\\wamp64\\www\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Users\\ListViewHeader.tpl',
      1 => 1627027149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181741180061334bc5907b11-74589831',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PWD_REGEX' => 0,
    'MODULE' => 0,
    'LISTVIEW_ENTRIES_COUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61334bc5942c8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61334bc5942c8')) {function content_61334bc5942c8($_smarty_tpl) {?>

<div class="listViewPageDiv" id="listViewContent"><div class="col-sm-12 col-xs-12 full-height"><input type='hidden' name='pwd_regex' value= <?php echo ZEND_json::encode($_smarty_tpl->tpl_vars['PWD_REGEX']->value);?>
 /><div id="listview-actions" class="listview-actions-container"><div class = "row"><div class="btn-group col-md-2"></div><div class='col-md-7' style="padding-top: 5px;text-align: center;"><div class="btn-group userFilter" style="text-align: center;"><button class="btn btn-default btn-primary" id="activeUsers" data-searchvalue="Active"><?php echo vtranslate('LBL_ACTIVE_USERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><button class="btn btn-default" id="inactiveUsers" data-searchvalue="Inactive"><?php echo vtranslate('LBL_INACTIVE_USERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div><div class="col-md-3"><?php $_smarty_tpl->tpl_vars['RECORD_COUNT'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Pagination.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('SHOWPAGEJUMP'=>true), 0);?>
</div></div><div class="list-content">
<?php }} ?>