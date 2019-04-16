<?php
/* Smarty version 3.1.31, created on 2019-03-19 15:18:43
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/inventoryfields/EditViewDate.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c910853e20016_90180050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31d9b5a97845fec7a3e9e5195d1bd110bcd52007' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/inventoryfields/EditViewDate.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c910853e20016_90180050 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('VALUE', $_smarty_tpl->tpl_vars['FIELD']->value->getValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value));
?><div class="tpl-Edit-Field-Date input-group date"><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();
echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['VALUE']->value);?>
"class="form-control <?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
 dateVal <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') != 10) {?>dateFieldInv<?php }?>"<?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') == 10) {?>readonly="readonly"<?php }?>/><div class=" input-group-append"><span class="input-group-text u-cursor-pointer js-date__btn" data-js="click"><span class="fas fa-calendar-alt"></span></span></div></div>
<?php }
}
