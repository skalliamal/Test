<?php
/* Smarty version 3.1.31, created on 2019-03-08 12:08:26
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Contacts/DetailViewHeaderTitle.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c825b3a4e6a81_69842748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e24a0e05c19494d3c44147d67e335be4843de11' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Contacts/DetailViewHeaderTitle.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c825b3a4e6a81_69842748 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col-md-12 row"><div class="col-12 col-sm-12 col-md-8"><div><div class="float-left spanModuleIcon moduleIcon<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><span class="moduleIcon"><?php $_smarty_tpl->_assignInScope('IMAGE', $_smarty_tpl->tpl_vars['RECORD']->value->getImage());
if ($_smarty_tpl->tpl_vars['IMAGE']->value) {?><img class="pushDown" title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
" height="80" align="left" src="<?php echo $_smarty_tpl->tpl_vars['IMAGE']->value['url'];?>
"><br/><?php } else { ?><span class="pl-0 o-detail__icon js-detail__icon userIcon-<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"></span><?php }?></span></div><h4 class="recordLabel pushDown marginbottomZero u-text-ellipsis" title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('salutationtype',$_smarty_tpl->tpl_vars['RECORD']->value->getId(),true);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
"><?php if ($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('salutationtype')) {?><span class="salutation"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('salutationtype');?>
</span>&nbsp;<?php }?><span class="modCT_<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
</span><?php $_smarty_tpl->_assignInScope('RECORD_STATE', \App\Record::getState($_smarty_tpl->tpl_vars['RECORD']->value->getId()));
if ($_smarty_tpl->tpl_vars['RECORD_STATE']->value !== 'Active') {?>&nbsp;&nbsp;<?php $_smarty_tpl->_assignInScope('COLOR', AppConfig::search('LIST_ENTITY_STATE_COLOR'));
?><span class="badge badge-secondary" <?php if ($_smarty_tpl->tpl_vars['COLOR']->value[$_smarty_tpl->tpl_vars['RECORD_STATE']->value]) {?>style="background-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value[$_smarty_tpl->tpl_vars['RECORD_STATE']->value];?>
;"<?php }?>><?php if (\App\Record::getState($_smarty_tpl->tpl_vars['RECORD']->value->getId()) === 'Trash') {
echo \App\Language::translate('LBL_ENTITY_STATE_TRASH');
} else {
echo \App\Language::translate('LBL_ENTITY_STATE_ARCHIVED');
}?></span><?php }?></h4></div><div class="paddingLeft5px"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('parent_id');?>
<div><span class="muted"><?php echo \App\Language::translate('Assigned To',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
: <?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('assigned_user_id');
$_smarty_tpl->_assignInScope('SHOWNERS', $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('shownerid'));
if ($_smarty_tpl->tpl_vars['SHOWNERS']->value != '') {?><br /><?php echo \App\Language::translate('Share with users',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['SHOWNERS']->value;
}?></span></div></div></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/HeaderFields.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>
<?php }
}
