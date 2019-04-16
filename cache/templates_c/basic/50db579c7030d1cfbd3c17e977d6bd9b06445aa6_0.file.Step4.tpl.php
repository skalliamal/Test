<?php
/* Smarty version 3.1.31, created on 2019-03-20 07:38:52
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PDF/Step4.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c91ee0c89a100_50881890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50db579c7030d1cfbd3c17e977d6bd9b06445aa6' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PDF/Step4.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/basic/modules/Vtiger/VariablePanel.tpl' => 1,
  ),
),false)) {
function content_5c91ee0c89a100_50881890 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-PDF-Step4 pdfTemplateContents"><form name="EditPdfTemplate" action="index.php" method="post" id="pdf_step4" class="form-horizontal"><input type="hidden" name="module" value="PDF"><input type="hidden" name="view" value="Edit"><input type="hidden" name="mode" value="Step5" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" class="step" value="4" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
" /><input type="hidden" name="module_name" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('module_name');?>
" /><div class="padding1per stepBorder"><label><strong><?php echo \App\Language::translateArgs('LBL_STEP_N',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,4);?>
: <?php echo \App\Language::translate('LBL_BODY_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><br /><div class="row"><?php $_smarty_tpl->_subTemplateRender('file:layouts/basic/modules/Vtiger/VariablePanel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('SELECTED_MODULE'=>$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value,'PARSER_TYPE'=>'pdf'), 0, false);
?>
</div><div class="form-group"><div class="col-sm-12 controls"><textarea class="form-control js-editor" name="body_content" id="body_content" data-js="ckeditor"><?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('body_content');?>
</textarea></div></div></div><br /><div class="float-right mb-2"><button class="btn btn-danger backStep mr-1" type="button"><span class="fas fa-caret-left mr-1"></span><?php echo \App\Language::translate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-success mr-1" type="submit"><span class="fas fa-caret-right mr-1"></span><?php echo \App\Language::translate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-warning cancelLink" type="reset"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></form></div>
<?php }
}
