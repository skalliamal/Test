<?php
/* Smarty version 3.1.31, created on 2019-03-08 12:51:35
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Picklist/ModulePickListDetail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c8265572147c4_53668688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ff21bfb66998f32c4e434680a1c3c3cd6db47d6' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Picklist/ModulePickListDetail.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8265572147c4_53668688 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-Picklist-ModulePickListDetail"><?php if (!empty($_smarty_tpl->tpl_vars['NO_PICKLIST_FIELDS']->value)) {?><label style="padding-top: 40px;"> <b><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
 <?php echo \App\Language::translate('NO_PICKLIST_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_NAME']->value);?>
. &nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['CREATE_PICKLIST_URL']->value)) {?><a href="<?php echo $_smarty_tpl->tpl_vars['CREATE_PICKLIST_URL']->value;?>
"><?php echo \App\Language::translate('LBL_CREATE_NEW',$_smarty_tpl->tpl_vars['QUALIFIED_NAME']->value);?>
</a><?php }?></b></label><?php } else { ?><div class="row"><label class="fieldLabel col-md-3"><strong><?php echo \App\Language::translate('LBL_SELECT_PICKLIST_IN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><div class="col-md-4 fieldValue"><select class="select2 form-control" id="modulePickList"><optgroup><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_FIELDS']->value, 'FIELD_MODEL', false, 'PICKLIST_FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_FIELD']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getId();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup></select></div></div><br /><?php }?></div>	
<?php }
}
