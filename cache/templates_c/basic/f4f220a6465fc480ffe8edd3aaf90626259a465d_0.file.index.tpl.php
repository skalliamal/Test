<?php
/* Smarty version 3.1.31, created on 2019-03-04 15:39:21
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/OSSMail/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c7d46a97e4f65_19477159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4f220a6465fc480ffe8edd3aaf90626259a465d' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/OSSMail/index.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7d46a97e4f65_19477159 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
>
	var height = window.innerHeight;
	$(document).ready(function () {
		var v = 83;
		if ($('.js-footer__user-info').length) {
			v = 100;
		}
		$('#roundcube_interface').css('height', height - v)
	});
<?php echo '</script'; ?>
>
<input type="hidden" value="" id="tempField" name="tempField" />
<iframe id="roundcube_interface" style="width: 100%; height: 590px;margin-bottom: -5px;" frameborder="0" src="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
" frameborder="0"> </iframe>
<?php }
}
