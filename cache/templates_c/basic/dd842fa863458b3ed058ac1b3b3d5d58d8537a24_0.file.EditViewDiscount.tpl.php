<?php
/* Smarty version 3.1.31, created on 2019-03-28 10:22:59
  from "C:\xampp7.2\htdocs\erp-equipe\erp\layouts\basic\modules\Vtiger\inventoryfields\EditViewDiscount.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9ca083412125_09562742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd842fa863458b3ed058ac1b3b3d5d58d8537a24' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\erp-equipe\\erp\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewDiscount.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9ca083412125_09562742 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('VALUE', $_smarty_tpl->tpl_vars['FIELD']->value->getValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value));
?><div><div class="input-group input-group-sm"><input type="text" name="discount<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['VALUE']->value);?>
" class="discount form-control form-control-sm" readonly="readonly" /><?php if ($_smarty_tpl->tpl_vars['DISCOUNTS_CONFIG']->value['discounts'][0] != '') {?><input name="discountparam<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
" type="hidden" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ITEM_DATA']->value['discountparam']);?>
" class="discountParam" <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') == 10) {?>readonly="readonly"<?php }?> /><span class="input-group-append u-cursor-pointer changeDiscount <?php if ($_smarty_tpl->tpl_vars['ITEM_DATA']->value['discountmode'] == 0) {?>d-none<?php }?>"><div class="input-group-text"><span class="fa-layers fa-fw"><i class="fas fa-circle" data-fa-transform="grow-6"></i><i class="fa-inverse fas fa-long-arrow-alt-down text-white" data-fa-transform="shrink-6  left-4"></i><i class="fa-inverse fas fa-percent text-white" data-fa-transform="shrink-8  right-3"></i></span></div></span><?php }?></div></div>
 
<?php }
}
