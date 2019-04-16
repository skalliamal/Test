<?php
/* Smarty version 3.1.31, created on 2019-03-08 12:08:26
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Detail/Field/Salutation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c825b3a5163f9_82543699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05f01dce4af588f07a8f64bb28e74a239e90ea43' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Detail/Field/Salutation.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c825b3a5163f9_82543699 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Edit-Field-Salutation"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('salutationtype');?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>
</div>
<?php }
}
