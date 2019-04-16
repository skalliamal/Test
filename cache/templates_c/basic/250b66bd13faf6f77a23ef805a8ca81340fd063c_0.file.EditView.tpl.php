<?php
/* Smarty version 3.1.31, created on 2019-03-14 15:02:24
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Users/EditView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c8a6d00a4eb67_40902941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '250b66bd13faf6f77a23ef805a8ca81340fd063c' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Users/EditView.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8a6d00a4eb67_40902941 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php ob_start();
echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('QUALIFIED_MODULE', $_prefixVariable1);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditViewBlocks.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<input type="hidden" name="isPreference" value="<?php echo $_smarty_tpl->tpl_vars['IS_PREFERENCE']->value;?>
" /><input type="hidden" name="timeFormatOptions" data-value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['DAY_STARTS']->value);?>
" /><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditViewActions.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<?php }
}
