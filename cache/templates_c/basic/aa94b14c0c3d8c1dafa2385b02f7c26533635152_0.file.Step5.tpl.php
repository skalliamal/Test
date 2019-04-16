<?php
/* Smarty version 3.1.31, created on 2019-03-20 07:38:53
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PDF/Step5.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c91ee0df0b939_09232881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa94b14c0c3d8c1dafa2385b02f7c26533635152' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PDF/Step5.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/basic/modules/Vtiger/VariablePanel.tpl' => 1,
  ),
),false)) {
function content_5c91ee0df0b939_09232881 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-PDF-Step5 pdfTemplateContents"><form name="EditPdfTemplate" action="index.php" method="post" id="pdf_step5" class="form-horizontal"><input type="hidden" name="module" value="PDF"><input type="hidden" name="view" value="Edit"><input type="hidden" name="mode" value="Step6"/><input type="hidden" name="parent" value="Settings"/><input type="hidden" class="step" value="5"/><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
"/><input type="hidden" name="module_name" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('module_name');?>
"/><div class="padding1per stepBorder"><label><strong><?php echo \App\Language::translateArgs('LBL_STEP_N',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,5);?>
: <?php echo \App\Language::translate('LBL_FOOTER_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><br/><div class="row"><?php $_smarty_tpl->_subTemplateRender('file:layouts/basic/modules/Vtiger/VariablePanel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('SELECTED_MODULE'=>$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value,'PARSER_TYPE'=>'pdf'), 0, false);
?>
</div><div class="form-group"><div class="col-sm-12 controls"><textarea class="form-control js-editor" name="footer_content" id="footer_content" data-js="ckeditor"><?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('footer_content');?>
</textarea></div></div></div><br/><div class="float-right mb-2"><button class="btn btn-danger backStep mr-1" type="button"><span class="fas fa-caret-left mr-1"></span><?php echo \App\Language::translate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-success mr-1" type="submit"><span class="fas fa-caret-right mr-1"></span><?php echo \App\Language::translate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-warning cancelLink" type="reset"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></form></div>
<?php }
}
