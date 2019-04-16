<?php
/* Smarty version 3.1.31, created on 2019-03-14 15:02:24
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Edit/Field/Phone.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c8a6d00b6cc38_03895216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '925451d74a9f7715471785ef2a8130e99a922731' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Edit/Field/Phone.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8a6d00b6cc38_03895216 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('NUMBER', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));
?><div class="tpl-Edit-Field-Phone"><?php if (AppConfig::main('phoneFieldAdvancedVerification',false)) {
$_smarty_tpl->_assignInScope('PHONE_DETAIL', App\Fields\Phone::getDetails($_smarty_tpl->tpl_vars['NUMBER']->value));
$_smarty_tpl->_assignInScope('FIELD_NAME_EXTRA', ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName()).('_extra'));
$_smarty_tpl->_assignInScope('FIELD_MODEL_EXTRA', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModule()->getFieldByName($_smarty_tpl->tpl_vars['FIELD_NAME_EXTRA']->value));
$_smarty_tpl->_assignInScope('ACTIVE_EXTRA_FIELD', $_smarty_tpl->tpl_vars['FIELD_MODEL_EXTRA']->value && $_smarty_tpl->tpl_vars['FIELD_MODEL_EXTRA']->value->isWritable());
?><div class="form-row"><div class="<?php if ($_smarty_tpl->tpl_vars['ACTIVE_EXTRA_FIELD']->value) {?>col-md-8<?php } else { ?>col-md-12<?php }?>"><div class="input-group phoneGroup mb-1"><div class="input-group-append m-0 p-0"><select name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
_country" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
_dropDown" class="select2 phoneCountryList" required="required" data-dropdown-auto-width="true"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, App\Fields\Country::getAll('phone'), 'ROW', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ROW']->value) {
$_smarty_tpl->_assignInScope('TRANSLATE', \App\Language::translateSingleMod($_smarty_tpl->tpl_vars['ROW']->value['name'],'Other.Country'));
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['PHONE_DETAIL']->value && $_smarty_tpl->tpl_vars['PHONE_DETAIL']->value['country'] == $_smarty_tpl->tpl_vars['KEY']->value) {?> selected <?php }?> title="<?php echo $_smarty_tpl->tpl_vars['TRANSLATE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TRANSLATE']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><?php if ($_smarty_tpl->tpl_vars['PHONE_DETAIL']->value['geocoding'] || $_smarty_tpl->tpl_vars['PHONE_DETAIL']->value['carrier']) {
$_smarty_tpl->_assignInScope('TITLE', (($_smarty_tpl->tpl_vars['PHONE_DETAIL']->value['geocoding']).(' ')).($_smarty_tpl->tpl_vars['PHONE_DETAIL']->value['carrier']));
} else {
$_smarty_tpl->_assignInScope('TITLE', \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value));
}
if ($_smarty_tpl->tpl_vars['PHONE_DETAIL']->value) {
$_smarty_tpl->_assignInScope('NUMBER', $_smarty_tpl->tpl_vars['PHONE_DETAIL']->value['number']);
}?><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['NUMBER']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" title="<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
" type="text"  data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-advanced-verification="1"  data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator=<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);
}?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly"<?php }?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldparams') != '') {?>data-inputmask="'mask': '<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldparams');?>
'"<?php }?> /></div></div><?php if ($_smarty_tpl->tpl_vars['ACTIVE_EXTRA_FIELD']->value) {?><div class="col-md-4"><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL_EXTRA']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL_EXTRA']->value->getValidator());
?><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME_EXTRA']->value;?>
" class="form-control" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL_EXTRA']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" placeholder="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL_EXTRA']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" value="<?php if ($_smarty_tpl->tpl_vars['RECORD']->value) {
echo $_smarty_tpl->tpl_vars['FIELD_MODEL_EXTRA']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME_EXTRA']->value),$_smarty_tpl->tpl_vars['RECORD']->value);
}?>" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME_EXTRA']->value;?>
" type="text"  data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL_EXTRA']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator=<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);
}?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL_EXTRA']->value->isEditableReadOnly()) {?>readonly="readonly"<?php }?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL_EXTRA']->value->get('fieldparams') != '') {?>data-inputmask="'mask': '<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL_EXTRA']->value->get('fieldparams');?>
'"<?php }?>/></div><?php }?></div><?php } else { ?><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['NUMBER']->value);?>
" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" placeholder="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" type="text" class="form-control" data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('maximumlength')) {?>maxSize[<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('maximumlength');?>
],<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-advanced-verification="0" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator=<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);
}?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly"<?php }?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldparams') != '') {?>data-inputmask="'mask': '<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldparams');?>
'"<?php }?> /><?php }?></div>
<?php }
}
