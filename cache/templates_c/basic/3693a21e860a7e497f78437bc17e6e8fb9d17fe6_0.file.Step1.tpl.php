<?php
/* Smarty version 3.1.31, created on 2019-03-20 07:38:00
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PDF/Step1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c91edd83b1631_72224139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3693a21e860a7e497f78437bc17e6e8fb9d17fe6' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PDF/Step1.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c91edd83b1631_72224139 (Smarty_Internal_Template $_smarty_tpl) {
?>
,
<div class="tpl-Settings-PDF-Step1 pdfTemplateContents"><form name="EditPdfTemplate" action="index.php" method="post" id="pdf_step1" class="form-horizontal"><input type="hidden" name="module" value="PDF"><input type="hidden" name="view" value="Edit"><input type="hidden" name="mode" value="Step2" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" class="step" value="1" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
" /><div class="padding1per stepBorder"><label><strong><?php echo \App\Language::translateArgs('LBL_STEP_N',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,1);?>
: <?php echo \App\Language::translate('LBL_ENTER_BASIC_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><br /><div class="form-group"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="col-sm-6 controls"><select class="chzn-select form-control" id="status" name="status" required="true"><option value="1" <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('status') == 1) {?> selected <?php }?>><?php echo \App\Language::translate('PLL_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="0" <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('status') == 0) {?> selected <?php }?>><?php echo \App\Language::translate('PLL_INACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class="form-group"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_PRIMARY_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="col-sm-6 controls"><input type="text" name="primary_name" class="form-control" data-validation-engine='validate[required]' value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('primary_name');?>
" id="primary_name" /></div></div><div class="form-group"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_SECONDARY_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="col-sm-6 controls"><input type="text" name="secondary_name" class="form-control" data-validation-engine='validate[required]' value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('secondary_name');?>
" id="secondary_name" /></div></div><!--<div class="form-group"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_FOLDER_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls">todo: browse folders for templates</div></div>--><div class="form-group"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="col-sm-6 controls"><select class="chzn-select form-control" id="moduleName" name="module_name" required="true" data-validation-engine='validate[required]' ><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_MODULES']->value, 'MODULE_MODEL', false, 'TABID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['TABID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE']->value == $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName()) {?> selected <?php }?>><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName() == 'Calendar') {
echo \App\Language::translate('LBL_TASK',$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());
}?></option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="form-group"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_METATAGS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><input type="checkbox" name="metatags_status" id="metatags_status" value="1" class="checkboxForm" <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('metatags_status') == true || $_smarty_tpl->tpl_vars['RECORDID']->value == '') {?>checked="checked"<?php }?> /></div></div><div class="form-group metatags <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('metatags_status') == true || $_smarty_tpl->tpl_vars['RECORDID']->value == '') {?>d-none<?php }?>"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_META_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><input type="text" name="meta_title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('meta_title');?>
" id="meta_title" /></div></div><div class="form-group metatags <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('metatags_status') == true || $_smarty_tpl->tpl_vars['RECORDID']->value == '') {?>d-none<?php }?>"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_META_AUTHOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><select class="chzn-select form-control" id="meta_author" name="meta_author"><option value="" selected=""><?php echo \App\Language::translate('LBL_SELECT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="PLL_COMPANY_NAME" <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('meta_author') == 'PLL_COMPANY_NAME') {?> selected <?php }?>><?php echo \App\Language::translate('PLL_COMPANY_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="PLL_USER_CREATING" <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('meta_author') == 'PLL_USER_CREATING') {?> selected <?php }?>><?php echo \App\Language::translate('PLL_USER_CREATING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class="form-group metatags <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('metatags_status') == true || $_smarty_tpl->tpl_vars['RECORDID']->value == '') {?>d-none<?php }?>"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_META_CREATOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><select class="chzn-select form-control" id="meta_creator" name="meta_creator"><option value="" selected=""><?php echo \App\Language::translate('LBL_SELECT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="PLL_COMPANY_NAME" <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('meta_creator') == 'PLL_COMPANY_NAME') {?> selected <?php }?>><?php echo \App\Language::translate('PLL_COMPANY_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="PLL_USER_CREATING" <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('meta_creator') == 'PLL_USER_CREATING') {?> selected <?php }?>><?php echo \App\Language::translate('PLL_USER_CREATING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class="form-group metatags <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('metatags_status') == true || $_smarty_tpl->tpl_vars['RECORDID']->value == '') {?>d-none<?php }?>"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_META_SUBJECT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><input type="text" name="meta_subject" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('meta_subject');?>
" id="meta_subject" /></div></div><div class="form-group metatags <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('metatags_status') == true || $_smarty_tpl->tpl_vars['RECORDID']->value == '') {?>d-none<?php }?>"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_META_KEYWORDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><?php $_smarty_tpl->_assignInScope('KEYWORDS', explode(',',$_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('meta_keywords')));
?><select class="select2 form-control" data-tags="false" id="meta_keywords" name="meta_keywords" multiple="multiple"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['KEYWORDS']->value, 'KEYWORD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEYWORD']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEYWORD']->value;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['KEYWORD']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div><br /><div class="float-right mb-2"><button class="btn btn-success mr-1" type="submit" disabled><span class="fas fa-caret-right mr-1"></span><?php echo \App\Language::translate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-warning cancelLink" type="reset"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></form></div>
<?php }
}
