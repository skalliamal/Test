<?php
/* Smarty version 3.1.31, created on 2019-02-26 11:24:32
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/InventoryTaxesType2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c7521f02dfd42_91668188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2d529aee67c355b2ce92f1806000ecbcec57fff' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/InventoryTaxesType2.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7521f02dfd42_91668188 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card js-panel" data-js="class: js-active"><div class="card-header"><strong><?php echo \App\Language::translate('LBL_INDIVIDUAL_TAX',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong><div class="float-right"><input type="<?php echo $_smarty_tpl->tpl_vars['AGGREGATION_INPUT_TYPE']->value;?>
" name="aggregationType" value="individual" class="activeCheckbox"></div></div><div class="card-body js-panel__body d-none" data-js="class: d-none"><div class="container-fluid"><div class="row"><div class="input-group individualTaxContainer"><input type="text" name="individualTax" class="form-control individualTaxValue" value="0"><div class="input-group-append"><span class="input-group-text">%</span></div></div></div></div></div></div>
<?php }
}
