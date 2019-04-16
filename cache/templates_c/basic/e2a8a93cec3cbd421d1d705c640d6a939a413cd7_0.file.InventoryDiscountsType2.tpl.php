<?php
/* Smarty version 3.1.31, created on 2019-02-26 11:23:57
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/InventoryDiscountsType2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c7521cd634df5_00627294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2a8a93cec3cbd421d1d705c640d6a939a413cd7' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/InventoryDiscountsType2.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7521cd634df5_00627294 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="card js-panel" data-js="class: js-active"><div class="card-header"><strong><?php echo \App\Language::translate('LBL_INDIVIDUAL_DISCOUNTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong><div class="float-right"><input type="<?php echo $_smarty_tpl->tpl_vars['AGGREGATION_INPUT_TYPE']->value;?>
" name="aggregationType" value="individual" class="activeCheckbox"></div></div><div class=" card-body js-panel__body d-none" data-js="class: d-none"><div class="container-fluid"><div class="form-row"><div class="col-md-6 text-center"><div class="radio align-items-center"><input type="radio" name="individualDiscountType" value="percentage" class="individualDiscountType mr-2" data-symbol="%" checked><label><?php echo \App\Language::translate('LBL_PERCENTAGE_DISCOUNTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div></div><?php if ($_smarty_tpl->tpl_vars['DISCOUNT_TYPE']->value == '0') {?><div class="col-md-6 text-center"><div class="radio align-items-center"><input type="radio" name="individualDiscountType" value="amount" class="individualDiscountType mr-2  ml-2" data-symbol="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value;?>
"><label><?php echo \App\Language::translate('LBL_AMOUNT_DISCOUNTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div></div><?php }?></div><div class="row"><div class="input-group individualDiscountContainer"><input type="text" name="individualDiscount" class="form-control individualDiscountValue" value="0"><div class="input-group-append"><span class="input-group-text">%</span></div></div></div></div></div></div>
<?php }
}
