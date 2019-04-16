<?php
/* Smarty version 3.1.31, created on 2019-03-11 07:13:12
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/CustomView/Index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c860a882e9712_79374499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df8e87eddfb9c3cbfc629a2517bd631a8db4a753' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/CustomView/Index.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c860a882e9712_79374499 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="customViewList"><div class="widget_header row mb-2"><div class="col-md-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo App\Language::translate((mb_strtoupper(('LBL_').($_smarty_tpl->tpl_vars['MODULE']->value), 'UTF-8')).('_DESCRIPTION'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><div class="panel panel-default"><div class="panel-heading mb-2"><div class="row"><div class="col-md-4 col-sm-4 col-6"><select class="chzn-select js-module-filter" data-js="change" name="moduleFilter"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value, 'SUPPORTED_MODULE_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_NAME']->value) {
?><option <?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_NAME']->value) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_NAME']->value;?>
"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['SUPPORTED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['SUPPORTED_MODULE_NAME']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><div class="col-md-8 col-sm-8 col-6"><button class="btn btn-success float-right js-create-filter" data-js="click" type="button" data-editurl="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateFilterUrl($_smarty_tpl->tpl_vars['SOURCE_MODULE_ID']->value);?>
"><span class="fas fa-plus"></span> <?php echo App\Language::translate('LBL_ADD_FILTER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></div><div class="panel-body"><div class="indexContents"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('IndexContents.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div></div><div class="clearfix"></div></div>
<?php }
}
