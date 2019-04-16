<?php
/* Smarty version 3.1.31, created on 2019-02-18 07:14:49
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LayoutEditor/inventoryTypes/Reference.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c6a5b6940c104_83968358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1045b371667d94799a25295e823dc228e7564dde' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LayoutEditor/inventoryTypes/Reference.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6a5b6940c104_83968358 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="form-group">
	<label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_LABEL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
	<div class="col-md-7">
		<?php $_smarty_tpl->_assignInScope('LABEL', $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getDefaultLabel());
?>
		<?php if ($_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->get('label')) {?>
			<?php $_smarty_tpl->_assignInScope('LABEL', $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->get('label'));
?>
		<?php }?>
		<input name="label" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
" data-validation-engine="validate[required]" />
	</div>
</div>
<div class="form-group">
	<label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_DISPLAY_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
	<div class="col-md-7">
		<select class='form-control select2' name="displayType" data-validation-engine="validate[required]">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->displayTypeBase(), 'ITEM', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ITEM']->value == $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->get('displaytype')) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['KEY']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

		</select>
	</div>
</div>
<div class="form-group">
	<label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_COLSPAN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
	<div class="col-md-7">
		<input name="colSpan" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getColSpan();?>
" data-validation-engine="validate[required]" />
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getParams()) {?>
	<div class="paramsJson">
		<input id="params" class="" type="hidden" value='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getParams());?>
'/>
		<?php $_smarty_tpl->_assignInScope('PARAMS', \App\Json::decode($_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->get('params')));
?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getParams(), 'ITEM', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
?>
			<div class="form-group paramsJson">
				<label class="col-md-4 col-form-label"><?php echo \App\Language::translate(('LBL_PARAMS_').(strtoupper($_smarty_tpl->tpl_vars['ITEM']->value)),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
				<?php $_smarty_tpl->_assignInScope('functionName', ($_smarty_tpl->tpl_vars['ITEM']->value).('Values'));
?>
				<div class="col-md-7">
					<select class='form-control select2' name="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value;?>
" data-validation-engine="validate[required]" <?php if ($_smarty_tpl->tpl_vars['ITEM']->value == 'modules') {?> multiple <?php }?>>
						<?php $_prefixVariable1=$_smarty_tpl->tpl_vars['functionName']->value;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->$_prefixVariable1(), 'ITEMS', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEMS']->value) {
?>
							<?php $_smarty_tpl->_assignInScope('CONDITION', 0);
?>
							<?php if (is_array($_smarty_tpl->tpl_vars['PARAMS']->value[$_smarty_tpl->tpl_vars['ITEM']->value]) && in_array($_smarty_tpl->tpl_vars['ITEMS']->value['id'],$_smarty_tpl->tpl_vars['PARAMS']->value[$_smarty_tpl->tpl_vars['ITEM']->value])) {?>
								<?php $_smarty_tpl->_assignInScope('CONDITION', 1);
?>
							<?php } elseif (!(is_array($_smarty_tpl->tpl_vars['PARAMS']->value[$_smarty_tpl->tpl_vars['ITEM']->value])) && $_smarty_tpl->tpl_vars['ITEMS']->value['id'] == $_smarty_tpl->tpl_vars['PARAMS']->value[$_smarty_tpl->tpl_vars['ITEM']->value]) {?>
								<?php $_smarty_tpl->_assignInScope('CONDITION', 1);
?>
							<?php }?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['ITEMS']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['CONDITION']->value) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEMS']->value['name'],$_smarty_tpl->tpl_vars['ITEMS']->value['module']);?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

					</select>
				</div>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	</div>
<?php }
}
}
