<?php
/* Smarty version 3.1.31, created on 2019-02-27 14:57:22
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/ModuleManager/ImportUserModuleStep1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c76a552c4aa33_24778982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3b8b874b702e62ea913ebd43f222f64dd99edd5' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/ModuleManager/ImportUserModuleStep1.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c76a552c4aa33_24778982 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-ModuleManager-ImportUserModuleStep1" id="importModules"><div class="widget_header row mb-2"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div><?php $_smarty_tpl->_assignInScope('MAXUPLOADSIZE', vtlib\Functions::getMaxUploadSize());
if ($_smarty_tpl->tpl_vars['MAXUPLOADSIZE']->value < 5242880) {?><div class="alert alert-block alert-danger fade show" role="alert"><button type="button" class="close" data-dismiss="alert">×</button><h4 class="alert-heading"><?php echo \App\Language::translate('LBL_TOO_SMALL_UPLOAD_LIMIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4><p><?php echo \App\Language::translate('LBL_TOO_SMALL_UPLOAD_LIMIT_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,vtlib\Functions::showBytes($_smarty_tpl->tpl_vars['MAXUPLOADSIZE']->value));?>
</p></div><?php }?><div class="contents"><div><form class="form-horizontal contentsBackground" id="importUserModule" name="importUserModule" action='index.php' method="POST" enctype="multipart/form-data"><input type="hidden" name="module" value="ModuleManager"/><input type="hidden" name="moduleAction" value="Import"/><input type="hidden" name="parent" value="Settings"/><input type="hidden" name="view" value="ModuleImport"/><input type="hidden" name="mode" value="importUserModuleStep2"/><div name="uploadUserModule"><div class="modal-body tabbable"><div class="tab-content massEditContent"><table class="massEditTable table table-bordered"><tr><td class="fieldLabel alignMiddle"><?php echo \App\Language::translate('LBL_IMPORT_MODULE_FROM_FILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td><td class="fieldValue"><input type="file" name="moduleZip" id="moduleZip" size="80px" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-validator=<?php echo \App\Json::encode(array(array('name'=>'UploadModuleZip')));?>
/></td></tr></table></div></div></div><div class="modal-footer"><button class="btn btn-success" type="submit" name="saveButton"><strong><?php echo \App\Language::translate('LBL_IMPORT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><div class="float-right cancelLinkContainer"><a class="cancelLink btn btn-warning" href="index.php?module=ModuleManager&parent=Settings&view=List"><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div></div></form></div></div></div>
<?php }
}
