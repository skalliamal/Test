<?php
/* Smarty version 3.1.31, created on 2019-03-26 14:08:52
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/CronTasks/ListViewHeader.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9a32746e3ad7_16613369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '176e9521f4bff5bdc572092f60b62b47605f6532' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/CronTasks/ListViewHeader.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9a32746e3ad7_16613369 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class=""><div class='widget_header row '><div class="col-6"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><div class="col-6 text-right"><div class="row"><div class="col"><?php echo \App\Language::translate('LBL_LAST_START',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:&nbsp; <b><?php echo $_smarty_tpl->tpl_vars['LAST_CRON']->value['laststart'];?>
</b></div></div><div class="row"><div class="col"><?php echo \App\Language::translate('LBL_TOTAL_LAST_DURATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: &nbsp;<b><?php if ($_smarty_tpl->tpl_vars['LAST_CRON']->value['duration'] === 'running') {?><i class="fa fa-spinner fa-spin" title="<?php echo \App\Language::translate('LBL_IS_RUNNING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></i><?php } elseif ($_smarty_tpl->tpl_vars['LAST_CRON']->value['duration'] === 'timeout') {?><i class="fa fa-exclamation-triangle text-danger" title="<?php echo \App\Language::translate('LBL_HAD_TIMEOUT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></i><?php } else {
echo $_smarty_tpl->tpl_vars['LAST_CRON']->value['duration'];
}?></b></div></div></div></div><div class="listViewActionsDiv row"><div class="<?php if ($_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value) {?>col-md-5<?php } else { ?>col-md-8<?php }?> btn-toolbar"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWBASIC'], 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
if ($_smarty_tpl->tpl_vars['LINK']->value->getLabel()) {
$_smarty_tpl->_assignInScope('LABEL', \App\Language::translate($_smarty_tpl->tpl_vars['LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));
}?><button type="button" title="<?php if ($_smarty_tpl->tpl_vars['LINK']->value->getLabel()) {
echo $_smarty_tpl->tpl_vars['LABEL']->value;
}?>" class="btn<?php if ($_smarty_tpl->tpl_vars['LINK']->value->getClassName()) {?> <?php echo $_smarty_tpl->tpl_vars['LINK']->value->getClassName();
} else { ?> btn-light<?php }?> <?php if ($_smarty_tpl->tpl_vars['LINK']->value->get('modalView')) {?>showModal<?php }?>"<?php if ($_smarty_tpl->tpl_vars['LINK']->value->getUrl()) {
if (stripos($_smarty_tpl->tpl_vars['LINK']->value->getUrl(),'javascript:') === 0) {?> onclick='<?php echo substr($_smarty_tpl->tpl_vars['LINK']->value->getUrl(),strlen("javascript:"));?>
;'<?php } else { ?> onclick='window.location.href = "<?php echo $_smarty_tpl->tpl_vars['LINK']->value->getUrl();?>
"' <?php }
}
if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkdata') != '' && is_array($_smarty_tpl->tpl_vars['LINK']->value->get('linkdata'))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINK']->value->get('linkdata'), 'DATA', false, 'NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['DATA']->value) {
?>data-<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
"<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>><?php if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkicon')) {?><span class="<?php echo $_smarty_tpl->tpl_vars['LINK']->value->get('linkicon');?>
"></span><?php }
if ($_smarty_tpl->tpl_vars['LINK']->value->getLabel() && $_smarty_tpl->tpl_vars['LINK']->value->get('showLabel') == 1) {?>&nbsp;<strong><?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
</strong><?php }?></button><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div><?php if ($_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value) {?><div class="col-md-3 btn-toolbar marginLeftZero"><select class="chzn-select form-control" id="moduleFilter" ><option value=""><?php echo \App\Language::translate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value, 'MODULE_MODEL', false, 'TAB_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['TAB_ID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
?><option <?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName()) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['TAB_ID']->value;?>
"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><?php }?><div class="col-md-4"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewActions.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div><div class="clearfix"></div><div class="listViewContentDiv listViewPageDiv" id="listViewContents">
<?php }
}
