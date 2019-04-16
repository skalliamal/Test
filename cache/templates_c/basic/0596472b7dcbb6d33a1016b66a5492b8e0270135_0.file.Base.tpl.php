<?php
/* Smarty version 3.1.31, created on 2019-03-28 10:03:05
  from "C:\xampp7.2\htdocs\erp-equipe\erp\layouts\basic\modules\Vtiger\List\Field\Base.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9c9bd919eaa4_64287113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0596472b7dcbb6d33a1016b66a5492b8e0270135' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\erp-equipe\\erp\\layouts\\basic\\modules\\Vtiger\\List\\Field\\Base.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9c9bd919eaa4_64287113 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));
$_smarty_tpl->_assignInScope('LABEL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
if (isset($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue'])) {
$_smarty_tpl->_assignInScope('SEARCH_VALUE', $_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']);
} else {
$_smarty_tpl->_assignInScope('SEARCH_VALUE', '');
}?><div class="tpl-List-Field-Base searchField"><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value && $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getAlphabetSearchField() == $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()) {?><div class="input-group col-12 px-0"><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" class="listSearchContributor form-control" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_VALUE']->value;?>
" title='<?php echo $_smarty_tpl->tpl_vars['LABEL']->value['label'];?>
' data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'/><div class="input-group-append alphabetBtnContainer"><?php if ($_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value) {?><button class=" btn btn-primary alphabetBtn" type="button"><?php echo $_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value;?>
</button><?php } else { ?><button class=" btn btn-outline-secondary alphabetBtn" type="button"><span class="fas fa-font" aria-hidden="true"></span><span class="sr-only"><?php echo \App\Language::translate('LBL_ALPHABETIC_FILTERING');?>
</span></button><?php }?></div></div><?php } else { ?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" class="listSearchContributor form-control" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_VALUE']->value;?>
" title='<?php echo $_smarty_tpl->tpl_vars['LABEL']->value['label'];?>
' data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
' <?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveSearchView()) {?>disabled<?php }?>/><?php }?></div>
<?php }
}
