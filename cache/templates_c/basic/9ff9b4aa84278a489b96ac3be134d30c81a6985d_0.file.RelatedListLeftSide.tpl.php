<?php
/* Smarty version 3.1.31, created on 2019-03-11 08:53:21
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Contacts/RelatedListLeftSide.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c862201193eb9_31249252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ff9b4aa84278a489b96ac3be134d30c81a6985d' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Contacts/RelatedListLeftSide.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c862201193eb9_31249252 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['IS_FAVORITES']->value) {
$_smarty_tpl->_assignInScope('RECORD_IS_FAVORITE', (int)in_array($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId(),$_smarty_tpl->tpl_vars['FAVORITES']->value));
?><div><a class="favorites btn btn-light btn-sm" role="button" data-state="<?php echo $_smarty_tpl->tpl_vars['RECORD_IS_FAVORITE']->value;?>
"><span title="<?php echo \App\Language::translate('LBL_REMOVE_FROM_FAVORITES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fas fa-star  <?php if (!$_smarty_tpl->tpl_vars['RECORD_IS_FAVORITE']->value) {?>d-none<?php }?>"></span><span title="<?php echo \App\Language::translate('LBL_ADD_TO_FAVORITES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="far fa-star  <?php if ($_smarty_tpl->tpl_vars['RECORD_IS_FAVORITE']->value) {?>d-none<?php }?>"></span></a></div><?php }
$_smarty_tpl->_assignInScope('LINKS', $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getRecordRelatedListViewLinksLeftSide($_smarty_tpl->tpl_vars['VIEW_MODEL']->value));
if (count($_smarty_tpl->tpl_vars['LINKS']->value) > 0) {
$_smarty_tpl->_assignInScope('ONLY_ONE', count($_smarty_tpl->tpl_vars['LINKS']->value) == 1);
?><div class="actions"><?php if ($_smarty_tpl->tpl_vars['ONLY_ONE']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'listViewBasic'), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?><div class="dropright u-remove-dropdown-icon"><button class="btn btn-sm btn-light toolsAction dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-wrench" title="<?php echo \App\Language::translate('LBL_ACTIONS');?>
"></span></button><div class="dropdown-menu" aria-label="<?php echo \App\Language::translate('LBL_ACTIONS');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'listViewBasic'), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div><?php }?></div><?php }
if (AppConfig::module('ModTracker','UNREVIEWED_COUNT') && $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->isPermitted('ReviewingUpdates') && $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->isTrackingEnabled() && $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isViewable()) {?><div><a href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getUpdatesUrl();?>
" class="unreviewed alignMiddle d-none" aria-label="<?php echo \App\Language::translate('LBL_NOTIFICATIONS');?>
"><span class="badge bgDanger all" title="<?php echo \App\Language::translate('LBL_NUMBER_UNREAD_CHANGES','ModTracker');?>
" aria-label="<?php echo \App\Language::translate('LBL_NUMBER_UNREAD_CHANGES','ModTracker');?>
"></span><span class="badge bgBlue mail noLeftRadius noRightRadius" title="<?php echo \App\Language::translate('LBL_NUMBER_UNREAD_MAILS','ModTracker');?>
" aria-label="<?php echo \App\Language::translate('LBL_NUMBER_UNREAD_MAILS','ModTracker');?>
"></span></a></div><?php }
}
}
