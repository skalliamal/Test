<?php
/* Smarty version 3.1.31, created on 2019-03-04 15:39:22
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Calendar/CalendarView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c7d46aaa9fed2_37179874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c3c3b0a2f6a94b6786cb2b3c95c38a640712927' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Calendar/CalendarView.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7d46aaa9fed2_37179874 (Smarty_Internal_Template $_smarty_tpl) {
?>

<input type="hidden" id="currentView" value="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
"/><input type="hidden" id="activity_view" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('activity_view'));?>
"/><input type="hidden" id="time_format" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('hour_format');?>
"/><input type="hidden" id="start_hour" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('start_hour');?>
"/><input type="hidden" id="end_hour" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('end_hour');?>
"/><input type="hidden" id="date_format" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('date_format');?>
"/><input type="hidden" id="showType" value="current"/><input type="hidden" id="switchingDays" value="workDays"/><input type="hidden" id="eventLimit" value="<?php echo $_smarty_tpl->tpl_vars['EVENT_LIMIT']->value;?>
"/><input type="hidden" id="weekView" value="<?php echo $_smarty_tpl->tpl_vars['WEEK_VIEW']->value;?>
"/><input type="hidden" id="dayView" value="<?php echo $_smarty_tpl->tpl_vars['DAY_VIEW']->value;?>
"/><input type="hidden" id="hiddenDays" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode(AppConfig::module('Calendar','HIDDEN_DAYS_IN_CALENDAR_VIEW')));?>
"/><input type="hidden" id="activityStateLabels" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ACTIVITY_STATE_LABELS']->value);?>
"/><div class="calendarViewContainer rowContent"><div class="d-flex flex-md-nowrap mt-2"><div class="btn-toolbar flex-nowrap mb-1 mb-sm-0 align-items-center"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonViewLinks.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('LINKS'=>$_smarty_tpl->tpl_vars['QUICK_LINKS']->value['SIDEBARLINK'],'CLASS'=>'listViewMassActions','BTN_CLASS'=>'btn-light'), 0, true);
?>
<button class="ml-1 btn btn-light js-add u-h-fit" data-js="click"><span class="fas fa-plus mr-1"></span><?php echo \App\Language::translate('LBL_ADD_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><div class="ml-2 w-100"><div class="alert alert-info d-none mb-0" id="moduleCacheAlert" role="alert"><div class="d-flex"><div class="mr-auto align-self-center"><?php echo \App\Language::translate('LBL_CACHE_SELECTED_FILTERS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</div><button type="button" class="btn btn-warning btn-sm cacheClear px-2"><?php echo \App\Language::translate('LBL_CACHE_CLEAR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button><button type="button" class="close px-2 pb-1" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div></div></div></div><div class="o-calendar-container"><div id="calendarview"></div></div></div>
<?php }
}
