<?php
/* Smarty version 3.1.31, created on 2019-03-04 15:39:22
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Calendar/RightPanel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c7d46aae9aa97_44760584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd58735062445671ff261e52a1c148511a2bea3fc' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Calendar/RightPanel.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7d46aae9aa97_44760584 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (!empty($_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value)) {?><div><p class="rounded m-1"><select class="select2 form-control" multiple="multiple" id="calendarUserList" title="<?php echo \App\Language::translate('LBL_USERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value, 'OWNER_NAME', false, 'OWNER_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_ID']->value => $_smarty_tpl->tpl_vars['OWNER_NAME']->value) {
?><option class="ownerCBg_<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->getId() == $_smarty_tpl->tpl_vars['OWNER_ID']->value) {?>selected <?php }?>value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></p></div><?php }
if (!empty($_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value)) {?><div><p class="rounded m-1"><select class="select2 form-control" multiple="multiple" id="calendarGroupList" title="<?php echo \App\Language::translate('LBL_GROUPS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value, 'OWNER_NAME', false, 'OWNER_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_ID']->value => $_smarty_tpl->tpl_vars['OWNER_NAME']->value) {
?><option class="ownerCBg_<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></p></div><?php }
if (!empty($_smarty_tpl->tpl_vars['ACTIVITY_TYPE']->value)) {?><div><p class="rounded m-1"><select class="select2 form-control" multiple="multiple" id="calendarActivityTypeList" title="<?php echo \App\Language::translate('Activity Type',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACTIVITY_TYPE']->value, 'ITEM');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
?><option class="picklistCBr_Calendar_activitytype_<?php echo $_smarty_tpl->tpl_vars['ITEM']->value;?>
" selected value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></p></div><?php }
if (!empty($_smarty_tpl->tpl_vars['ACTIVITY_TYPE']->value) || !empty($_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value) || !empty($_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value)) {
echo '<script'; ?>
 type="text/javascript">
			jQuery(document).ready(function () {
				Calendar_CalendarView_Js.currentInstance.registerSelect2Event();
			});
		<?php echo '</script'; ?>
><?php }
}
}
