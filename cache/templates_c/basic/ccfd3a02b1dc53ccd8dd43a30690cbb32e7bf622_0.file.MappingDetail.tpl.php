<?php
/* Smarty version 3.1.31, created on 2019-03-11 07:10:35
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Leads/MappingDetail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c8609eb668207_71920170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccfd3a02b1dc53ccd8dd43a30690cbb32e7bf622' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Leads/MappingDetail.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8609eb668207_71920170 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-Leads-MappingDetail row align-items-center widget_header"><div class="col-md-8"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><div class="col-md-4 btn-toolbar ml-0 justify-content-end"><div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getDetailViewLinks(), 'LINK_MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK_MODEL']->value) {
?><button type="button" class="btn btn-info" onclick=<?php echo $_smarty_tpl->tpl_vars['LINK_MODEL']->value->getUrl();?>
><strong><span class="fas fa-edit u-mr-5px"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LINK_MODEL']->value->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div></div><div class='clearfix'></div><div class=" contents" id="detailView"><table class="table customTableRWD table-bordered" id="convertLeadMapping"><thead><tr class="blockHeader"><th class="blockHeader"><?php echo \App\Language::translate('LBL_FIELD_LABEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="blockHeader"><?php echo \App\Language::translate('LBL_FIELD_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th data-hide='phone' class="blockHeader"><?php echo \App\Language::translate('LBL_MAPPING_WITH_OTHER_MODULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead></table><table class="table customTableRWD table-bordered" id="convertLeadMapping"><thead><tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getHeaders(), 'LABEL', false, 'key', 'index', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['iteration']++;
?><th <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['iteration'] : null) > 2) {?>data-hide='phone'<?php }?> ><b><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['LABEL']->value);?>
</b></th><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getMapping(), 'MAPPING', false, 'MAPPING_ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MAPPING_ID']->value => $_smarty_tpl->tpl_vars['MAPPING']->value) {
?><tr class="listViewEntries" data-cfmid="<?php echo $_smarty_tpl->tpl_vars['MAPPING_ID']->value;?>
"><td><?php ob_start();
echo $_smarty_tpl->tpl_vars['MAPPING']->value['Leads']['label'];
$_prefixVariable1=ob_get_clean();
echo \App\Language::translate($_prefixVariable1,'Leads');?>
</td><td><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MAPPING']->value['Leads']['fieldDataType'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td><td><?php ob_start();
echo $_smarty_tpl->tpl_vars['MAPPING']->value['Accounts']['label'];
$_prefixVariable2=ob_get_clean();
echo \App\Language::translate($_prefixVariable2,'Accounts');?>
</td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table></div>
<?php }
}
