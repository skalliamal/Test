<?php
/* Smarty version 3.1.31, created on 2019-03-28 10:03:13
  from "C:\xampp7.2\htdocs\erp-equipe\erp\layouts\basic\modules\Vtiger\Detail\Field\Base.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9c9be1ab5a88_33449253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b760689302d589a76ac2c6b60251e13cdaaa8708' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\erp-equipe\\erp\\layouts\\basic\\modules\\Vtiger\\Detail\\Field\\Base.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9c9be1ab5a88_33449253 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Detail-Field-Base u-paragraph-m-0">
<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>

</div><?php }
}
