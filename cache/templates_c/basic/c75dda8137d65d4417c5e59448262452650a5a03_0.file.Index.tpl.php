<?php
/* Smarty version 3.1.31, created on 2019-03-08 12:51:35
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Picklist/Index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c8265571e6dd7_05562600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c75dda8137d65d4417c5e59448262452650a5a03' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Picklist/Index.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8265571e6dd7_05562600 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="listViewPageDiv tpl-Settings-Picklist-Index"><div class="widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div><div class="listViewContentDiv" id="listViewContents" style="padding: 1%;"><br /><div class="row"><label class="fieldLabel col-md-3"><strong><?php echo \App\Language::translate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 </strong></label><div class="col-md-4 fieldValue"><select class="select2 form-control" id="pickListModules"><optgroup><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_MODULES']->value, 'PICKLIST_MODULE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value) {
?><option <?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value == $_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value->get('name')) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value->get('name');?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value->get('label'),$_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value->get('name'));?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup></select></div></div><br /><div id="modulePickListContainer"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ModulePickListDetail.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><div id="modulePickListValuesContainer"><?php if (empty($_smarty_tpl->tpl_vars['NO_PICKLIST_FIELDS']->value)) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('PickListValueDetail.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?></div></div>	
<?php }
}
