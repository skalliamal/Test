<?php
/* Smarty version 3.1.31, created on 2019-03-11 07:13:12
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/CustomView/IndexContents.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c860a8834ba20_00911034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f8610436ac13ffe04707583539972ba6a8394af' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/CustomView/IndexContents.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c860a8834ba20_00911034 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-CustomView-IndexContents"><input id="js-add-filter-url" type="hidden" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateFilterUrl($_smarty_tpl->tpl_vars['SOURCE_MODULE_ID']->value);?>
" /><div class="table-responsive"><table class="table table-striped table-bordered table-sm listViewEntriesTable"><thead><tr class="blockHeader"><th></th><th><?php echo \App\Language::translate('ViewName',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo \App\Language::translate('SetDefault',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo \App\Language::translate('Privileges',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo \App\Language::translate('LBL_FEATURED_LABELS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo \App\Language::translate('LBL_SORTING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo \App\Language::translate('LBL_CREATED_BY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo \App\Language::translate('Actions',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCustomViews($_smarty_tpl->tpl_vars['SOURCE_MODULE_ID']->value), 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?><tr class="js-filter-row" data-js="data" data-cvid="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-mod="<?php echo $_smarty_tpl->tpl_vars['item']->value['entitytype'];?>
"><td><img src="<?php echo \App\Layout::getImagePath('drag.png');?>
" title="<?php echo \App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></td><?php if ($_smarty_tpl->tpl_vars['item']->value['viewname'] == 'All') {?><td><?php echo \App\Language::translate('All',$_smarty_tpl->tpl_vars['item']->value['entitytype']);?>
</td><?php } else { ?><td><?php echo $_smarty_tpl->tpl_vars['item']->value['viewname'];?>
</td><?php }?><td><div class="btn-group btn-group-toggle <?php if ($_smarty_tpl->tpl_vars['item']->value['setdefault']) {?> u-disabled<?php }?>" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['item']->value['setdefault']) {?> active<?php }?>"><input class="js-update-field" type="radio" name="setdefault" id="setdefault1" autocomplete="off" value="1"<?php if ($_smarty_tpl->tpl_vars['item']->value['setdefault']) {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_YES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="btn btn-sm btn-outline-primary <?php if (!$_smarty_tpl->tpl_vars['item']->value['setdefault']) {?> active <?php }?>"><input class="js-update-field" type="radio" name="setdefault" id="setdefault2" autocomplete="off" value="0"<?php if (!$_smarty_tpl->tpl_vars['item']->value['setdefault']) {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_NO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><button type="button" class="btn btn-light btn-sm showModal" data-url="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getUrlDefaultUsers($_smarty_tpl->tpl_vars['SOURCE_MODULE_ID']->value,$_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['item']->value['setdefault']);?>
"><span class="fas fa-user"></span></button></td><td><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['item']->value['privileges']) {?> active<?php }?>"><input class="js-switch js-update-field" type="radio" name="privileges" data-js="change" id="privileges1" autocomplete="off" value="1"<?php if ($_smarty_tpl->tpl_vars['item']->value['privileges']) {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_YES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="btn btn-sm btn-outline-primary <?php if (!$_smarty_tpl->tpl_vars['item']->value['privileges']) {?> active <?php }?>"><input class="js-switch js-update-field" type="radio" name="privileges" data-js="change" id="privileges2" autocomplete="off" value="0"<?php if (!$_smarty_tpl->tpl_vars['item']->value['privileges']) {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_NO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></td><td><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['item']->value['featured']) {?> active<?php }?>"><input class="js-update-field" data-js="change" type="radio" name="featured" id="featured1" autocomplete="off" value="1"<?php if ($_smarty_tpl->tpl_vars['item']->value['featured']) {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_YES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="btn btn-sm btn-outline-primary <?php if (!$_smarty_tpl->tpl_vars['item']->value['featured']) {?> active <?php }?>"><input class="js-update-field" data-js="change" type="radio" name="featured" id="featured2" autocomplete="off" value="0"<?php if (!$_smarty_tpl->tpl_vars['item']->value['featured']) {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_NO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><button type="button" class="btn btn-light btn-sm showModal" data-url="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getFeaturedFilterUrl($_smarty_tpl->tpl_vars['SOURCE_MODULE_ID']->value,$_smarty_tpl->tpl_vars['key']->value);?>
"><span class="fas fa-user"></span></button></td><td><button type="button" id="sort" name="sort" class="btn btn-light btn-sm showModal" data-url="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getSortingFilterUrl($_smarty_tpl->tpl_vars['SOURCE_MODULE_ID']->value,$_smarty_tpl->tpl_vars['key']->value);?>
"><span class="fas fa-sort"></span></button></td><td><?php echo \App\Fields\Owner::getLabel($_smarty_tpl->tpl_vars['item']->value['userid']);?>
</td><td><button class="btn btn-primary btn-sm js-update mr-1" data-js="click" data-cvid="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-editurl="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getUrlToEdit($_smarty_tpl->tpl_vars['item']->value['entitytype'],$_smarty_tpl->tpl_vars['key']->value);?>
"><span class="fa fa-edit u-mr-5px"></span><?php echo \App\Language::translate('Edit',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php if ($_smarty_tpl->tpl_vars['item']->value['presence'] == 1) {?><button class="btn btn-danger btn-sm mr-2 js-delete-filter" data-js="click" data-cvid="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><span class="fa fa-trash u-mr-5px"></span><?php echo \App\Language::translate('Delete',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }?></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table></div></div>
<?php }
}
