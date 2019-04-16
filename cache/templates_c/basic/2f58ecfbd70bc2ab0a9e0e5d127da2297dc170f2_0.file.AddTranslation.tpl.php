<?php
/* Smarty version 3.1.31, created on 2019-02-28 08:30:04
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LangManagement/AddTranslation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c779c0cbf7149_71408000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f58ecfbd70bc2ab0a9e0e5d127da2297dc170f2' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LangManagement/AddTranslation.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c779c0cbf7149_71408000 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal fade AddNewTranslationMondal" tabindex="-1" role="dialog" aria-labelledby="AddTranslation" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">	
			<div class="modal-header">
				<h5 id="AddTranslation" class="modal-title"><?php echo \App\Language::translate('LBL_ADD_Translate',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5>
				<button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="form-horizontal AddTranslationForm">	
					<input type="hidden" name="langs" value="" />
					<div class="form-group">
						<label for="translation_type" class="col-sm-4 col-form-label"><?php echo \App\Language::translate('LBL_TranslationType',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
						<div class="col-sm-8">
							<select name="type" class="form-control" id="translation_type">
								<option value="php"><?php echo \App\Language::translate('LBL_LangPHP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
								<option value="js"><?php echo \App\Language::translate('LBL_LangJS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="variable" class="col-sm-4 col-form-label"><?php echo \App\Language::translate('LBL_variable',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
						<div class="col-sm-8">
							<input id="variable" name="variable" class="form-control" type="text" placeholder="<?php echo \App\Language::translate('LBL_variable',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" />
						</div>
					</div>
					<div class="add_translation_block">
					</div>
				</form>	
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary"><?php echo \App\Language::translate('LBL_AddLanguage',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
				<button class="btn btn-warning" data-dismiss="modal" aria-hidden="true" type="button"><?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
			</div>
		</div>
	</div>
</div>
<?php }
}
