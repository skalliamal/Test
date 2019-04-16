<?php
/* Smarty version 3.1.31, created on 2019-03-20 07:35:45
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PDF/ListViewHeader.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c91ed51606661_79698674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6822e2e84f615cf8da298d5b179e74cce5ef2e8e' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PDF/ListViewHeader.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c91ed51606661_79698674 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-ListViewHeader listViewPageDiv" id="listViewContainer"><div class="listViewTopMenuDiv"><div class="row widget_header mb-2"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div><?php if (Settings_ModuleManager_Library_Model::checkLibrary('mPDF')) {?><div class="alert alert-danger" role="alert"><div><h5><?php echo htmlspecialchars_decode(\App\Language::translateArgs('ERR_NO_REQUIRED_LIBRARY','Settings:Vtiger','mPDF'), ENT_QUOTES);?>
</h5></div></div><hr><?php }?><div class="form-row"><div class="col-md-4 btn-toolbar mb-2 mb-xl-0  d-flex justify-content-center justify-content-md-start"><button class="btn btn-light addButton" id="addButton" data-url="<?php echo Settings_PDF_Module_Model::getCreateRecordUrl();?>
"><span class="fas fa-plus mr-1"></span><strong><?php echo \App\Language::translate('LBL_NEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo \App\Language::translate('LBL_PDF_TEMPLATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-light importButton" id="importButton" data-url="<?php echo Settings_PDF_Module_Model::getImportViewUrl();?>
"title="<?php echo \App\Language::translate('LBL_IMPORT_TEMPLATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-download"></span></button></div><div class="col-md-8 col-lg-8 col-xl-3 btn-toolbar mb-2 mb-xl-0"><select class="select2" id="moduleFilter"><option value=""><?php echo \App\Language::translate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value, 'MODULE_MODEL', false, 'TAB_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['TAB_ID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
?><option <?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName()) {?> selected="" <?php }?>value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName();?>
"><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName() == 'Calendar') {
echo \App\Language::translate('LBL_TASK',$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());
}?></option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><div class="col-lg-12 col-xl-5 btn-toolbar pl-0 d-flex justify-content-center justify-content-xl-end"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div></div><div class="listViewContentDiv" id="listViewContents">
<?php }
}
