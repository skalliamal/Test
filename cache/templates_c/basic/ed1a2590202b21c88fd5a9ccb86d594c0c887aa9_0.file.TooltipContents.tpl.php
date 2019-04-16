<?php
/* Smarty version 3.1.31, created on 2019-03-28 10:03:13
  from "C:\xampp7.2\htdocs\erp-equipe\erp\layouts\basic\modules\Vtiger\TooltipContents.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9c9be1a9e169_73283632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed1a2590202b21c88fd5a9ccb86d594c0c887aa9' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\erp-equipe\\erp\\layouts\\basic\\modules\\Vtiger\\TooltipContents.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9c9be1a9e169_73283632 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-TooltipContents" data-js="container"><table class="table table-bordered table-sm"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value['TOOLTIP_FIELDS'], 'FIELD_MODEL', false, 'FIELD_NAME', 'fieldsCount', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_fieldsCount']->value['index']++;
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fieldsCount']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fieldsCount']->value['index'] : null) < 7) {?><tr class="small"><td><label><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td class="u-word-break-all"><span><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getDetailViewTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value,'RECORD'=>$_smarty_tpl->tpl_vars['RECORD']->value), 0, true);
?>
</span></td></tr><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</table></div>
<?php }
}
