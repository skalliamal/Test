<?php
/* Smarty version 3.1.31, created on 2019-03-28 10:03:13
  from "C:\xampp7.2\htdocs\erp-equipe\erp\layouts\basic\modules\Vtiger\Edit\Field\Text.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9c9be1480566_01994959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de9ce78eb8aa95cc07afd25097385a39c7338ced' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\erp-equipe\\erp\\layouts\\basic\\modules\\Vtiger\\Edit\\Field\\Text.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9c9be1480566_01994959 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
$_smarty_tpl->_assignInScope('UNIQUE_ID', mt_rand(10,20));
?><div class="tpl-Edit-Field-Text"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '19' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '20' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300') {
$_smarty_tpl->_assignInScope('PARAMS', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldParams());
?><textarea name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
"id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['UNIQUE_ID']->value;
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300' && $_POST['view'] == 'QuickCreateAjax') {?>_qc<?php }?>"class="col-md-12 form-control <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300') {?>js-editor<?php }?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isNameField()) {?>nameField<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['PARAMS']->value['class'])) {
echo $_smarty_tpl->tpl_vars['PARAMS']->value['class'];
}?>"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel());?>
"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?>required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300') {?>data-js="ckEditor"<?php }
if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator=<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);
}?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly"<?php }?>><?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
</textarea><?php } else { ?><textarea name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"class="form-control <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isNameField()) {?>nameField<?php }?>"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel());?>
 "data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?>required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator=<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);
}?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly"<?php }?>><?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
</textarea><?php }?></div>
<?php }
}
