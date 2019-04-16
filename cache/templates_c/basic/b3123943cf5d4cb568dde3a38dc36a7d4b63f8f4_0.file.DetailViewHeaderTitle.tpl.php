<?php
/* Smarty version 3.1.31, created on 2019-02-27 15:49:39
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Accounts/DetailViewHeaderTitle.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c76b19350bc43_72592859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3123943cf5d4cb568dde3a38dc36a7d4b63f8f4' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Accounts/DetailViewHeaderTitle.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c76b19350bc43_72592859 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col-md-12 pr-0 row"><div class="col-12 col-sm-12 col-md-8"><div class="moduleIcon"><?php if (AppConfig::module($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'COUNT_IN_HIERARCHY')) {?><span class="hierarchy"><span class="badge <?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('active')) {?> bgGreen <?php } else { ?> bgOrange <?php }?>"></span></span><?php }?><span class="o-detail__icon js-detail__icon u-cursor-pointer userIcon-<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"></span></div><div class="paddingLeft5px"><h4 class="recordLabel u-text-ellipsis pushDown marginbottomZero" title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
"><span class="modCT_<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
</span><?php $_smarty_tpl->_assignInScope('RECORD_STATE', \App\Record::getState($_smarty_tpl->tpl_vars['RECORD']->value->getId()));
if ($_smarty_tpl->tpl_vars['RECORD_STATE']->value !== 'Active') {?>&nbsp;&nbsp;<?php $_smarty_tpl->_assignInScope('COLOR', AppConfig::search('LIST_ENTITY_STATE_COLOR'));
?><span class="badge badge-secondary" <?php if ($_smarty_tpl->tpl_vars['COLOR']->value[$_smarty_tpl->tpl_vars['RECORD_STATE']->value]) {?>style="background-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value[$_smarty_tpl->tpl_vars['RECORD_STATE']->value];?>
;"<?php }?>><?php if (\App\Record::getState($_smarty_tpl->tpl_vars['RECORD']->value->getId()) === 'Trash') {
echo \App\Language::translate('LBL_ENTITY_STATE_TRASH');
} else {
echo \App\Language::translate('LBL_ENTITY_STATE_ARCHIVED');
}?></span><?php }?></h4><span class="muted"><?php echo \App\Language::translate('Assigned To',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
: <?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('assigned_user_id');
$_smarty_tpl->_assignInScope('SHOWNERS', $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('shownerid'));
if ($_smarty_tpl->tpl_vars['SHOWNERS']->value != '') {?><br /><?php echo \App\Language::translate('Share with users',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['SHOWNERS']->value;
}?></span></div></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/HeaderFields.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>
<?php }
}
