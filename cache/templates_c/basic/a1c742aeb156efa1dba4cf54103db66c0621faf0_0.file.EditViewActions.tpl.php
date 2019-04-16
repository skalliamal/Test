<?php
/* Smarty version 3.1.31, created on 2019-02-25 12:52:41
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Acomptes/EditViewActions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73e5191a1822_34823920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1c742aeb156efa1dba4cf54103db66c0621faf0' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Acomptes/EditViewActions.tpl',
      1 => 1551091599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73e5191a1822_34823920 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-EditViewActions c-form__action-panel"><button class="btn btn-success u-mr-5px" type="submit" name="mode" value="updateBordereau"><span class="fas fa-check u-mr-5px"></span><strong><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button class="btn btn-success" type="submit" name="mode" value="genererPDF" formtarget="_blank"><span class="fa fa-print"></span><strong>Generer PDF</strong></button></div>
<?php }
}
