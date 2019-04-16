<?php
/* Smarty version 3.1.31, created on 2019-03-28 10:12:27
  from "C:\xampp7.2\htdocs\erp-equipe\erp\layouts\basic\modules\Vtiger\Modals\Footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9c9e0bce8962_83702297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c86309b88f5cdce561ee3c57818ecf9d71b2f9fe' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\erp-equipe\\erp\\layouts\\basic\\modules\\Vtiger\\Modals\\Footer.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9c9e0bce8962_83702297 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Modals-Footer modal-footer"><?php if ($_smarty_tpl->tpl_vars['BTN_SUCCESS']->value) {?><button class="btn btn-success" type="submit" name="saveButton" data-js="click"><span class="fas fa-check mr-1"></span><strong><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BTN_SUCCESS']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }
if ($_smarty_tpl->tpl_vars['BTN_DANGER']->value && !$_smarty_tpl->tpl_vars['LOCK_EXIT']->value) {?><button class="btn btn-danger" type="reset" data-dismiss="modal"><span class="fas fa-times mr-1"></span><strong><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BTN_DANGER']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }?></div>
<?php }
}
