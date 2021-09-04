<?php /* Smarty version Smarty-3.1.7, created on 2021-09-04 10:34:23
         compiled from "C:\wamp64\www\vtigercrm\includes\runtime/../../layouts/v7\modules\Vtiger\ModalFooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82011280061334baf045453-67372874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e69d0a90f409566716b8d3b425bcef269e4ebff1' => 
    array (
      0 => 'C:\\wamp64\\www\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\ModalFooter.tpl',
      1 => 1627027149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82011280061334baf045453-67372874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BUTTON_NAME' => 0,
    'MODULE' => 0,
    'BUTTON_ID' => 0,
    'BUTTON_LABEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61334baf051c3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61334baf051c3')) {function content_61334baf051c3($_smarty_tpl) {?>
<div class="modal-footer "><center><?php if ($_smarty_tpl->tpl_vars['BUTTON_NAME']->value!=null){?><?php $_smarty_tpl->tpl_vars['BUTTON_LABEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['BUTTON_NAME']->value, null, 0);?><?php }else{ ?><?php ob_start();?><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['BUTTON_LABEL'] = new Smarty_variable($_tmp1, null, 0);?><?php }?><button <?php if ($_smarty_tpl->tpl_vars['BUTTON_ID']->value!=null){?> id="<?php echo $_smarty_tpl->tpl_vars['BUTTON_ID']->value;?>
" <?php }?> class="btn btn-success" type="submit" name="saveButton"><strong><?php echo $_smarty_tpl->tpl_vars['BUTTON_LABEL']->value;?>
</strong></button><a href="#" class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></center></div><?php }} ?>