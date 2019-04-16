<?php
/* Smarty version 3.1.31, created on 2019-03-14 15:02:24
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Users/Edit/Field/Picklist.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c8a6d00a9f485_54491372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b27c2b8542b55588d558aaa3833e8890b8940cf' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Users/Edit/Field/Picklist.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8a6d00a9f485_54491372 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues());
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName());
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == 'defaulteventstatus') {
$_smarty_tpl->_assignInScope('EVENT_MODULE', Vtiger_Module_Model::getInstance('Events'));
$_smarty_tpl->_assignInScope('EVENTSTATUS_FIELD_MODEL', $_smarty_tpl->tpl_vars['EVENT_MODULE']->value->getField('activitystatus'));
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['EVENTSTATUS_FIELD_MODEL']->value->getPicklistValues());
} elseif ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == 'defaultactivitytype') {
$_smarty_tpl->_assignInScope('EVENT_MODULE', Vtiger_Module_Model::getInstance('Events'));
$_smarty_tpl->_assignInScope('ACTIVITYTYPE_FIELD_MODEL', $_smarty_tpl->tpl_vars['EVENT_MODULE']->value->getField('activitytype'));
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['ACTIVITYTYPE_FIELD_MODEL']->value->getPicklistValues());
}?><select class="tpl-Edit-Field-Picklist chzn-select form-control" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?> data-selected-value='<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly"<?php }?>><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEmptyPicklistOptionAllowed()) {?><option value=""><?php echo \App\Language::translate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName() == 'defaulteventstatus' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName() == 'defaultactivitytype') {?><option value=""><?php echo \App\Language::translate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
$_smarty_tpl->_assignInScope('OPTION_VALUE', \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value));
if ($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value == ' ' && ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == 'currency_decimal_separator' || $_smarty_tpl->tpl_vars['FIELD_NAME']->value == 'currency_grouping_separator')) {
$_smarty_tpl->_assignInScope('PICKLIST_VALUE', \App\Language::translate('LBL_SPACE','Users'));
$_smarty_tpl->_assignInScope('OPTION_VALUE', ' ');
?><option value="<?php echo $_smarty_tpl->tpl_vars['OPTION_VALUE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value == $_smarty_tpl->tpl_vars['OPTION_VALUE']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value;?>
</option><?php } elseif ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == 'currency_decimal_separator' || $_smarty_tpl->tpl_vars['FIELD_NAME']->value == 'currency_grouping_separator') {?><option value="<?php echo $_smarty_tpl->tpl_vars['OPTION_VALUE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value == $_smarty_tpl->tpl_vars['OPTION_VALUE']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value;?>
</option><?php } else { ?><option value="<?php echo $_smarty_tpl->tpl_vars['OPTION_VALUE']->value;?>
" <?php if (trim($_smarty_tpl->tpl_vars['FIELD_VALUE']->value) == trim($_smarty_tpl->tpl_vars['OPTION_VALUE']->value)) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value;?>
</option><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select>
<?php }
}
