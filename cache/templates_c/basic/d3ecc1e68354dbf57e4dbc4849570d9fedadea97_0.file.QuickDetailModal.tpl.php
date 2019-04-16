<?php
/* Smarty version 3.1.31, created on 2019-03-12 09:55:57
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/QuickDetailModal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c87822d464600_06651393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3ecc1e68354dbf57e4dbc4849570d9fedadea97' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/QuickDetailModal.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c87822d464600_06651393 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-QuickDetailModal modal-body col-md-12 js-show-scroll" data-js="perfectscrollbar"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><div class="quickDetailContent"><div class="row"><div class="col-md-12"><div class="moduleIcon"><span class="o-detail__icon js-detail__icon userIcon-<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"></span></div><div class="paddingLeft5px"><h4 class="recordLabel u-text-ellipsis pushDown marginbottomZero" title='<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
'><span class="modCT_<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
</span></h4><?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value) {?><div class="paddingLeft5px"><span class="muted"><?php echo \App\Language::translate('Assigned To',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
: <?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('assigned_user_id');
$_smarty_tpl->_assignInScope('SHOWNERS', $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('shownerid'));
if ($_smarty_tpl->tpl_vars['SHOWNERS']->value != '') {?><br /><?php echo \App\Language::translate('Share with users',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['SHOWNERS']->value;
}?></span></div><?php }?></div></div></div><div class="row"><div class="col-md-12"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS']->value, 'WIDGET', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['WIDGET']->value) {
?><div class="quickDetailWidget"><?php if ($_smarty_tpl->tpl_vars['WIDGET']->value['title']) {?><h4><?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['title'];?>
</h4><?php }?><div><?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['content'];?>
</div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div></div></div>
<?php }
}
