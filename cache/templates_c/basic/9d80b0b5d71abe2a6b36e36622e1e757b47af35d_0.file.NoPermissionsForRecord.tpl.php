<?php
/* Smarty version 3.1.31, created on 2019-03-07 11:54:46
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/NoPermissionsForRecord.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c810686f14a25_73055601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d80b0b5d71abe2a6b36e36622e1e757b47af35d' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/NoPermissionsForRecord.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c810686f14a25_73055601 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html><html><head><title>Yetiforce: <?php echo \App\Language::translate('LBL_PERMISSION_DENIED');?>
</title><meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="SHORTCUT ICON" href="<?php echo \App\Layout::getImagePath('favicon.ico');?>
"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" href="<?php echo \App\Layout::getPublicUrl('libraries/bootstrap/dist/css/bootstrap.css');?>
" type="text/css" media="screen"><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo \App\Layout::getPublicUrl('libraries/jquery/dist/jquery.min.js');?>
"><?php echo '</script'; ?>
></head><body style="background: #ddecf0;"><div class="container"><div style="margin-top: 70px;" class="alert alert-warning shadow"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h2 class="alert-heading"><?php echo \App\Language::translate('LBL_PERMISSION_DENIED');?>
</h2><p><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['MESSAGE']->value);?>
</p><p class="Buttons"><a class="btn btn-info" role="button" href="index.php"><?php echo \App\Language::translate('LBL_MAIN_PAGE');?>
</a></p></div></div></body></html>
<?php }
}
