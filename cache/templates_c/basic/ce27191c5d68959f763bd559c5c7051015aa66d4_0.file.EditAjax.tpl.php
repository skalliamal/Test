<?php
/* Smarty version 3.1.31, created on 2019-03-26 14:08:08
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Currency/EditAjax.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9a3248ba5306_70377919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce27191c5d68959f763bd559c5c7051015aa66d4' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Currency/EditAjax.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9a3248ba5306_70377919 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('CURRENCY_MODEL_EXISTS', true);
$_smarty_tpl->_assignInScope('CURRENCY_ID', $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getId());
if (empty($_smarty_tpl->tpl_vars['CURRENCY_ID']->value)) {
$_smarty_tpl->_assignInScope('CURRENCY_MODEL_EXISTS', false);
}?><div class="tpl-Settings-Currency-EditAjax currencyModalContainer modal fade" tabindex="-1"><div class="modal-dialog"><div class="modal-content"><div class="modal-header contentsBackground"><?php if ($_smarty_tpl->tpl_vars['CURRENCY_MODEL_EXISTS']->value) {?><span class="fa fa-edit mt-2 u-mr-5px"></span><h5 class="modal-title"><?php echo \App\Language::translate('LBL_EDIT_CURRENCY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><?php } else { ?><span class="fa fa-plus mt-2 u-mr-5px"></span><h5 class="modal-title"><?php echo \App\Language::translate('LBL_ADD_NEW_CURRENCY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><?php }?><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><form id="editCurrency" class="form-horizontal" method="POST"><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_ID']->value;?>
" /><div class="modal-body"><div class=""><div class="form-group"><label class="muted col-md-4 col-form-label"><span class="redColor">*</span>&nbsp;<?php echo \App\Language::translate('LBL_CURRENCY_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls col-md-6"><select class="chzn-select form-control" name="currency_name"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_CURRENCIES']->value, 'CURRENCY_MODEL', false, 'CURRENCY_ID', 'currencyIterator', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['CURRENCY_ID']->value => $_smarty_tpl->tpl_vars['CURRENCY_MODEL']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_currencyIterator']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_currencyIterator']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_currencyIterator']->value['index'];
if (!$_smarty_tpl->tpl_vars['CURRENCY_MODEL_EXISTS']->value && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_currencyIterator']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_currencyIterator']->value['first'] : null)) {
$_smarty_tpl->_assignInScope('RECORD_MODEL', $_smarty_tpl->tpl_vars['CURRENCY_MODEL']->value);
}?><option value="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_MODEL']->value->get('currency_name');?>
" data-code="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_MODEL']->value->get('currency_code');?>
"data-symbol="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_MODEL']->value->get('currency_symbol');?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('currency_name') == $_smarty_tpl->tpl_vars['CURRENCY_MODEL']->value->get('currency_name')) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['CURRENCY_MODEL']->value->get('currency_name'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['CURRENCY_MODEL']->value->get('currency_symbol');?>
)</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="form-group"><label class="muted col-md-4 col-form-label"><span class="redColor">*</span>&nbsp;<?php echo \App\Language::translate('LBL_CURRENCY_CODE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-md-6 controls"><input type="text" name="currency_code" class="form-control" readonly value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('currency_code');?>
" data-validation-engine='validate[required]]' /></div></div><div class="form-group"><label class="muted col-md-4 col-form-label"><span class="redColor">*</span>&nbsp;<?php echo \App\Language::translate('LBL_CURRENCY_SYMBOL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-md-6 controls"><input type="text" name="currency_symbol" class="form-control" readonly  value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('currency_symbol');?>
" data-validation-engine='validate[required]' /></div></div><div class="form-group"><label class="muted col-md-4 col-form-label"><span class="redColor">*</span>&nbsp;<?php echo \App\Language::translate('LBL_CONVERSION_RATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-md-6 controls"><input type="text" name="conversion_rate" class="form-control" placeholder="<?php echo \App\Language::translate('LBL_ENTER_CONVERSION_RATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('conversion_rate');?>
" data-validation-engine='validate[required, funcCall[Vtiger_GreaterThanZero_Validator_Js.invokeValidation]]' /><br /><span class="muted">(<?php echo \App\Language::translate('LBL_BASE_CURRENCY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 - <?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY_MODEL']->value->get('currency_name');?>
)</span></div></div><div class="form-group"><label class="muted col-md-4 col-2 col-form-label"><?php echo \App\Language::translate('LBL_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-6 controls"><label class="checkbox"><input type="hidden" name="currency_status" value="Inactive" /><input type="checkbox" name="currency_status" value="Active" class="currencyStatus alignBottom"<?php if (!$_smarty_tpl->tpl_vars['CURRENCY_MODEL_EXISTS']->value) {?> checked <?php } else {
echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('currency_status');
if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('currency_status') == 'Active') {?> checked <?php }
}?> /><span>&nbsp;<?php echo \App\Language::translate('LBL_CURRENCY_STATUS_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label></div></div><div class="form-group transferCurrency d-none"><label class="muted col-md-4 col-form-label"><span class="redColor">*</span>&nbsp;<?php echo \App\Language::translate('LBL_TRANSFER_CURRENCY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<?php echo \App\Language::translate('LBL_TO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-md-6 controls row"><select class="select2 form-control" name="transform_to_id"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OTHER_EXISTING_CURRENCIES']->value, 'CURRENCY_MODEL', false, 'CURRENCY_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['CURRENCY_ID']->value => $_smarty_tpl->tpl_vars['CURRENCY_MODEL']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_ID']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['CURRENCY_MODEL']->value->get('currency_name'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div></div><?php $_smarty_tpl->_subTemplateRender(App\Layout::getTemplatePath('Modals/Footer.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?>
</form></div></div></div>
<?php }
}
