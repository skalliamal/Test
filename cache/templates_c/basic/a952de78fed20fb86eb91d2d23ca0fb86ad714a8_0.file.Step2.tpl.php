<?php
/* Smarty version 3.1.31, created on 2019-03-20 07:38:47
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PDF/Step2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c91ee07d982e5_24243412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a952de78fed20fb86eb91d2d23ca0fb86ad714a8' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PDF/Step2.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c91ee07d982e5_24243412 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-PDF-Step2 pdfTemplateContents"><form name="EditPdfTemplate" action="index.php" method="post" id="pdf_step2" class="form-horizontal"><input type="hidden" name="module" value="PDF"><input type="hidden" name="view" value="Edit"><input type="hidden" name="mode" value="Step3" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" class="step" value="2" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
" /><div class="padding1per stepBorder"><label><strong><?php echo \App\Language::translateArgs('LBL_STEP_N',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,2);?>
: <?php echo \App\Language::translate('LBL_DOCUMENT_SETTINGS_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><br /><div class="form-group"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_PAGE_FORMAT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="col-sm-6 controls"><select class="select2 form-control rtl" id="page_format" name="page_format" data-validation-engine="validate[required]"><option value="" selected=""><?php echo \App\Language::translate('LBL_SELECT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_PDF_Module_Model::getPageFormats(), 'FORMAT');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FORMAT']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['FORMAT']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('page_format') == $_smarty_tpl->tpl_vars['FORMAT']->value) {?> selected="selected" <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FORMAT']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="form-group"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_MAIN_MARGIN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('margin_chkbox') === 1) {
$_smarty_tpl->_assignInScope('MARGIN_CHECKED', 'true');
} else {
$_smarty_tpl->_assignInScope('MARGIN_CHECKED', 'false');
}?><div class="col-sm-1"><input type="checkbox" id="margin_chkbox" name="margin_chkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['MARGIN_CHECKED']->value == 'true') {?>checked="checked"<?php }?> /></div><div class="col-sm-6 row d-flex justify-content-center mx-auto"><div class="col-md-6 col-lg-3 mb-2 margin_inputs <?php if ($_smarty_tpl->tpl_vars['MARGIN_CHECKED']->value == 'true') {?>d-none<?php }?>"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="margin_top"><span class="fas fa-arrow-up" title="<?php echo \App\Language::translate('LBL_TOP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></span></div><input type="text" class="form-control" aria-describedby="margin_top" name="margin_top" id="margin_top" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('margin_top');?>
" placeholder="<?php echo \App\Language::translate('LBL_TOP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" title="<?php echo \App\Language::translate('LBL_TOP_IN_MILIMETERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></div></div><div class="col-md-6 col-lg-3 mb-2 margin_inputs <?php if ($_smarty_tpl->tpl_vars['MARGIN_CHECKED']->value == 'true') {?>d-none<?php }?>"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="margin_right"><span class="fas fa-arrow-right" title="<?php echo \App\Language::translate('LBL_RIGHT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></span></div><input type="text" class="form-control" aria-describedby="margin_right" name="margin_right" id="margin_right" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('margin_right');?>
" placeholder="<?php echo \App\Language::translate('LBL_RIGHT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" title="<?php echo \App\Language::translate('LBL_RIGHT_IN_MILIMETERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></div></div><div class="col-md-6 col-lg-3 mb-2 margin_inputs <?php if ($_smarty_tpl->tpl_vars['MARGIN_CHECKED']->value == 'true') {?>d-none<?php }?>"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="margin_bottom"><span class="fas fa-arrow-down" title="<?php echo \App\Language::translate('LBL_BOTTOM',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></span></div><input type="text" class="form-control" aria-describedby="margin_bottom" name="margin_bottom" id="margin_bottom" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('margin_bottom');?>
" placeholder="<?php echo \App\Language::translate('LBL_BOTTOM',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" title="<?php echo \App\Language::translate('LBL_BOTTOM_IN_MILIMETERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></div></div><div class="col-md-6 col-lg-3 mb-2 margin_inputs <?php if ($_smarty_tpl->tpl_vars['MARGIN_CHECKED']->value == 'true') {?>d-none<?php }?>"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="margin_left"><span class="fas fa-arrow-left" title="<?php echo \App\Language::translate('LBL_LEFT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></span></div><input type="text" class="form-control" aria-describedby="margin_left" name="margin_left" id="margin_left" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('margin_left');?>
" placeholder="<?php echo \App\Language::translate('LBL_LEFT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" title="<?php echo \App\Language::translate('LBL_LEFT_IN_MILIMETERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></div></div></div></div><div class="form-group margin_inputs <?php if ($_smarty_tpl->tpl_vars['MARGIN_CHECKED']->value == 'true') {?>d-none<?php }?>"><div class="col-sm-6 row d-flex justify-content-center mx-auto"><div class="col-12  col-lg-6 mb-2"><label class="col-12 col-form-label text-center u-text-ellipsis"><?php echo \App\Language::translate('LBL_HEADER_HEIGHT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><input type="text" class="form-control" name="header_height" id="header_height" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('header_height');?>
" placeholder="<?php echo \App\Language::translate('LBL_HEADER_HEIGHT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" title="<?php echo \App\Language::translate('LBL_HEADER_IN_MILIMETERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></div><div class="col-md-12 col-lg-6 mb-2"><label class="col-12 col-form-label text-center u-text-ellipsis"><?php echo \App\Language::translate('LBL_FOOTER_HEIGHT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><input type="text" class="form-control" name="footer_height" id="footer_height" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('footer_height');?>
" placeholder="<?php echo \App\Language::translate('LBL_FOOTER_HEIGHT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" title="<?php echo \App\Language::translate('LBL_FOOTER_IN_MILIMETERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></div></div></div><div class="form-group"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_PAGE_ORIENTATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><select class="select2 form-control" id="page_orientation" name="page_orientation"><option value="PLL_PORTRAIT" <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('page_orientation') == 'PLL_PORTRAIT') {?> selected="selected" <?php }?>><?php echo \App\Language::translate('PLL_PORTRAIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="PLL_LANDSCAPE" <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('page_orientation') == 'PLL_LANDSCAPE') {?> selected="selected" <?php }?>><?php echo \App\Language::translate('PLL_LANDSCAPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class="form-group"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_LANGUAGE_CHOICE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><select class="select2 form-control" id="language" name="language"><option value=""><?php echo \App\Language::translate('LBL_DEFAULT');?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\Language::getAll(), 'NAME', false, 'CODE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['CODE']->value => $_smarty_tpl->tpl_vars['NAME']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['CODE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('language') == $_smarty_tpl->tpl_vars['CODE']->value) {?> selected="selected" <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="form-group"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_FILENAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><input type="text" name="filename" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('filename');?>
" id="filename" /></div></div><div class="form-group"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_VISIBILITY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="col-sm-6 controls"><?php $_smarty_tpl->_assignInScope('VISIBILITY', explode(',',$_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('visibility')));
?><select class="select2 form-control rtl" data-tags="false" id="visibility" name="visibility" multiple="multiple" data-validation-engine="validate[required]"><option value="PLL_LISTVIEW" <?php if (in_array('PLL_LISTVIEW',$_smarty_tpl->tpl_vars['VISIBILITY']->value)) {?>selected="selected"<?php }?>><?php echo \App\Language::translate('PLL_LISTVIEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="PLL_DETAILVIEW" <?php if (in_array('PLL_DETAILVIEW',$_smarty_tpl->tpl_vars['VISIBILITY']->value)) {?>selected="selected"<?php }?>><?php echo \App\Language::translate('PLL_DETAILVIEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class="form-group"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_DEFAULT_TPL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6"><?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('default') === 0) {
$_smarty_tpl->_assignInScope('DEFAULT', 'false');
} else {
$_smarty_tpl->_assignInScope('DEFAULT', 'true');
}?><input type="checkbox" id="default" name="default" value="1" <?php if ($_smarty_tpl->tpl_vars['DEFAULT']->value == 'true') {?>checked="checked"<?php }?> /></div></div><div class="form-group"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_GENERATE_ONE_PDF',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="js-popover-tooltip delay0" data-js="popover" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_GENERATE_ONE_PDF_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></span></label><div class="col-sm-6"><?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('one_pdf') == 0) {
$_smarty_tpl->_assignInScope('ONE_PDF', 'false');
} else {
$_smarty_tpl->_assignInScope('ONE_PDF', 'true');
}?><input type="checkbox" id="one_pdf" name="one_pdf" value="1" <?php if ($_smarty_tpl->tpl_vars['ONE_PDF']->value == 'true') {?>checked="checked"<?php }?> /></div></div></div><br /><div class="float-right mb-2"><button class="btn btn-danger backStep mr-1" type="button"><span class="fas fa-caret-left mr-1"></span><?php echo \App\Language::translate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-success mr-1" type="submit"><span class="fas fa-caret-right mr-1"></span><?php echo \App\Language::translate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-warning cancelLink" type="reset"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></form></div>
<?php }
}
