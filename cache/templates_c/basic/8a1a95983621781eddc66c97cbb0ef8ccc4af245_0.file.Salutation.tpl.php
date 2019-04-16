<?php
/* Smarty version 3.1.31, created on 2019-03-08 14:39:49
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Edit/Field/Salutation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c827eb51d10c7_11818924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a1a95983621781eddc66c97cbb0ef8ccc4af245' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Edit/Field/Salutation.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c827eb51d10c7_11818924 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Edit-Field-Salutation row"><?php if ($_smarty_tpl->tpl_vars['SALUTATION_FIELD_MODEL']->value) {
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['SALUTATION_FIELD_MODEL']->value->getPicklistValues());
$_smarty_tpl->_assignInScope('SALUTATION_VALIDATOR', $_smarty_tpl->tpl_vars['SALUTATION_FIELD_MODEL']->value->getValidator());
?><div class="col-md-5"><select class="select2 form-control" name="<?php echo $_smarty_tpl->tpl_vars['SALUTATION_FIELD_MODEL']->value->getName();?>
" data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['SALUTATION_FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" ><?php if ($_smarty_tpl->tpl_vars['SALUTATION_FIELD_MODEL']->value->isEmptyPicklistOptionAllowed()) {?><option value=""><?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
" <?php if (trim($_smarty_tpl->tpl_vars['SALUTATION_FIELD_MODEL']->value->get('fieldvalue')) == trim($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value)) {?> selected <?php }?>><?php echo App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><?php }?><div class="<?php if ($_smarty_tpl->tpl_vars['SALUTATION_FIELD_MODEL']->value) {?>col-md-7<?php } else { ?>col-md-12<?php }?>"><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
?><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" class="form-control <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isNameField()) {?>nameField<?php }?>" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="text" data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?>required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"  value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '3' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '4') {?> readonly <?php }?> data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator=<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);
}?> /></div></div>
<?php }
}
