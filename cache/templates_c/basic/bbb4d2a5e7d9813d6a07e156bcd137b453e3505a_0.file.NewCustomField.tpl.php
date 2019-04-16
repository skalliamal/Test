<?php
/* Smarty version 3.1.31, created on 2019-03-28 10:12:27
  from "C:\xampp7.2\htdocs\erp-equipe\erp\layouts\basic\modules\Settings\LayoutEditor\NewCustomField.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9c9e0bcc7709_80702778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbb4d2a5e7d9813d6a07e156bcd137b453e3505a' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\erp-equipe\\erp\\layouts\\basic\\modules\\Settings\\LayoutEditor\\NewCustomField.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9c9e0bcc7709_80702778 (Smarty_Internal_Template $_smarty_tpl) {
?>

<li class="newCustomFieldCopy d-none"><div class="marginLeftZero border1px" data-field-id="" data-sequence=""><div class="row padding1per"><span class="col-md-2">&nbsp;<?php if ($_smarty_tpl->tpl_vars['IS_SORTABLE']->value) {?><a><img src="<?php echo \App\Layout::getImagePath('drag.png');?>
" border="0" alt="<?php echo App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></a><?php }?></span><div class="col-md-10 marginLeftZero fieldContainer"><span class="fieldLabel"></span><input type="hidden" value="" id="relatedFieldValue" /><span class="float-right actions"><button class="btn btn-primary btn-sm copyFieldLabel float-right marginLeft5" data-target="relatedFieldValue"><span class="fas fa-copy" title="<?php echo App\Language::translate('LBL_COPY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button><?php if ($_smarty_tpl->tpl_vars['IS_SORTABLE']->value) {?><button class="btn btn-success btn-sm editFieldDetails marginLeft5"><span class="fas fa-edit" title="<?php echo App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button><?php }?><button type="button" class="btn btn-danger btn-sm deleteCustomField marginLeft5" data-field-id=""><span class="fas fa-trash-alt" title="<?php echo App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button></span></div></div></div></li><?php }
}
