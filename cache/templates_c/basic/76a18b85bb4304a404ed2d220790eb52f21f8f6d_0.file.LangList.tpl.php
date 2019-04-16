<?php
/* Smarty version 3.1.31, created on 2019-02-28 08:30:04
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LangManagement/LangList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c779c0cbd2f14_70601527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76a18b85bb4304a404ed2d220790eb52f21f8f6d' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LangManagement/LangList.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c779c0cbd2f14_70601527 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-LangManagement-LangList">
	<div class="btn-toolbar" role="toolbar">
		<div class="btn-group mr-2" role="group">
			<a class="btn btn-primary btn-sm float-right marginBottom10px" href="<?php echo Settings_ModuleManager_Module_Model::getUserModuleImportUrl();?>
"><span class="fas fa-download u-mr-5px"></span><?php echo \App\Language::translate('LBL_IMPORT_LANG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>
		</div>
		<div class="btn-group mr-2" role="group">
			<button class="btn btn-info add_lang btn-sm float-right marginBottom10px"><span class="fa fa-plus u-mr-5px"></span><?php echo \App\Language::translate('LBL_ADD_LANG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
		</div>
		
	</div>
<table  class="table tableRWD table-bordered table-sm listViewEntriesTable">
	<thead>
		<tr class="blockHeader">
			<th><strong><?php echo \App\Language::translate('LBL_Lang_label',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th>
			<th><strong><?php echo \App\Language::translate('LBL_Lang_name',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th>
			<th><strong><?php echo \App\Language::translate('LBL_Lang_prefix',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th>
			<th><strong><?php echo \App\Language::translate('LBL_Lang_action',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th>
		</tr>
	</thead>
	<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, App\Language::getAll(false,true), 'LANG', false, 'ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ID']->value => $_smarty_tpl->tpl_vars['LANG']->value) {
?>
			<tr data-prefix="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['prefix'];?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['label'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['prefix'];?>
</td>
				<td>
					<a href="index.php?module=LangManagement&parent=Settings&action=Export&lang=<?php echo $_smarty_tpl->tpl_vars['LANG']->value['prefix'];?>
" class="btn btn-primary btn-sm marginLeft10"><?php echo \App\Language::translate('Export',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>
					<?php if ($_smarty_tpl->tpl_vars['LANG']->value['isdefault'] != '1') {?>
						<button class="btn btn-success btn-sm marginLeft10" data-toggle="confirmation" id="setAsDefault"><?php echo \App\Language::translate('LBL_DEFAULT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
						<button class="btn btn-danger btn-sm" data-toggle="confirmation" data-original-title="" id="deleteItemC"><?php echo \App\Language::translate('LBL_Delete',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
					<?php }?>
				</td>
			</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	</tbody>
</table>
</div>
<?php }
}
