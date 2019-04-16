<?php
/* Smarty version 3.1.31, created on 2019-03-28 10:23:15
  from "C:\xampp7.2\htdocs\erp-equipe\erp\layouts\basic\modules\Vtiger\Detail\Widget\GeneralInfo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9ca09381fb59_08217796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66d19fe7094a4eca7ef76c88427eead9cae3525b' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\erp-equipe\\erp\\layouts\\basic\\modules\\Vtiger\\Detail\\Widget\\GeneralInfo.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9ca09381fb59_08217796 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('WIDTHTYPE', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'));
?><div class="c-detail-widget u-mb-13px c-detail-widget--general-info js-widget-general-info" data-js="edit/save"><div class="c-detail-widget__header"><h5 class="mb-0 py-2"> <?php echo \App\Language::translate('LBL_RECORD_SUMMARY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5><hr /></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/Widget/GeneralInfoContent.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>
<?php }
}
