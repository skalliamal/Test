<?php
/* Smarty version 3.1.31, created on 2019-03-01 09:26:13
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Products/MoreCurrenciesList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c78fab53642c8_61893682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa845ecf3bebbbdf0713db70626f434623789885' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Products/MoreCurrenciesList.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c78fab53642c8_61893682 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="currency_class" class="multiCurrencyEditUI modelContainer modal fade" tabindex="-1"><div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header"><h5 id="massEditHeader" class="modal-title"><?php echo \App\Language::translate('LBL_PRICES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><div class="multiCurrencyContainer"><div class="currencyContent"><div class="modal-body"><table class="table table-bordered"><tr class="text-center"><td><strong><?php echo \App\Language::translate('LBL_CURRENCY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td><td><strong><?php echo \App\Language::translate('LBL_PRICE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td><td><strong><?php echo \App\Language::translate('LBL_CONVERSION_RATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td><td><strong><?php echo \App\Language::translate('LBL_RESET_PRICE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td><td><strong><?php echo \App\Language::translate('LBL_BASE_CURRENCY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td></tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRICE_DETAILS']->value, 'price', false, 'count');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['count']->value => $_smarty_tpl->tpl_vars['price']->value) {
?><tr data-currency-id="<?php echo $_smarty_tpl->tpl_vars['price']->value['curname'];?>
" data-currency-symbol="<?php echo $_smarty_tpl->tpl_vars['price']->value['currencysymbol'];?>
"><?php if ($_smarty_tpl->tpl_vars['price']->value['check_value'] == 1 || $_smarty_tpl->tpl_vars['price']->value['is_basecurrency'] == 1) {
$_smarty_tpl->_assignInScope('check_value', "checked");
$_smarty_tpl->_assignInScope('disable_value', '');
} else {
$_smarty_tpl->_assignInScope('check_value', '');
$_smarty_tpl->_assignInScope('disable_value', "disabled=true");
}
if ($_smarty_tpl->tpl_vars['price']->value['is_basecurrency'] == 1) {
$_smarty_tpl->_assignInScope('base_cur_check', "checked");
} else {
$_smarty_tpl->_assignInScope('base_cur_check', '');
}?><td class="align-middle text-nowrap"><span class="d-flex justify-content-between align-items-center"><span><span class="currencyName"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['price']->value['currencylabel'],'Currency');?>
 (<?php echo $_smarty_tpl->tpl_vars['price']->value['currencysymbol'];?>
)</span></span><span class="ml-1"><input type="checkbox" name="cur_<?php echo $_smarty_tpl->tpl_vars['price']->value['curid'];?>
_check" id="cur_<?php echo $_smarty_tpl->tpl_vars['price']->value['curid'];?>
_check" class="small float-right enableCurrency" <?php if ($_smarty_tpl->tpl_vars['check_value']->value) {?> title="<?php echo \App\Language::translate('LBL_ENABLE_CURRENCY');?>
" <?php } else { ?> title="<?php echo \App\Language::translate('LBL_DISABLE_CURRENCY');?>
" <?php }?> <?php echo $_smarty_tpl->tpl_vars['check_value']->value;?>
></span></span></td><td class="align-middle"><div class="row justify-content-center"><input <?php echo $_smarty_tpl->tpl_vars['disable_value']->value;?>
 type="text" size="10" class="col-md-9 convertedPrice form-control" name="<?php echo $_smarty_tpl->tpl_vars['price']->value['curname'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['price']->value['curname'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['price']->value['curvalue'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['price']->value['curvalue'];?>
" data-validation-engine="validate[funcCall[Vtiger_Currency_Validator_Js.invokeValidation]]" data-decimal-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_decimal_separator');?>
' data-group-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_grouping_separator');?>
' data-fieldinfo="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['price']->value['fieldInfo']));?>
"/></div></td><td class="align-middle"><div class="row justify-content-center"><input readonly="" type="text" size="10" class="col-md-9 conversionRate form-control" name="cur_conv_rate<?php echo $_smarty_tpl->tpl_vars['price']->value['curid'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['price']->value['conversionrate'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['price']->value['conversionrate'];?>
"></div></td><td class="align-middle"><div class="row justify-content-center"><button <?php echo $_smarty_tpl->tpl_vars['disable_value']->value;?>
 type="button" class="btn btn-light currencyReset resetButton" id="cur_reset<?php echo $_smarty_tpl->tpl_vars['price']->value['curid'];?>
" value="<?php echo \App\Language::translate('LBL_RESET',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php echo \App\Language::translate('LBL_RESET',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></td><td class="align-middle"><div class="row justify-content-center"><input <?php echo $_smarty_tpl->tpl_vars['disable_value']->value;?>
 type="radio" class="baseCurrency" id="base_currency<?php echo $_smarty_tpl->tpl_vars['price']->value['curid'];?>
" name="base_currency_input" title="<?php echo \App\Language::translate('LBL_BASE_CURRENCY');?>
" value="<?php echo $_smarty_tpl->tpl_vars['price']->value['curname'];?>
" <?php echo $_smarty_tpl->tpl_vars['base_cur_check']->value;?>
 /></div></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</table></div></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Modals/Footer.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?>
</div></div></div></div>
<?php }
}
