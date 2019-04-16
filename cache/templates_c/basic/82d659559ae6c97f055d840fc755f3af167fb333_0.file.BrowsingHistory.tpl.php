<?php
/* Smarty version 3.1.31, created on 2019-03-28 10:02:58
  from "C:\xampp7.2\htdocs\erp-equipe\erp\layouts\basic\modules\Vtiger\BrowsingHistory.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9c9bd2bd8e18_75472014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82d659559ae6c97f055d840fc755f3af167fb333' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\erp-equipe\\erp\\layouts\\basic\\modules\\Vtiger\\BrowsingHistory.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9c9bd2bd8e18_75472014 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="dropdown-menu historyList" aria-labelledby="showHistoryBtn role="list"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BROWSING_HISTORY']->value, 'HISTORY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['HISTORY']->value) {
if (isset($_smarty_tpl->tpl_vars['HISTORY']->value['viewToday'])) {?><h6 class="dropdown-header selectorHistory"><?php echo \App\Language::translate('LBL_TODAY');?>
</h6><?php } elseif (isset($_smarty_tpl->tpl_vars['HISTORY']->value['viewYesterday'])) {?><h6 class="dropdown-header selectorHistory"><?php echo \App\Language::translate('LBL_YESTERDAY');?>
</h6><?php } elseif (isset($_smarty_tpl->tpl_vars['HISTORY']->value['viewOlder'])) {?><h6 class="dropdown-header selectorHistory"><?php echo \App\Language::translate('LBL_YESTERDAY');?>
</h6><?php }?><a class="item dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['HISTORY']->value['url'];?>
" role="listitem"><?php if ($_smarty_tpl->tpl_vars['HISTORY']->value['hour']) {?><span class="historyHour"><?php echo $_smarty_tpl->tpl_vars['HISTORY']->value['date'];?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['HISTORY']->value['date'];
}
echo " | ";
echo $_smarty_tpl->tpl_vars['HISTORY']->value['title'];?>
</a><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<div class="dropdown-divider"></div><a class="dropdown-item js-clear-history" data-js="click" href="#" role="listitem"><?php echo \App\Language::translate('LBL_CLEAR_HISTORY');?>
</a></div>
<?php }
}
