<?php
/* Smarty version 3.1.31, created on 2019-03-11 07:16:41
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Notifications/Configuration.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c860b591e8284_43785548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c5e3a6ad770dfb7efacf58043cda5e93886a9f0' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Notifications/Configuration.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c860b591e8284_43785548 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-Notifications-Configuration widget_header row align-items-center"><div class="col-12 col-sm-12 col-md-9"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><div class="col-12 col-sm-6 offset-sm-6 col-md-3 offset-md-0"><select class="chzn-select form-control" name="supportedModule" id="supportedModule"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULES']->value, 'SUPPORTED_MODULE', false, 'TAB_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['TAB_ID']->value => $_smarty_tpl->tpl_vars['SUPPORTED_MODULE']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['TAB_ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['TAB_ID']->value == $_smarty_tpl->tpl_vars['SELECTED_MODULE']->value) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SUPPORTED_MODULE']->value->getName(),$_smarty_tpl->tpl_vars['SUPPORTED_MODULE']->value->getName());?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><?php if (AppConfig::module('ModTracker','WATCHDOG')) {?><div class="row"><div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3"><div class="table-responsive padding10"><table class="table table-bordered table-sm dataTable" data-mode="base"><thead><tr><th><strong><?php echo \App\Language::translate('LBL_MEMBERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong><button class="btn btn-sm btn-success float-right addUser mr-2" type="button" data-editurl=""><span class="fas fa-plus"></span> <?php echo \App\Language::translate('LBL_ADD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></th></tr></thead><tbody class="dropContainer groupMembersColors"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WATCHDOG_MODULE']->value->getWatchingMembers(true), 'MEMBER', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['MEMBER']->value) {
?><tr class="<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['type'];?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['member'];?>
" data-lock="<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['lock'];?>
"><td><strong><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['name'];?>
</strong><span class="wrapperTrash"><span title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" class="fas fa-trash-alt fa-lg float-right marginIcon marginTop2 delete u-cursor-pointer" data-mode="addOrRemoveMembers"></span></span><span class="wrapperLock"><span title="<?php echo \App\Language::translate('LBL_LOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" class="fas <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['lock']) {?>fa-lock<?php } else { ?>fa-unlock-alt<?php }?> fa-lg float-right marginTB3 lock u-cursor-pointer" data-mode="lock"></span></span><span class="wrapperExceptions" title="<?php echo \App\Language::translate('LBL_EXCEPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-mode="exceptions"><?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['type'] != 'Users') {?><span class="fas fa-exclamation-circle float-right marginIcon marginTop2 exceptions u-cursor-pointer"></span><?php }?></span></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table></div></div><div class="col-12 col-sm-2 col-md-2 groupMembersColors"><br /><ul class="nav nav-pills flex-column"><li class="Users padding5per textAlignCenter"><strong><?php echo \App\Language::translate('LBL_USERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></li><li class="Groups padding5per textAlignCenter"><strong><?php echo \App\Language::translate('LBL_GROUPS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></li><li class="Roles padding5per textAlignCenter"><strong><?php echo \App\Language::translate('LBL_ROLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></li><li class="RoleAndSubordinates padding5per textAlignCenter"><strong><?php echo \App\Language::translate('RoleAndSubordinates',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></li></ul></div></div><?php } else { ?><div class="alert alert-danger fade in wa"><?php echo \App\Language::translate('LBL_NOTICE_CONFIG_WARNING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php }
}
}
