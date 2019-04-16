<?php
/* Smarty version 3.1.31, created on 2019-03-28 10:22:58
  from "C:\xampp7.2\htdocs\erp-equipe\erp\layouts\basic\modules\Vtiger\Edit\Field\Date.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9ca0828c77e0_88697390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e382a5e7da54118f8d845b0dffb84aa64c1ecde5' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\erp-equipe\\erp\\layouts\\basic\\modules\\Vtiger\\Edit\\Field\\Date.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9ca0828c77e0_88697390 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('dateFormat', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('date_format'));
$_smarty_tpl->_assignInScope('PARAMS', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldParams());
?><div class="tpl-Edit-Field-Date input-group date"><?php $_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
?><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" class="<?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>dateField<?php }?> form-control" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="text" <?php if ($_smarty_tpl->tpl_vars['PARAMS']->value && $_smarty_tpl->tpl_vars['PARAMS']->value['onChangeCopyValue']) {?>data-copy-to-field="<?php echo $_smarty_tpl->tpl_vars['PARAMS']->value['onChangeCopyValue'];?>
"<?php }?> data-date-format="<?php echo $_smarty_tpl->tpl_vars['dateFormat']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value);?>
" data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"   <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?> data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'<?php if ($_smarty_tpl->tpl_vars['MODE']->value == 'edit' && $_smarty_tpl->tpl_vars['FIELD_NAME']->value == 'due_date') {?> data-user-changed-time="true" <?php }?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly"<?php }?> /><div class=" input-group-append"><span class="input-group-text u-cursor-pointer js-date__btn" data-js="click"><span class="fas fa-calendar-alt"></span></span></div></div>
<?php }
}
