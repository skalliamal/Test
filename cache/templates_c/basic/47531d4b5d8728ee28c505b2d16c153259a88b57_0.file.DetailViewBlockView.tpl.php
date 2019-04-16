<?php
/* Smarty version 3.1.31, created on 2019-03-11 13:48:46
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Atribution/DetailViewBlockView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c86673e8e26e9_90024961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47531d4b5d8728ee28c505b2d16c153259a88b57' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Atribution/DetailViewBlockView.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c86673e8e26e9_90024961 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'FIELD_MODEL_LIST', false, 'BLOCK_LABEL_KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->value) {
$_smarty_tpl->_assignInScope('BLOCK', $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value]);
if ($_smarty_tpl->tpl_vars['BLOCK']->value == null || count($_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->value) <= 0) {
continue 1;
}
$_smarty_tpl->_assignInScope('BLOCKS_HIDE', $_smarty_tpl->tpl_vars['BLOCK']->value->isHideBlock($_smarty_tpl->tpl_vars['RECORD']->value,$_smarty_tpl->tpl_vars['VIEW']->value));
$_smarty_tpl->_assignInScope('IS_HIDDEN', $_smarty_tpl->tpl_vars['BLOCK']->value->isHidden());
if ($_smarty_tpl->tpl_vars['BLOCKS_HIDE']->value) {?><div class="detailViewTable"><div class="js-toggle-panel c-panel" data-js="click" data-label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value;?>
"><div class="blockHeader c-panel__header"><span class="u-cursor-pointer js-block-toggle fas fa-angle-right m-2 <?php if (!($_smarty_tpl->tpl_vars['IS_HIDDEN']->value)) {?>d-none<?php }?>" data-js="click" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
" data-mode="hide" data-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value]->get('id');?>
"></span><span class="u-cursor-pointer js-block-toggle fas fa-angle-down m-2 <?php if ($_smarty_tpl->tpl_vars['IS_HIDDEN']->value) {?>d-none<?php }?>" data-js="click" alt="<?php echo \App\Language::translate('LBL_COLLAPSE_BLOCK');?>
" data-mode="show" data-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value]->get('id');?>
"></span><h5><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5></div><div class="c-panel__body blockContent <?php if ($_smarty_tpl->tpl_vars['IS_HIDDEN']->value) {?>d-none<?php }?>"><?php $_smarty_tpl->_assignInScope('COUNTER', 0);
?><div class="form-row border-bottom u-border-bottom-0-sm"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isViewableInDetailView()) {
continue 1;
}
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == "20" || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == "19" || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300') {
if ($_smarty_tpl->tpl_vars['COUNTER']->value == '1') {
$_smarty_tpl->_assignInScope('COUNTER', 0);
}
}
if ($_smarty_tpl->tpl_vars['COUNTER']->value == 2) {?></div><div class="form-row border-bottom u-border-bottom-0-sm"><?php $_smarty_tpl->_assignInScope('COUNTER', 1);
} else {
$_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);
}?><div class="col-sm"><div class="form-row border-right h-100 align-items-start"><div class="fieldLabel u-border-bottom-label-md u-border-right-0-md c-panel__label <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '19' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '20' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300') {?>  col-lg-3  <?php } else { ?> col-lg-6 <?php }?> <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-right" id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_detailView_fieldLabel_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"><?php $_smarty_tpl->_assignInScope('HELPINFO', explode(',',$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('helpinfo')));
$_smarty_tpl->_assignInScope('HELPINFO_LABEL', (($_smarty_tpl->tpl_vars['MODULE_NAME']->value).('|')).($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel()));
?><label class="u-text-small-bold"><?php ob_start();
echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel();
$_prefixVariable1=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;
$_prefixVariable2=ob_get_clean();
echo \App\Language::translate($_prefixVariable1,$_prefixVariable2);
if (in_array($_smarty_tpl->tpl_vars['VIEW']->value,$_smarty_tpl->tpl_vars['HELPINFO']->value) && \App\Language::translate($_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value,'HelpInfo') != $_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value) {?><a href="#" class="js-help-info float-right u-cursor-pointer" title="" data-placement="top" data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value,'HelpInfo');?>
" data-original-title='<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
'><span class="fas fa-info-circle"></span></a><?php }?></label></div><div class="fieldValue u-border-bottom-value-sm col-12 d-flex align-items-center <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '19' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '20' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300') {?> col-lg-9 <?php } else { ?> col-lg-6 <?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_detailView_fieldValue_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '19' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '20' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300') {?> <?php $_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);
?> <?php }?>><span class="value col-11 col-sm-10 col-md-10 col-xl-11 px-0" data-field-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '19' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '20' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '21' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300') {?> style="white-space:normal;" <?php }?>><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getDetailViewTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value,'RECORD'=>$_smarty_tpl->tpl_vars['RECORD']->value), 0, true);
?>
</span><?php $_smarty_tpl->_assignInScope('EDIT', false);
if (in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName(),array('date_start','due_date')) && ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == 'Calendar' || $_smarty_tpl->tpl_vars['MODULE_NAME']->value == 'Events')) {
$_smarty_tpl->_assignInScope('EDIT', true);
}
if ($_smarty_tpl->tpl_vars['IS_AJAX_ENABLED']->value && $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable() == 'true' && $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isAjaxEditable() == 'true' && !$_smarty_tpl->tpl_vars['EDIT']->value) {?><span class="js-detail-quick-edit u-cursor-pointer float-right ">&nbsp;<i class="fas fa-edit" title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></i></span><span class="d-none edit col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() == 'boolean' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() == 'picklist') {?><input type="hidden" class="fieldname" data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
" value='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
' data-prev-value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));?>
' /><?php } else {
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
if (is_array($_smarty_tpl->tpl_vars['FIELD_VALUE']->value)) {
$_smarty_tpl->_assignInScope('FIELD_VALUE', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_VALUE']->value));
}?><input type="hidden" class="fieldname" value='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
' data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
" data-prev-value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD_VALUE']->value);?>
' /><?php }?></span><?php }?></div></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['COUNTER']->value == 1) {?><div class="col-md-6 fieldsLabelValue"></div><?php }?></div></div></div></div><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php echo '<script'; ?>
 type="text/javascript">
var blocks = {
	C: $('[data-label="elements_fabrication_catalogue"]'),
	ML: $('[data-label="elements_fabrication_module_logo"]'),
	VB: $('[data-label="elements_fabrication_video"]'),
	PDJ: $('[data-label="elements_fabrication_professionnel_du_jour"]'),
	EP: $('[data-label="elements_fabrication_espace_promo"]'),
	PL: $('[data-label="elements_fabrication_profession_lib"]'),
	VG: $('[data-label="elements_fabrication_video_graphique"]'),
	VT: $('[data-label="elements_fabrication_vignette_thematique"]'),
	VL: $('[data-label="elements_fabrication_vignette_localite"]'),
	VR: $('[data-label="elements_fabrication_vignette_regions"]'),
}
for (let key in blocks) {
	blocks[key].hide();
}
var format = $('#Atribution_detailView_fieldValue_format span div').html().trim();
blocks[format].show();

var validated = $('#Atribution_detailView_fieldValue_valide span div').html().trim();
if(validated == 'Oui')
	$('#sendBat').parent().parent().show();
else
	$('#sendBat').parent().parent().hide();

$(document).ready(function() {
	$('#sendBat').unbind();
	$('#sendBat').click(function() {
		document.progressLoader = $.progressIndicator({
			'message': "Envoi du BAT ...",
			'position': 'html',
			'blockInfo': {
				'enabled': true
			}
		});
		let record = getQueryVariable('record');
		let url = "index.php?action=Edicom&method=sendBat&record=" + record;
		AppConnector.request(url).done(function (data) {
			console.log(data);
			document.progressLoader.progressIndicator({ 'mode': 'hide'});
			let params = { text: "BAT envoyé!", type: 'success'};
			Vtiger_Helper_Js.showPnotify(params);
		}).fail(function (error) {
			document.progressLoader.progressIndicator({ 'mode': 'hide'});
			console.log(error);
			Vtiger_Helper_Js.showPnotify('BAT non envoyé!');
		});
	});

	var getStatutBatUrl = "index.php?action=Edicom&record=" + getQueryVariable('record') + "&method=getStatutBat";
	AppConnector.request(getStatutBatUrl).done(function (data) {
		let statut = data.result == null? 'BAT non envoyé' : data.result.statut;
		$('#Atribution_detailView_fieldValue_statut span div').html(statut);
	}).fail(function (error) {
		console.log(error);
	});
});

function getQueryVariable(variable)
{
	let query = window.location.search.substring(1);
	let vars = query.split("&");
	for (let i=0;i<vars.length;i++) {
        let pair = vars[i].split("=");
        if(pair[0] == variable)
       		return pair[1];
	}
	return null;
}
<?php echo '</script'; ?>
><?php }
}
