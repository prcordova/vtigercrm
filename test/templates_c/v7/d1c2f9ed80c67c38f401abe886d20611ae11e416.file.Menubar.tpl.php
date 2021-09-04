<?php /* Smarty version Smarty-3.1.7, created on 2021-09-04 10:36:19
         compiled from "C:\wamp64\www\vtigercrm\includes\runtime/../../layouts/v7\modules\Documents\partials\Menubar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132627951061334c238af284-48033961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1c2f9ed80c67c38f401abe886d20611ae11e416' => 
    array (
      0 => 'C:\\wamp64\\www\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Documents\\partials\\Menubar.tpl',
      1 => 1627027149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132627951061334c238af284-48033961',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_MODEL' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61334c238b892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61334c238b892')) {function content_61334c238b892($_smarty_tpl) {?>

<?php if ($_REQUEST['view']=='Detail'){?>
<div id="modules-menu" class="modules-menu">    
    <ul>
        <li class="active">
            <a href="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getListViewUrl();?>
">
				<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getModuleIcon();?>

                <span><?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
</span>
            </a>
        </li>
    </ul>
</div>
<?php }?><?php }} ?>