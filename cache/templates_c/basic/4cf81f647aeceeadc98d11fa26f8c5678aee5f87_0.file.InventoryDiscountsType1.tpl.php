<?php
/* Smarty version 3.1.31, created on 2019-02-26 11:23:57
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/InventoryDiscountsType1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c7521cd62ae57_19823549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cf81f647aeceeadc98d11fa26f8c5678aee5f87' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/InventoryDiscountsType1.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7521cd62ae57_19823549 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['GROUP_DISCOUNT']->value != 0) {?><div class="card js-panel" data-js="class: js-active"><div class="card-header"><strong><?php echo \App\Language::translate('LBL_GROUP_DISCOUNTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong><div class="float-right"><input type="<?php echo $_smarty_tpl->tpl_vars['AGGREGATION_INPUT_TYPE']->value;?>
" name="aggregationType" value="group" class="activeCheckbox"></div></div><div class="card-body js-panel__body d-none" data-js="class: d-none"><div><p><?php echo \App\Language::translate('LBL_DISCOUNT_FOR_ACCOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['ACCOUNT_NAME']->value;?>
</p><div class="input-group"><span class="input-group-prepend"><input type="checkbox" name="groupCheckbox" value="on" class="groupCheckbox"></span><input type="text" class="form-control groupValue" name="groupDiscount" value="<?php echo CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['GROUP_DISCOUNT']->value,null,true);?>
" readonly="true"><div class="input-group-append"><span class="input-group-text">%</span></div></div></div></div></div><?php }
}
}
