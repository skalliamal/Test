<?php
/* Smarty version 3.1.31, created on 2019-03-14 15:02:24
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Users/Edit/Field/Base.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c8a6d00a6c5c4_42515825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '881f0f4df70acf12dbb10cf7e996eb8ebb6a5277' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Users/Edit/Field/Base.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8a6d00a6c5c4_42515825 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
?><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="text" class="tpl-Edit-Field-Base form-control <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isNameField()) {?>nameField<?php }?>" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName() == 'user_name') {?>data-validation-engine="validate[required,funcCall[Vtiger_UserName_Validator_Js.invokeValidation]]"<?php } else { ?>data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?>required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '3' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '4' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isReadOnly()) {?> readonly <?php }?> data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator=<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);
}
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly"<?php }?>/>
<?php }
}
