<?php
/* Smarty version 3.1.31, created on 2019-03-28 10:12:18
  from "C:\xampp7.2\htdocs\erp-equipe\erp\layouts\basic\modules\Settings\Vtiger\SettingsIndexHeader.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9c9e026e6b29_08256469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fc1658c0bf579c58bc8b438d4622143c1d2b7c8' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\erp-equipe\\erp\\layouts\\basic\\modules\\Settings\\Vtiger\\SettingsIndexHeader.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9c9e026e6b29_08256469 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="widget_header row "><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div><div class="row m-0 mt-2"><ul class="nav nav-tabs massEditTabs js-tabs" data-js="click"><li class="nav-item" data-mode="index" data-params="<?php echo \App\Purifier::encodeHtml(\App\Json::encode(array('count'=>$_smarty_tpl->tpl_vars['WARNINGS_COUNT']->value)));?>
"><a class="active nav-link" href="#" data-toggle="tab"><strong><?php echo \App\Language::translate('LBL_START',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li class="nav-item" data-mode="github"><a class="nav-link" href="#" data-toggle="tab"><strong><?php echo \App\Language::translate('LBL_GITHUB',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li class="nav-item" data-mode="systemWarnings"><a class="nav-link" href="#" data-toggle="tab"><strong><?php echo \App\Language::translate('LBL_SYSTEM_WARNINGS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li class="nav-item" data-mode="security"><a class="nav-link" href="#" data-toggle="tab"><strong><?php echo \App\Language::translate('LBL_SECURITY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li></ul></div><div class="indexContainer"></div>
<?php }
}
