<?php
/* Smarty version 3.1.31, created on 2019-02-25 14:33:39
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Acomptes/ChangeBord.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73fcc385a398_75858627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eea7b76d1c89d8d04c90d11d31a6a6cedf7c6eec' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Acomptes/ChangeBord.tpl',
      1 => 1551091599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73fcc385a398_75858627 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
    .form-control {
        width: 20%!important;
    }
</style>
<div class="o-breadcrumb__container">
    <ol class="breadcrumb breadcrumbsContainer my-0 py-auto pl-2 pr-0"><li class="breadcrumb-item"><a href="http://localhost:8080/erp/"><span class="userIcon-Home" aria-hidden="true"></span><span class="sr-only">Ma page d'accueil</span></a></li><li class="breadcrumb-item"><a href="#">Remise des bordereaux</a></li><li class="breadcrumb-item"><a href="#">Changement bordereaux</a></li></small></ol></div>
<br>
<form class="form-horizontal createCustomFieldForm"  method="POST" >
    <input type="hidden" name="module" value="Acomptes">
    <input type="hidden" name="view" value="ChangeBord">
    <input type="hidden" name="mode" value="updateBordereauEdicomBanque"/>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label u-text-small-bold">Bordereau edicom</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="bordereauEdicom" id="bordereauEdicom" REQUIRED>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label u-text-small-bold">Bordereau banque</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="bordereauBanque" value="<?php echo $_smarty_tpl->tpl_vars['BORDERAU']->value;?>
" id="bordereauBanque" REQUIRED>
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditViewActions1.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</form>
<?php }
}
