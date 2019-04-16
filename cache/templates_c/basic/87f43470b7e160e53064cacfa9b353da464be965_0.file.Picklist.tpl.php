<?php
/* Smarty version 3.1.31, created on 2019-03-19 15:17:07
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LayoutEditor/inventoryTypes/Picklist.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9107f31d4c72_25930312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87f43470b7e160e53064cacfa9b353da464be965' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LayoutEditor/inventoryTypes/Picklist.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9107f31d4c72_25930312 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="form-group"><label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_LABEL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label><div class="col-md-7"><?php $_smarty_tpl->_assignInScope('LABEL', $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getDefaultLabel());
if ($_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->get('label')) {
$_smarty_tpl->_assignInScope('LABEL', $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->get('label'));
}?><input name="label" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
" data-validation-engine="validate[required]" /></div></div><div class="form-group"><label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_DISPLAY_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label><div class="col-md-7"><select class='form-control select2' name="displayType" data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->displayTypeBase(), 'ITEM', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ITEM']->value == $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->get('displaytype')) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['KEY']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="form-group"><label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_COLSPAN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label><div class="col-md-7"><input name="colSpan" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getColSpan();?>
" data-validation-engine="validate[required]" /></div></div><div class="form-group paramsJson"><input id="params" class="" type="hidden" value='["values"]'><label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_PICKLIST_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label><div class="col-md-7"><select class="form-control select2 tags" name="values" multiple data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getPicklistValues(), 'VALUE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div>
<?php }
}
