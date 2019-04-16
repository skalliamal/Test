<?php
/* Smarty version 3.1.31, created on 2019-03-06 10:06:19
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Menu/fields/Newwindow.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c7f9b9b816751_48108492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd992b7a5b868a1aca862171effe6cccd0a43ac7d' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Menu/fields/Newwindow.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7f9b9b816751_48108492 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="form-group row">
	<label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_NEW_WINDOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
	<div class="col-md-7 checkboxForm">
		<input name="newwindow" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['RECORD']->value && $_smarty_tpl->tpl_vars['RECORD']->value->get('newwindow') == 1) {?> checked="checked" <?php }?>/>
	</div>
</div>
<?php }
}
