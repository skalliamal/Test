<?php
/* Smarty version 3.1.31, created on 2019-03-08 12:51:35
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Picklist/CreateView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c826557257715_54943924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15634f8c6efcef8c2f50b288d9107b19a83538d2' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Picklist/CreateView.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c826557257715_54943924 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class='modelContainer modal fade basicCreateView' tabindex="-1"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><?php echo \App\Language::translate('LBL_ADD_ITEM_TO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><form name="addItemForm" class="form-horizontal" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="source_module" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value;?>
" /><input type="hidden" name="action" value="SaveAjax" /><input type="hidden" name="mode" value="add" /><input type="hidden" name="picklistName" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->get('name');?>
" /><input type="hidden" name="pickListValues" value='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SELECTED_PICKLISTFIELD_ALL_VALUES']->value));?>
' /><div class="modal-body tabbable"><div class="form-group row align-items-center"><div class="col-md-3 col-form-label text-right"><span class="redColor">*</span><?php echo \App\Language::translate('LBL_ITEM_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-9 controls"><input class="form-control" type="text" data-prompt-position="topLeft:70" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-validator=<?php echo \App\Json::encode(array(array('name'=>'FieldLabel')));?>
 name="newValue"></div></div><?php if ($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->isRoleBased()) {?><div class="form-group row align-items-center"><div class="col-md-3 col-form-label text-right"><?php echo \App\Language::translate('LBL_ASSIGN_TO_ROLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-9 controls"><select class="rolesList form-control" name="rolesSelected[]" multiple data-placeholder="<?php echo \App\Language::translate('LBL_CHOOSE_ROLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option value="all" selected><?php echo \App\Language::translate('LBL_ALL_ROLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ROLES_LIST']->value, 'ROLE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ROLE']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['ROLE']->value->get('roleid');?>
"><?php echo $_smarty_tpl->tpl_vars['ROLE']->value->get('rolename');?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><?php }?></div><?php $_smarty_tpl->_subTemplateRender(App\Layout::getTemplatePath('Modals/Footer.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?>
</form></div></div></div>
<?php }
}
