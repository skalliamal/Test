<?php
/* Smarty version 3.1.31, created on 2019-02-27 14:25:00
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/ConfReport/Index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c769dbc6a85e2_23195471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5e196cccf9689f89276e511600842ae8652e767' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/ConfReport/Index.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c769dbc6a85e2_23195471 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="tpl-Settings-ConfReport-Index">
	<div class="widget_header row">
		<div class="col-12 col-md-8 col-sm-7">
			<?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

		</div>
		<div class="col-12 col-md-4 col-sm-5 align-items-center d-sm-flex justify-content-end text-center text-sm-right">
			<button class="btn btn-info js-check-php float-right mr-lg-1" data-js="click">
				<span class="fab fa-php mr-lg-1"></span><?php echo App\Language::translate('BTN_CHECK_LATEST_VERSION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

			</button>
			<button class="btn btn-primary js-test-speed float-right mr-lg-1" data-js="click">
				<span class="fas fa-stopwatch mr-lg-1"></span><?php echo App\Language::translate('BTN_SERVER_SPEED_TEST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

			</button>
			<button id="download-image" class="btn btn-outline-dark">
				<span class="fas fa-download"></span> <?php echo \App\Language::translate('LBL_DOWNLOAD_CONFIG',$_smarty_tpl->tpl_vars['MODULE']->value);?>

			</button>
		</div>
	</div>
	<div class="badge badge-info my-2">
		<a> <?php echo App\Language::translate('LBL_CONFREPORT_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
	</div>
	<ul class="nav nav-tabs">
		<li class="nav-item">
			<a class="nav-link active" data-toggle="tab"
			   href="#Configuration"><?php echo App\Language::translate('LBL_YETIFORCE_ENGINE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
		</li>
		<li class="nav-item"><a class="nav-link" data-toggle="tab"
								href="#Permissions"><?php echo App\Language::translate('LBL_FILES_PERMISSIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li>
	</ul>
	<div class="tab-content">
		<div id="Configuration" class="tab-pane fade in active show">
			<div class="row">
				<div class="col-lg-12 col-xl-6">
					<table class="table table-bordered table-sm my-2">
						<thead>
						<tr>
							<th colspan="4">
								<?php echo App\Language::translate('LBL_SYSTEM_STABILITY',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
						</tr>
						<tr>
							<th colspan="1" scope="col">
								<?php echo App\Language::translate('LBL_PARAMETER',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
							<th colspan="1" scope="col">
								<?php echo App\Language::translate('LBL_RECOMMENDED',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
							<th colspan="1" scope="col">
								<?php echo App\Language::translate('LBL_WWW_VALUE',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
							<th colspan="1" scope="col">
								<?php echo App\Language::translate('LBL_CLI_VALUE',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
						</tr>
						</thead>
						<tbody class="small u-word-break-all">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STABILITY_CONF']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
							<tr <?php if ($_smarty_tpl->tpl_vars['item']->value['incorrect']) {?>class="table-danger"<?php }?>>
								<td class="bg-light">
									<?php echo $_smarty_tpl->tpl_vars['key']->value;?>

									<?php if (isset($_smarty_tpl->tpl_vars['item']->value['help']) && $_smarty_tpl->tpl_vars['item']->value['incorrect']) {?>
										<a href="#"
										   class="js-popover-tooltip float-right"
										   data-js="popover"
										   data-trigger="focus"
										   data-placement="right"
										   data-content="<?php echo \App\Language::translateEncodeHtml($_smarty_tpl->tpl_vars['item']->value['help'],$_smarty_tpl->tpl_vars['MODULE']->value);?>
">
											<span class="fas fa-info-circle"></span></a>
									<?php }?>
								</td>
								<?php if ($_smarty_tpl->tpl_vars['item']->value['recommended'] === false) {?>
									<td colspan="2">
										<?php echo $_smarty_tpl->tpl_vars['item']->value['current'];?>

									</td>
								<?php } else { ?>
									<td>
										<?php echo App\Language::translate($_smarty_tpl->tpl_vars['item']->value['recommended'],$_smarty_tpl->tpl_vars['MODULE']->value);?>

									</td>
									<td>
										<?php echo App\Language::translate($_smarty_tpl->tpl_vars['item']->value['current'],$_smarty_tpl->tpl_vars['MODULE']->value);?>

									</td>
									<td>
										<?php echo App\Language::translate($_smarty_tpl->tpl_vars['item']->value['cli'],$_smarty_tpl->tpl_vars['MODULE']->value);?>

									</td>
								<?php }?>
							</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						</tbody>
					</table>
					<table class="table table-bordered table-sm my-2">
						<thead>
						<tr>
							<th colspan="1" scope="col">
								<?php echo App\Language::translate('LBL_LIBRARY',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
							<th colspan="1" scope="col">
								<?php echo App\Language::translate('LBL_INSTALLED',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
							<th colspan="1" scope="col">
								<?php echo App\Language::translate('LBL_MANDATORY',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
						</tr>
						</thead>
						<tbody class="small u-word-break-all">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_ConfReport_Module_Model::getLibrary(), 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
							<tr <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 'LBL_NO') {?>class="table-danger"<?php }?>>
								<td class="bg-light">
									<?php echo App\Language::translate($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>

									<?php if (isset($_smarty_tpl->tpl_vars['item']->value['help']) && $_smarty_tpl->tpl_vars['item']->value['status']) {?><a href="#"
																			 class="js-popover-tooltip float-right"
																			 data-js="popover" data-trigger="focus"
																			 data-placement="right"
																			 data-content="<?php echo App\Language::translate($_smarty_tpl->tpl_vars['item']->value['help'],$_smarty_tpl->tpl_vars['MODULE']->value);?>
">
											<span class="fas fa-info-circle"></span></a><?php }?>
								</td>
								<td>
									<?php echo App\Language::translate($_smarty_tpl->tpl_vars['item']->value['status'],$_smarty_tpl->tpl_vars['MODULE']->value);?>

								</td>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['item']->value['mandatory']) {?>
										<?php echo App\Language::translate('LBL_MANDATORY',$_smarty_tpl->tpl_vars['MODULE']->value);?>

									<?php } else { ?>
										<?php echo App\Language::translate('LBL_OPTIONAL',$_smarty_tpl->tpl_vars['MODULE']->value);?>

									<?php }?>
								</td>
							</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						</tbody>
					</table>
					<table class="table table-bordered table-sm my-2">
						<thead>
						<tr>
							<th colspan="3" scope="col">
								<?php echo App\Language::translate('LBL_ENVIRONMENTAL_INFORMATION',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
						</tr>
						<tr>
							<th colspan="1" class="w-25" scope="col">
								<?php echo App\Language::translate('LBL_PARAMETER',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
							<th colspan="1" scope="col">
								<?php echo App\Language::translate('LBL_WWW_VALUE',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
							<th colspan="1" scope="col">
								<?php echo App\Language::translate('LBL_CLI_VALUE',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
						</tr>
						</thead>
						<tbody class="small u-word-break-all">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SYSTEM_INFO']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
							<tr>
								<td class="bg-light">
									<?php echo App\Language::translate($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>

								</td>
								<?php if (is_array($_smarty_tpl->tpl_vars['item']->value)) {?>
									<td>
										<?php echo App\Language::translate($_smarty_tpl->tpl_vars['item']->value['www'],$_smarty_tpl->tpl_vars['MODULE']->value);?>

									</td>
									<td>
										<?php echo App\Language::translate($_smarty_tpl->tpl_vars['item']->value['cli'],$_smarty_tpl->tpl_vars['MODULE']->value);?>

									</td>
								<?php } else { ?>
									<td colspan="2">
										<?php echo $_smarty_tpl->tpl_vars['item']->value;?>

									</td>
								<?php }?>
							</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						</tbody>
					</table>
					<table class="table table-bordered table-sm my-2">
						<thead>
						<tr>
							<th colspan="4" scope="col">
								<?php echo App\Language::translate('LBL_PERFORMANCE_VERIFICATION',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
						</tr>
						<tr>
							<th colspan="1" class="w-25" scope="col">
								<?php echo App\Language::translate('LBL_PARAMETER',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
							<th colspan="1" scope="col">
								<?php echo App\Language::translate('LBL_RECOMMENDED',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
							<th colspan="1" scope="col">
								<?php echo App\Language::translate('LBL_WWW_VALUE',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
							<th colspan="1" scope="col">
								<?php echo App\Language::translate('LBL_CLI_VALUE',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
						</tr>
						</thead>
						<tbody class="small u-word-break-all">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PERFORMANCE_INFO']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
							<tr <?php if ($_smarty_tpl->tpl_vars['item']->value['incorrect']) {?>class="table-danger"<?php }?>>
								<td class="bg-light">
									<?php echo App\Language::translate($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>

								</td>
								<td>
									<?php echo App\Language::translate($_smarty_tpl->tpl_vars['item']->value['recommended'],$_smarty_tpl->tpl_vars['MODULE']->value);?>

								</td>
								<?php if (is_array($_smarty_tpl->tpl_vars['item']->value)) {?>
									<td>
										<?php echo App\Language::translate($_smarty_tpl->tpl_vars['item']->value['www'],$_smarty_tpl->tpl_vars['MODULE']->value);?>

									</td>
									<td>
										<?php echo App\Language::translate($_smarty_tpl->tpl_vars['item']->value['cli'],$_smarty_tpl->tpl_vars['MODULE']->value);?>

									</td>
								<?php } else { ?>
									<td colspan="2">
										<?php echo $_smarty_tpl->tpl_vars['item']->value;?>

									</td>
								<?php }?>
							</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						</tbody>
					</table>
				</div>
				<div class="col-lg-12 col-xl-6">
					<table class="table table-bordered table-sm my-2">
						<thead>
						<tr>
							<th colspan="3" scope="col">
								<?php echo App\Language::translate('LBL_SYSTEM_SECURITY',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
						</tr>
						<tr>
							<th colspan="1" scope="col">
								<?php echo App\Language::translate('LBL_PARAMETER',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
							<th colspan="1" scope="col">
								<?php echo App\Language::translate('LBL_RECOMMENDED',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
							<th colspan="1" scope="col">
								<?php echo App\Language::translate('LBL_VALUE',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
						</tr>
						</thead>
						<tbody class="small u-word-break-all">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SECURITY_CONF']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
							<tr <?php if ($_smarty_tpl->tpl_vars['item']->value['status']) {?>class="table-danger"<?php }?>>
								<td class="bg-light">
									<?php echo $_smarty_tpl->tpl_vars['key']->value;?>

									<?php if (isset($_smarty_tpl->tpl_vars['item']->value['help']) && $_smarty_tpl->tpl_vars['item']->value['status']) {?>
										<a href="#"
										   class="js-popover-tooltip float-right"
										   data-js="popover" data-trigger="focus"
										   data-placement="right"
										   data-content="<?php echo \App\Language::translateEncodeHtml($_smarty_tpl->tpl_vars['item']->value['help'],$_smarty_tpl->tpl_vars['MODULE']->value);?>
">
											<span class="fas fa-info-circle"></span>
										</a>
									<?php }?>
								</td>
								<td>
									<?php echo App\Language::translate($_smarty_tpl->tpl_vars['item']->value['recommended'],$_smarty_tpl->tpl_vars['MODULE']->value);?>

								</td>
								<td>
									<?php echo App\Language::translate($_smarty_tpl->tpl_vars['item']->value['current'],$_smarty_tpl->tpl_vars['MODULE']->value);?>

								</td>
							</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						</tbody>
					</table>
					<table class="table table-bordered table-sm my-2">
						<thead>
						<tr>
							<th colspan="2" scope="col">
								<?php echo App\Language::translate('LBL_DENY_PUBLIC_DIR_TITLE',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
						</tr>
						<tr>
							<th colspan="1" scope="col">
								<?php echo App\Language::translate('LBL_PUBLIC_DIR',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
							<th colspan="1" scope="col">
								<?php echo App\Language::translate('LBL_DENY_PUBLIC_DIR_STATUS',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
						</tr>
						</thead>
						<tbody class="small u-word-break-all">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_ConfReport_Module_Model::getDenyPublicDirState(), 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
							<tr <?php if ($_smarty_tpl->tpl_vars['item']->value['status']) {?>class="table-danger"<?php }?>>
								<td class="bg-light">
									<?php echo $_smarty_tpl->tpl_vars['key']->value;?>

									<?php if (isset($_smarty_tpl->tpl_vars['item']->value['help']) && $_smarty_tpl->tpl_vars['item']->value['status']) {?><a href="#"
																			 class="js-popover-tooltip float-right"
																			 data-js="popover" data-trigger="focus"
																			 data-placement="right"
																			 data-content="<?php echo \App\Language::translateEncodeHtml($_smarty_tpl->tpl_vars['item']->value['help'],$_smarty_tpl->tpl_vars['MODULE']->value);?>
">
											<span class="fas fa-info-circle"></span></a><?php }?>
								</td>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['item']->value['status']) {?>
										<?php echo App\Language::translate('LBL_NO',$_smarty_tpl->tpl_vars['MODULE']->value);?>

									<?php } else { ?>
										<?php echo App\Language::translate('LBL_YES',$_smarty_tpl->tpl_vars['MODULE']->value);?>

									<?php }?>
								</td>
							</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						</tbody>
					</table>
					<table class="table table-bordered table-sm my-2">
						<thead>
						<tr>
							<th colspan="3" scope="col">
								<?php echo App\Language::translate('LBL_DATABASE_INFORMATION',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
						</tr>
						<tr>
							<th colspan="1" class="w-25" scope="col">
								<?php echo App\Language::translate('LBL_PARAMETER',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
							<th colspan="1" class="w-25" scope="col">
								<?php echo App\Language::translate('LBL_RECOMMENDED',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							</th>
							<th colspan="1" scope="col">
								<span><?php echo App\Language::translate('LBL_VALUE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>
							</th>
						</tr>
						</thead>
						<tbody class="small u-word-break-all">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DB_CONF']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
							<tr <?php if ($_smarty_tpl->tpl_vars['item']->value['status']) {?>class="table-danger"<?php }?>>
								<td class="bg-light">
									<?php echo App\Language::translate($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>

									<?php if (isset($_smarty_tpl->tpl_vars['item']->value['help']) && $_smarty_tpl->tpl_vars['item']->value['status']) {?><a href="#"
																			 class="js-popover-tooltip float-right"
																			 data-js="popover" data-trigger="focus"
																			 data-placement="right"
																			 data-content="<?php echo \App\Language::translateEncodeHtml($_smarty_tpl->tpl_vars['item']->value['help'],$_smarty_tpl->tpl_vars['MODULE']->value);?>
">
											<span class="fas fa-info-circle"></span></a><?php }?>
								</td>
								<?php if ($_smarty_tpl->tpl_vars['item']->value['recommended'] === false) {?>
									<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['item']->value['current'];?>
</td>
								<?php } else { ?>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['recommended'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['item']->value['current'];?>
</td>
								<?php }?>
							</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div id="Permissions" class="tab-pane fade">
			<table class="table table-bordered table-sm my-2">
				<thead>
				<tr>
					<th colspan="1" scope="col">
						<span><?php echo App\Language::translate('LBL_FILE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>
					</th>
					<th colspan="1" scope="col">
						<span><?php echo App\Language::translate('LBL_PATH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>
					</th>
					<th colspan="1" scope="col">
						<span><?php echo App\Language::translate('LBL_PERMISSION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>
					</th>
				</tr>
				</thead>
				<tbody class="small">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_ConfReport_Module_Model::getPermissionsFiles(), 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
					<tr <?php if ($_smarty_tpl->tpl_vars['item']->value['permission'] == 'FailedPermission') {?>class="table-danger"<?php }?>>
						<td class="bg-light"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td>
						<td><?php echo App\Language::translate($_smarty_tpl->tpl_vars['item']->value['path'],$_smarty_tpl->tpl_vars['MODULE']->value);?>

						</td>
						<td>
							<?php if ($_smarty_tpl->tpl_vars['item']->value['permission'] == 'FailedPermission') {?>
								<?php echo App\Language::translate('LBL_FAILED_PERMISSION',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							<?php } else { ?>
								<?php echo App\Language::translate('LBL_TRUE_PERMISSION',$_smarty_tpl->tpl_vars['MODULE']->value);?>

							<?php }?>
						</td>
					</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				</tbody>
			</table>
		</div>
	</div>
</div>
<?php }
}
