<?php
/* Smarty version 3.1.31, created on 2019-02-26 11:24:32
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/InventoryTaxesType3.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c7521f02eb988_88185219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65bba2dbeb52eae3b9e330688d2704360df29002' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/InventoryTaxesType3.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7521f02eb988_88185219 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['GROUP_TAXS']->value) {?><div class="card js-panel" data-js="class: js-active"><div class="card-header"><strong><?php echo \App\Language::translate('LBL_REGIONAL_TAX',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong><div class="float-right"><input type="<?php echo $_smarty_tpl->tpl_vars['AGGREGATION_INPUT_TYPE']->value;?>
" name="aggregationType" value="account" class="activeCheckbox"></div></div><div class="card-body js-panel__body d-none" data-js="class: d-none"><div><p><?php echo \App\Language::translate('LBL_TAX_FOR_ACCOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
: <?php echo $_smarty_tpl->tpl_vars['ACCOUNT_NAME']->value;?>
</p><select class="select2 regionalTax" name="regionalTax"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUP_TAXS']->value, 'TAX');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['TAX']->value) {
$_smarty_tpl->_assignInScope('VALUE', CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['TAX']->value['value'],null,true));
?><option value="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
% - <?php ob_start();
echo $_smarty_tpl->tpl_vars['TAX']->value['name'];
$_prefixVariable2=ob_get_clean();
echo \App\Language::translate($_prefixVariable2,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div><?php }
}
}
