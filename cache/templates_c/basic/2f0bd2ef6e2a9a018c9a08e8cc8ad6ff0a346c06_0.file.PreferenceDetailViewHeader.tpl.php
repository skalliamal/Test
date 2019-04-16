<?php
/* Smarty version 3.1.31, created on 2019-03-14 15:02:14
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Users/PreferenceDetailViewHeader.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c8a6cf6129502_37550199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f0bd2ef6e2a9a018c9a08e8cc8ad6ff0a346c06' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Users/PreferenceDetailViewHeader.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8a6cf6129502_37550199 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('MODULE_NAME', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));
?><input id="recordId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"/><div class="tpl-PreferenceDetailViewHeader detailViewContainer"><div class="detailViewTitle px-2 marginTop5 d-flex flex-column justify-content-lg-between flex-lg-row" id="prefPageHeader"><div class="ml-0 d-flex justify-content-center"><div class="logo pl-0 mt-3"><?php $_smarty_tpl->_assignInScope('IMAGE', $_smarty_tpl->tpl_vars['RECORD']->value->getImage());
if ($_smarty_tpl->tpl_vars['IMAGE']->value) {?><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE']->value['url'];?>
" class="pushDown" alt="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
" title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
"height="80" align="left"><br/><?php } else { ?><span class="o-detail__icon js-detail__icon userIcon-<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"></span><?php }?></div><div class="p-0 d-flex flex-column"><div id="myPrefHeading"><h3><?php echo \App\Language::translate('LBL_MY_PREFERENCES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 </h3></div><div><?php echo \App\Language::translate('LBL_USERDETAIL_INFO',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<strong class="ml-1">"<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
"</strong></div></div></div><div class="mr-0 pl-1 py-3 mt-2 detailViewButtoncontainer d-flex justify-content-center"><div class="btn-group btn-toolbar flex-md-nowrap u-w-sm-down-100"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWPREFERENCE'], 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'detailViewBasic','CLASS'=>'c-btn-link--responsive'), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (count($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_BASIC']) > 0) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonViewLinks.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TEXT_HOLDER'=>'LBL_MORE','LINKS'=>$_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_BASIC'],'CLASS'=>'c-btn-link--responsive btn-group','BTN_CLASS'=>' btn-outline-dark'), 0, true);
}?></div></div></div><div class="detailViewInfo px-2 userPreferences w-100"><div class="details w-100"><form id="detailView" data-name-fields='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getNameFields());?>
'method="POST"><div class="contents">
<?php }
}
