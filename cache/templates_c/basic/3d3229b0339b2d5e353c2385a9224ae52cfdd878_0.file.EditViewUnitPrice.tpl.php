<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:06:43
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\inventoryfields\EditViewUnitPrice.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cc4386cea7_22053722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d3229b0339b2d5e353c2385a9224ae52cfdd878' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewUnitPrice.tpl',
      1 => 1551092132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cc4386cea7_22053722 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('VALUE', $_smarty_tpl->tpl_vars['FIELD']->value->getValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value));
?><div class="input-group input-group-sm"><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();
echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['VALUE']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['VALUE']->value);?>
" type="text"data-maximumlength="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getRangeValues();?>
"data-validation-engine="validate[required,funcCall[Vtiger_NumberUserFormat_Validator_Js.invokeValidation]]"class="unitPrice smallInputBox form-control form-control-sm" list-info="" <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') == 10) {?>readonly="readonly"<?php }?>/><?php $_smarty_tpl->_assignInScope('PRICEBOOK_MODULE_MODEL', Vtiger_Module_Model::getInstance('PriceBooks'));
if ($_smarty_tpl->tpl_vars['PRICEBOOK_MODULE_MODEL']->value->isPermitted('DetailView')) {?><div class="input-group-append"><span class="input-group-text js-price-book-modal u-cursor-pointer js-popover-tooltip" data-js="popover|click" data-content="<?php echo \App\Language::translate('PriceBooks',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><span class="userIcon-PriceBooks" data-popup="Popup" data-module-name="PriceBooks" alt="<?php echo \App\Language::translate('PriceBooks',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/></span></span></div><?php }?></div>
<?php }
}
