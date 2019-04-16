<?php
/* Smarty version 3.1.31, created on 2019-03-01 09:19:55
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Edit/Field/Tree.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c78f93b29c021_80829163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ba743cb2241183dbd55e78b297969f038aa6c2c' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Edit/Field/Tree.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c78f93b29c021_80829163 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
$_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
$_smarty_tpl->_assignInScope('DISPLAY_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),false,$_smarty_tpl->tpl_vars['RECORD']->value,true));
?><div class="tpl-Edit-Field-Tree"><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" class="sourceField"data-displayvalue='<?php echo $_smarty_tpl->tpl_vars['DISPLAY_VALUE']->value;?>
' data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'data-multiple="<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == 309) {?>1<?php } else { ?>0<?php }?>"data-treetemplate="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldParams();?>
"><?php $_smarty_tpl->_assignInScope('displayId', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));
?><div class="input-group"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('displaytype') != 10) {?><span class="input-group-prepend clearTreeSelection u-cursor-pointer"><span class="input-group-text"><span id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_clear" class='fas fa-times-circle'title="<?php echo \App\Language::translate('LBL_CLEAR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span></span></span><?php }?><input id="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_display" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
_display" type="text"class="ml-0 treeAutoComplete form-control" <?php if (!empty($_smarty_tpl->tpl_vars['displayId']->value)) {?>readonly="true"<?php }?>value="<?php echo $_smarty_tpl->tpl_vars['DISPLAY_VALUE']->value;?>
"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('displaytype') != 10) {?>placeholder="<?php echo \App\Language::translate('LBL_TYPE_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"<?php }
if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly"<?php }?>/><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('displaytype') != 10) {?><span class="input-group-append js-tree-modal u-cursor-pointer"><span class="input-group-text"><span id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_select" class="fas fa-search"title="<?php echo \App\Language::translate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span></span></span><?php }?></div></div>
<?php }
}
