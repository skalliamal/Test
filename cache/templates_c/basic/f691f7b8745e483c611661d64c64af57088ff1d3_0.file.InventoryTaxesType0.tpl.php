<?php
/* Smarty version 3.1.31, created on 2019-02-26 11:24:32
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/InventoryTaxesType0.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c7521f02c37f2_63982581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f691f7b8745e483c611661d64c64af57088ff1d3' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/InventoryTaxesType0.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7521f02c37f2_63982581 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (count($_smarty_tpl->tpl_vars['GLOBAL_TAXES']->value) > 0) {?><div class="card js-panel"><div class="card-header"><strong><?php echo \App\Language::translate('LBL_GLOBAL_TAXS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong><div class="float-right"><input type="<?php echo $_smarty_tpl->tpl_vars['AGGREGATION_INPUT_TYPE']->value;?>
" name="aggregationType" value="global" class="activeCheckbox"></div></div><div class="card-body js-panel__body d-none" data-js="class: d-none"><select class="select2 globalTax" name="globalTax"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GLOBAL_TAXES']->value, 'ITEM', false, 'NAME');
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
