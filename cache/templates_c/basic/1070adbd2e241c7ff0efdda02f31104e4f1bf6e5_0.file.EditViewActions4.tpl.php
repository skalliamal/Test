<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:00:02
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Reglements/EditViewActions4.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cab2a38ab1_81943980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1070adbd2e241c7ff0efdda02f31104e4f1bf6e5' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Reglements/EditViewActions4.tpl',
      1 => 1551091599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cab2a38ab1_81943980 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-EditViewActions c-form__action-panel"><button class="btn btn-success" type="submit" name="mode" id="OrderDetails" value="OrderDetails" ><span class="fa fa-print"></span><strong>Rechercher</strong></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['REGLEMENT']->value) {?><button class="btn btn-success" type="submit" name="mode" id="OrderDetails" value="Accompte" ><span class="fa fa-print"></span><strong>Accompte</strong></button><?php }?></div>
<?php }
}
