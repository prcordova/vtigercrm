<?php /* Smarty version Smarty-3.1.7, created on 2021-09-04 10:36:22
         compiled from "C:\wamp64\www\vtigercrm\includes\runtime/../../layouts/v7\modules\MailManager\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147987797961334c2669bc62-90098000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5039ca8f33ceff4c5856404ef1d514c863aece68' => 
    array (
      0 => 'C:\\wamp64\\www\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\MailManager\\index.tpl',
      1 => 1630435119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147987797961334c2669bc62-90098000',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
    'IS_MAILBOX_EXISTS' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61334c266bac0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61334c266bac0')) {function content_61334c266bac0($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['IS_MAILBOX_EXISTS'] = new Smarty_variable($_smarty_tpl->tpl_vars['MAILBOX']->value->exists(), null, 0);?><input type="hidden" id="isMailBoxExists" value="<?php if ($_smarty_tpl->tpl_vars['IS_MAILBOX_EXISTS']->value){?>1<?php }else{ ?>0<?php }?>"><?php if (!$_smarty_tpl->tpl_vars['IS_MAILBOX_EXISTS']->value){?><div class="mmDescription"><center><br><br><div><?php echo vtranslate('LBL_MODULE_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><br><br><br><button class="btn btn-success mailbox_setting"><strong><?php echo vtranslate('LBL_CONFIGURE_MAILBOX',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></center></div><?php }else{ ?><div id="mailmanagerContainer" class="clearfix"><input type="hidden" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><div id="mails_container" class='col-lg-5'></div><div id="mailPreviewContainer" class="col-lg-7"><div class="mmListMainContainer"><center><strong><?php echo vtranslate('LBL_NO_MAIL_SELECTED_DESC',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></center></div></div></div><?php }?>
<?php }} ?>