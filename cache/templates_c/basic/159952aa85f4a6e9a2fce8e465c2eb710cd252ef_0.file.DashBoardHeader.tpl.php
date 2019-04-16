<?php
/* Smarty version 3.1.31, created on 2019-03-28 10:02:58
  from "C:\xampp7.2\htdocs\erp-equipe\erp\layouts\basic\modules\Vtiger\dashboards\DashBoardHeader.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9c9bd2c0f433_21340825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '159952aa85f4a6e9a2fce8e465c2eb710cd252ef' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\erp-equipe\\erp\\layouts\\basic\\modules\\Vtiger\\dashboards\\DashBoardHeader.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9c9bd2c0f433_21340825 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row"><nav class="widget_header col-12 px-3 d-flex align-items-center flex-column flex-sm-row" aria-label="<?php echo \App\Language::translate("LBL_BREADCRUMB");?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['MODULE']->value;
$_prefixVariable2=ob_get_clean();
if ($_prefixVariable2 != 'Home') {?><div class="listViewMassActions px-2"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonViewLinks.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('LINKS'=>$_smarty_tpl->tpl_vars['QUICK_LINKS']->value['SIDEBARLINK'],'BTN_GROUP'=>false,'CLASS'=>'buttonTextHolder'), 0, true);
?>
</div><?php }
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('dashboards/DashBoardButtons.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</nav></div>
<?php }
}
