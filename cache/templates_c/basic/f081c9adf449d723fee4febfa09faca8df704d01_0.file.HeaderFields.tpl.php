<?php
/* Smarty version 3.1.31, created on 2019-03-28 10:08:02
  from "C:\xampp7.2\htdocs\erp-equipe\erp\layouts\basic\modules\Vtiger\Detail\HeaderFields.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9c9d0236b329_85498074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f081c9adf449d723fee4febfa09faca8df704d01' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\erp-equipe\\erp\\layouts\\basic\\modules\\Vtiger\\Detail\\HeaderFields.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9c9d0236b329_85498074 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tpl-Detail-HeaderFields col-12 col-sm-12 col-md-4 pr-0"><div class="u-w-max-320px float-sm-right"><?php if ($_smarty_tpl->tpl_vars['CUSTOM_FIELDS_HEADER']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_FIELDS_HEADER']->value, 'ROW');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ROW']->value) {
?><div class="badge badge-info d-flex my-1"<?php if ($_smarty_tpl->tpl_vars['ROW']->value['action']) {?>onclick="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ROW']->value['action']);?>
"<?php }?>><div class="pr-2 u-text-ellipsis"><?php echo $_smarty_tpl->tpl_vars['ROW']->value['title'];?>
</div><div class="u-text-ellipsis"><?php echo $_smarty_tpl->tpl_vars['ROW']->value['badge'];?>
</div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->tpl_vars['FIELDS_HEADER']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_HEADER']->value, 'VALUE', false, 'LABEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LABEL']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
if (!empty($_smarty_tpl->tpl_vars['VALUE']->value['value'])) {?><div class="badge badge-info d-flex mt-1"><div class="pr-2 u-text-ellipsis"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</div><div class="u-text-ellipsis"><?php echo $_smarty_tpl->tpl_vars['VALUE']->value['value'];?>
</div></div><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div></div>
<?php }
}
