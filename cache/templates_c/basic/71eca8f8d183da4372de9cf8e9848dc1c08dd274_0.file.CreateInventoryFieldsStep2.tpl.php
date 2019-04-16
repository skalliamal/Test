<?php
/* Smarty version 3.1.31, created on 2019-02-18 07:13:24
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LayoutEditor/CreateInventoryFieldsStep2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c6a5b14aec7e6_73066092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71eca8f8d183da4372de9cf8e9848dc1c08dd274' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LayoutEditor/CreateInventoryFieldsStep2.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6a5b14aec7e6_73066092 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal fade" tabindex="-1"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><?php if (is_array($_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value)) {
$_smarty_tpl->_assignInScope('FIELD_INSTANCE', current($_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value));
?><h5 class="modal-title"><?php echo \App\Language::translate('LBL_EDITING_INVENTORY_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><?php } else { ?><h5 class="modal-title"><?php echo \App\Language::translate('LBL_CREATING_INVENTORY_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><?php }?><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><form class="form-horizontal"><div class="modal-body"><input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" /><input type="hidden" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getName();?>
" /><div class="form-group"><label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_NAME_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label><div class="col-md-7 form-control-plaintext"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><?php ob_start();
echo $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getName();
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath((('inventoryTypes/').($_prefixVariable1)).('.tpl'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Modals/Footer.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?>
</form></div></div></div>
<?php }
}
