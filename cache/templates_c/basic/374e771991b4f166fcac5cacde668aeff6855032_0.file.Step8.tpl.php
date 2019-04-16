<?php
/* Smarty version 3.1.31, created on 2019-03-20 07:38:58
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PDF/Step8.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c91ee12231944_09414382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '374e771991b4f166fcac5cacde668aeff6855032' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PDF/Step8.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c91ee12231944_09414382 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-PDF-Step8 pdfTemplateContents"><form name="EditPdfTemplate" action="index.php" method="post" id="pdf_step8" class="form-horizontal" enctype="multipart/form-data"><input type="hidden" name="module" value="PDF"><input type="hidden" name="action" value="Save" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" class="step" value="8" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
" /><input type="hidden" name="watermark_image" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('watermark_image');?>
" /><div class="padding1per stepBorder"><label><strong><?php echo \App\Language::translateArgs('LBL_STEP_N',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,8);?>
: <?php echo \App\Language::translate('LBL_WATERMARK_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><br/><div class="form-group"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_WATERMARK_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><select class="chzn-select form-control" id="watermark_type" name="watermark_type" required="true"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PDF_MODEL']->value->getWatermarkType(), 'LABEL', false, 'VALUE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('watermark_type') == $_smarty_tpl->tpl_vars['VALUE']->value) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="form-group watertext <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('watermark_type') != $_smarty_tpl->tpl_vars['WATERMARK_TEXT']->value) {?>d-none<?php }?>"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_WATERMARK_TEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><input type="text" name="watermark_text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('watermark_text');?>
" id="watermark_text"/></div></div><div class="form-group watertext <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('watermark_type') != $_smarty_tpl->tpl_vars['WATERMARK_TEXT']->value) {?>d-none<?php }?>"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_WATERMARK_SIZE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><input type="number" name="watermark_size" class="form-control" value="<?php echo intval($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('watermark_size'));?>
" id="watermark_size" min="0" max="99"/></div></div><div class="form-group watertext <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('watermark_type') != $_smarty_tpl->tpl_vars['WATERMARK_TEXT']->value) {?>d-none<?php }?>"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_WATERMARK_ANGLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><input type="number" name="watermark_angle" class="form-control" value="<?php echo intval($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('watermark_angle'));?>
" id="watermark_angle" min="0" max="360"/></div></div><div class="form-group waterimage <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('watermark_type') == $_smarty_tpl->tpl_vars['WATERMARK_TEXT']->value) {?>d-none<?php }?>"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_WATERMARK_IMAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><div id="watermark"><?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('watermark_image')) {?><img src="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('watermark_image');?>
" class="col-md-9"/><?php }?></div><input type="file" name="watermark_image_file" accept="images/*" class="form-control" data-validation-engine='validate[required]' id="watermark_image"/></div></div><div class="form-group waterimage form-row <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('watermark_type') == $_smarty_tpl->tpl_vars['WATERMARK_TEXT']->value) {?>d-none<?php }?>"><div class="pl-4 col-sm-2 controls"><button id="deleteWM" class="btn btn-danger <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('watermark_image') == '') {?>d-none<?php }?>"><?php echo \App\Language::translate('LBL_DELETE_WM',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><div class="col-sm-2 controls"><button id="uploadWM" class="btn btn-success float-right d-flex justify-content-sm-start"><?php echo \App\Language::translate('LBL_UPLOAD_WM',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></div><br/><div class="float-right mb-2"><button class="btn btn-danger backStep mr-1" type="button"><span class="fas fa-caret-left mr-1"></span><?php echo \App\Language::translate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-success mr-1" type="submit"><span class="fas fa-caret-right mr-1"></span><?php echo \App\Language::translate('LBL_FINISH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></form></div>
<?php }
}
