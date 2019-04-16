<?php
/* Smarty version 3.1.31, created on 2019-02-26 11:24:32
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/InventoryTaxesType1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c7521f02db6a7_38977104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0821ab0d25fc2077988042e0917a7d18f7ba54b' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/InventoryTaxesType1.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7521f02db6a7_38977104 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['TAX_TYPE']->value == '0' && $_smarty_tpl->tpl_vars['TAX_FIELD']->value && $_smarty_tpl->tpl_vars['RECORD']->value) {
$_smarty_tpl->_assignInScope('RECORD_MODEL', Vtiger_Record_Model::getInstanceById($_smarty_tpl->tpl_vars['RECORD']->value));
$_smarty_tpl->_assignInScope('SELECTED_TAXES', Vtiger_Taxes_UIType::getValues($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get($_smarty_tpl->tpl_vars['TAX_FIELD']->value)));
if (count($_smarty_tpl->tpl_vars['SELECTED_TAXES']->value) > 0) {?><div class="card js-panel" data-js="class: js-active"><div class="card-header"><strong><?php echo \App\Language::translate('LBL_GROUP_TAXS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong><div class="float-right"><input type="<?php echo $_smarty_tpl->tpl_vars['AGGREGATION_INPUT_TYPE']->value;?>
" name="aggregationType" value="group" class="activeCheckbox"></div></div><div class="card-body js-panel__body d-none" data-js="class: d-none"><div><p><?php echo \App\Language::translate('LBL_TAX_FOR_MODULE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RECORD_MODULE']->value,$_smarty_tpl->tpl_vars['RECORD_MODULE']->value);?>
: <?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getDisplayName();?>
</p><select class="select2 groupTax" name="groupTax"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SELECTED_TAXES']->value, 'TAX');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['TAX']->value) {
$_smarty_tpl->_assignInScope('VALUE', CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['TAX']->value['value'],null,true));
?><option value="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
% - <?php ob_start();
echo $_smarty_tpl->tpl_vars['TAX']->value['name'];
$_prefixVariable1=ob_get_clean();
echo \App\Language::translate($_prefixVariable1,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div><?php }
}
}
}
