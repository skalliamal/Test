<?php
/* Smarty version 3.1.31, created on 2019-03-04 15:39:54
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Inventory/Index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c7d46ca30fd44_17233342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19b508403ad88b7b54951d16246894e487da06a6' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Inventory/Index.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7d46ca30fd44_17233342 (Smarty_Internal_Template $_smarty_tpl) {
?>

<input type="hidden" id="view" value="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
" /><div class="tpl-Settings-Inventory-Index" id="inventory"><div class="widget_header form-row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo \App\Language::translate($_smarty_tpl->tpl_vars['PAGE_LABELS']->value['description'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><?php if ($_smarty_tpl->tpl_vars['VIEW']->value == 'CreditLimits') {
$_smarty_tpl->_assignInScope('CURRENCY_BOOL', true);
?><input type="hidden" id="currency" value='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['CURRENCY']->value);?>
' /><div class="alert alert-info mb-2"><a href="#" class="close" data-dismiss="alert">&times;</a><?php echo \App\Language::translate('LBL_CREDITLIMITS_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php }?><div class="contents form-row"><div class="col-md-12"><?php $_smarty_tpl->_assignInScope('WIDTHTYPE', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'));
?><button type="button" class="btn btn-success addInventory my-2" data-url="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getCreateUrl();?>
" data-type="0"><i class="fas fa-plus"></i>&nbsp;<?php echo \App\Language::translate('LBL_ADD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PAGE_LABELS']->value['title_single'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><table class="table tableRWD table-bordered inventoryTable themeTableColor"><thead><tr class="blockHeader"><th class="themeTextColor textAlignCenter <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo \App\Language::translate('LBL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="themeTextColor textAlignCenter <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo \App\Language::translate('LBL_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="themeTextColor textAlignCenter <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo \App\Language::translate('LBL_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="themeTextColor textAlignCenter <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo \App\Language::translate('LBL_DEFAULT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_DATA']->value, 'RECORD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RECORD']->value) {
?><tr class="opacity" data-id="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"><td class="textAlignCenter <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="name"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
</label></td><td class="textAlignCenter <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><span class="value"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getValue();?>
 <?php if (!$_smarty_tpl->tpl_vars['CURRENCY_BOOL']->value) {?>%<?php } else {
echo $_smarty_tpl->tpl_vars['CURRENCY']->value['currency_symbol'];
}?></span></td><td class="textAlignCenter <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><input type="checkbox" data-field-name="status" class="status js-update-field" <?php if (!$_smarty_tpl->tpl_vars['RECORD']->value->getStatus()) {?>checked<?php }?> /></td><td class="textAlignCenter <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><input type="checkbox" data-field-name="default" class="default js-update-field" <?php if ($_smarty_tpl->tpl_vars['RECORD']->value->getDefault()) {?>checked<?php }?> /><div class="float-right actions"><button class="btn btn-info btn-sm text-white editInventory u-cursor-pointer" data-url="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getEditUrl();?>
"><span title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fas fa-edit alignBottom"></span></button>&nbsp;<button class="removeInventory u-cursor-pointer btn btn-danger btn-sm text-white" data-url="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getEditUrl();?>
"><span title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fas fa-trash-alt alignBottom"></span></button>&nbsp;</div></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table></div></div></div>
<?php }
}
