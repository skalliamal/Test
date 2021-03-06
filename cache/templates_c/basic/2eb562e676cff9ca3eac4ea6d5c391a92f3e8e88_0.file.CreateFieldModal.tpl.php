<?php
/* Smarty version 3.1.31, created on 2019-03-28 10:12:27
  from "C:\xampp7.2\htdocs\erp-equipe\erp\layouts\basic\modules\Settings\LayoutEditor\CreateFieldModal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9c9e0bd2a936_42279781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2eb562e676cff9ca3eac4ea6d5c391a92f3e8e88' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\erp-equipe\\erp\\layouts\\basic\\modules\\Settings\\LayoutEditor\\CreateFieldModal.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9c9e0bd2a936_42279781 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal createFieldModal fade" tabindex="-1"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><?php echo App\Language::translate('LBL_CREATE_CUSTOM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><form class="form-horizontal createCustomFieldForm" method="POST"><div class="modal-body"><div class="form-group row align-items-center"><div class="col-md-3 col-form-label text-right"><?php echo App\Language::translate('LBL_SELECT_FIELD_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select class="fieldTypesList form-control" name="fieldType"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ADD_SUPPORTED_FIELD_TYPES']->value, 'FIELD_TYPE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_TYPE']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_TYPE']->value;?>
"<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_TYPE_INFO']->value[$_smarty_tpl->tpl_vars['FIELD_TYPE']->value], 'TYPE_INFO_VALUE', false, 'TYPE_INFO');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['TYPE_INFO']->value => $_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->value) {
?>data-<?php echo $_smarty_tpl->tpl_vars['TYPE_INFO']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->value;?>
"<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
><?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD_TYPE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="form-group row align-items-center"><div class="col-md-3 col-form-label text-right fieldLabelForm"><span class="redColor">*</span>&nbsp;<?php echo App\Language::translate('LBL_LABEL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><input type="text" maxlength="50" name="fieldLabel" value="" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" class="form-control" data-validator=<?php echo \App\Json::encode(array(array('name'=>'FieldLabel')));?>
 /></div></div><div class="form-group row align-items-center"><div class="col-md-3 col-form-label text-right fieldNameForm"><span class="redColor">*</span>&nbsp;<?php echo App\Language::translate('LBL_FIELD_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><input type="text" maxlength="30" name="fieldName" value="" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" class="form-control" data-validator=<?php echo \App\Json::encode(array(array('name'=>'fieldName')));?>
 /></div></div><div class="form-group row align-items-center"><div class="col-md-3 col-form-label text-right"><span class="redColor">*</span>&nbsp;<?php echo App\Language::translate('LBL_FIELD_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select class="marginLeftZero form-control" name="fieldTypeList"><option value="0"><?php echo App\Language::translate('LBL_FIELD_TYPE0',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="1"><?php echo App\Language::translate('LBL_FIELD_TYPE1',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class="form-group row align-items-center supportedType lengthsupported"><div class="col-md-3 col-form-label text-right"><span class="redColor">*</span>&nbsp;<?php echo App\Language::translate('LBL_LENGTH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><input type="text" name="fieldLength" value="" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" class="form-control" /></div></div><div class="form-group row align-items-center supportedType decimalsupported d-none"><div class="col-md-3 col-form-label text-right"><span class="redColor">*</span>&nbsp;<?php echo App\Language::translate('LBL_DECIMALS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><input type="text" name="decimal" value="" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" class="form-control" /></div></div><div class="form-group row align-items-center supportedType preDefinedValueExists d-none"><div class="col-md-3 col-form-label text-right"><span class="redColor">*</span>&nbsp;<?php echo App\Language::translate('LBL_PICKLIST_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select id="pickListValues" class="form-control" name="pickListValues" multiple="" tabindex="-1" aria-hidden="true" placeholder="<?php echo App\Language::translate('LBL_ENTER_PICKLIST_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-validator=<?php echo \App\Json::encode(array(array('name'=>'PicklistFieldValues')));?>
></select></div></div><div class="form-group row align-items-center supportedType preDefinedModuleList d-none"><div class="col-md-3 col-form-label text-right"><span class="redColor">*</span>&nbsp;<?php echo App\Language::translate('LBL_RELATION_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select <?php if ($_smarty_tpl->tpl_vars['FIELD_TYPE_INFO']->value['Related1M']['ModuleListMultiple'] == true) {?>multiple<?php }?> class="referenceModule form-control" name="referenceModule"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULES']->value, 'MODULE_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="form-group row align-items-center supportedType preMultiReferenceValue d-none"><div class="col-md-3 col-form-label text-right"><span class="redColor">*</span>&nbsp;<?php echo App\Language::translate('LBL_MULTI_REFERENCE_VALUE_MODULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select class="MRVModule form-control" name="MRVModule"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->getRelations(), 'RELATION');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RELATION']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['RELATION']->value->get('modulename');?>
"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['RELATION']->value->get('label'),$_smarty_tpl->tpl_vars['RELATION']->value->get('modulename'));?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="form-group row align-items-center supportedType preMultiReferenceValue d-none"><div class="col-md-3 col-form-label text-right"><span class="redColor">*</span>&nbsp;<?php echo App\Language::translate('LBL_MULTI_REFERENCE_VALUE_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select class="MRVField form-control" name="MRVField"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->getRelations(), 'RELATION');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RELATION']->value) {
$_smarty_tpl->_assignInScope('COUNT_FIELDS', count($_smarty_tpl->tpl_vars['RELATION']->value->getFields()));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATION']->value->getFields(), 'FIELD', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
if (!isset($_smarty_tpl->tpl_vars['LAST_BLOCK']->value) || $_smarty_tpl->tpl_vars['LAST_BLOCK']->value->id != $_smarty_tpl->tpl_vars['FIELD']->value->get('block')->id) {?><optgroup label="<?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->get('block')->label,$_smarty_tpl->tpl_vars['RELATION']->value->get('modulename'));?>
" data-module="<?php echo $_smarty_tpl->tpl_vars['RELATION']->value->get('modulename');?>
"><?php }?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getId();?>
" ><?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['RELATION']->value->get('modulename'));?>
</option><?php if ($_smarty_tpl->tpl_vars['COUNT_FIELDS']->value == ($_smarty_tpl->tpl_vars['KEY']->value-1)) {?></optgroup><?php }
$_smarty_tpl->_assignInScope('LAST_BLOCK', $_smarty_tpl->tpl_vars['FIELD']->value->get('block'));
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="form-group row align-items-center supportedType preMultiReferenceValue d-none"><div class="col-md-3 col-form-label text-right"><?php echo App\Language::translate('LBL_MULTI_REFERENCE_VALUE_FILTER_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select class="filterField form-control" name="MRVFilterField"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->getRelations(), 'RELATION');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RELATION']->value) {
?><option value="-" data-module="<?php echo $_smarty_tpl->tpl_vars['RELATION']->value->get('modulename');?>
"><?php echo App\Language::translate('--None--');?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATION']->value->getFields('picklist'), 'FIELD', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getName();?>
" data-module="<?php echo $_smarty_tpl->tpl_vars['RELATION']->value->get('modulename');?>
"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['RELATION']->value->get('modulename'));?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="form-group row align-items-center supportedType preMultiReferenceValue d-none"><div class="col-md-3 col-form-label text-right"><?php echo App\Language::translate('LBL_MULTI_REFERENCE_VALUE_FILTER_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select class="MRVModule form-control" name="MRVFilterValue"></select></div></div><div class="form-group row align-items-center supportedType picklistOption d-none"><div class="col-md-3 col-form-label text-right">&nbsp;</div><div class="col-md-8 controls"><label class="checkbox"><input type="checkbox" class="checkbox" name="isRoleBasedPickList" value="1" >&nbsp;<?php echo App\Language::translate('LBL_ROLE_BASED_PICKLIST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></div><div class="form-group row align-items-center supportedType preDefinedTreeList d-none"><div class="col-md-3 col-form-label text-right"><span class="redColor">*</span>&nbsp;<?php echo App\Language::translate('LBL_TREE_TEMPLATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select class="TreeList form-control" name="tree"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->getTreeTemplates($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value), 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</option><?php
}
} else {
?>
<option value="-"><?php echo App\Language::translate('LBL_NONE');?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div><?php $_smarty_tpl->_subTemplateRender(App\Layout::getTemplatePath('Modals/Footer.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?>
</form></div></div></div>
<?php }
}
