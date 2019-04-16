<?php
/* Smarty version 3.1.31, created on 2019-03-28 10:12:27
  from "C:\xampp7.2\htdocs\erp-equipe\erp\layouts\basic\modules\Settings\LayoutEditor\InactiveFieldModal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9c9e0be20660_84531775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8799afd535616379312e97994f481e050a505089' => 
    array (
      0 => 'C:\\xampp7.2\\htdocs\\erp-equipe\\erp\\layouts\\basic\\modules\\Settings\\LayoutEditor\\InactiveFieldModal.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9c9e0be20660_84531775 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal inactiveFieldsModal fade" tabindex="-1"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><?php echo App\Language::translate('LBL_INACTIVE_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><form class="form-horizontal inactiveFieldsForm" method="POST"><div class="modal-body"><div class="row inActiveList"></div></div><div class="modal-footer"><div class="float-right cancelLinkContainer"><a class="cancelLink btn btn-warning" type="reset" data-dismiss="modal"><?php echo App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div><button class="btn btn-success" type="submit" name="reactivateButton"><strong><?php echo App\Language::translate('LBL_REACTIVATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></form></div></div></div>
<?php }
}
