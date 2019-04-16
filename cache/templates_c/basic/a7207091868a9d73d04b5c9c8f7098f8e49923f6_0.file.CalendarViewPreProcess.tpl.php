<?php
/* Smarty version 3.1.31, created on 2019-03-04 15:39:22
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Calendar/CalendarViewPreProcess.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c7d46aaa58991_85467455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7207091868a9d73d04b5c9c8f7098f8e49923f6' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Calendar/CalendarViewPreProcess.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7d46aaa58991_85467455 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Header.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="bodyContents"><div class="mainContainer"><div class="o-breadcrumb js-breadcrumb widget_header d-flex justify-content-between align-items-center px-2 flex-column flex-sm-row" data-js="height"><div class="mr-auto"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div><div id="centerPanel" class="contentsDiv">
<?php }
}
