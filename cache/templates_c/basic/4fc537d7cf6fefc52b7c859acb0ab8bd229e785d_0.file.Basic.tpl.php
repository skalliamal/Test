<?php
/* Smarty version 3.1.31, created on 2019-02-27 15:49:39
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Detail/Widget/Basic.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c76b1935acd67_75526789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fc537d7cf6fefc52b7c859acb0ab8bd229e785d' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Detail/Widget/Basic.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c76b1935acd67_75526789 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tpl-Detail-Widget-Basic c-detail-widget u-mb-13px js-detail-widget" data-js=”container”><?php $_smarty_tpl->_assignInScope('RELATED_MODULE_NAME', App\Module::getModuleName($_smarty_tpl->tpl_vars['WIDGET']->value['data']['relatedmodule']));
?><div class="widgetContainer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 widgetContentBlock" data-url="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['url']);?>
"data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['label'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['type'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['id'];?>
"><div class="c-detail-widget__header js-detail-widget-header" data-js=”container|value><input type="hidden" name="relatedModule" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"/><div class="form-row align-items-center py-1"><div class="col-9 col-md-5 col-sm-6"><div class="widgetTitle u-text-ellipsis"><h5 class="mb-0 modCT_<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['label'];?>
"><?php if ($_smarty_tpl->tpl_vars['WIDGET']->value['label'] == '') {
echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['label'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
}?></h5></div></div><?php if (isset($_smarty_tpl->tpl_vars['WIDGET']->value['switchHeader'])) {?><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary active"><input class="js-switch" type="radio" name="options" id="option1" data-js="change" data-on-val='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['switchHeader']['on']);?>
'data-urlparams="search_params"autocomplete="off"checked> <?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['switchHeaderLables']['on'];?>
</label><label class="btn btn-sm btn-outline-primary"><input class="js-switch" type="radio" name="options" id="option2" data-js="change" data-off-val='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['switchHeader']['off']);?>
'data-urlparams="search_params"autocomplete="off"> <?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['switchHeaderLables']['off'];?>
</label></div><?php }?><div class="col float-right"><div class="float-right"><div class="btn-group"><?php if ($_smarty_tpl->tpl_vars['WIDGET']->value['data']['viewtype'] == 'Summary') {?><div class="btn-group control-widget"><button class="btn btn-sm btn-light prev disabled" type="button" title="<?php echo \App\Language::translate('LBL_PREV',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-angle-left"></span></button><button class="btn btn-sm btn-light next" type="button" title="<?php echo \App\Language::translate('LBL_NEXT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-angle-right"></span></button></div><?php }
if (isset($_smarty_tpl->tpl_vars['WIDGET']->value['data']['actionSelect']) || isset($_smarty_tpl->tpl_vars['WIDGET']->value['data']['action'])) {
$_smarty_tpl->_assignInScope('VRM', Vtiger_Record_Model::getInstanceById($_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value));
$_smarty_tpl->_assignInScope('VRMM', Vtiger_RelationListView_Model::getInstance($_smarty_tpl->tpl_vars['VRM']->value,$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value));
$_smarty_tpl->_assignInScope('RELATIONMODEL', $_smarty_tpl->tpl_vars['VRMM']->value->getRelationModel());
if ($_smarty_tpl->tpl_vars['WIDGET']->value['data']['actionSelect'] == 1) {
$_smarty_tpl->_assignInScope('RESTRICTIONS_FIELD', $_smarty_tpl->tpl_vars['RELATIONMODEL']->value->getRestrictionsPopupField($_smarty_tpl->tpl_vars['VRM']->value));
?><button class="btn btn-sm btn-light selectRelation" type="button" data-modulename="<?php echo $_smarty_tpl->tpl_vars['RELATIONMODEL']->value->getRelationModuleName();?>
"<?php if ($_smarty_tpl->tpl_vars['RESTRICTIONS_FIELD']->value) {?>data-rf='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['RESTRICTIONS_FIELD']->value);?>
'<?php }?>title="<?php echo \App\Language::translate('LBL_SELECT_OPTION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"alt="<?php echo \App\Language::translate('LBL_SELECT_OPTION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-search"></span></button><?php }
if ($_smarty_tpl->tpl_vars['WIDGET']->value['data']['action'] == 1 && \App\Privilege::isPermitted($_smarty_tpl->tpl_vars['RELATIONMODEL']->value->getRelationModuleName(),'CreateView')) {
$_smarty_tpl->_assignInScope('RELATION_FIELD', $_smarty_tpl->tpl_vars['RELATIONMODEL']->value->getRelationField());
$_smarty_tpl->_assignInScope('AUTOCOMPLETE_FIELD', $_smarty_tpl->tpl_vars['RELATIONMODEL']->value->getAutoCompleteField($_smarty_tpl->tpl_vars['VRM']->value));
?><button class="btn btn-sm btn-light <?php if ($_smarty_tpl->tpl_vars['WIDGET']->value['isInventory']) {?> createInventoryRecordFromFilter <?php } else { ?> createRecordFromFilter<?php }?>"type="button" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['actionURL'];?>
"<?php if ($_smarty_tpl->tpl_vars['RELATION_FIELD']->value) {?> data-prf="<?php echo $_smarty_tpl->tpl_vars['RELATION_FIELD']->value->getName();?>
" <?php }?> <?php if ($_smarty_tpl->tpl_vars['AUTOCOMPLETE_FIELD']->value) {?> data-acf='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['AUTOCOMPLETE_FIELD']->value);?>
'<?php }?>title="<?php echo \App\Language::translate('LBL_ADD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"alt="<?php echo \App\Language::translate('LBL_ADD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-plus"></span></button><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGET']->value['buttonHeader'], 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'detailViewBasic'), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div></div></div></div><hr class="widgetHr"/><div class="row"><?php if ((isset($_smarty_tpl->tpl_vars['WIDGET']->value['data']['filter']) && $_smarty_tpl->tpl_vars['WIDGET']->value['data']['filter'] != '-') && (isset($_smarty_tpl->tpl_vars['WIDGET']->value['data']['checkbox']) && $_smarty_tpl->tpl_vars['WIDGET']->value['data']['checkbox'] != '-')) {
$_smarty_tpl->_assignInScope('span', 'col-6');
} else {
$_smarty_tpl->_assignInScope('span', 'col-12');
}
if (isset($_smarty_tpl->tpl_vars['WIDGET']->value['data']['filter']) && $_smarty_tpl->tpl_vars['WIDGET']->value['data']['filter'] != '-') {?><div class="<?php echo $_smarty_tpl->tpl_vars['span']->value;?>
 form-group-sm"><?php $_smarty_tpl->_assignInScope('FILTER', $_smarty_tpl->tpl_vars['WIDGET']->value['data']['filter']);
$_smarty_tpl->_assignInScope('RELATED_MODULE_MODEL', Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value));
$_smarty_tpl->_assignInScope('FIELD_MODEL', $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getField($_smarty_tpl->tpl_vars['FILTER']->value));
$_smarty_tpl->_assignInScope('FIELD_INFO', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues());
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
?><select class="select2 filterField form-control form-control-sm" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?>data-fieldlable='<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
'data-filter="<?php echo $_smarty_tpl->tpl_vars['FILTER']->value;?>
" data-urlparams="search_params"><option><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue') == $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value) {?> selected <?php }?>><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><?php }
if (isset($_smarty_tpl->tpl_vars['WIDGET']->value['data']['checkbox']) && $_smarty_tpl->tpl_vars['WIDGET']->value['data']['checkbox'] != '-') {
$_smarty_tpl->_assignInScope('checkbox', $_smarty_tpl->tpl_vars['WIDGET']->value['data']['checkbox']);
?><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary active"><input class="js-switch" type="radio" name="options" id="option1" data-js="change" data-on-val='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['checkbox']['on']);?>
'data-urlparams="search_params"autocomplete="off"checked> <?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['checkboxLables']['on'];?>
</label><label class="btn btn-sm btn-outline-primary"><input class="js-switch" type="radio" name="options" id="option2" data-js="change" data-off-val='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['checkbox']['off']);?>
'data-urlparams="search_params"autocomplete="off"> <?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['checkboxLables']['off'];?>
</label></div><?php }?></div></div><div class="c-detail-widget__content js-detail-widget-content" data-js=”container|value”></div></div></div>
<?php }
}
