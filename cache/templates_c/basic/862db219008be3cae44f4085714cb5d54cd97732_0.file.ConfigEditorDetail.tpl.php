<?php
/* Smarty version 3.1.31, created on 2019-02-27 14:24:43
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Vtiger/ConfigEditorDetail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c769dab686fd6_59193034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '862db219008be3cae44f4085714cb5d54cd97732' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Vtiger/ConfigEditorDetail.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c769dab686fd6_59193034 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-Vtiger-ConfigEditorDetail" id="ConfigEditorDetails"><?php $_smarty_tpl->_assignInScope('WIDTHTYPE', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'));
?><div class="widget_header row"><div class="col-md-8"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo \App\Language::translate('LBL_CONFIG_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-4"><div class="float-right"><button class="btn btn-success editButton mt-2" data-url='<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getEditViewUrl();?>
' type="button" title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fa fa-edit u-mr-5px"></span><strong><?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div></div><hr><div class="contents"><table class="table tableRWD table-bordered table-sm themeTableColor"><thead><tr class="blockHeader"><th colspan="2" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><span class="alignMiddle"><?php echo \App\Language::translate('LBL_CONFIG_FILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></th></tr></thead><tbody><?php $_smarty_tpl->_assignInScope('FIELD_DATA', $_smarty_tpl->tpl_vars['MODEL']->value->getViewableData());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODEL']->value->getEditableFields(), 'FIELD_DETAILS', false, 'FIELD_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_DETAILS']->value) {
?><tr><td width="30%" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 textAlignRight"><label class="muted marginRight10px"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_DETAILS']->value['label'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td style="border-left: none;" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><span><?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == 'default_module') {
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_DATA']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value],$_smarty_tpl->tpl_vars['FIELD_DATA']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value]);
} elseif ($_smarty_tpl->tpl_vars['FIELD_DETAILS']->value['fieldType'] == 'checkbox') {
if (\App\Language::translate($_smarty_tpl->tpl_vars['FIELD_DATA']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value]) == 'true') {
echo \App\Language::translate('LBL_YES');
} else {
echo \App\Language::translate('LBL_NO');
}
} elseif ($_smarty_tpl->tpl_vars['FIELD_DETAILS']->value['fieldType'] == 'picklist') {
$_smarty_tpl->_assignInScope('PICKLIST', $_smarty_tpl->tpl_vars['MODEL']->value->getPicklistValues($_smarty_tpl->tpl_vars['FIELD_NAME']->value));
echo $_smarty_tpl->tpl_vars['PICKLIST']->value[$_smarty_tpl->tpl_vars['FIELD_DATA']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value]];
} else {
echo $_smarty_tpl->tpl_vars['FIELD_DATA']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value];
}
if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == 'upload_maxsize') {?>&nbsp;<?php echo \App\Language::translate('LBL_MB',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}?></span></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table></div></div>
<?php }
}
