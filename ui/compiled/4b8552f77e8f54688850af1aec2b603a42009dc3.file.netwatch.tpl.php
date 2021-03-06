<?php /* Smarty version Smarty-3.1.13, created on 2018-08-07 01:32:00
         compiled from "ui\theme\default\netwatch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13005b6894205a5f91-73888015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b8552f77e8f54688850af1aec2b603a42009dc3' => 
    array (
      0 => 'ui\\theme\\default\\netwatch.tpl',
      1 => 1530202921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13005b6894205a5f91-73888015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_url' => 0,
    '_L' => 0,
    'notify' => 0,
    'netwatch' => 0,
    'netwatch_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b689420678ec7_80859179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b689420678ec7_80859179')) {function content_5b689420678ec7_80859179($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


			<script>				
				function enable() {
					document.getElementById("netwatch").setAttribute("action", "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
mikrotik/enable-selected-netwatch");
					document.forms['netwatch'].submit();
				}
				function disable() {
					document.getElementById("netwatch").setAttribute("action", "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
mikrotik/disable-selected-netwatch");
					document.forms['netwatch'].submit();
				}
				function remove() {
					if(confirm('<?php echo $_smarty_tpl->tpl_vars['_L']->value["API_Remove_Alert"];?>
')){
						document.getElementById("netwatch").setAttribute("action", "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
mikrotik/remove-selected-netwatch");
						document.forms['netwatch'].submit();
					}	
				}					
			</script>

			<div class="content-wrapper">
				<section class="content">
					<div class="row">
						<?php if (isset($_smarty_tpl->tpl_vars['notify']->value)){?>
							<?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

						<?php }?>
						<div class="col-sm-12">
							<div class="panel">
								<div class="panel-heading">Netwatch List</div>
								<div class="panel-body">
									<div class="group">
										<div style="margin-top:4px;" class="dropdown "><a style="width:170px" href="#" class="dropdown-toggle btn btn-success waves-effect" data-toggle="dropdown" aria-expanded="false"><i class="ion ion-navicon-round"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Option_Menu'];?>
<span class="caret"></a></span>
											<ul style="margin-left:2px;width:auto;min-width:168px" class="dropdown-menu">	
												<li style="margin-left:8px;color:red" class="dropdown-title">Add/Create</li>
												<li><a href="#add-netwatch" data-toggle="modal" data-target="#add-netwatch" title="ADD NEW NETWATCH"><i class="ion ion-ios-sunny"></i> New Netwatch</a></li>
												<li style="margin-left:8px;color:red" class="dropdown-title">Action</li>
												<li><a onclick="enable();"  href="#enable" title="ENABLE SELECTED"><i class="ion ion-ios-sunny"></i> Enable Selected</a></li>	
												<li><a onclick="disable();"  href="#disable" title="DISABLE SELECTED"><i class="ion ion-ios-sunny"></i> Disable Selected</a></li>
												<li><a onclick="remove();"  href="#remove" title="REMOVE SELECTED"> <i class="ion ion-ios-sunny"></i> Remove Selected</a></li>												
											</ul>
										</div>
									</div>								
									<hr>
									<div class="adv-table table-responsive">
										<form id="netwatch" method="post" role="form">
											<table  class="display table table-bordered table-bordered" id="dynamic-table">
												<thead>
													<tr>
														<th class="text-center"><input onclick="toggle(this);" type="checkbox" id="checkAll"></th>
														<th>Host</th>
														<th>Timeout</th>
														<th>Interval</th>
														<th>since</th>
														<th>Status</th>
														<th>Manage</th>
													</tr>
												</thead>
												<tbody>
												<?php  $_smarty_tpl->tpl_vars['netwatch_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['netwatch_list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['netwatch']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['netwatch_list']->key => $_smarty_tpl->tpl_vars['netwatch_list']->value){
$_smarty_tpl->tpl_vars['netwatch_list']->_loop = true;
?>
													<tr>
														<td align="center">													
															<input type="checkbox" name="checked[]" value="<?php echo $_smarty_tpl->tpl_vars['netwatch_list']->value['.id'];?>
">
														</td>
														<td><?php echo $_smarty_tpl->tpl_vars['netwatch_list']->value['host'];?>
</td>
														<td><?php echo $_smarty_tpl->tpl_vars['netwatch_list']->value['timeout'];?>
</td>
														<td><?php echo $_smarty_tpl->tpl_vars['netwatch_list']->value['interval'];?>
</td>
														<td><?php echo $_smarty_tpl->tpl_vars['netwatch_list']->value['since'];?>
</td>
														<td>	
													<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['netwatch_list']->value['disabled'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='true'){?>
														<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
mikrotik/enable-netwatch&id=<?php echo $_smarty_tpl->tpl_vars['netwatch_list']->value['.id'];?>
&host=<?php echo $_smarty_tpl->tpl_vars['netwatch_list']->value['host'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['netwatch_list']->value['.id'];?>
" title="ENABLE THIS NETWATCH"><span style="width:65px;" class="btn btn-danger btn-sm cdelete">Disable</span></a>
													<?php }else{ ?>													
														<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
mikrotik/disable-netwatch&id=<?php echo $_smarty_tpl->tpl_vars['netwatch_list']->value['.id'];?>
&host=<?php echo $_smarty_tpl->tpl_vars['netwatch_list']->value['host'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['netwatch_list']->value['.id'];?>
" title="DISABLE THIS NETWATCH"><span style="width:65px;" class="btn btn-success btn-sm cdelete">Enable</span></a>
													<?php }?>
												
													<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['netwatch_list']->value['status'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=='up'){?>
														<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['netwatch_list']->value['.id'];?>
" title="Link Up" style="width:65px;" class="btn btn-success btn-sm cdelete">Up</a>
													<?php }else{ ?>
														<a href="#" id="<?php echo $_smarty_tpl->tpl_vars['netwatch_list']->value['.id'];?>
" title="Link Down" style="width:65px;" class="btn btn-danger btn-sm cdelete">Down</a>
													<?php }?>
														</td>
														<td>
															<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
mikrotik/edit-netwatch&id=<?php echo $_smarty_tpl->tpl_vars['netwatch_list']->value['.id'];?>
&host=<?php echo $_smarty_tpl->tpl_vars['netwatch_list']->value['host'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['netwatch_list']->value['.id'];?>
" title="EDIT THIS NETWATCH" style="color:#fff;font-size:17px;width:30px;height:30px;" class="btn btn-success btn-sm fa fa-pencil-square-o" aria-hidden="true">
															</a>
															<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
mikrotik/remove-netwatch&id=<?php echo $_smarty_tpl->tpl_vars['netwatch_list']->value['.id'];?>
&host=<?php echo $_smarty_tpl->tpl_vars['netwatch_list']->value['host'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['netwatch_list']->value['.id'];?>
" title="REMOVE THIS NETWATCH" onClick="return confirm('<?php echo $_smarty_tpl->tpl_vars['_L']->value['API_Remove_Alert'];?>
')" style="color:#fff;font-size:17px;width:30px;height:30px;" class="btn btn-warning btn-sm cdelete fa fa-trash" aria-hidden="true"></a>
														</td>
													</tr>
												<?php } ?>
												</tbody>
											</table>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>							
				
		<!--modal add netwatch -->
			<div class="modal fade" id="add-netwatch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
				<div  class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Add Netwatch</h4>
						</div>
						<div class="modal-body">
							<form id="modal-form" class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
mikrotik/add-netwatch" >
								<div class="col-md-3 col-sm-6">	
									<div class="form-group">
										<label class="col-md-2 control-label">Host</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="host" id="host" placeholder="example, 192.168.1.1" required>
										</div>
									</div>
								</div>	
								<div class="col-md-3 col-sm-6">						
									<div class="form-group">
										<label class="col-md-2 control-label">Comment</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="comment" id="comment" value="add by mixbill-manager">
										</div>
									</div>
								</div>		
								<div class="col-md-3 col-sm-6">						
									<div class="form-group">
										<label class="col-md-2 control-label">Interval</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="interval" id="interval" placeholder="example, 06:00:00" required>
										</div>
									</div>
								</div>	
								<div class="col-md-3 col-sm-6">	
									<div class="form-group">
										<label class="col-md-2 control-label">Timeout</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="timeout" id="timeout" value="00:00:01" placeholder="example, 443" required>
										</div>
									</div>
								</div>	
								<div class="form-group">
									<label class="col-md-2 control-label">Up Script</label>
									<div class="col-md-6">
										<textarea name="up_script" id="up_script"  class="form-control" placeholder="insert script name or write script command here ..."></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Down Script</label>
									<div class="col-md-6">
										<textarea name="down_script" id="down_script"  class="form-control" placeholder="insert script name or write script command here ..."></textarea>
									</div>
								</div>	
								<hr/>
								<div>									
									<button style="width:131px" class="btn btn-success waves-effect waves-light" name="add" type="submit">Add Netwatch</button>									
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>	
		<!--modal add netwatch -->				

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>