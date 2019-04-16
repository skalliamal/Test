<?php
/* Smarty version 3.1.31, created on 2019-03-04 15:39:57
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Inventory/Config.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c7d46cd1b51c4_29508744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31145a2692f1733c95ddd93442751808f45d670d' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Inventory/Config.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7d46cd1b51c4_29508744 (Smarty_Internal_Template $_smarty_tpl) {
?>

<input type="hidden" id="view" value="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
" /><div class="" id="inventoryConfig"><div class="widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo \App\Language::translate($_smarty_tpl->tpl_vars['PAGE_LABELS']->value['description'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><div class="alert alert-info"><h5 class="alert-heading"><?php echo \App\Language::translate('LBL_ALERT_TAX_CONFIG_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><p><?php echo \App\Language::translateArgs('LBL_ALERT_TAX_CONFIG_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,AppConfig::main('site_URL'));?>
</p></div><div class="contents mt-3 form-horizontal"><div class="form-group form-row"><?php $_smarty_tpl->_assignInScope('LABEL_CHECKBOX', 'LBL_YES');
if (!$_smarty_tpl->tpl_vars['CONFIG']->value['active']) {
$_smarty_tpl->_assignInScope('LABEL_CHECKBOX', 'LBL_NO');
}?><label class="col-md-3 col-form-label u-text-small-bold text-md-right form-control-plaintext"><?php echo \App\Language::translate('LBL_ARE_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-md-6 btn-group-toggle" data-toggle="buttons"><label class="btn <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['active']) {?>btn-success active<?php } else { ?>btn-light<?php }?>"><input autocomplete="off" type="checkbox" name="active" <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['active']) {?>checked<?php }?>><span class="text">&nbsp;&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL_CHECKBOX']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><span class="far <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['active']) {?>fa-check-square<?php } else { ?>fa-square<?php }?> float-left"></span></label></div></div><div class="form-group form-row"><label class="col-md-3 u-text-small-bold col-form-label text-md-right form-control-plaintext"><?php echo \App\Language::translate('LBL_SUMMATION_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-md-6"><select class="select2" name="aggregation"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_Inventory_Module_Model::getPicklistValues('aggregation'), 'LABEL', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['KEY']->value == $_smarty_tpl->tpl_vars['CONFIG']->value['aggregation']) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="form-group form-row"><?php if ($_smarty_tpl->tpl_vars['VIEW']->value == 'DiscountConfiguration') {
$_smarty_tpl->_assignInScope('FIELD', 'discounts');
} else {
$_smarty_tpl->_assignInScope('FIELD', 'taxs');
}
$_smarty_tpl->_assignInScope('FIELD_VALUE', explode(',',$_smarty_tpl->tpl_vars['CONFIG']->value[$_smarty_tpl->tpl_vars['FIELD']->value]));
?><label class="col-md-3 col-form-label u-text-small-bold text-md-right form-control-plaintext"><?php echo \App\Language::translate(('LBL_AVAILABLE_').(strtoupper($_smarty_tpl->tpl_vars['FIELD']->value)),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-md-6"><select class="select2" multiple name="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value;?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_Inventory_Module_Model::getPicklistValues($_smarty_tpl->tpl_vars['FIELD']->value), 'LABEL', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['KEY']->value,$_smarty_tpl->tpl_vars['FIELD_VALUE']->value)) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div></div>
<?php }
}
