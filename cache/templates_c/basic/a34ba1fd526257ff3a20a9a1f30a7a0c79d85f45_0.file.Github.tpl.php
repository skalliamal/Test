<?php
/* Smarty version 3.1.31, created on 2019-03-20 07:45:12
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Github/Github.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c91ef88109208_83977061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a34ba1fd526257ff3a20a9a1f30a7a0c79d85f45' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Github/Github.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c91ef88109208_83977061 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-Github-Github authModal modal fade" tabindex="-1"><div class="authModalContent validationEngineContainer "><div class="modal-dialog "><div class="modal-content"><div class="modal-header"><div class="d-flex w-100 m-0"><div><span class="fas fa-user-secret u-mr-5px mt-2 float-left"></span><h5 class="modal-title float-left ml-1"><?php echo \App\Language::translate('LBL_AUTHORIZATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5></div><div class="ml-auto"><button class="btn btn-sm btn-success saveKeys" type="button" aria-hidden="true"><span class="fas fa-check mr-1"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-sm btn-danger ml-1" type="button" data-dismiss="modal" aria-label="Close" aria-hidden="true"><span class="fas fa-times"></span></button></div></div></div><div class="modal-body row "><div class="col-12"><div class="alert alert-warning"><ul><li><?php echo \App\Language::translate('LBL_USERNAME_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li><li><?php echo \App\Language::translate('LBL_TOKEN_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li></ul></div></div><div class="col-12"><div class="alert alert-danger errorMsg d-none"></div></div><div class="col-12 mb-2"><span class="redColor">*</span><?php echo \App\Language::translate('LBL_USER_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<input class="form-control" name="username" data-validation-engine="validate[required]" value="" type="text"></div><div class="col-12"><span class="redColor">*</span><?php echo \App\Language::translate('LBL_TOKEN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<input class="form-control" data-validation-engine="validate[required]" name="token" value="" type="text"></div></div></div></div></div></div><?php if (!$_smarty_tpl->tpl_vars['GITHUB_CLIENT_MODEL']->value->isAuthorized()) {?><div class="alert alert-danger mb-2" role="alert"><?php echo \App\Language::translate('LBL_NOT_AUTHORIZED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<button class="btn btn-danger showModal ml-2"><span class="fas fa-user-secret u-mr-5px"></span><?php echo \App\Language::translate('LBL_AUTHORIZATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><?php } else { ?><button class="btn btn-primary showModal"><?php echo \App\Language::translate('LBL_CHANGE_AUTHORIZATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }
if ($_smarty_tpl->tpl_vars['GITHUB_ISSUES']->value !== false) {
if ($_smarty_tpl->tpl_vars['GITHUB_CLIENT_MODEL']->value->isAuthorized()) {?><div class="float-left"><button class="btn btn-primary addIssuesBtn mr-2"><?php echo \App\Language::translate('LBL_ADD_ISSUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><?php }?><div class="listViewActions float-right paginationDiv pl-1 pb-2"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Pagination.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><div class="col-sm-4 float-right pb-2"><?php if ($_smarty_tpl->tpl_vars['GITHUB_CLIENT_MODEL']->value->isAuthorized()) {?><div class="bootstrap-switch-container float-right ml-2"><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['IS_AUTHOR']->value) {?>active<?php }?>"><input class="js-switch--author" type="radio" name="author" id="author1" data-js="change" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['IS_AUTHOR']->value) {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_ME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="btn btn-outline-primary <?php if (!$_smarty_tpl->tpl_vars['IS_AUTHOR']->value) {?>active<?php }?>"><input class="js-switch--author" type="radio" name="author" id="author2" data-js="change" autocomplete="off" <?php if (!$_smarty_tpl->tpl_vars['IS_AUTHOR']->value) {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></div><?php }?><div class="bootstrap-switch-container float-right"><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['ISSUES_STATE']->value != 'closed') {?>active<?php }?>"><input class="js-switch--state" type="radio" name="state" id="state1" data-js="change" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['ISSUES_STATE']->value != 'closed') {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_OPEN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="btn btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['ISSUES_STATE']->value == 'closed') {?>active<?php }?>"><input class="js-switch--state" type="radio" name="state" id="state2" data-js="change" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['ISSUES_STATE']->value == 'closed') {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_CLOSED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></div></div><div class="table-responsive"><table class="table listViewEntriesTable mt-1"><thead><th><?php echo \App\Language::translate('LBL_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo \App\Language::translate('LBL_AUTHOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo \App\Language::translate('LBL_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th></th></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GITHUB_ISSUES']->value, 'ISSUE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ISSUE']->value) {
?><tr class=""><td><a href="<?php echo $_smarty_tpl->tpl_vars['ISSUE']->value->get('html_url');?>
" target="_blank" rel="noreferrer"><?php echo $_smarty_tpl->tpl_vars['ISSUE']->value->get('title');?>
</a></td><td><a href="<?php echo $_smarty_tpl->tpl_vars['ISSUE']->value->get('user')->html_url;?>
" target="_blank" rel="noreferrer"><?php echo $_smarty_tpl->tpl_vars['ISSUE']->value->get('user')->login;?>
</a></td><td><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ISSUE']->value->get('state'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td><td><div class="float-right actions"><span class="actionImages"><a href="<?php echo $_smarty_tpl->tpl_vars['ISSUE']->value->get('html_url');?>
" target="_blank" rel="noreferrer"><span title="" class="fas fa-th-list alignMiddle"></span></a></span></div></td></tr><?php
}
} else {
?>
<tr><td><?php echo \App\Language::translate('LBL_NO_ISSUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table></div><?php } else { ?><div class="alert alert-danger mt-2"><?php echo \App\Language::translate('LBL_ERROR_CONNECTED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php }
}
}
