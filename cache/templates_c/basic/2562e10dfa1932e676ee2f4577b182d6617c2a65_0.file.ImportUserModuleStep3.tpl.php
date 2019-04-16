<?php
/* Smarty version 3.1.31, created on 2019-03-13 09:40:35
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/ModuleManager/ImportUserModuleStep3.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c88d0133363a2_21434497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2562e10dfa1932e676ee2f4577b182d6617c2a65' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/ModuleManager/ImportUserModuleStep3.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c88d0133363a2_21434497 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="importModules"><div class='widget_header row '><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if (isset($_smarty_tpl->tpl_vars['SELECTED_PAGE']->value)) {
echo \App\Language::translate($_smarty_tpl->tpl_vars['SELECTED_PAGE']->value->get('description'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}?></div></div><div class="contents"><div class=""><div id="vtlib_modulemanager_import_div"><form method="POST" action="index.php"><table class="table table-bordered"><thead><tr class="blockHeader"><th colspan="2"><strong><?php echo \App\Language::translate('LBL_IMPORTING_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th></tr></thead><tbody><tr valign=top><td class='cellText small'><?php if ($_smarty_tpl->tpl_vars['MODULEIMPORT_ERROR']->value) {?><div class="alert alert-warning"><div class="modal-header"><h3><?php echo \App\Language::translate('LBL_FAILED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><div class="modal-body"><p><b><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULEIMPORT_ERROR']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></p></div></div><?php } else {
if ($_smarty_tpl->tpl_vars['IMPORT_MODULE_TYPE']->value == 'Language') {
echo \App\Language::translate('LBL_IMPORTED_LANGUAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} elseif ($_smarty_tpl->tpl_vars['IMPORT_MODULE_TYPE']->value == 'extension') {
echo \App\Language::translate('LBL_IMPORTED_EXTENSION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} elseif ($_smarty_tpl->tpl_vars['IMPORT_MODULE_TYPE']->value == 'update') {
echo \App\Language::translate('LBL_IMPORTED_UPDATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else {
echo \App\Language::translate('LBL_IMPORTED_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,$_smarty_tpl->tpl_vars['IMPORT_MODULE_NAME']->value);
}
}?></td></tr></tbody></table><div class="modal-footer"><a href="index.php?module=ModuleManager&parent=Settings&view=List" class="btn btn-success"><strong><?php echo \App\Language::translate('LBL_FINISH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></div></form></div></div></div></div>
<?php }
}
