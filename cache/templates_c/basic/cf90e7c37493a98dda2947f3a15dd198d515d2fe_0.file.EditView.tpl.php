<?php
/* Smarty version 3.1.31, created on 2019-03-19 09:48:11
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/TreesManager/EditView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c90badbf3ead6_09219970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf90e7c37493a98dda2947f3a15dd198d515d2fe' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/TreesManager/EditView.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c90badbf3ead6_09219970 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-TreesManager-EditView editViewContainer"><form class="form-horizontal recordEditView" id="EditView" name="EditView" method="post" action="index.php" enctype="multipart/form-data"><input type="hidden" name="module" value="TreesManager" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="action" value="Save" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><input type="hidden" id="treeLastID" value="<?php echo $_smarty_tpl->tpl_vars['LAST_ID']->value;?>
" /><input type="hidden" id="access" value="<?php echo $_smarty_tpl->tpl_vars['ACCESS']->value;?>
" /><input type="hidden" name="tree" id="treeValues" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['TREE']->value);?>
' /><input type="hidden" name="replace" id="replaceIds" value="" /><div class='widget_header row '><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div><div class="badge badge-info my-2"><?php if (isset($_smarty_tpl->tpl_vars['SELECTED_PAGE']->value)) {
echo \App\Language::translate($_smarty_tpl->tpl_vars['SELECTED_PAGE']->value->get('description'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}?></div><div class="row"><label class="col-md-3"><strong><span class="redColor">*</span><?php echo \App\Language::translate('LBL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: </strong></label><div class="col-md-4"><input type="text" class="fieldValue form-control" name="name" id="treeename" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('name');?>
" data-validation-engine='validate[required]' /></div></div><br /><?php $_smarty_tpl->_assignInScope('SUPPORTED_MODULE_MODELS', Settings_Workflows_Module_Model::getSupportedModules());
?><div class="row"><div class="col-md-3"><label class=""><strong><?php echo \App\Language::translate('LBL_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: </strong></label></div><div class="col-md-4 fieldValue"><select class="chzn-select form-control" name="templatemodule" <?php if (!$_smarty_tpl->tpl_vars['ACCESS']->value) {?> disabled <?php }?> ><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value, 'MODULE_MODEL', false, 'TAB_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['TAB_ID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
?><option <?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == $_smarty_tpl->tpl_vars['TAB_ID']->value) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['TAB_ID']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName() == 'Calendar') {
echo \App\Language::translate('LBL_TASK',$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());
}?></option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select><?php if (!$_smarty_tpl->tpl_vars['ACCESS']->value) {?><input type="text" class="fieldValue form-control d-none" name="templatemodule" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" /><?php }?></div></div><br /><div class="row"><div class="col-md-3"><label class=""><strong><?php echo \App\Language::translate('LBL_SHARE_WITH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: </strong></label></div><div class="col-md-4 fieldValue"><select class="select2 form-control" name="share[]" multiple><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value, 'MODULE_MODEL', false, 'TAB_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['TAB_ID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
?><option <?php if (in_array($_smarty_tpl->tpl_vars['TAB_ID']->value,$_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('share'))) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['TAB_ID']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName() == 'Calendar') {
echo \App\Language::translate('LBL_TASK',$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());
}?></option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><br /><hr><div class="row align-items-center"><div class="col-md-3"><label class=""><strong><?php echo \App\Language::translate('LBL_ADD_ITEM_TREE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label></div><div class="col-md-8 d-flex"><input type="text" class="fieldValue col-md-4 addNewElement form-control"><button class="btn btn-primary addNewElementBtn ml-1" type="button"><span class="fas fa-plus u-mr-5px"></span><strong><?php echo \App\Language::translate('LBL_ADD_TO_TREES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div><hr class="mt-1"><div class="modal-header contentsBackground" tabindex="-1"><div id="treeContents"></div></div><br /><div class="float-right"><button class="btn btn-success saveTree mr-1"><span class="fas fa-check mr-1"></span><strong><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button class="cancelLink btn btn-danger" type="reset" onclick="javascript:window.history.back();"><span class="fas fa-times"></span>&nbsp;&nbsp;<strong><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div><div class="clearfix"></div></div>
<?php }
}
