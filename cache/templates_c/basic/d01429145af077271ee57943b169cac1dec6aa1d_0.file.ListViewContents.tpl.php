<?php
/* Smarty version 3.1.31, created on 2019-03-26 14:08:52
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/CronTasks/ListViewContents.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9a327474f846_27719544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd01429145af077271ee57943b169cac1dec6aa1d' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/CronTasks/ListViewContents.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9a327474f846_27719544 (Smarty_Internal_Template $_smarty_tpl) {
?>

<input type="hidden" id="pageStartRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordStartRange();?>
" /><input type="hidden" id="pageEndRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordEndRange();?>
" /><input type="hidden" id="previousPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isPrevPageExists();?>
" /><input type="hidden" id="nextPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists();?>
" /><input type="hidden" id="totalCount" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
" /><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ORDER_BY']->value;?>
" id="orderBy" /><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SORT_ORDER']->value;?>
" id="sortOrder" /><input type="hidden" id="totalCount" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
" /><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value;?>
" id='pageNumber'><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
" id='pageLimit'><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value;?>
" id="noOfEntries"><div class="tpl-Settings-CronTasks-ListViewContents listViewEntriesDiv u-overflow-scroll-xs-down"><span class="listViewLoadingImageBlock d-none modal" id="loadingListViewModal"><img class="listViewLoadingImage" src="<?php echo \App\Layout::getImagePath('loading.gif');?>
" alt="no-image" title="<?php echo \App\Language::translate('LBL_LOADING');?>
" /><p class="listViewLoadingMsg"><?php echo \App\Language::translate('LBL_LOADING_LISTVIEW_CONTENTS');?>
........</p></span><?php $_smarty_tpl->_assignInScope('NAME_FIELDS', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getNameFields());
$_smarty_tpl->_assignInScope('WIDTHTYPE', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'));
?><table class="table tableRWD table-bordered table-sm  listViewEntriesTable"><thead col-visible-alltime='2'><tr class="listViewHeaders"><th width="1%" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"></th><?php ob_start();
echo 99/(count($_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value));
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('WIDTH', $_prefixVariable1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER', true);
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration == $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
$__foreach_LISTVIEW_HEADER_3_saved = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'];
?><th  <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last) {?>colspan="1" <?php }?> class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><a  <?php if (!($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->has('sort'))) {?> class="listViewHeaderValues u-cursor-pointer" data-nextsortorderval="<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value == $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')) {
echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;
} else { ?>ASC<?php }?>" data-columnname="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name');?>
" <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value == $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')) {?>&nbsp;&nbsp;<span class="<?php echo $_smarty_tpl->tpl_vars['SORT_IMAGE']->value;?>
"></span><?php }?></a></th><?php
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = $__foreach_LISTVIEW_HEADER_3_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value, 'LISTVIEW_ENTRY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value) {
?><tr class="listViewEntries" data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
"<?php echo ' ';
if (method_exists($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value,'getDetailViewUrl')) {?>data-recordurl="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDetailViewUrl();?>
"<?php }?>><td width="1%" nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><span class="fas fa-ellipsis-v" title="<?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"></span></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER', true);
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration == $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
$__foreach_LISTVIEW_HEADER_5_saved = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'];
$_smarty_tpl->_assignInScope('LISTVIEW_HEADERNAME', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name'));
$_smarty_tpl->_assignInScope('LAST_COLUMN', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last);
$_smarty_tpl->_assignInScope('VALUE', $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDisplayValue($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value));
?><td class="listViewEntryValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"  >&nbsp;<?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value === 'duration') {
if ($_smarty_tpl->tpl_vars['VALUE']->value === 'running') {?><i class="fa fa-spinner fa-spin" title="<?php echo \App\Language::translate('LBL_IS_RUNNING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></i><?php } elseif ($_smarty_tpl->tpl_vars['VALUE']->value === 'timeout') {?><i class="fa fa-exclamation-triangle text-danger" title="<?php echo \App\Language::translate('LBL_HAD_TIMEOUT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></i><?php } else {
echo $_smarty_tpl->tpl_vars['VALUE']->value;
}
} else {
echo $_smarty_tpl->tpl_vars['VALUE']->value;
}
if ($_smarty_tpl->tpl_vars['LAST_COLUMN']->value && $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRecordLinks()) {?></td><td nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><div class="float-right actions"><span class="actionImages"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRecordLinks(), 'RECORD_LINK', true);
$_smarty_tpl->tpl_vars['RECORD_LINK']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RECORD_LINK']->value) {
$_smarty_tpl->tpl_vars['RECORD_LINK']->iteration++;
$_smarty_tpl->tpl_vars['RECORD_LINK']->last = $_smarty_tpl->tpl_vars['RECORD_LINK']->iteration == $_smarty_tpl->tpl_vars['RECORD_LINK']->total;
$__foreach_RECORD_LINK_6_saved = $_smarty_tpl->tpl_vars['RECORD_LINK'];
$_smarty_tpl->_assignInScope('RECORD_LINK_URL', $_smarty_tpl->tpl_vars['RECORD_LINK']->value->getUrl());
?><a <?php if (stripos($_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value,'javascript:') === 0) {?> onclick="<?php echo substr($_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value,strlen("javascript:"));?>
;if (event.stopPropagation){event.stopPropagation();} else{event.cancelBubble = true;}" <?php } else { ?> href='<?php echo $_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value;?>
' <?php }?>><span class="<?php echo $_smarty_tpl->tpl_vars['RECORD_LINK']->value->getIcon();?>
 alignMiddle" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RECORD_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a><?php if (!$_smarty_tpl->tpl_vars['RECORD_LINK']->last) {?>&nbsp;&nbsp;<?php }
$_smarty_tpl->tpl_vars['RECORD_LINK'] = $__foreach_RECORD_LINK_6_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</span></div></td><?php }?></td><?php
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = $__foreach_LISTVIEW_HEADER_5_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table><!--added this div for Temporarily --><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value == '0') {?><table class="emptyRecordsDiv"><tbody><tr><td><?php echo \App\Language::translate('LBL_NO');?>
 <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo \App\Language::translate('LBL_FOUND');?>
</td></tr></tbody></table><?php }?></div></div>
<?php }
}
