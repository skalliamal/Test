<?php
/* Smarty version 3.1.31, created on 2019-03-11 07:16:43
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Countries/Index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c860b5bdd43d6_92661892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '545acd16acc9171206fbd7e876a4b37f8bfdcf58' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Countries/Index.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c860b5bdd43d6_92661892 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class=""><div class="widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
&nbsp;<?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_COUNTRY_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
</div></div><div class="contents"><?php $_smarty_tpl->_assignInScope('WIDTHTYPE', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'));
?><table class="table tableRWD table-bordered table-sm listViewEntriesTable"><thead><tr class="listViewHeaders"><th width="1%" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"></th><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_COUNTRY_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
</th><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_COUNTRY_SHORTNAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
</th><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 col-md-2 text-center"><span class="marginRight10"><?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_ACTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
</span><span><button class="all-statuses btn btn-light btn-sm js-popover-tooltip" data-js="popover" data-content="<?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_COUNTRY_TOGGLE_ALL_STATUSES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"><span class="far fa-check-square"></span></button></span></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_Countries_Record_Model::getAll(), 'ROW');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ROW']->value) {
?><tr class="listViewEntries" data-id="<?php echo $_smarty_tpl->tpl_vars['ROW']->value['id'];?>
"><td width="1%" nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><span class="fas fa-ellipsis-v" title="<?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"></span></td><td nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo \App\Purifier::encodeHtml(\App\Language::translateSingleMod($_smarty_tpl->tpl_vars['ROW']->value['name'],'Other.Country'));?>
</td><td nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ROW']->value['code']);?>
</td><td nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 actionImages"><span class="float-right actions"><button class="to-bottom btn btn-light btn-sm js-popover-tooltip" data-js="popover" data-placement="left" data-content="<?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_ROW_TO_BOTTOM',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"><span class="fas fa-arrow-down"></span></button></span><span class="float-right actions"><button class="to-top btn btn-light btn-sm marginLeft20 js-popover-tooltip" data-js="popover" data-placement="left" data-content="<?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_ROW_TO_TOP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"><span class="fas fa-arrow-up"></span></button></span><span class="float-right actions"><button class="mr-1 uitype btn <?php if (!$_smarty_tpl->tpl_vars['ROW']->value['uitype']) {?>btn-success<?php } else { ?>btn-danger<?php }?> btn-sm js-popover-tooltip" data-js="popover" data-uitype="<?php echo $_smarty_tpl->tpl_vars['ROW']->value['uitype'];?>
" data-content="<?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_VISIBLE_IN_COUNTRY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"><span class="far fa-image"></span></button></span><span class="float-right actions"><button class="mr-1 phone btn <?php if (!$_smarty_tpl->tpl_vars['ROW']->value['phone']) {?>btn-success<?php } else { ?>btn-danger<?php }?> btn-sm js-popover-tooltip" data-js="popover" data-phone="<?php echo $_smarty_tpl->tpl_vars['ROW']->value['phone'];?>
" data-content="<?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_VISIBLE_IN_PHONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"><span class="fas fa-mobile-alt"></span></button></span><span class="float-right actions"><button class="mr-1 status btn <?php if (!$_smarty_tpl->tpl_vars['ROW']->value['status']) {?>btn-success<?php } else { ?>btn-danger<?php }?> btn-sm js-popover-tooltip" data-js="popover" data-status="<?php echo $_smarty_tpl->tpl_vars['ROW']->value['status'];?>
" data-content="<?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_COUNTRY_TOGGLE_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"><span class="far fa-check-square"></span></button></span></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table></div></div>
<?php }
}
