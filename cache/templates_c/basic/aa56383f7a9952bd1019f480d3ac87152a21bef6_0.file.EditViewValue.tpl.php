<?php
/* Smarty version 3.1.31, created on 2019-03-28 10:22:59
  from "C:\xampp7.2\htdocs\erp-equipe\erp\layouts\basic\modules\Vtiger\inventoryfields\EditViewValue.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9ca08315d5c6_05772745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa56383f7a9952bd1019f480d3ac87152a21bef6' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\erp-equipe\\erp\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewValue.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9ca08315d5c6_05772745 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('VALUE', $_smarty_tpl->tpl_vars['FIELD']->value->getValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value));
$_smarty_tpl->_assignInScope('INPUT_TYPE', 'text');
if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') == 10) {
$_smarty_tpl->_assignInScope('INPUT_TYPE', 'hidden');
?><span class="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
Text valueText"><?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getDisplayValue($_smarty_tpl->tpl_vars['VALUE']->value);?>
</span><?php }?><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();
echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
" type="<?php echo $_smarty_tpl->tpl_vars['INPUT_TYPE']->value;?>
" class="form-control <?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
 valueVal" data-validation-engine="validate[maxSize[<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getRangeValues();?>
]]" value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['VALUE']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') == 10) {?>readonly="readonly"<?php }?>/>
<?php }
}
