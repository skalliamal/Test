<?php
/* Smarty version 3.1.31, created on 2019-03-11 07:10:47
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Vtiger/CustomRecordNumbering.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c8609f7257e26_63490205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37bb1200fde1862685de02c7dc3005b8f63fb92b' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Vtiger/CustomRecordNumbering.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8609f7257e26_63490205 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-Vtiger-CustomRecordNumbering"><form id="EditView" method="POST"><div class="widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><div class="col-12"><span><?php echo \App\Language::translate('LBL_CUSTOMIZE_MODENT_NUMBER_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div></div><div class="row"><div class="col-md-12"><table id="customRecordNumbering" class="table table-bordered"><?php $_smarty_tpl->_assignInScope('DEFAULT_MODULE_NAME', $_smarty_tpl->tpl_vars['DEFAULT_MODULE_MODEL']->value->getName());
$_smarty_tpl->_assignInScope('DEFAULT_MODULE_DATA', \App\Fields\RecordNumber::getNumber($_smarty_tpl->tpl_vars['DEFAULT_MODULE_NAME']->value));
$_smarty_tpl->_assignInScope('WIDTHTYPE', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'));
?><thead><tr><th width="30%" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><strong><?php echo \App\Language::translate('LBL_CUSTOMIZE_RECORD_NUMBERING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th width="70%" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-left: none"><span class="float-right"><button type="button" class="btn btn-info" name="updateRecordWithSequenceNumber"><strong><span class="fas fa-exchange-alt u-mr-5px"></span><?php echo \App\Language::translate('LBL_UPDATE_MISSING_RECORD_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></span></th></tr></thead><tbody><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="float-right marginRight10px"><b><?php echo \App\Language::translate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-left: none"><select class="chzn-select form-control" name="sourceModule"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULES']->value, 'MODULE_MODEL', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
$_smarty_tpl->_assignInScope('MODULE_NAME', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));
?><option value=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == $_smarty_tpl->tpl_vars['DEFAULT_MODULE_NAME']->value) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></td></tr><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="float-right marginRight10px"><b><?php echo \App\Language::translate('LBL_USE_PREFIX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-left: none"><input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value['prefix'];?>
" placeholder="<?php echo \App\Language::translate('LBL_NO_PREFIX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-old-prefix="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value['prefix'];?>
" name="prefix" data-validation-engine="validate[funcCall[Vtiger_AlphaNumericWithSlashesCurlyBraces_Validator_Js.invokeValidation]]" /></td></tr><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="float-right marginRight10px"><b><?php echo \App\Language::translate('LBL_START_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b><span class="redColor">*</span></label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-left: none"><input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value['sequenceNumber'];?>
"data-old-sequence-number="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value['sequenceNumber'];?>
" name="sequenceNumber" data-validation-engine="validate[required,funcCall[Vtiger_WholeNumber_Validator_Js.invokeValidation]]" /></td></tr><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="float-right marginRight10px"><b><?php echo \App\Language::translate('LBL_USE_POSTFIX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-left: none"><input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value['postfix'];?>
" placeholder="<?php echo \App\Language::translate('LBL_NO_POSTFIX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-old-postfix="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value['postfix'];?>
" name="postfix" data-validation-engine="validate[funcCall[Vtiger_AlphaNumericWithSlashesCurlyBraces_Validator_Js.invokeValidation]]" /></td></tr></tbody></table></div></div><div class="row"><div class="col-md-12"><table id="customRecordNumbering" class="table table-bordered"><thead><tr><th width="30%" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><strong><?php echo \App\Language::translate('LBL_USE_CUSTOME_VARIABLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th width="70%" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-left: none"></th></tr></thead><tbody><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="float-right marginRight10px"><b><?php echo \App\Language::translate('LBL_CUSTOME_VARIABLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-left: none"><div class="row"><div class="col-md-11"><select class="chzn-select form-control" id="customVariables" name="custom_variables"><option value="YYYY"><?php echo \App\Language::translate('LBL_CV_FULL_YEAR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="YY"><?php echo \App\Language::translate('LBL_CV_YEAR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="MM"><?php echo \App\Language::translate('LBL_CV_FULL_MONTH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="M"><?php echo \App\Language::translate('LBL_CV_MONTH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="DD"><?php echo \App\Language::translate('LBL_CV_FULL_DAY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="D"><?php echo \App\Language::translate('LBL_CV_DAY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div><div class="col-md-1"><input type="hidden" value="" id="customVariable" /><button class="btn btn-sm btn-info float-right" id="customVariableCopy" title="<?php echo \App\Language::translate('LBL_COPY_CV',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-copy"></span></button></div></div></td></tr></tbody></table></div></div><br /><div class="row"><div class="col-md-12 float-right"><div class="float-right"><button class="btn btn-success saveButton" type="submit" disabled="disabled"><strong><span class="fa fa-check u-mr-5px"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="cancelLink btn btn-warning" type="reset" onclick="javascript:window.history.back();"><span class="fa fa-times u-mr-5px"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></div></form></div>
<?php }
}
