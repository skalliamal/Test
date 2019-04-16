<?php
/* Smarty version 3.1.31, created on 2019-03-14 15:02:14
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Users/DetailViewFullContents.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c8a6cf6142887_22923264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e10f42b2c122092e6051e170a286d5f14dbe3bc' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Users/DetailViewFullContents.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8a6cf6142887_22923264 (Smarty_Internal_Template $_smarty_tpl) {
?>

<input type="hidden" name="timeFormatOptions" data-value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['DAY_STARTS']->value);?>
" /><?php $_smarty_tpl->_assignInScope('WIDTHTYPE', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
?>

<?php }
}
