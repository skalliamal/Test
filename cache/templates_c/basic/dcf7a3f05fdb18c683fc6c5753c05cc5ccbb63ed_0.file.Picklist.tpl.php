<?php
/* Smarty version 3.1.31, created on 2019-03-28 10:22:58
  from "C:\xampp7.2\htdocs\erp-equipe\erp\layouts\basic\modules\Vtiger\Edit\Field\Picklist.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9ca082899f29_58885183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcf7a3f05fdb18c683fc6c5753c05cc5ccbb63ed' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\erp-equipe\\erp\\layouts\\basic\\modules\\Vtiger\\Edit\\Field\\Picklist.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9ca082899f29_58885183 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues());
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
?><div class="tpl-Edit-Field-PickList"><select name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" class="chzn-select form-control" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?> data-selected-value='<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly"<?php }?>><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEmptyPicklistOptionAllowed()) {?><option value="" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true && $_smarty_tpl->tpl_vars['FIELD_VALUE']->value != '') {?> disabled<?php }?>><?php echo \App\Language::translate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
" title="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
" <?php if (trim($_smarty_tpl->tpl_vars['FIELD_VALUE']->value) == trim($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value)) {?> selected <?php }?>><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div>
<?php }
}
