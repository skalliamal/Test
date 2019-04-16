<?php
/* Smarty version 3.1.31, created on 2019-02-27 10:32:28
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LayoutEditor/RelatedList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c76673c977706_70080566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd3fa65fc77a48d6aad353ca573fa702dabfda86' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LayoutEditor/RelatedList.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c76673c977706_70080566 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="relatedTabOrder" class="tpl-Settings-LayoutEditor-RelatedList"><div class="" id="layoutEditorContainer"><input id="selectedModuleName" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value;?>
" /><div class="widget_header row align-items-lg-center"><div class="col-md-7"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><div class="col-md-5"><div class="btn-toolbar justify-content-end form-row"><?php if (AppConfig::developer('CHANGE_RELATIONS')) {?><button class="btn btn-primary float-right addRelation mr-2" type="button"><span class="fas fa-plus"></span>&nbsp;&nbsp;<?php echo \App\Language::translate('LBL_ADD_RELATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }?><div class="btn-group col-5 float-right px-0"><select class="select2 form-control layoutEditorRelModules" name="layoutEditorRelModules"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULES']->value, 'MODULE_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div></div><hr><div class="relatedTabModulesList"><?php if (empty($_smarty_tpl->tpl_vars['RELATED_MODULES']->value)) {?><div class="emptyRelatedTabs"><div class="recordDetails"><p class="textAlignCenter"><?php echo \App\Language::translate('LBL_NO_RELATED_INFORMATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></div></div><?php } else { ?><div class="relatedListContainer"><div class="relatedModulesList"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_MODULES']->value, 'MODULE_MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
$_smarty_tpl->_assignInScope('INVENTORY_FIELD_MODEL', false);
$_smarty_tpl->_assignInScope('RELATED_MODULE_NAME', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getRelationModuleName());
$_smarty_tpl->_assignInScope('RELATED_MODULE_MODEL', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getRelationModuleModel());
$_smarty_tpl->_assignInScope('RECORD_STRUCTURE_INSTANCE', Vtiger_RecordStructure_Model::getInstanceForModule($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value));
$_smarty_tpl->_assignInScope('RECORD_STRUCTURE', $_smarty_tpl->tpl_vars['RECORD_STRUCTURE_INSTANCE']->value->getStructure());
if ($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->isInventory()) {
$_smarty_tpl->_assignInScope('INVENTORY_FIELD_MODEL', Vtiger_InventoryField_Model::getInstance($_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value));
$_smarty_tpl->_assignInScope('SELECTED_INVENTORY_FIELDS', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getRelationInventoryFields());
}
if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isActive()) {
$_smarty_tpl->_assignInScope('STATUS', '1');
} else {
$_smarty_tpl->_assignInScope('STATUS', '0');
}
$_smarty_tpl->_assignInScope('SELECTED_FIELDS', Settings_LayoutEditor_Module_Model::getRelationFields($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId()));
?><div class="relatedModule mainBlockTable card mb-2" data-relation-id="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId();?>
" data-status="<?php echo $_smarty_tpl->tpl_vars['STATUS']->value;?>
"><div class="mainBlockTableHeader card-header d-flex justify-content-between align-items-center px-2 py-1"><h5 class="card-title my-0"><div class="relatedModuleLabel mainBlockTableLabel"><a><img class="align-baseline" src="<?php echo \App\Layout::getImagePath('drag.png');?>
" title="<?php echo \App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></a>&nbsp;&nbsp;<span class="userIcon-<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"></span> <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</div></h5><div class="btn-toolbar btn-group-xs"><?php $_smarty_tpl->_assignInScope('FAVORITES', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isFavorites());
?><button class="btn btn-sm btn-outline-secondary addToFavorites mr-1" type="button" data-state="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('favorites');?>
"><span class="fas fa-star <?php if (!$_smarty_tpl->tpl_vars['FAVORITES']->value) {?>d-none<?php }?>" title="<?php echo \App\Language::translate('LBL_DEACTIVATE_FAVORITES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span><span class="far fa-star <?php if ($_smarty_tpl->tpl_vars['FAVORITES']->value) {?>d-none<?php }?>" title="<?php echo \App\Language::translate('LBL_ACTIVATE_FAVORITES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button><button class="btn btn-sm btn-success inActiveRelationModule<?php if (!$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isActive()) {?> d-none<?php }?> mr-1" type="button"><span class="fas fa-check"></span>&nbsp;&nbsp;<strong><?php echo \App\Language::translate('LBL_VISIBLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-sm btn-warning activeRelationModule<?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isActive()) {?> d-none<?php }?> mr-1" type="button"><span class="fas fa-times"></span>&nbsp;<strong><?php echo \App\Language::translate('LBL_HIDDEN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><?php if (AppConfig::developer('CHANGE_RELATIONS')) {?><button type="button" class="btn btn-sm btn-danger removeRelation float-right" title="<?php echo \App\Language::translate('LBL_REMOVE_RELATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-times"></span></button><?php }?></div></div><div class="relatedModuleFieldsList mainBlockTableContent card-body"><div class="form-horizontal"><div class="form-group row"><label class="col-sm-2 col-form-label text-right"><?php echo \App\Language::translate('LBL_RELATED_VIEW_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label><div class="col-sm-10"><select data-placeholder="<?php echo \App\Language::translate('LBL_RELATED_VIEW_TYPE_DESC',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" multiple data-prompt-position="topLeft" class="form-control select2_container relatedViewType validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_LayoutEditor_Module_Model::getRelatedViewTypes(), 'NAME', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['NAME']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isRelatedViewType($_smarty_tpl->tpl_vars['KEY']->value)) {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div><div class="form-horizontal"><div class="form-group row"><label class="col-sm-2 col-form-label text-right"><?php echo \App\Language::translate('LBL_STANDARD_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label><div class="col-sm-10"><select data-placeholder="<?php echo \App\Language::translate('LBL_ADD_MORE_COLUMNS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" multiple class="form-control select2_container js-select2-sortable columnsSelect relatedColumnsList" data-js="sortable"><optgroup label=''><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SELECTED_FIELDS']->value, 'SELECTED_FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['SELECTED_FIELD']->value) {
$_smarty_tpl->_assignInScope('FIELD_INSTANCE', $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getField($_smarty_tpl->tpl_vars['SELECTED_FIELD']->value));
if ($_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value) {?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getId();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getFieldName();?>
" selected><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->get('label'),$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</option><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'BLOCK_FIELDS', false, 'BLOCK_LABEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) {
?><optgroup label='<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
if (!in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getId(),$_smarty_tpl->tpl_vars['SELECTED_FIELDS']->value)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getId();?>
" data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</option><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div><?php if ($_smarty_tpl->tpl_vars['INVENTORY_FIELD_MODEL']->value) {
$_smarty_tpl->_assignInScope('INVENTORY_FIELDS', $_smarty_tpl->tpl_vars['INVENTORY_FIELD_MODEL']->value->getFields());
?><div class="form-horizontal"><div class="form-group row"><label class="col-sm-2 col-form-label text-right"><?php echo \App\Language::translate('LBL_ADVANCED_BLOCK_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label><div class="col-sm-10"><select data-placeholder="<?php echo \App\Language::translate('LBL_ADD_ADVANCED_BLOCK_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" multiple class="select2_container js-select2-sortable relatedColumnsList" data-js="sortable" data-type="inventory"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SELECTED_INVENTORY_FIELDS']->value, 'NAME', false, 'SELECTED_FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['SELECTED_FIELD']->value => $_smarty_tpl->tpl_vars['NAME']->value) {
$_smarty_tpl->_assignInScope('FIELD_INSTANCE', $_smarty_tpl->tpl_vars['INVENTORY_FIELDS']->value[$_smarty_tpl->tpl_vars['SELECTED_FIELD']->value]);
if ($_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value) {?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getColumnName();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getColumnName();?>
" selected><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->get('label'),$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</option><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_FIELDS']->value, 'FIELD_MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
if (!in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getColumnName(),$_smarty_tpl->tpl_vars['SELECTED_FIELDS']->value)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getColumnName();?>
" data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getColumnName();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</option><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div><?php }?></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div><?php }?></div></div><div class="addRelationContainer modal fade" tabindex="-1"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><span class="fas fa-plus mt-2"></span>&nbsp;&nbsp;<h5 id="myModalLabel" class="modal-title"><?php echo \App\Language::translate('LBL_ADD_RELATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><div class="modal-body" ><form class="modal-Fields"><div class="form-horizontal"><div class="form-group row"><label class="col-md-4 col-form-label text-right"><?php echo \App\Language::translate('LBL_RELATION_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label><div class="col-md-7"><select name="type" class="form-control"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_LayoutEditor_Module_Model::getRelationsTypes(), 'ITEM', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="form-group row"><label class="col-md-4 col-form-label text-right"><?php echo \App\Language::translate('LBL_RELATION_ACTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label><div class="col-md-7 marginTop"><select multiple name="actions" class="form-control"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_LayoutEditor_Module_Model::getRelationsActions(), 'ITEM', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="form-group row"><label class="col-md-4 col-form-label text-right"><?php echo \App\Language::translate('LBL_SOURCE_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label><div class="col-md-7 marginTop"><select name="source" class="form-control"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULES']->value, 'MODULE_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="form-group row"><label class="col-md-4 col-form-label text-right"><?php echo \App\Language::translate('LBL_TARGET_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label><div class="col-md-7 marginTop"><select name="target" class="target form-control"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULES']->value, 'MODULE_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="form-group row"><label class="col-md-4 col-form-label text-right"><?php echo \App\Language::translate('LBL_RELATION_LABLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label><div class="col-md-7"><input name="label" type="text" class="relLabel form-control" /></div></div></div></form></div><div class="modal-footer"><button class="btn btn-success addButton" data-dismiss="modal" aria-hidden="true" ><span class="fas fa-check u-mr-5px"></span>&nbsp;&nbsp;<?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-warning" id="closeModal" data-dismiss="modal" aria-hidden="true"><span class="fas fa-times u-mr-5px"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></div></div></div>
<?php }
}
