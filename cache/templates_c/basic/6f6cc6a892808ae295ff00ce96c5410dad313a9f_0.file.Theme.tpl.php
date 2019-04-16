<?php
/* Smarty version 3.1.31, created on 2019-03-14 15:02:24
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Edit/Field/Theme.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c8a6d00b1ca28_80355649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f6cc6a892808ae295ff00ce96c5410dad313a9f' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Edit/Field/Theme.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8a6d00b1ca28_80355649 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getAllSkins());
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
?><div class="tpl-Edit-Field-Theme"><select class="select2 form-control" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?> ><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
?><option class="u-bg-<?php echo $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value;?>
 text-light u-hover-bold"value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue') == $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value) {?> selected <?php }?>><?php echo \App\Purifier::encodeHtml(ucfirst($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value));?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div>
<?php }
}
