<?php
/* Smarty version 3.1.31, created on 2019-03-28 10:22:58
  from "C:\xampp7.2\htdocs\erp-equipe\erp\layouts\basic\modules\Vtiger\inventoryfields\EditViewDiscountMode.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9ca082f3bfd3_69160091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2db105ebc1c0e03d21a7c958dfc57698a16ef86f' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\erp-equipe\\erp\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewDiscountMode.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9ca082f3bfd3_69160091 (Smarty_Internal_Template $_smarty_tpl) {
?>

<select class="select2 discountMode" title="<?php echo \App\Language::translate('LBL_DISCOUNT_MODE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();
echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') == 10) {?>readonly="readonly"<?php }?>><option value="0" <?php if ($_smarty_tpl->tpl_vars['ITEM_VALUE']->value == '0') {?>selected<?php }?>><?php echo \App\Language::translate('LBL_GROUP',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option value="1" <?php if ($_smarty_tpl->tpl_vars['ITEM_VALUE']->value == '1') {?>selected<?php }?>><?php echo \App\Language::translate('LBL_INDIVIDUAL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select>
<?php }
}
