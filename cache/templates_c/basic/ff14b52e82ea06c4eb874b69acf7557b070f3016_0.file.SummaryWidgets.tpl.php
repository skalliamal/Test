<?php
/* Smarty version 3.1.31, created on 2019-02-27 15:49:40
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/SummaryWidgets.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c76b1942839e4_73145853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff14b52e82ea06c4eb874b69acf7557b070f3016' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/SummaryWidgets.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c76b1942839e4_73145853 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-SummaryWidgets"><input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->get('page');?>
"/><input type="hidden" name="pageLimit" value="<?php echo $_smarty_tpl->tpl_vars['LIMIT']->value;?>
"/><input type="hidden" name="col" value="<?php echo $_smarty_tpl->tpl_vars['COLUMNS']->value;?>
"/><input type="hidden" name="relatedModule" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"/><input type="hidden" name="relatedModuleName" class="relatedModuleName" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"/><?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value && $_smarty_tpl->tpl_vars['RELATED_RECORDS']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath("SummaryWidgetsContent.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RELATED_RECORDS'=>$_smarty_tpl->tpl_vars['RELATED_RECORDS']->value), 0, true);
} elseif ($_smarty_tpl->tpl_vars['PAGING_MODEL']->value->get('nrt') == 1) {?><div class="summaryWidgetContainer"><p class="textAlignCenter"><?php echo \App\Language::translate('LBL_NO_RELATED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</p></div><?php }
$_smarty_tpl->_assignInScope('NUMBER_OF_RECORDS', count($_smarty_tpl->tpl_vars['RELATED_RECORDS']->value));
if ($_smarty_tpl->tpl_vars['NUMBER_OF_RECORDS']->value == 0) {?><div class="summaryWidgetContainer noCommentsMsgContainer"><p class="textAlignCenter"><?php echo \App\Language::translate('LBL_NO_RECORDS_FOUND',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p></div><?php }
if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value && $_smarty_tpl->tpl_vars['LIMIT']->value != 0 && $_smarty_tpl->tpl_vars['NUMBER_OF_RECORDS']->value >= $_smarty_tpl->tpl_vars['LIMIT']->value) {?><div class="d-flex py-1"><div class="ml-auto"><button type="button" class="btn btn-primary btn-sm moreRecentRecords" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"><?php echo \App\Language::translate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button></div></div><?php }?></div>
<?php }
}
