<?php
/* Smarty version 3.1.31, created on 2019-03-04 15:39:22
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Calendar/CalendarViewPostProcess.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c7d46aaad4143_96930887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14094e0357b595a5ed92aba8072114a880c39778' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Calendar/CalendarViewPostProcess.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7d46aaad4143_96930887 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-CalendarViewPostProcess <?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('leftpanelhide')) {?>c-menu--open <?php }?>siteBarRight calendarRightPanel col-12 hideSiteBar"data-showPanel="<?php if (!AppConfig::module($_smarty_tpl->tpl_vars['MODULE']->value,'SHOW_RIGHT_PANEL')) {?>0<?php } else { ?>1<?php }?>" id="rightPanel"><div class="btn btn-block toggleSiteBarRightButton hideToggleSiteBarRightButton d-none d-lg-block" title="<?php echo \App\Language::translate('LBL_RIGHT_PANEL_SHOW_HIDE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><span class="fas fa-chevron-left"></span></div><div class="siteBarContent pt-4"><?php if ($_smarty_tpl->tpl_vars['CALENDAR_FILTERS']->value->isActive()) {?><div class="c-panel bg-primary calendarFilters"><div class="c-panel__header quickWidgetHeaderc px-3"><h5 class="card-title h6 text-white o-label-container col-xl-5" title="<?php echo \App\Language::translate('LBL_CALENDAR_FILTERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php echo \App\Language::translate('LBL_CALENDAR_FILTERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5></div><div class="panel-collapse"><div class="card-body"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CALENDAR_FILTERS']->value->getFilters(), 'FILTER', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['FILTER']->value) {
if ($_smarty_tpl->tpl_vars['FILTER']->value->type == 'checkbox') {?><div class="checkbox m-0"><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['FILTER']->value->value;?>
"id="filterField_<?php echo $_smarty_tpl->tpl_vars['FILTER']->value->name;?>
" title="<?php echo $_smarty_tpl->tpl_vars['FILTER']->value->name;?>
"data-search="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FILTER']->value->searchParams);?>
"class="filterField"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FILTER']->value->name,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div></div><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['QUICK_LINKS']->value['SIDEBARWIDGETRIGHT'], 'SIDEBARWIDGET', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value) {
?><div class="js-toggle-panel c-panel border-info quickWidget" data-js="click"><div class="c-panel__header quickWidgetHeader bg-info"><div class="form-row align-items-center px-4"><div class="card-title h6 text-white o-label-container col-xl-5" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class="o-btn-container col-xl-7"><button class="selectAllBtn btn btn-light btn-sm"><div class="selectAll d-none"><?php echo \App\Language::translate('LBL_SELECT_ALL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class="deselectAll"><?php echo \App\Language::translate('LBL_DESELECT_ALL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></button></div></div></div><div class="widgetContainer panel-collapse" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_sideBar_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->getLabel());?>
"data-url="<?php echo $_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->getUrl();?>
"><div class="card-body"></div></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div>
<?php }
}
