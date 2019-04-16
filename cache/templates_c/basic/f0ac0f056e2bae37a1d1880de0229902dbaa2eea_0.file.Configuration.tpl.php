<?php
/* Smarty version 3.1.31, created on 2019-03-11 07:11:48
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/WidgetsManagement/Configuration.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c860a3464f5f0_54638263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0ac0f056e2bae37a1d1880de0229902dbaa2eea' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/WidgetsManagement/Configuration.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c860a3464f5f0_54638263 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tpl-Settings-WidgetsManagement-Configuration" id="widgetsManagementEditorContainer"><input id="selectedModuleName" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value;?>
" /><div class="widget_header row align-items-lg-center"><div class="col-md-9"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo \App\Language::translate('LBL_WIDGETS_MANAGEMENT_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-3"><div class="float-right col-6 col-md-6 px-0"><select class="chzn-select form-control" name="widgetsManagementEditorModules"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULES']->value, 'SUPPORTED_MODULE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['SUPPORTED_MODULE']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['SUPPORTED_MODULE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['SUPPORTED_MODULE']->value == $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SUPPORTED_MODULE']->value,$_smarty_tpl->tpl_vars['SUPPORTED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div><ul class="nav nav-tabs massEditTabs selectDashboard mb-2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DASHBOARD_TYPES']->value, 'DASHBOARD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['DASHBOARD']->value) {
?><li class="nav-item" data-id="<?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value['dashboard_id'];?>
"><a class="nav-link<?php if ($_smarty_tpl->tpl_vars['CURRENT_DASHBOARD']->value == $_smarty_tpl->tpl_vars['DASHBOARD']->value['dashboard_id']) {?> active<?php }?>" data-toggle="tab"><strong><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['DASHBOARD']->value['name']);?>
</strong><button class="btn btn-primary btn-sm ml-2 editDashboard"><span class="fas fa-edit"></span></button><?php if ($_smarty_tpl->tpl_vars['DASHBOARD']->value['system'] != 1) {?><button class="btn btn-danger btn-sm ml-2 deleteDashboard"><span class="fas fa-trash-alt"></span></button><?php }?></a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<li class="nav-item addDashboard"><a class="nav-link"><strong><span class="fas fa-plus"></span></strong></a></li></ul><div class="contents tabbable"><div class="tab-content themeTableColor overflowVisible"><div class="tab-pane active" id="layoutDashBoards"><div class="btn-toolbar mb-2"><button type="button" class="btn btn-success addBlockDashBoard btn-sm"><span class="fas fa-plus"></span>&nbsp;<?php echo \App\Language::translate('LBL_ADD_CONDITION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><div id="moduleBlocks"><input type="hidden" name="filter_date" value='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['WIDGETS_WITH_FILTER_DATE']->value);?>
'><input type="hidden" name="filter_users" value='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['WIDGETS_WITH_FILTER_USERS']->value);?>
'><input type="hidden" name="filter_restrict" value='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['RESTRICT_FILTER']->value);?>
'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DASHBOARD_AUTHORIZATION_BLOCKS']->value, 'AUTHORIZATION_INFO', false, 'AUTHORIZATION_KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['AUTHORIZATION_KEY']->value => $_smarty_tpl->tpl_vars['AUTHORIZATION_INFO']->value) {
$_smarty_tpl->_assignInScope('AUTHORIZATION_NAME', $_smarty_tpl->tpl_vars['AUTHORIZATION_INFO']->value['name']);
?><div id="block_<?php echo $_smarty_tpl->tpl_vars['AUTHORIZATION_KEY']->value;?>
" class="editFieldsTable block_<?php echo $_smarty_tpl->tpl_vars['AUTHORIZATION_KEY']->value;?>
 mb-2 border1px blockSortable bg-white" data-block-id="<?php echo $_smarty_tpl->tpl_vars['AUTHORIZATION_KEY']->value;?>
" data-sequence="" data-code="<?php echo $_smarty_tpl->tpl_vars['AUTHORIZATION_INFO']->value['code'];?>
" style="border-radius: 4px 4px 0px 0px;"><div class="row layoutBlockHeader m-0"><div class="blockLabel col-sm-5 p-2 "><span class="ml-3"><strong><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['AUTHORIZATION_NAME']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</strong></span></div><div class="col-sm-7 ml-0 float-right"><div class="float-right btn-toolbar blockActions m-1"><div class="btn-group"><button class="btn btn-success btn-sm addCustomField" type="button"><span class="fas fa-plus"></span>&nbsp;<strong><?php echo \App\Language::translate('LBL_ADD_WIDGET',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><?php if ($_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['Rss']) {
$_smarty_tpl->_assignInScope('RSS_WIDGET', $_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['Rss']);
?><div class="btn-group ml-1"><button class="btn btn-success btn-sm addRss" type="button" data-url="<?php echo $_smarty_tpl->tpl_vars['RSS_WIDGET']->value->getUrl();?>
" data-linkid="<?php echo $_smarty_tpl->tpl_vars['RSS_WIDGET']->value->get('linkid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['RSS_WIDGET']->value->getName();?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['RSS_WIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['RSS_WIDGET']->value->getHeight();?>
" data-block-id="<?php echo $_smarty_tpl->tpl_vars['AUTHORIZATION_KEY']->value;?>
"><span class="fas fa-plus"></span><strong><?php echo \App\Language::translate('LBL_ADD_RSS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><?php }
if ($_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['Mini List']) {
$_smarty_tpl->_assignInScope('MINILISTWIDGET', $_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['Mini List']);
?><div class="btn-group ml-1"><button class="btn btn-success btn-sm addMiniList" type="button" data-url="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getUrl();?>
" data-linkid="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->get('linkid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getName();?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getHeight();?>
" data-block-id="<?php echo $_smarty_tpl->tpl_vars['AUTHORIZATION_KEY']->value;?>
"><span class="fas fa-plus"></span><strong><?php echo \App\Language::translate('LBL_ADD_MINILIST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><?php }
if ($_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['ChartFilter']) {
$_smarty_tpl->_assignInScope('CHART_FILTER_WIDGET', $_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['ChartFilter']);
?><div class="btn-group ml-1"><button class="btn btn-success btn-sm addChartFilter" type="button" data-url="<?php echo $_smarty_tpl->tpl_vars['CHART_FILTER_WIDGET']->value->getUrl();?>
" data-linkid="<?php echo $_smarty_tpl->tpl_vars['CHART_FILTER_WIDGET']->value->get('linkid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['CHART_FILTER_WIDGET']->value->getName();?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['CHART_FILTER_WIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['CHART_FILTER_WIDGET']->value->getHeight();?>
" data-block-id="<?php echo $_smarty_tpl->tpl_vars['AUTHORIZATION_KEY']->value;?>
"><span class="fas fa-plus"></span>&nbsp;<strong><?php echo \App\Language::translate('LBL_ADD_CHART_FILTER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><?php }
if ($_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['Notebook']) {
$_smarty_tpl->_assignInScope('NOTEBOOKWIDGET', $_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['Notebook']);
?><div class="btn-group ml-1"><button class="btn btn-success btn-sm addNotebook" type="button" data-url="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getUrl();?>
" data-linkid="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->get('linkid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getName();?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getHeight();?>
" data-block-id="<?php echo $_smarty_tpl->tpl_vars['AUTHORIZATION_KEY']->value;?>
"><span class="fas fa-plus"></span><strong><?php echo \App\Language::translate('LBL_ADD_NOTEBOOK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><?php }?><div class="btn-group actions ml-1"><a href="javascript:void(0)" class="deleteCustomBlock btn btn-sm btn-danger" ><span class="fas fa-trash-alt alignMiddle" title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a></div></div></div></div><div class="blockFieldsList blockFieldsSortable row p-1" style="min-height: 27px"><ul name="sortable1" class="connectedSortable col-md-6 p-1" style="list-style-type: none; min-height: 1px;"><?php $_smarty_tpl->_assignInScope('WIDGETS_AUTHORIZATION', $_smarty_tpl->tpl_vars['WIDGETS_AUTHORIZATION_INFO']->value[$_smarty_tpl->tpl_vars['AUTHORIZATION_KEY']->value]);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS_AUTHORIZATION']->value, 'WIDGET_MODEL', false, NULL, 'fieldlist', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist']->value['index']++;
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist']->value['index'] : null)%2 == 0) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('WidgetConfig.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul><ul name="sortable2" class="connectedSortable col-md-6 m-0 p-1" style="list-style-type: none; min-height: 1px;"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS_AUTHORIZATION']->value, 'WIDGET_MODEL', false, NULL, 'fieldlist1', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist1']->value['index']++;
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist1']->value['index'] : null)%2 != 0) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('WidgetConfig.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div><div class="modal addBlockDashBoardModal fade"><div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><span class="fas fa-plus mr-1"></span><?php echo \App\Language::translate('LBL_ADD_DASHBOARD_BLOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><form class="form-horizontal addBlockDashBoardForm"><input type="hidden" name="dashboardId" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_DASHBOARD']->value;?>
"><div class="modal-body"><div class="form-group row"><div class="col-sm-4 col-form-label text-right"><span><?php echo \App\Language::translate('LBL_CHOISE_AUTHORIZED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><span class="redColor">*</span></div><div class="col-sm-6 controls"><select class="authorized form-control validateForm mb-0" name="authorized" data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_AUTHORIZATION']->value, 'AUTHORIZED', false, 'AUTHORIZED_CODE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['AUTHORIZED_CODE']->value => $_smarty_tpl->tpl_vars['AUTHORIZED']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['AUTHORIZED_CODE']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['AUTHORIZED']->value->get('rolename');?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['AUTHORIZED']->value->get('rolename'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div><?php $_smarty_tpl->_subTemplateRender(App\Layout::getTemplatePath('Modals/Footer.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?>
</form></div></div></div><div class="newCustomBlockCopy d-none mb-2 border1px blockSortable bg-white" data-block-id="" data-sequence="" style="border-radius: 4px 4px 0px 0px;"><div class="row layoutBlockHeader m-0"><div class="blockLabel col-md-5 p-2 "><span class="ml-3"></span></div><div class="col-md-6 ml-0 float-right"><div class="float-right btn-toolbar blockActions m-1"><div class="btn-group"><button class="btn btn-success btn-sm addCustomField d-none" type="button"><span class="fas fa-plus"></span>&nbsp;<strong><?php echo \App\Language::translate('LBL_ADD_WIDGET',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><?php if ($_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['Rss']) {
$_smarty_tpl->_assignInScope('RSS_WIDGET', $_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['Rss']);
?><div class="btn-group"><button class="btn btn-success btn-sm addRss specialWidget" type="button" data-url="<?php echo $_smarty_tpl->tpl_vars['RSS_WIDGET']->value->getUrl();?>
" data-linkid="<?php echo $_smarty_tpl->tpl_vars['RSS_WIDGET']->value->get('linkid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['RSS_WIDGET']->value->getName();?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['RSS_WIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['RSS_WIDGET']->value->getHeight();?>
" data-block-id=""><span class="fas fa-plus"></span><strong><?php echo \App\Language::translate('LBL_ADD_RSS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><?php }
if ($_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['Mini List']) {
$_smarty_tpl->_assignInScope('MINILISTWIDGET', $_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['Mini List']);
?><div class="btn-group"><button class="btn btn-success btn-sm addMiniList specialWidget" type="button" data-url="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getUrl();?>
" data-linkid="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->get('linkid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getName();?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getHeight();?>
" data-block-id=""><span class="fas fa-plus"></span>&nbsp;<strong><?php echo \App\Language::translate('LBL_ADD_MINILIST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><?php }
if ($_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['ChartFilter']) {
$_smarty_tpl->_assignInScope('CHART_FILTER_WIDGET', $_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['ChartFilter']);
?><div class="btn-group"><button class="btn btn-success btn-sm addChartFilter specialWidget" type="button" data-url="<?php echo $_smarty_tpl->tpl_vars['CHART_FILTER_WIDGET']->value->getUrl();?>
" data-linkid="<?php echo $_smarty_tpl->tpl_vars['CHART_FILTER_WIDGET']->value->get('linkid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['CHART_FILTER_WIDGET']->value->getName();?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['CHART_FILTER_WIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['CHART_FILTER_WIDGET']->value->getHeight();?>
" data-block-id=""><span class="fas fa-plus"></span>&nbsp;<strong><?php echo \App\Language::translate('LBL_ADD_CHART_FILTER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><?php }
if ($_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['Notebook']) {
$_smarty_tpl->_assignInScope('NOTEBOOKWIDGET', $_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['Notebook']);
?><div class="btn-group"><button class="btn btn-success btn-sm addNotebook specialWidget" type="button" data-url="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getUrl();?>
" data-linkid="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->get('linkid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getName();?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getHeight();?>
" data-block-id=""><span class="fas fa-plus"></span>&nbsp;<strong><?php echo \App\Language::translate('LBL_ADD_NOTEBOOK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><?php }?><div class="btn-group actions"><a href="javascript:void(0)" class="deleteCustomBlock btn btn-sm btn-danger" ><span class="fas fa-trash-alt alignMiddle" title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a></div></div></div></div><div class="blockFieldsList row blockFieldsSortable p-1" style="min-height: 27px"><ul class="connectedSortable col-md-6 ui-sortable float-left p-1" style="list-style-type: none; min-height:1px;" name="sortable1"></ul><ul class="connectedSortable col-md-6 ui-sortable m-0 float-left p-1" style="list-style-type: none; min-height:1px;" name="sortable2"></ul></div></div><div class="modal createFieldModal fade" tabindex="-1"><div class="modal-dialog"><div class="modal-content"><div class="modal-header contentsBackground"><h5 class="modal-title"><?php echo \App\Language::translate('LBL_CREATE_CUSTOM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
">&times;</span></button></div><form class="form-horizontal createCustomFieldForm" method="POST"><div class="modal-body"><div class="form-group"><div class="col-md-3 col-form-label"><?php echo \App\Language::translate('LBL_SELECT_WIDGET',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select class="widgets form-control" name="widgets" data-validation-engine="validate[required]" ><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS']->value, 'WIDGET');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['WIDGET']->value) {
if (array_key_exists($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value)) {
continue 1;
}?><option value="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('linklabel');?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="form-group"><div class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_WIDTH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-2"><select class="width form-control float-left" name="width"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SIZE']->value['width'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['DEFAULTVALUES']->value['width'] == $_smarty_tpl->tpl_vars['item']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><div class="col-sm-3 col-form-label" style="width:135px"><?php echo \App\Language::translate('LBL_HEIGHT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-2"><select class="height form-control float-left" name="height" ><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SIZE']->value['height'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['DEFAULTVALUES']->value['height'] == $_smarty_tpl->tpl_vars['item']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="form-group"><div class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_MANDATORY_WIDGET',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-2 controls"><input type="checkbox" name="isdefault" ></div></div><div class="form-group widgetFilter d-none"><div class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_DEFAULT_FILTER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-8 controls"><select class="form-control" id="owner" disabled name="default_owner"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FILTER_SELECT_DEFAULT']->value, 'OWNER_ID', false, 'OWNER_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_NAME']->value => $_smarty_tpl->tpl_vars['OWNER_ID']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['OWNER_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="form-group widgetFilter d-none"><div class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_FILTERS_AVAILABLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-8 controls"><select class="form-control owners_all" multiple="true" disabled name="owners_all" placeholder="<?php echo \App\Language::translate('LBL_PLEASE_SELECT_ATLEAST_ONE_OPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FILTER_SELECT']->value, 'OWNER_ID', false, 'OWNER_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_NAME']->value => $_smarty_tpl->tpl_vars['OWNER_ID']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
" selected><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['OWNER_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="form-group widgetFilterDate d-none"><div class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_DEFAULT_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-8 controls"><select class="form-control" id="date" disabled name="default_date"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DATE_SELECT_DEFAULT']->value, 'DATE_TEXT', false, 'DATE_VALUE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['DATE_VALUE']->value => $_smarty_tpl->tpl_vars['DATE_TEXT']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['DATE_VALUE']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['DATE_TEXT']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div><?php $_smarty_tpl->_subTemplateRender(App\Layout::getTemplatePath('Modals/Footer.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?>
</form></div></div></div><li class="newCustomFieldCopy d-none col-md-12"><div class="ml-0 border1px" data-field-id="" data-linkid="" data-sequence="" data-js="container"><div class="row p-2 d-flex justify-content-between js-custom-field" data-js="container"><div class="u-word-break"><span class="fieldLabel ml-3"></span></div><span class="btn-group mr-3 actions"><a href="javascript:void(0)" class="dropdown-toggle editFieldDetails" data-toggle="dropdown"><span class="fas fa-edit alignMiddle" title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a><div class="basicFieldOperations d-none" style="width: 375px;"><form class="form-horizontal fieldDetailsForm" method="POST"><div class="modal-header"></div><div class="clearfix"><div class="row"><div class="col-md-3 text-center checkboxForm"><input type="checkbox" name="isdefault" ></div><label class="col-md-9 form-control-plaintext float-left" >&nbsp;&nbsp;<?php echo \App\Language::translate('LBL_MANDATORY_WIDGET',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="row"><div class="col-md-3 text-center checkboxForm"><input type="checkbox" name="cache" ></div><label class="col-md-9 form-control-plaintext float-left" >&nbsp;&nbsp;<?php echo \App\Language::translate('LBL_CACHE_WIDGET',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="row p-2"><div class="col-md-3 text-center"><select class="form-control" name="width"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SIZE']->value['width'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><label class="col-md-9 form-control-plaintext float-left" >&nbsp;<?php echo \App\Language::translate('LBL_WIDTH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;</label></div><div class="row p-2"><div class="col-md-3 text-center"><select class="form-control" name="height"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SIZE']->value['height'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><label class="col-md-9 form-control-plaintext float-left" >&nbsp;<?php echo \App\Language::translate('LBL_HEIGHT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;</label></div><div class="row limit p-2"><div class="col-md-3 text-center" ><input type="text" name="limit" class="form-control" value="10" ></div><label class="col-md-9 form-control-plaintext float-left" >&nbsp;<?php echo \App\Language::translate('LBL_NUMBER_OF_RECORDS_DISPLAYED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;</label></div></div><div class="widgetFilterAll d-none"><div class="row p-2"><div class="col-md-5"><select class="widgetFilter form-control" id="owner" name="default_owner"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FILTER_SELECT_DEFAULT']->value, 'OWNER_ID', false, 'OWNER_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_NAME']->value => $_smarty_tpl->tpl_vars['OWNER_ID']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['OWNER_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><label class="col-md-6 form-control-plaintext float-left" ><?php echo \App\Language::translate('LBL_DEFAULT_FILTER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="row p-2"><div class="col-md-8"><select class="widgetFilter form-control" multiple="true" name="owners_all" placeholder="<?php echo \App\Language::translate('LBL_PLEASE_SELECT_ATLEAST_ONE_OPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FILTER_SELECT']->value, 'OWNER_ID', false, 'OWNER_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_NAME']->value => $_smarty_tpl->tpl_vars['OWNER_ID']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
" selected><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['OWNER_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><label class="col-md-3 form-control-plaintext float-left" ><?php echo \App\Language::translate('LBL_FILTERS_AVAILABLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="form-group d-none"><div class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_DEFAULT_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-sm-8 controls"><select class="widgetFilterDate form-control" id="date" disabled name="default_date"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DATE_SELECT_DEFAULT']->value, 'DATE_TEXT', false, 'DATE_VALUE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['DATE_VALUE']->value => $_smarty_tpl->tpl_vars['DATE_TEXT']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['DATE_VALUE']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['DATE_TEXT']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div></div><div class="modal-footer"><span class="float-right"><div class="float-right"><button class='cancel btn btn-danger' type="reset"><strong><span class="fas fa-times mr-1"></span> <?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><button class="btn btn-success saveFieldDetails" data-field-id="" type="submit"><strong><span class="fas fa-check mr-1"></span> <?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></span></div></form></div>&nbsp;<a href="javascript:void(0)" class="deleteCustomField" data-field-id=""><span class="fas fa-trash-alt alignMiddle" title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a></span></div></div></li></div></div></div></div>
<?php }
}
