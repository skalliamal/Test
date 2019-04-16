<?php
/* Smarty version 3.1.31, created on 2019-03-28 10:22:59
  from "C:\xampp7.2\htdocs\erp-equipe\erp\layouts\basic\modules\Vtiger\inventoryfields\EditViewNetPrice.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9ca083421e56_89631140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1bc6bb217cd66973bfcc8a28e5586f329722dc4' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\erp-equipe\\erp\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewNetPrice.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9ca083421e56_89631140 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('VALUE', $_smarty_tpl->tpl_vars['FIELD']->value->getValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value));
?><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();
echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['VALUE']->value);?>
" class="netPrice" <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') == 10) {?>readonly="readonly"<?php }?>/><span class="netPriceText"><?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['VALUE']->value);?>
</span>
<?php }
}
