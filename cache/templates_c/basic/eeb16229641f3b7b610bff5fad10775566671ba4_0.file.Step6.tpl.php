<?php
/* Smarty version 3.1.31, created on 2019-03-20 07:38:55
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PDF/Step6.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c91ee0f3a6853_00457011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eeb16229641f3b7b610bff5fad10775566671ba4' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PDF/Step6.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c91ee0f3a6853_00457011 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-PDF-Step6 pdfTemplateContents"><form name="EditPdfTemplate" action="index.php" method="post" id="pdf_step6" class="form-horizontal"><input type="hidden" name="module" value="PDF"><input type="hidden" name="view" value="Edit"><input type="hidden" name="mode" value="Step7" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" class="step" value="6" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
" /><input type="hidden" name="conditions" id="advanced_filter" value='' /><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('AdvanceFilterExpressions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<br /><div class="float-right mb-2"><button class="btn btn-danger backStep mr-1" type="button"><span class="fas fa-caret-left mr-1"></span><?php echo \App\Language::translate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-success mr-1" type="submit"><span class="fas fa-caret-right mr-1"></span><?php echo \App\Language::translate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-warning cancelLink" type="reset"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></form></div>
<?php }
}
