<?php
/* Smarty version 3.1.31, created on 2019-03-11 07:11:16
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Widgets/Index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c860a1401a227_48982487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13e4c15f51769366bcd31917b3bd61ff50694a16' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Widgets/Index.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c860a1401a227_48982487 (Smarty_Internal_Template $_smarty_tpl) {
?>

<input type="hidden" id="filterAll" value='<?php echo $_smarty_tpl->tpl_vars['FILTERS']->value;?>
'><input type="hidden" id="checkboxAll" value='<?php echo $_smarty_tpl->tpl_vars['CHECKBOXS']->value;?>
'><input type="hidden" id="switchHeaderAll" value='<?php echo $_smarty_tpl->tpl_vars['SWITCHES_HEADER']->value;?>
'><div class="WidgetsManage"><input type="hidden" name="tabid" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE']->value;?>
"><div class="widget_header row"><div class="col-md-8"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo \App\Language::translate('LBL_MODULE_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="float-right col-md-4 mt-2"><select class="select2 col-md-3 form-control js-module__list" data-js="change|value" name="ModulesList"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getModulesList(), 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['SOURCE']->value == $_smarty_tpl->tpl_vars['key']->value) {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['item']->value['tablabel'],$_smarty_tpl->tpl_vars['item']->value['name']);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div class="row my-2"><div class="col-md-8"><h4><?php echo \App\Language::translate('List of widgets for the module',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SOURCEMODULE']->value,$_smarty_tpl->tpl_vars['SOURCEMODULE']->value);?>
</h4></div><div class="col-md-4"><button class="btn btn-success js-widget__add float-md-right float-left" data-js="click" type="button"><i class="fas fa-plus mr-1"></i><strong><?php echo \App\Language::translate('Add widget',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><div class="clearfix"></div></div><div class="blocks-content padding1per"><div class="row"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS']->value, 'WIDGETCOL', false, 'column');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['column']->value => $_smarty_tpl->tpl_vars['WIDGETCOL']->value) {
?><div class="blocksSortable col-md-4" data-column="<?php echo $_smarty_tpl->tpl_vars['column']->value;?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETCOL']->value, 'WIDGET', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['WIDGET']->value) {
?><div class="blockSortable" data-id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><div class="padding1per border1px"><div class="row"><div class="col-md-4"><img class="alignMiddle" src="<?php echo \App\Layout::getImagePath('drag.png');?>
" /> &nbsp;&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['type'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-4"><?php if ($_smarty_tpl->tpl_vars['WIDGET']->value['label'] == '' && isset($_smarty_tpl->tpl_vars['WIDGET']->value['data']['relatedmodule'])) {
echo \App\Language::translate(\App\Module::getModuleName($_smarty_tpl->tpl_vars['WIDGET']->value['data']['relatedmodule']),\App\Module::getModuleName($_smarty_tpl->tpl_vars['WIDGET']->value['data']['relatedmodule']));
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['label'],$_smarty_tpl->tpl_vars['SOURCEMODULE']->value);?>
&nbsp;<?php }?></div><div class="col-md-4"><span class="float-right"><button class="btn btn-sm btn-primary js-widget__edit mr-1" data-js="click"><i class="u-cursor-pointer fas fa-edit" title="<?php echo \App\Language::translate('Edit',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></i></button><button class="btn btn-sm btn-danger js-widget__remove" data-js="click"><i class="u-cursor-pointer fas fa-times" title="<?php echo \App\Language::translate('Remove',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></i></button></span></div></div></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div><div class="clearfix"></div>
<?php }
}
