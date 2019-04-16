<?php
/* Smarty version 3.1.31, created on 2019-03-26 14:36:14
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/TimeControlProcesses/Index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9a38de491098_41322370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2b9b84a6233eef5ae1f5f8674d1b72e460de1a6' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/TimeControlProcesses/Index.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9a38de491098_41322370 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="processesContainer"><div class="widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<h5><?php echo \App\Language::translate('LBL_TIMECONTROL_PROCESSES_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5></div></div><ul id="tabs" class="nav nav-tabs mt-1" data-tabs="tabs"><li class="nav-item"><a class="nav-link active" href="#general" data-toggle="tab"><?php echo \App\Language::translate('LBL_GENERAL_SETTINGS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li><li class="nav-item"><a href="#timeControlWidget" class="nav-link" data-toggle="tab"><?php echo \App\Language::translate('LBL_TIME_CONTROL_WIDGET',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li></ul><br /><div class="tab-content"><div class='editViewContainer tab-pane active' id="general" data-type="general"><?php $_smarty_tpl->_assignInScope('GENERAL_FIELDS', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('general'));
?><div class="btn-group-toggle" data-toggle="buttons"><label class="btn <?php if ($_smarty_tpl->tpl_vars['GENERAL_FIELDS']->value['oneDay'] == 'true') {?>btn-success active<?php } else { ?>btn-light<?php }?> btn-block"><input autocomplete="off" type="checkbox" name="oneDay" <?php if ($_smarty_tpl->tpl_vars['GENERAL_FIELDS']->value['oneDay'] == 'true') {?>checked<?php }?>><?php echo \App\Language::translate('LBL_ONEDAY_VALID',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="far <?php if ($_smarty_tpl->tpl_vars['GENERAL_FIELDS']->value['oneDay'] == 'true') {?>fa-check-square<?php } else { ?>fa-square<?php }?> float-left"></span></label><label class="btn <?php if ($_smarty_tpl->tpl_vars['GENERAL_FIELDS']->value['timeOverlap'] == 'true') {?>btn-success active<?php } else { ?>btn-light<?php }?> btn-block"><input autocomplete="off" type="checkbox" name="timeOverlap" <?php if ($_smarty_tpl->tpl_vars['GENERAL_FIELDS']->value['timeOverlap'] == 'true') {?>checked<?php }?>><?php echo \App\Language::translate('LBL_TIMEOVERLAP_VALID',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="far <?php if ($_smarty_tpl->tpl_vars['GENERAL_FIELDS']->value['timeOverlap'] == 'true') {?>fa-check-square<?php } else { ?>fa-square<?php }?> float-left"></span></label></div></div><div class="tab-pane editViewContainer" id="timeControlWidget" data-type="timeControlWidget"><div class="alert alert-info" role="alert"><?php echo \App\Language::translate('LBL_TCW_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php $_smarty_tpl->_assignInScope('TCW_FIELDS', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('timeControlWidget'));
?><div class="btn-group-toggle" data-toggle="buttons"><label class="btn <?php if ($_smarty_tpl->tpl_vars['TCW_FIELDS']->value['holidays'] == 'true') {?>btn-success active<?php } else { ?>btn-light<?php }?> btn-block"><input autocomplete="off" type="checkbox" name="holidays" <?php if ($_smarty_tpl->tpl_vars['TCW_FIELDS']->value['holidays'] == 'true') {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_HOLIDAYS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="far <?php if ($_smarty_tpl->tpl_vars['TCW_FIELDS']->value['holidays'] == 'true') {?>fa-check-square<?php } else { ?>fa-square<?php }?> float-left"></span></label><label class="btn <?php if ($_smarty_tpl->tpl_vars['TCW_FIELDS']->value['workingDays'] == 'true') {?>btn-success active<?php } else { ?>btn-light<?php }?> btn-block"><input autocomplete="off" type="checkbox" name="workingDays" <?php if ($_smarty_tpl->tpl_vars['TCW_FIELDS']->value['workingDays'] == 'true') {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_WORKING_DAYS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="far <?php if ($_smarty_tpl->tpl_vars['TCW_FIELDS']->value['workingDays'] == 'true') {?>fa-check-square<?php } else { ?>fa-square<?php }?> float-left"></span></label><label class="btn <?php if ($_smarty_tpl->tpl_vars['TCW_FIELDS']->value['workingTime'] == 'true') {?>btn-success active<?php } else { ?>btn-light<?php }?> btn-block"><input autocomplete="off" type="checkbox" name="workingTime" <?php if ($_smarty_tpl->tpl_vars['TCW_FIELDS']->value['workingTime'] == 'true') {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_WORKING_TIME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="far <?php if ($_smarty_tpl->tpl_vars['TCW_FIELDS']->value['workingTime'] == 'true') {?>fa-check-square<?php } else { ?>fa-square<?php }?> float-left"></span></label></div></div></div></div><?php }
}
