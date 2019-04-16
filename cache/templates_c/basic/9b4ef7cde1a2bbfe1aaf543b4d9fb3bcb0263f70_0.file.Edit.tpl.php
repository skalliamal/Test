<?php
/* Smarty version 3.1.31, created on 2019-02-28 08:30:07
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LangManagement/Edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c779c0f85fba4_19729112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b4ef7cde1a2bbfe1aaf543b4d9fb3bcb0263f70' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LangManagement/Edit.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c779c0f85fba4_19729112 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="">
	<div class="form-horizontal">
		<div class="form-group row">
			<label for="langs_list" class="col-form-label col-md-1" ><?php echo \App\Language::translate('Language',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
			<div class="col-md-3">
				<select multiple="multiple" class="form-control select2" id="langs_list">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGS']->value, 'LABEL', false, 'PREFIX');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PREFIX']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['PREFIX']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['PREFIX']->value,$_smarty_tpl->tpl_vars['SELECTED_LANGS']->value)) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				</select>
			</div>
			<label class="col-md-1 col-form-label"><?php echo \App\Language::translate('Module',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
			<div class="col-md-3">
				<select class="form-control mods_list select2" id="mods_list">
					<optgroup label="<?php echo \App\Language::translate('Modules',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODS']->value['mods'], 'MOD', false, 'ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ID']->value => $_smarty_tpl->tpl_vars['MOD']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ID']->value == $_smarty_tpl->tpl_vars['SELECTED_MODE']->value) {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MOD']->value,$_smarty_tpl->tpl_vars['MOD']->value);?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

					</optgroup>
					<optgroup label="<?php echo \App\Language::translate('LBL_SYSTEM_SETTINGS','Vtiger');?>
">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODS']->value['settings'], 'MOD', false, 'ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ID']->value => $_smarty_tpl->tpl_vars['MOD']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ID']->value == $_smarty_tpl->tpl_vars['SELECTED_MODE']->value) {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MOD']->value,$_smarty_tpl->tpl_vars['MOD']->value);?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

					</optgroup>
				</select>
			</div>
			<div class="checkbox col-md-2">
				<label class="">
					<input type="checkbox" class="show_differences" name="show_differences" <?php if ($_smarty_tpl->tpl_vars['SD']->value == 1) {?>checked<?php }?> value="1">&nbsp;<?php echo \App\Language::translate('LBL_SHOW_MISSING_TRANSLATIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

				</label>
			</div>
			<div>
				<button class="btn btn-primary js-add-translation <?php if (empty($_smarty_tpl->tpl_vars['SELECTED_LANGS']->value)) {?>d-none<?php }?>" type="button" data-js="click"><?php echo \App\Language::translate('LBL_ADD_Translate',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
			</div>
		</div>
	</div>
</div>
<br />
<?php if ($_smarty_tpl->tpl_vars['DATA']->value) {?>
	<div class="">
		<table class="table table-bordered table-sm listViewEntriesTable" >
			<thead>
				<tr class="blockHeader">
					<th><strong><?php echo \App\Language::translate('LBL_variable',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DATA']->value['langs'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
						<th><strong><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</strong></th>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php if ($_smarty_tpl->tpl_vars['DATA']->value['php']) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DATA']->value['php'], 'langs', false, 'LANG_KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LANG_KEY']->value => $_smarty_tpl->tpl_vars['langs']->value) {
?>
						<?php $_smarty_tpl->_assignInScope('TEMPDATA', 1);
?>
						<?php if ($_smarty_tpl->tpl_vars['SD']->value == 1) {?>
							<?php $_smarty_tpl->_assignInScope('TEMPDATA', 0);
?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['langs']->value, 'item', false, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
								<?php if ($_smarty_tpl->tpl_vars['item']->value == NULL) {?>
									<?php $_smarty_tpl->_assignInScope('TEMPDATA', 1);
?>
								<?php }?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['TEMPDATA']->value == 1) {?>
							<tr data-langkey="<?php echo $_smarty_tpl->tpl_vars['LANG_KEY']->value;?>
" data-type="php">
								<td><?php echo $_smarty_tpl->tpl_vars['LANG_KEY']->value;?>
</td>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['langs']->value, 'item', false, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
									<td><input 
											data-lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
"
											data-type="php"
											name="<?php echo $_smarty_tpl->tpl_vars['LANG_KEY']->value;?>
" 
											class="translation form-control <?php if ($_smarty_tpl->tpl_vars['item']->value == NULL) {?>empty_value<?php }?>" 
											<?php if ($_smarty_tpl->tpl_vars['item']->value == NULL) {?> placeholder="<?php echo \App\Language::translate('LBL_NoTranslation',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" <?php }?> 
											type="text" 
											value ="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" />
									</td>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

								<td>
									<?php if (isset($_smarty_tpl->tpl_vars['CUSTOM_DATA']->value['php'][$_smarty_tpl->tpl_vars['LANG_KEY']->value])) {?>
										<button type="button" class="btn btn-light js-delete" data-js="click" title="<?php echo \App\Language::translate('LBL_DELETE');?>
">
											<span class="fas fa-trash-alt alignMiddle"></span>
										</button>
									<?php }?>
								</td>
							</tr>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['DATA']->value['js']) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DATA']->value['js'], 'langs', false, 'LANG_KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LANG_KEY']->value => $_smarty_tpl->tpl_vars['langs']->value) {
?>
						<?php $_smarty_tpl->_assignInScope('TEMPDATA', 1);
?>
						<?php if ($_smarty_tpl->tpl_vars['SD']->value == 1) {?>
							<?php $_smarty_tpl->_assignInScope('TEMPDATA', 0);
?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['langs']->value, 'item', false, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
								<?php if ($_smarty_tpl->tpl_vars['item']->value == NULL) {?>
									<?php $_smarty_tpl->_assignInScope('TEMPDATA', 1);
?>
								<?php }?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['TEMPDATA']->value == 1) {?>
							<tr data-langkey="<?php echo $_smarty_tpl->tpl_vars['LANG_KEY']->value;?>
" data-type="js">
								<td><?php echo $_smarty_tpl->tpl_vars['LANG_KEY']->value;?>
</td>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['langs']->value, 'item', false, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
									<td><input 
											data-lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
"
											data-type="js"
											name="<?php echo $_smarty_tpl->tpl_vars['LANG_KEY']->value;?>
" 
											class="translation form-control <?php if ($_smarty_tpl->tpl_vars['item']->value == NULL) {?>empty_value<?php }?>" 
											<?php if ($_smarty_tpl->tpl_vars['item']->value == NULL) {?> placeholder="<?php echo \App\Language::translate('LBL_NoTranslation',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" <?php }?> 
											type="text" 
											value ="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" />
									</td>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

								<td>
									<?php if (isset($_smarty_tpl->tpl_vars['CUSTOM_DATA']->value['js'][$_smarty_tpl->tpl_vars['LANG_KEY']->value])) {?>
										<button type="button" class="btn btn-light js-delete" data-js="click" title="<?php echo \App\Language::translate('LBL_DELETE');?>
">
											<span class="fas fa-trash-alt alignMiddle"></span>
										</button>
									<?php }?>
								</td>
							</tr>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				<?php }?>
			</tbody>
		</table>
	</div>
<?php }
}
}
