<?php /* Smarty version Smarty-3.1.7, created on 2021-09-04 10:35:17
         compiled from "C:\wamp64\www\vtigercrm\includes\runtime/../../layouts/v7\modules\Users\DetailViewFullContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103311661361334be51648d2-90297540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92929fb441ad8365f2212fb5e666190e6adc063b' => 
    array (
      0 => 'C:\\wamp64\\www\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Users\\DetailViewFullContents.tpl',
      1 => 1627027149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103311661361334be51648d2-90297540',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_MODEL' => 0,
    'NAME_FIELDS' => 0,
    'MODULE_NAME' => 0,
    'RECORD_STRUCTURE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61334be5173f1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61334be5173f1')) {function content_61334be5173f1($_smarty_tpl) {?>



<?php $_smarty_tpl->tpl_vars['NAME_FIELDS'] = new Smarty_variable(array('first_name','last_name'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value){?><?php $_smarty_tpl->tpl_vars['NAME_FIELDS'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getNameFields(), null, 0);?><?php }?><form id="detailView" data-name-fields='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['NAME_FIELDS']->value);?>
' method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>
</form>
<?php }} ?>