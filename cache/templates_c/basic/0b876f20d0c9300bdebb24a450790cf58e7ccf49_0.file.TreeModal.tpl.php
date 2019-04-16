<?php
/* Smarty version 3.1.31, created on 2019-03-01 09:24:30
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Modals/TreeModal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c78fa4e0a2759_07306626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b876f20d0c9300bdebb24a450790cf58e7ccf49' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Modals/TreeModal.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c78fa4e0a2759_07306626 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Modals-TreeModal modal-body js-modal-body" id="treePopupContainer" data-js="container"><input type="hidden" class="js-multiple" value="<?php echo $_smarty_tpl->tpl_vars['IS_MULTIPLE']->value;?>
" data-js="value"/><input type="hidden" class="js-tree-value" value="<?php echo App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['TREE']->value);?>
" data-js="value"/><div class="js-tree-contents" data-js="container"></div></div>
<?php }
}
