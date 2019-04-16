<?php
/* Smarty version 3.1.31, created on 2019-03-01 09:24:30
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Modals/Header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c78fa4e08cf97_53599071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49448d5b38a332064b0e5472928826665b138475' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Modals/Header.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c78fa4e08cf97_53599071 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Modals-Header modal js-modal-data <?php if ($_smarty_tpl->tpl_vars['LOCK_EXIT']->value) {?>static<?php }?>" tabindex="-1" data-js="data"role="dialog" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalData, 'VALUE', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
?> data-<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
"<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
><div class="modal-dialog <?php echo $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalSize;?>
" role="document"><div class="modal-content"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODAL_CSS']->value, 'MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODEL']->value) {
?><link rel="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getRel();?>
" href="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getHref();?>
"/><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODAL_SCRIPTS']->value, 'MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODEL']->value) {
echo '<script'; ?>
 type="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getSrc();?>
"><?php echo '</script'; ?>
><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '<script'; ?>
 type="text/javascript">app.registerModalController();<?php echo '</script'; ?>
><div class="modal-header"><h5 class="modal-title"><?php if ($_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalIcon) {?><span class="<?php echo $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalIcon;?>
 mr-2"></span><?php }
echo $_smarty_tpl->tpl_vars['MODAL_TITLE']->value;?>
</h5><?php if (!$_smarty_tpl->tpl_vars['LOCK_EXIT']->value) {?><button type="button" class="close" data-dismiss="modal" aria-label="<?php echo \App\Language::translate('LBL_CANCEL');?>
"><span aria-hidden="true">&times;</span></button><?php }?></div>
<?php }
}
