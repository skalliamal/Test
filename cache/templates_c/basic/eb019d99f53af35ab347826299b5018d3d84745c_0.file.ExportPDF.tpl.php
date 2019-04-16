<?php
/* Smarty version 3.1.31, created on 2019-03-11 08:56:05
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/ExportPDF.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c8622a5580b41_03733005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb019d99f53af35ab347826299b5018d3d84745c' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/ExportPDF.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8622a5580b41_03733005 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form id="pdfExportModal" class="tpl-Vtiger-ExportPDF" action="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&action=PDF&mode=generate" target="_blank" method="POST"><div class="modal-header"><h5 class="modal-title"><span class="fas fa-file-excel mr-1"></span><?php echo \App\Language::translate('LBL_GENERATE_PDF_FILE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><input type="hidden" name="all_records" id="all_records" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['ALL_RECORDS']->value));?>
" /><input type="hidden" name="selectedRecords" value="[]" /><input type="hidden" name="validRecords" value="[]" /><input type="hidden" name="template" value="[]" /><input type="hidden" name="single_pdf" value="0" /><input type="hidden" name="email_pdf" value="0" /><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EXPORT_VARS']->value, 'VALUE', false, 'INDEX');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['INDEX']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['INDEX']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
" /><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<div class="card"><div class="card-header"><strong><?php echo \App\Language::translate('LBL_AVAILABLE_TEMPLATES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></div><div class="card-body"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATES']->value, 'TEMPLATE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['TEMPLATE']->value) {
?><div class="form-group row"><label class="col-sm-11 col-form-label text-left pt-0" for="pdfTpl<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value->get('primary_name');?>
 &nbsp;[<span class="secondaryName"><?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value->get('secondary_name');?>
</span>]</label><div class="col-sm-1"><input type="checkbox" id="pdfTpl<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value->getId();?>
" name="pdf_template[]" class="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['TEMPLATE']->value->get('default') == 1) {?>checked="checked"<?php }?> /></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div></div><div class="modal-footer"><div class="btn-group mr-0"><button id="generate_pdf" type="submit" class="btn btn-success"><span class="fas fa-file-pdf mr-1"></span><?php echo \App\Language::translate('LBL_GENERATE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button><button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button><ul class="dropdown-menu"><li><a class="dropdown-item" href="#" id="single_pdf"><?php echo \App\Language::translate('LBL_GENERATE_SINGLE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></li><?php if (\App\Privilege::isPermitted('OSSMail')) {?><li><a class="dropdown-item" href="#" id="email_pdf"><?php echo \App\Language::translate('LBL_SEND_EMAIL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></li><?php }?></ul></div><button class="btn btn-danger" type="reset" data-dismiss="modal"><strong><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button></div></form>
<?php }
}
