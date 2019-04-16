<?php
/* Smarty version 3.1.31, created on 2019-03-20 07:45:50
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Vtiger/Security.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c91efae7ff224_71958753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b52dc55e4735a1907e9f4c4f18797c79c96e5a7d' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Vtiger/Security.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c91efae7ff224_71958753 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="securityIndexPage table-responsive"><table class="table tableRWD table-bordered table-sm themeTableColor confTable"><thead><tr class="blockHeader"><th colspan="3" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_SYSTEM_SECURITY','Settings::ConfReport');?>
</span></th></tr><tr class="blockHeader"><th colspan="1" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_PARAMETER','Settings::ConfReport');?>
</span></th><th colspan="1" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_RECOMMENDED','Settings::ConfReport');?>
</span></th><th colspan="1" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_VALUE','Settings::ConfReport');?>
</span></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_ConfReport_Module_Model::getSecurityConf(), 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?><tr <?php if ($_smarty_tpl->tpl_vars['item']->value['status']) {?>class="table-danger"<?php }?>><td><label><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</label><?php if (isset($_smarty_tpl->tpl_vars['item']->value['help']) && $_smarty_tpl->tpl_vars['item']->value['status']) {?><a href="#" class="js-popover-tooltip float-right text-dark" data-js="popover" data-trigger="focus" data-placement="right" data-content="<?php echo App\Language::translate($_smarty_tpl->tpl_vars['item']->value['help'],'Settings::ConfReport');?>
"><span class="fas fa-info-circle"></span></a><?php }?></td><td><label><?php echo App\Language::translate($_smarty_tpl->tpl_vars['item']->value['recommended'],'Settings::ConfReport');?>
</label></td><td><label><?php echo App\Language::translate($_smarty_tpl->tpl_vars['item']->value['current'],'Settings::ConfReport');?>
</label></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table><?php if ($_smarty_tpl->tpl_vars['SENSIOLABS']->value) {?><br /><table class="table tableRWD table-bordered table-sm themeTableColor confTable"><thead><tr class="blockHeader"><th colspan="4" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_SECURITY_ADVISORIES_CHECKER','Settings::ConfReport');?>
</span></th></tr><tr class="blockHeader"><th colspan="1" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_LIB_NAME','Settings::ConfReport');?>
</span></th><th colspan="1" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_VULNERABILITY_NAME','Settings::ConfReport');?>
</span></th><th colspan="1" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_VULNERABILITY_URL','Settings::ConfReport');?>
</span></th><th colspan="1" class="mediumWidthType"><span>CVE</span></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SENSIOLABS']->value, 'LIB', false, 'LIB_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LIB_NAME']->value => $_smarty_tpl->tpl_vars['LIB']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LIB']->value['advisories'], 'ADVISORIE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ADVISORIE']->value) {
?><tr><td><label><?php echo $_smarty_tpl->tpl_vars['LIB_NAME']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['LIB']->value['version'];?>
)</label></td><td><label><?php echo $_smarty_tpl->tpl_vars['ADVISORIE']->value['title'];?>
</label></td><td><label><a title="<?php echo $_smarty_tpl->tpl_vars['ADVISORIE']->value['cve'];?>
" target="_blank" rel="noreferrer" href="<?php echo $_smarty_tpl->tpl_vars['ADVISORIE']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['ADVISORIE']->value['link'];?>
</a></label></td><td><label><?php echo $_smarty_tpl->tpl_vars['ADVISORIE']->value['cve'];?>
</label></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table><?php }
$_smarty_tpl->_assignInScope('ACCESS_FOR_ADMIN', App\Log::getLogs('access_for_admin','oneDay'));
if ($_smarty_tpl->tpl_vars['ACCESS_FOR_ADMIN']->value) {?><br /><table class="table tableRWD table-bordered table-sm themeTableColor confTable"><thead><tr class="blockHeader"><th colspan="3" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_LOG_ACCESS_FOR_ADMIN','Settings::Vtiger');?>
</span></th></tr><tr class="blockHeader"><th colspan="1" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_DATE');?>
</span></th><th colspan="1" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_USER');?>
</span></th><th colspan="1" class="mediumWidthType"><span>Url</span></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACCESS_FOR_ADMIN']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?><tr><td><label><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</label></td><td><label><?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
</label></td><td><label><?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
</label></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table><?php }
$_smarty_tpl->_assignInScope('ACCESS_FOR_RECORD', App\Log::getLogs('access_to_record','oneDay'));
if ($_smarty_tpl->tpl_vars['ACCESS_FOR_RECORD']->value) {?><br /><table class="table tableRWD table-bordered table-sm themeTableColor confTable"><thead><tr class="blockHeader"><th colspan="4" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_LOG_ACCESS_TO_RECORD','Settings::Vtiger');?>
</span></th></tr><tr class="blockHeader"><th colspan="1" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_DATE');?>
</span></th><th colspan="1" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_USER');?>
</span></th><th colspan="1" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_RECORD_ID','Other.TextParser');?>
</span></th><th colspan="1" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_MODULE_NAME');?>
</span></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACCESS_FOR_RECORD']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?><tr><td><label><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</label></td><td><label><?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
</label></td><td><label><?php echo $_smarty_tpl->tpl_vars['item']->value['record'];?>
</label></td><td><label><?php echo App\Language::translate($_smarty_tpl->tpl_vars['item']->value['module'],$_smarty_tpl->tpl_vars['item']->value['module']);?>
</label></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table><?php }
$_smarty_tpl->_assignInScope('ACCESS_FOR_API', App\Log::getLogs('access_for_api','oneDay'));
if ($_smarty_tpl->tpl_vars['ACCESS_FOR_API']->value) {?><br /><table class="table tableRWD table-bordered table-sm themeTableColor confTable"><thead><tr class="blockHeader"><th colspan="3" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_LOG_ACCESS_FOR_API','Settings::Vtiger');?>
</span></th></tr><tr class="blockHeader"><th colspan="1" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_DATE');?>
</span></th><th colspan="1" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_USER');?>
</span></th><th colspan="1" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_USER_IP_ADDRESS','Settings::Vtiger');?>
</span></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACCESS_FOR_API']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?><tr><td><label><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</label></td><td><label><?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
</label></td><td><label><?php echo $_smarty_tpl->tpl_vars['item']->value['ip'];?>
</label></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table><?php }
$_smarty_tpl->_assignInScope('ACCESS_FOR_USER', App\Log::getLogs('access_for_user','oneDay'));
if ($_smarty_tpl->tpl_vars['ACCESS_FOR_USER']->value) {?><br /><table class="table tableRWD table-bordered table-sm themeTableColor confTable"><thead><tr class="blockHeader"><th colspan="4" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_LOG_ACCESS_FOR_USER','Settings::Vtiger');?>
</span></th></tr><tr class="blockHeader"><th colspan="1" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_DATE');?>
</span></th><th colspan="1" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_USER');?>
</span></th><th colspan="1" class="mediumWidthType"><span><?php echo App\Language::translate('LBL_USER_IP_ADDRESS','Settings::Vtiger');?>
</span></th><th colspan="1" class="mediumWidthType"><span>Url</span></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACCESS_FOR_USER']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?><tr><td><label><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</label></td><td><label><?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
</label></td><td><label><?php echo $_smarty_tpl->tpl_vars['item']->value['ip'];?>
</label></td><td><label><?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
</label></td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table><?php }?></div>
<?php }
}
