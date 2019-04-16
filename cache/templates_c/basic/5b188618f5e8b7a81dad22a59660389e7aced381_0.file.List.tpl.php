<?php
/* Smarty version 3.1.31, created on 2019-03-11 07:11:24
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/ModTracker/List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c860a1c310868_51215223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b188618f5e8b7a81dad22a59660389e7aced381' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/ModTracker/List.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c860a1c310868_51215223 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="modTrackerContainer"><div class="widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo \App\Language::translate('LBL_MODTRACKER_SETTINGS_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><div class="contents"><div class="contents tabbable"><table class="table table-bordered table-sm listViewEntriesTable"><thead><tr class="blockHeader"><th><strong><?php echo \App\Language::translate('LBL_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo \App\Language::translate('LBL_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getModTrackerModules(), 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?><tr data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="js-row" data-js="data"><td><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['item']->value['module'],$_smarty_tpl->tpl_vars['item']->value['module']);?>
</td><td><input class="js-active-modtracker" data-js="change" type="checkbox" name="active" value="1" <?php if ($_smarty_tpl->tpl_vars['item']->value['active']) {?>checked=""<?php }?>></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table></div><div class="clearfix"></div></div></div>
<?php }
}
