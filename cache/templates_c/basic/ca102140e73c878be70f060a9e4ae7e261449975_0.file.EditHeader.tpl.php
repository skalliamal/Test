<?php
/* Smarty version 3.1.31, created on 2019-03-20 07:38:00
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PDF/EditHeader.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c91edd8345a28_46948487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca102140e73c878be70f060a9e4ae7e261449975' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/PDF/EditHeader.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c91edd8345a28_46948487 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row widget_header"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo \App\Language::translate('LBL_PDF_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><div class="editContainer"><div id="breadcrumb"><ul class="crumbs marginLeftZero"><li class="first step zIndex8" id="step1"><a><span class="stepNum">1</span><span class="stepText"><?php echo \App\Language::translate('LBL_DOCUMENT_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li class="step zIndex7" id="step2"><a><span class="stepNum">2</span><span class="stepText"><?php echo \App\Language::translate('LBL_DOCUMENT_SETTINGS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li class="step zIndex6" id="step3"><a><span class="stepNum">3</span><span class="stepText"><?php echo \App\Language::translate('LBL_DOCUMENT_HEADER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li class="step zIndex5" id="step4"><a><span class="stepNum">4</span><span class="stepText"><?php echo \App\Language::translate('LBL_DOCUMENT_BODY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li class="step zIndex4" id="step5"><a><span class="stepNum">5</span><span class="stepText"><?php echo \App\Language::translate('LBL_DOCUMENT_FOOTER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li class="step zIndex3" id="step6"><a><span class="stepNum">6</span><span class="stepText"><?php echo \App\Language::translate('LBL_DOCUMENT_EXCEPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li class="step zIndex2" id="step7"><a><span class="stepNum">7</span><span class="stepText"><?php echo \App\Language::translate('LBL_DOCUMENT_PERMISSIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li class="step last zIndex1" id="step8"><a><span class="stepNum">8</span><span class="stepText"><?php echo \App\Language::translate('LBL_DOCUMENT_WATERMARK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li></ul></div><div class="clearfix"></div></div>
<?php }
}
