<?php
/* Smarty version 3.1.31, created on 2019-02-18 07:12:10
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LayoutEditor/CreateInventoryFieldsStep1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c6a5aca31a450_42777765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0664fd03e57010f378921fdb41025608b419e65e' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LayoutEditor/CreateInventoryFieldsStep1.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6a5aca31a450_42777765 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal fade" tabindex="-1"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><?php echo \App\Language::translate('LBL_CREATING_INVENTORY_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><input type="hidden" id="mode" value="step1" /><div class="form-horizontal"><div class="form-group"><label class="col-md-5 col-form-label"><?php echo \App\Language::translate('LBL_SELECT_TYPE_OF_INVENTORY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label><div class="col-md-7"><select name="type" class="select2 form-control type"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODELS']->value, 'ITEM', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
if (((in_array($_smarty_tpl->tpl_vars['ITEM']->value->getColumnName(),$_smarty_tpl->tpl_vars['FIELDSEXISTS']->value) && !$_smarty_tpl->tpl_vars['ITEM']->value->isOnlyOne()) || !in_array($_smarty_tpl->tpl_vars['ITEM']->value->getColumnName(),$_smarty_tpl->tpl_vars['FIELDSEXISTS']->value)) && in_array($_smarty_tpl->tpl_vars['BLOCK']->value,$_smarty_tpl->tpl_vars['ITEM']->value->getBlocks())) {?><option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value->getName();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value->getDefaultLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div><div class="well well-small"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODELS']->value, 'ITEM', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
if (((in_array($_smarty_tpl->tpl_vars['ITEM']->value->getColumnName(),$_smarty_tpl->tpl_vars['FIELDSEXISTS']->value) && !$_smarty_tpl->tpl_vars['ITEM']->value->isOnlyOne()) || !in_array($_smarty_tpl->tpl_vars['ITEM']->value->getColumnName(),$_smarty_tpl->tpl_vars['FIELDSEXISTS']->value)) && in_array($_smarty_tpl->tpl_vars['BLOCK']->value,$_smarty_tpl->tpl_vars['ITEM']->value->getBlocks())) {?><h5><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value->getDefaultLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><p><?php echo \App\Language::translate(($_smarty_tpl->tpl_vars['ITEM']->value->getDefaultLabel()).('_DESC'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p><hr /><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div><div class="modal-footer"><div class="float-right cancelLinkContainer"><button class="btn btn-success nextButton" type="submit"><strong><?php echo \App\Language::translate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn cancelLink btn-warning" type="reset" data-dismiss="modal"><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></div></div></div>
<?php }
}
