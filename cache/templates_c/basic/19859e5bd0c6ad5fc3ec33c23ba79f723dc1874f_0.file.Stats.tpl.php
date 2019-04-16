<?php
/* Smarty version 3.1.31, created on 2019-02-28 08:30:04
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LangManagement/Stats.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c779c0cbe0a27_18659471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19859e5bd0c6ad5fc3ec33c23ba79f723dc1874f' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LangManagement/Stats.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c779c0cbe0a27_18659471 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="statsContainer">
	<div class="form-horizontal">
		<div class="form-group form-row">
			<label for="langs_list" class="col-form-label col-md-2" ><?php echo \App\Language::translate('LBL_BASE_LANGUAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
			<div class="col-md-3">
				<select class="form-control select2" name="langs_basic">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGS']->value, 'LABEL', false, 'PREFIX');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PREFIX']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['PREFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				</select>
			</div>
			<label class="col-md-2 col-form-label"><?php echo \App\Language::translate('LBL_LANGUAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
			<div class="col-md-3">
				<select multiple="multiple" class="form-control select2" name="langs" placeholder="<?php echo \App\Language::translate('LBL_SELECT_SOME_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" >
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGS']->value, 'LABEL', false, 'PREFIX');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PREFIX']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['PREFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				</select>
			</div>
			<div class="col-md-2">
				<button class="btn btn-success showStats"><?php echo \App\Language::translate('LBL_SHOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="alert alert-warning col-md-10">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				<?php echo \App\Language::translate('LBL_STATS_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="chartBlock row" id="chartBlock">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="widgetChartContainer" id="widgetChartContainer" style="position:relative;">
					<canvas id="language-stats-chart"></canvas>
				</div>
			</div>
			<div class="col-md-2"></div>
			<input class="widgetData" type="hidden" value=''>
		</div>
		<br />
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10 statsData"></div>
			<div class="col-md-1"></div>
		</div>
	</div>
</div>
<?php }
}
