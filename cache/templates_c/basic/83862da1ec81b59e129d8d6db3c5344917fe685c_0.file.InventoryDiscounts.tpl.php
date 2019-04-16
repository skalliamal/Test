<?php
/* Smarty version 3.1.31, created on 2019-02-26 11:23:57
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/InventoryDiscounts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c7521cd613fb7_69270866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83862da1ec81b59e129d8d6db3c5344917fe685c' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/InventoryDiscounts.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7521cd613fb7_69270866 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('AGGREGATION', $_smarty_tpl->tpl_vars['CONFIG']->value['aggregation']);
?><div class="modelContainer modal fade"><div class="modal-dialog"><div class="modal-content"><div class="modal-header contentsBackground align-items-center"><span class="fa-layers fa-fw mr-2"><i class="fas fa-circle" data-fa-transform="grow-6"></i><i class="fa-inverse fas fa-long-arrow-alt-down text-white" data-fa-transform="shrink-6  left-4"></i><i class="fa-inverse fas fa-percent text-white" data-fa-transform="shrink-8  right-3"></i></span><h5 class="modal-title"><?php echo \App\Language::translate('LBL_SELECT_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SINGLE_MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><input type="hidden" class="discountsType" value="<?php echo $_smarty_tpl->tpl_vars['AGGREGATION_TYPE']->value;?>
" /><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CONFIG']->value['discounts'], 'DISCOUNTID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['DISCOUNTID']->value) {
$_smarty_tpl->_assignInScope('DISCOUNT_TYPE_TPL', (("InventoryDiscountsType").($_smarty_tpl->tpl_vars['DISCOUNTID']->value)).(".tpl"));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['DISCOUNT_TYPE_TPL']->value,$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (count($_smarty_tpl->tpl_vars['GLOBAL_DISCOUNTS']->value) == 0 && $_smarty_tpl->tpl_vars['GROUP_DISCOUNT']->value == 0 && $_smarty_tpl->tpl_vars['DISCOUNT_TYPE']->value != '0') {?><div class="alert alert-danger" role="alert"><?php echo \App\Language::translate('LBL_NO_DISCOUNTS');?>
</div><?php }?><hr/><div class="row"><div class="col-md-6"><?php echo \App\Language::translate('LBL_PRICE_BEFORE_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</div><div class="col-md-6 text-right"><strong><span class="valueTotalPrice"><?php echo CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['TOTAL_PRICE']->value,null,true);?>
</span> <?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value;?>
</strong></div></div><div class="row"><div class="col-md-6"><?php echo \App\Language::translate('LBL_DISCOUNT_IN_TOTAL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</div><div class="col-md-6 text-right"><strong><span class="valueDiscount">0</span> <?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value;?>
</strong></div></div><div class="row"><div class="col-md-6"><?php echo \App\Language::translate('LBL_PRICE_AFTER_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</div><div class="col-md-6 text-right"><strong><span class="valuePrices"><?php echo CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['TOTAL_PRICE']->value,null,true);?>
</span> <?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value;?>
</span></strong></div></div></div><div class="modal-footer"><?php if (count($_smarty_tpl->tpl_vars['GLOBAL_DISCOUNTS']->value) > 0 || $_smarty_tpl->tpl_vars['GROUP_DISCOUNT']->value != 0 || $_smarty_tpl->tpl_vars['DISCOUNT_TYPE']->value == '0') {?><button class="btn btn-success saveDiscount" type="submit"><strong><span class="fas fa-check mr-1"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }?><button class="btn btn-danger" type="reset" data-dismiss="modal"><strong><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div></div></div>
<?php }
}
