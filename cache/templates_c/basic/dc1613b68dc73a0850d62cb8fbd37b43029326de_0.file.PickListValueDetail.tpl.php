<?php
/* Smarty version 3.1.31, created on 2019-03-08 12:51:35
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Picklist/PickListValueDetail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c8265572419d4_38470990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc1613b68dc73a0850d62cb8fbd37b43029326de' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Picklist/PickListValueDetail.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8265572419d4_38470990 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-Picklist-PicklistValueDetail"><?php if ($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value) {?><ul class="nav nav-tabs " role="tablist"><li class="nav-item"><a class="nav-link active" href="#allValuesLayout" data-toggle="tab" role="tab" aria-controls="<?php echo \App\Language::translate('LBL_ALL_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"<?php echo ' ';?>
aria-selected="true"><strong><?php echo \App\Language::translate('LBL_ALL_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><?php if ($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->isRoleBased()) {?><li class="nav-item" id="assignedToRoleTab"><a class="nav-link" href="#assignedToRoleLayout" data-toggle="tab" role="tab" aria-controls="<?php echo \App\Language::translate('LBL_VALUES_ASSIGNED_TO_A_ROLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"<?php echo ' ';?>
aria-selected="false"><strong><?php echo \App\Language::translate('LBL_VALUES_ASSIGNED_TO_A_ROLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><?php }?></ul><div class="tab-content layoutContent py-3 themeTableColor overflowVisible"><div class="tab-pane fade show active" role="tabpanel" id="allValuesLayout" ><div class="row"><div class="col-md-5 ml-0 u-text-ellipsis"><table id="pickListValuesTable" class="table table-bordered"><thead><tr class="listViewHeaders"><th><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
&nbsp;<?php echo \App\Language::translate('LBL_ITEMS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><input type="hidden" id="dragImagePath" value="<?php echo \App\Layout::getImagePath('drag.png');?>
"/><?php $_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['SELECTED_PICKLISTFIELD_ALL_VALUES']->value);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
?><tr class="pickListValue" data-key-id="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value;?>
"data-key="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
"><td class="u-text-ellipsis"><img class="alignMiddle" src="<?php echo \App\Layout::getImagePath('drag.png');?>
"/>&nbsp;&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table></div><div class="col-md-2 btn-group-vertical" role="group"><?php if ($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->isEditable()) {
if ($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->isRoleBased()) {?><button class="btn btn-primary" id="assignValue"><?php echo \App\Language::translate('LBL_ASSIGN_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }?><button class="btn btn-info" id="addItem"><?php echo \App\Language::translate('LBL_ADD_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-warning" id="renameItem"><?php echo \App\Language::translate('LBL_RENAME_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-danger" id="deleteItem"><?php echo \App\Language::translate('LBL_DELETE_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }?><button class="btn btn-success" disabled="" id="saveSequence"><?php echo \App\Language::translate('LBL_SAVE_ORDER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><br/><br/></div><div class="col-md-5"><br/><div><i class="fas fa-info-circle"></i>&nbsp;<span><?php echo \App\Language::translate('LBL_DRAG_ITEMS_TO_RESPOSITION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><br/><div>&nbsp;&nbsp;<?php echo \App\Language::translate('LBL_SELECT_AN_ITEM_TO_RENAME_OR_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><br/><div>&nbsp;&nbsp;<?php echo \App\Language::translate('LBL_TO_DELETE_MULTIPLE_HOLD_CONTROL_KEY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div></div><div id="createViewContents" class="d-none"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('CreateView.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div><?php if ($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->isRoleBased()) {?><div class="tab-pane fade" role="tabpanel" id="assignedToRoleLayout" aria-labelledby="assignedToRoleLayout"><div class="row"><div class="col-md-2 textAlignRight"><?php echo \App\Language::translate('LBL_ROLE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-4"><select id="rolesList" class="form-control" name="rolesSelected" data-placeholder="<?php echo \App\Language::translate('LBL_CHOOSE_ROLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ROLES_LIST']->value, 'ROLE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ROLE']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['ROLE']->value->get('roleid');?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ROLE']->value->get('rolename'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><div id="pickListValeByRoleContainer"></div></div><?php }?></div><?php }?></div>
<?php }
}
