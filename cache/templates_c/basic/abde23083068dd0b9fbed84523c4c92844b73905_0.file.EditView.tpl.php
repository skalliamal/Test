<?php
/* Smarty version 3.1.31, created on 2019-03-08 13:32:33
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Picklist/EditView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c826ef12ae668_67856902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abde23083068dd0b9fbed84523c4c92844b73905' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Picklist/EditView.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c826ef12ae668_67856902 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class='modelContainer modal fade' tabindex="-1"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><?php echo \App\Language::translate('LBL_RENAME_PICKLIST_ITEM',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><form id="renameItemForm" class="form-horizontal" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="source_module" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" /><input type="hidden" name="action" value="SaveAjax" /><input type="hidden" name="mode" value="rename" /><input type="hidden" name="picklistName" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" /><input type="hidden" name="pickListValues" value='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SELECTED_PICKLISTFIELD_EDITABLE_VALUES']->value));?>
' /><div class="modal-body tabbable"><div class="form-group row align-items-center"><div class="col-md-3 col-form-label text-right"><?php echo \App\Language::translate('LBL_ITEM_TO_RENAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-9 controls"><?php $_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['SELECTED_PICKLISTFIELD_EDITABLE_VALUES']->value);
?><select class="chzn-select form-control" name="oldValue"><optgroup><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_VALUE_KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE_KEY']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
?><option <?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value == $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {?> selected="" <?php }?>value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
" data-id=<?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE_KEY']->value;?>
><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup></select></div></div><div class="form-group row align-items-center"><div class="col-md-3 col-form-label text-right"><span class="redColor">*</span><?php echo \App\Language::translate('LBL_ENTER_NEW_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-9 controls"><input type="text" class="form-control" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-validator=<?php echo \App\Json::encode(array(array('name'=>'FieldLabel')));?>
 name="newValue"></div></div><?php if ($_smarty_tpl->tpl_vars['SELECTED_PICKLISTFIELD_NON_EDITABLE_VALUES']->value) {?><div class="form-group row align-items-center"><div class="col-md-3 col-form-label text-right"><?php echo \App\Language::translate('LBL_NON_EDITABLE_PICKLIST_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-9 controls nonEditableValuesDiv"><ul class="nonEditablePicklistValues list-unstyled"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SELECTED_PICKLISTFIELD_NON_EDITABLE_VALUES']->value, 'NON_EDITABLE_VALUE', false, 'NON_EDITABLE_VALUE_KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NON_EDITABLE_VALUE_KEY']->value => $_smarty_tpl->tpl_vars['NON_EDITABLE_VALUE']->value) {
?><li><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['NON_EDITABLE_VALUE']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul></div></div><?php }?></div><?php $_smarty_tpl->_subTemplateRender(App\Layout::getTemplatePath('Modals/Footer.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?>
</form></div></div></div>
<?php }
}
