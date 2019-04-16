<?php
/* Smarty version 3.1.31, created on 2019-03-28 10:03:05
  from "C:\xampp7.2\htdocs\erp-equipe\erp\layouts\basic\modules\Vtiger\List\Field\PickList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9c9bd91b82e6_52102451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57dfc9d6ee7bc2e744bd41b2d3fbb7dcf9e31c92' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\erp-equipe\\erp\\layouts\\basic\\modules\\Vtiger\\List\\Field\\PickList.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9c9bd91b82e6_52102451 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues(true));
$_smarty_tpl->_assignInScope('SEARCH_VALUES', explode('##',$_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']));
?><div class="tpl-List-Field-PickList picklistSearchField"><select class="select2noactive listSearchContributor form-control" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" multiple title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModule()->getName());?>
" data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_LABEL', false, 'PICKLIST_KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value => $_smarty_tpl->tpl_vars['PICKLIST_LABEL']->value) {
?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_KEY']->value);?>
" <?php if (in_array($_smarty_tpl->tpl_vars['PICKLIST_KEY']->value,$_smarty_tpl->tpl_vars['SEARCH_VALUES']->value) && ($_smarty_tpl->tpl_vars['PICKLIST_KEY']->value != '')) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PICKLIST_LABEL']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div>
<?php }
}
