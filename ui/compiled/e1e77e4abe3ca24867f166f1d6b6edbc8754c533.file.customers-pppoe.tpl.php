<?php /* Smarty version Smarty-3.1.13, created on 2018-08-07 02:39:51
         compiled from "ui\theme\default\customers-pppoe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:231155b68a40779d506-39283470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1e77e4abe3ca24867f166f1d6b6edbc8754c533' => 
    array (
      0 => 'ui\\theme\\default\\customers-pppoe.tpl',
      1 => 1530282516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '231155b68a40779d506-39283470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'notify' => 0,
    '_admin' => 0,
    'o' => 0,
    'os' => 0,
    'c' => 0,
    'cs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5b68a407904b53_13206566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b68a407904b53_13206566')) {function content_5b68a407904b53_13206566($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


			<script>		
				function remove() {
					if(confirm('<?php echo $_smarty_tpl->tpl_vars['_L']->value["Remove_Alert"];?>
')){
						document.getElementById("member").setAttribute("action", "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/remove-selected");
						document.forms['member'].submit();
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
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage_Member'];?>
 PPPOE</div>
								<div class="panel-body">
									<div class="group">
										<div style="margin-top:4px;margin-bottom:-20px" class="dropdown "><a style="width:170px" href="#" class="dropdown-toggle btn btn-success waves-effect" data-toggle="dropdown" aria-expanded="false"><i class="ion ion-navicon-round"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Option_Menu'];?>
<span class="caret"></a></span>
											<ul style="margin-left:2px;width:auto;min-width:168px" class="dropdown-menu">
												<li><a href="#add-member" data-toggle="modal" data-target="#add-member" title="ADD NEW PPPOE MEMBER"><i class="ion ion-plus"> </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Member'];?>
</a></li>
												<li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/pppoe" title="LIST PPPOE MEMBER"><i class="ion ion-person"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['List_Member'];?>
</a></li>
												<li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/pppoe" title="LIST PREPAID PPPOE"><i class="ion ion-ribbon-b"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Prepaid_PPPOE'];?>
</a></li>
												<li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/recharge-pppoe" title="RECHARGE PPPOE MEMBER"><i class="ion ion-flash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge_Member'];?>
</a></li>
												<li><a href="#remove" onclick="remove();" title="REMOVE SELECTED PPPOE MEMBER"><i class="ion ion-trash-a"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Remove_Selected'];?>
</a></li>													
											</ul>
										</div>						
									</div>
									<br>
									<hr>
									<div class="adv-table table-responsive">
										<form id="member" method="post" role="form">
											<table  class="display table table-bordered table-bordered" id="customers-pppoe">
												<thead>
													<tr>
														<th class="text-center"><input onclick="toggle(this);" type="checkbox" id="checkAll"></th>
														<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</th>
														<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone_Number'];?>
</th>
														<!--<th>Email</th>-->
														<th>IP Address</th>
														<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
														<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
</th>
														<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</th>
														<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Owner'];?>
</th>
														<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge'];?>
</th>
														<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
													</tr>
												</thead>
											</table>
										</form>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>					
		
			<div>
			<!--modal add member -->
				<div class="modal fade" id="add-member" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
					<div  class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Member'];?>
</h4>
							</div>
							<div class="modal-body">
								<form id="modal-form" class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/add-post" > 
									<ul class="nav nav-tabs">
										<li class="active"><a data-toggle="tab" href="#service-plan"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Services_Plan'];?>
</a></li>
										<li><a data-toggle="tab" href="#account"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</a></li>
										<li><a href="#existing-ip" data-toggle="modal" data-target="#existing-ip"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Check_IP'];?>
</a></li>
									</ul>
									
									<div class="tab-content">
										<div id="service-plan" class="tab-pane fade in active">
											<div class="form-group">
												<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
												<div style="margin-top:3px;" class="col-md-6">
													<input type="radio" id="Hot" name="type" value="Hotspot" disabled> HOTSPOT 
													<input style="margin-left:10px;" type="radio" id="POE" name="type" value="PPPOE"> PPPOE
												</div>
											</div>
										<div class="col-md-3 col-sm-6">		
											<div class="form-group">
												<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Owner'];?>
</label>
												<div class="col-md-6">
												<?php if ($_smarty_tpl->tpl_vars['_admin']->value['user_type']=='Admin'){?>
													<select class="form-control select2" name="owner" style="width: 100%" data-placeholder="- <?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Owner'];?>
 -" required>						
														<option></option>
													<?php  $_smarty_tpl->tpl_vars['os'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['os']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['o']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['os']->key => $_smarty_tpl->tpl_vars['os']->value){
$_smarty_tpl->tpl_vars['os']->_loop = true;
?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['os']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['os']->value['username'];?>
</option>
													<?php } ?>						
													</select>
												<?php }else{ ?>
													<select class="form-control select2" name="owner" style="width: 100%" data-placeholder="- <?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Owner'];?>
 -" readonly>
														<option value="<?php echo $_smarty_tpl->tpl_vars['_admin']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_admin']->value['username'];?>
</option>
													</select>
												<?php }?>
												</div>
											</div>
										</div>												
											<div class="col-md-3 col-sm-6">		
												<div class="form-group">
													<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
</label>
													<div class="col-md-6">
														<select id="server" name="server" class="form-control">
															<option value=''>- <?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Routers'];?>
 -</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-md-3 col-sm-6">		
												<div class="form-group">
													<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Service_Plan'];?>
</label>
													<div class="col-md-6">
														<select class="form-control select2" name="plan" id="plan" style="width: 100%" data-placeholder="- <?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Plans'];?>
 -" required>
															<option value=''>- <?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Plans'];?>
 -</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-md-3 col-sm-6">		
												<div class="form-group">
													<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expire_Action'];?>
</label>
													<div class="col-md-6">
														<select id="action_on_expire" name="action_on_expire" class="form-control" required>
															<option value"">- <?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Expire_Action'];?>
 -</option>
															<option value="disable_secret"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Disable_Secret'];?>
</option>
															<option value="change_profile"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Use_Profile_Expire'];?>
</option>
															<option value="no_action"><?php echo $_smarty_tpl->tpl_vars['_L']->value['No_Action'];?>
</option>
														</select>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['IP_Address_Type'];?>
</label>
												<div class="col-md-6">
													<select id="ip_address_type" name="ip_address_type" class="form-control">
														<option value='' id="select_addr" selected>- <?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_IP_Address_Type'];?>
 -</option>
														<option value='static' id="static" name="static"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Static_IP'];?>
</option>
														<option value='automatic'id="automatic" name="automatic"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Automatic_IP'];?>
</option>
													</select>
												</div>
											</div>
											<div class="col-md-3 col-sm-6">	
												<div class="form-group" style="display:none" id="local_address">
													<label class="col-md-2 control-label">Local Address</label>
													<div class="col-md-6">
														<input type="text" class="form-control" id="local_address" name="local_address" placeholder="example: 10.50.75.1">
													</div>
												</div>
											</div>	
											<div class="col-md-3 col-sm-6">	
												<div class="form-group" style="display:none" id="remote_address">
													<label class="col-md-2 control-label">Remote Address</label>
													<div class="col-md-6">
														<input type="text" class="form-control" id="remote_address" name="remote_address" placeholder="example: 10.50.75.75">
													</div>
												</div>
											</div>	
											<div class="form-group" style="display:none" id="remote_address_dhcp">
												<label class="col-md-2 control-label">Remote Address</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="remote_address_dhcp" name="remote_address_dhcp" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Automatic_From_DHCP_Server'];?>
" disabled>
												</div>
											</div>												
										</div>
										<div id="account" class="tab-pane fade">
											<div class="form-group">
												<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Login_Method'];?>
</label>
												<div class="col-md-6">
													<select id="loginmethod" name="loginmethod" class="form-control">
														<option id="select_method" selected>- <?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Login_Method'];?>
 -</option>
														<option id="username_only" value="username_only" name="username_only"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username_Only'];?>
 -> Password = Username</option>
														<option id="username_and_password" value="username_and_password" name="username_and_password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username_and_Password'];?>
</option>
													</select>
												</div>
											</div>
											<div class="col-md-3 col-sm-6">	
												<div class="form-group">
													<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
													<div class="col-md-6">
														<input type="text" class="form-control" id="fullname" name="fullname" placeholder="fullname">
													</div>
												</div>
											</div>
											<div class="col-md-3 col-sm-6">	
												<div class="form-group">
													<label class="col-md-2 control-label">Email</label>
													<div class="col-md-6">
														<input type="text" class="form-control" id="email" name="email" placeholder="example@email.com">
													</div>
												</div>
											</div>
											<div class="col-md-3 col-sm-6">	
												<div class="form-group">
													<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone_Number'];?>
</label>
													<div class="col-md-6">
														<input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="0877-0229-9005">
													</div>
												</div>
											</div>
											<div class="col-md-3 col-sm-6">													
												<div class="form-group">
													<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
													<div class="col-md-6">
														<input type="text" class="form-control" id="address" name="address" placeholder="Jl. Ledjen Suprapto, Sidoharjo, Pacitan">
													</div>
												</div>
											</div>
											<div style="display:none;" class="form-group" id="username">
												<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="username" name="username" placeholder="username">
												</div>
											</div>
											<div class="col-md-3 col-sm-6">	
												<div style="display:none;" id="password">
													<div class="form-group">
														<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
														<div class="col-md-6">
															<input type="text" class="form-control" id="password" name="password" placeholder="password">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-3 col-sm-6">	
												<div style="display:none;" id="cpassword">
													<div class="form-group">
														<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Confirm_Password'];?>
</label>
														<div class="col-md-6">
															<input type="text" class="form-control" id="cpassword" name="cpassword" placeholder="repeat password">
														</div>
													</div>
												</div>
											</div>
										</div>
									<div  style="margin-bottom:-10px" class="form-group"></div>	
									<hr>
										<div>
											<button class="btn btn-success waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Create_Member'];?>
</button>
										</div>										
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>	
			<!--modal add member -->
			</div>
				
			<div>		
			<!--modal search ip -->
				<div class="modal" id="existing-ip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
					<div style="max-width:400px" class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All_Used_IP_Address'];?>
</h4>
							</div>
							<div class="modal-body">
								<table class="display table table-bordered table-bordered" id="existing">
									<thead>
										<tr>
											<th style="height:35px"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Index_Number'];?>
</th>
											<th style="height:35px">IP Address</th>
										</tr>
									</thead>
									<tbody>
									<?php  $_smarty_tpl->tpl_vars['cs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['c']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cs']->key => $_smarty_tpl->tpl_vars['cs']->value){
$_smarty_tpl->tpl_vars['cs']->_loop = true;
?>
										<tr>
											<td style="text-align:left"><?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
</td>
											<td style="text-align:left"><?php echo $_smarty_tpl->tpl_vars['cs']->value['remote_address'];?>
</td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>	
			<!--modal search ip -->
			</div>				

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>