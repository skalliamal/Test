<?php
/* Smarty version 3.1.31, created on 2019-02-26 11:23:57
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/InventoryDiscountsType0.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c7521cd622db5_64857413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f34f41be50bee2b5bff92790b02e6288b6dfcfee' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/InventoryDiscountsType0.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7521cd622db5_64857413 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (count($_smarty_tpl->tpl_vars['GLOBAL_DISCOUNTS']->value) > 0) {?><div class="card js-panel" data-js="class: js-active"><div class="card-header"><strong><?php echo \App\Language::translate('LBL_GLOBAL_DISCOUNTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong><div class="float-right"><input type="<?php echo $_smarty_tpl->tpl_vars['AGGREGATION_INPUT_TYPE']->value;?>
" name="aggregationType" value="global" class="activeCheckbox"></div></div><div class="card-body js-panel__body d-none" data-js="class: d-none"><select class="select2 globalDiscount" name="globalDiscount"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GLOBAL_DISCOUNTS']->value, 'ITEM', false, 'NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
?><option value="<?php echo CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['ITEM']->value['value'],null,true);?>
"><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['value'];?>
% - <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value['name'],$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><?php }
}
}
