<?php
/* Smarty version 3.1.31, created on 2019-03-11 13:48:46
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Detail/Field/MultiImage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c86673e9116d0_41906135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb057031ee3dff71512d4c4a4d4edc954dc4517a' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Detail/Field/MultiImage.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c86673e9116d0_41906135 (Smarty_Internal_Template $_smarty_tpl) {
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
