<?php
/* Smarty version 3.1.31, created on 2019-03-11 07:11:36
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/TreesManager/ListViewHeader.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c860a2883c7e0_76965879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29f889847ec976d55a866d9442f6212b90834cca' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/TreesManager/ListViewHeader.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c860a2883c7e0_76965879 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="listViewPageDiv"><div class="listViewTopMenuDiv"><div class="widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div><div class="badge badge-info my-2"><?php if (isset($_smarty_tpl->tpl_vars['SELECTED_PAGE']->value)) {
echo \App\Language::translate($_smarty_tpl->tpl_vars['SELECTED_PAGE']->value->get('description'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}?></div><div class="form-row align-items-center mb-2"><div class="col-md-4 btn-toolbar"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWBASIC'], 'LISTVIEW_BASICACTION');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value) {
?><button class="btn addButton btn-success" <?php if (stripos($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl(),'javascript:') === 0) {?> onclick='<?php echo substr($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl(),strlen("javascript:"));?>
;'<?php } else { ?> onclick='window.location.href = "<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl();?>
"' <?php }?>><i class="fas fa-plus"></i>&nbsp;<strong><?php echo \App\Language::translate('LBL_ADD_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div><div class="col-md-4 btn-toolbar ml-0" ><select class="chzn-select form-control ml-1" id="moduleFilter"><option value=""><?php echo \App\Language::translate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value, 'MODULE_MODEL', false, 'TAB_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['TAB_ID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
?><option <?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName()) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName();?>
"><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName() == 'Calendar') {
echo \App\Language::translate('LBL_TASK',$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());
}?></option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><div class="col-md-4 d-flex justify-content-end"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewActions.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div></div></div><div class="listViewContentDiv listViewPageDiv" id="listViewContents">
<?php }
}
