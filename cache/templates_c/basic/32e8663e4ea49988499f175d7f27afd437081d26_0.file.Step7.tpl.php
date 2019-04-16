<?php
/* Smarty version 3.1.31, created on 2019-03-20 07:38:56
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PDF/Step7.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c91ee10ce96f2_83615933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32e8663e4ea49988499f175d7f27afd437081d26' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PDF/Step7.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c91ee10ce96f2_83615933 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-PDF-Step7 pdfTemplateContents"><form name="EditPdfTemplate" action="index.php" method="post" id="pdf_step7" class="form-horizontal"><input type="hidden" name="module" value="PDF"><input type="hidden" name="view" value="Edit"><input type="hidden" name="mode" value="Step8" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" class="step" value="7" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
" /><div class="padding1per stepBorder"><label><strong><?php echo \App\Language::translateArgs('LBL_STEP_N',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,7);?>
: <?php echo \App\Language::translate('LBL_PERMISSIONS_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><br /><div class="form-group"><div class="col-md-2 col-form-label"><?php echo \App\Language::translate('LBL_GROUP_MEMBERS','Settings:Groups');?>
</div><div class="col-md-6 controls"><div class="row"><div class="col-md-6"><select class="select2 form-control" multiple="true" name="template_members[]" data-placeholder="<?php echo \App\Language::translate('LBL_ADD_USERS_ROLES','Settings:Groups');?>
"><?php $_smarty_tpl->_assignInScope('TEMPLATE_MEMBERS', explode(',',$_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('template_members')));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_Groups_Member_Model::getAll(false), 'ALL_GROUP_MEMBERS', false, 'GROUP_LABEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_LABEL']->value => $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->value) {
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['GROUP_LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->value, 'MEMBER');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MEMBER']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value->get('id');?>
"  data-member-type="<?php echo $_smarty_tpl->tpl_vars['GROUP_LABEL']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['MEMBER']->value->get('id'),$_smarty_tpl->tpl_vars['TEMPLATE_MEMBERS']->value)) {?>selected="true"<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MEMBER']->value->get('name'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div></div></div><br /><div class="float-right mb-2"><button class="btn btn-danger backStep mr-1" type="button"><span class="fas fa-caret-left mr-1"></span><?php echo \App\Language::translate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-success mr-1" type="submit"><span class="fas fa-caret-right mr-1"></span><?php echo \App\Language::translate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-warning cancelLink" type="reset"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></form></div>
<?php }
}
