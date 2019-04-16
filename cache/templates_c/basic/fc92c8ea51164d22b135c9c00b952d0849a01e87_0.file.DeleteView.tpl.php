<?php
/* Smarty version 3.1.31, created on 2019-03-25 10:49:57
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Picklist/DeleteView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c98b2557026d4_01137049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc92c8ea51164d22b135c9c00b952d0849a01e87' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Picklist/DeleteView.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c98b2557026d4_01137049 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class='modelContainer modal fade' tabindex="-1"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><?php echo \App\Language::translate('LBL_DELETE_PICKLIST_ITEMS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><form id="deleteItemForm" class="form-horizontal" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="source_module" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" /><input type="hidden" name="action" value="SaveAjax" /><input type="hidden" name="mode" value="remove" /><input type="hidden" name="picklistName" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" /><div class="modal-body tabbable"><div class="form-group row align-items-center"><div class="col-md-3 col-form-label text-right"><?php echo \App\Language::translate('LBL_ITEMS_TO_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-9 controls"><select class="select2 form-control" multiple="" id="deleteValue" name="delete_value[]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SELECTED_PICKLISTFIELD_EDITABLE_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_VALUE_KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE_KEY']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
?><option <?php if (in_array($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['FIELD_VALUES']->value)) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE_KEY']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select><input id="pickListValuesCount" type="hidden" value="<?php echo count($_smarty_tpl->tpl_vars['SELECTED_PICKLISTFIELD_EDITABLE_VALUES']->value);?>
" /></div></div><div class="form-group row align-items-center"><div class="col-md-3 col-form-label text-right"><?php echo \App\Language::translate('LBL_REPLACE_IT_WITH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-9 controls"><select id="replaceValue" name="replace_value" class="chzn-select form-control" data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SELECTED_PICKLISTFIELD_EDITABLE_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_VALUE_KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE_KEY']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
if (!(in_array($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['FIELD_VALUES']->value))) {?><option value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE_KEY']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</option><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SELECTED_PICKLISTFIELD_NON_EDITABLE_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_VALUE_KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE_KEY']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
if (!(in_array($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['FIELD_VALUES']->value))) {?><option value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE_KEY']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</option><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><?php if ($_smarty_tpl->tpl_vars['SELECTED_PICKLISTFIELD_NON_EDITABLE_VALUES']->value) {?><div class="form-group row align-items-center"><div class="col-md-3 col-form-label text-right"><?php echo \App\Language::translate('LBL_NON_EDITABLE_PICKLIST_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
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
</ul></div></div><?php }?></div><div class="modal-footer"><button class="btn btn-danger" type="submit" name="saveButton"><strong><span class="fas fa-trash-alt mr-1"></span><?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button class="btn btn-warning" type="reset" data-dismiss="modal"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></form></div></div></div>
<?php }
}
