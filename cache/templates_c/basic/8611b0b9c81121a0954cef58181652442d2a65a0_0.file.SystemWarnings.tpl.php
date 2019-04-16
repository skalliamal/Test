<?php
/* Smarty version 3.1.31, created on 2019-03-20 07:45:12
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Vtiger/SystemWarnings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c91ef8876f699_12743277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8611b0b9c81121a0954cef58181652442d2a65a0' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Vtiger/SystemWarnings.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c91ef8876f699_12743277 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tpl-SystemWarnings warningsIndexPage"><div class="row"><div class="col-md-9 mr-2"><div class="mr-2" id="warningsContent"></div></div><div class="col-md-3 siteBarRight"><h4><?php echo \App\Language::translate('LBL_WARNINGS_FOLDERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4><hr><div class="text-center mb-2"><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-outline-primary"><input class="js-switch--warnings" type="radio" name="options" id="option1" data-js="change" autocomplete="off" > <?php echo \App\Language::translate('LBL_ACTIVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><label class="btn btn-outline-primary active"><input class="js-switch--warnings" type="radio" name="options" id="option2" data-js="change" autocomplete="off" checked> <?php echo \App\Language::translate('LBL_ALL');?>
</label></div></div><hr><input type="hidden" id="treeValues" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FOLDERS']->value);?>
"><div id="jstreeContainer"></div></div></div></div>
<?php }
}
