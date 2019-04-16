<?php
/* Smarty version 3.1.31, created on 2019-03-28 10:08:02
  from "C:\xampp7.2\htdocs\erp-equipe\erp\layouts\basic\modules\Vtiger\Detail\Field\MultiImage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9c9d024d4966_21566015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be9ff4aa0ac62c6065347c92de7b486bccee2e33' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\erp-equipe\\erp\\layouts\\basic\\modules\\Vtiger\\Detail\\Field\\MultiImage.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9c9d024d4966_21566015 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getDisplayValueEncoded($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()->limit));
$_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
?><div class="tpl-Detail-Field-MultiImage c-multi-image js-multi-image"><div name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_detailView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' class="js-multi-image__values" data-js="value"></div><div class="d-inline js-multi-image__result" data-js="container" data-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
"></div></div>
<?php }
}
