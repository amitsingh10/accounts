<?php
/* Smarty version 3.1.30, created on 2017-06-30 12:33:04
  from "/data/web/virtuals/115873/virtual/www/application/views/templates/showdata.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595628e097f8f0_50116232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d9a965e84555e2664893f0f17d594d27a344b97' => 
    array (
      0 => '/data/web/virtuals/115873/virtual/www/application/views/templates/showdata.tpl',
      1 => 1498818721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_595628e097f8f0_50116232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value,'name'=>$_smarty_tpl->tpl_vars['Name']->value), 0, false);
?>


	<div class="wrapper">

	    <?php $_smarty_tpl->_subTemplateRender("file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		
		<div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Orders List</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">dashboard</i>
									<p class="hidden-lg hidden-md">Dashboard</p>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">notifications</i>
									<span class="notification">5</span>
									<p class="hidden-lg hidden-md">Notifications</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Mike John responded to your email</a></li>
									<li><a href="#">You have 5 new tasks</a></li>
									<li><a href="#">You're now friend with Andrew</a></li>
									<li><a href="#">Another Notification</a></li>
									<li><a href="#">Another One</a></li>
								</ul>
							</li>
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
	 							   <i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md">Profile</p>
	 						   </a>
							</li>
						</ul>

						<form class="navbar-form navbar-right" role="search">
							<div class="form-group  is-empty">
	                        	<input type="text" class="form-control" placeholder="Search">
	                        	<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i><div class="ripple-container"></div>
							</button>
	                    </form>
					</div>
				</div>
			</nav>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Uploded data List</h4>
	                                <p class="category">This the data table</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
	                                    	<th>Date</th>
	                                    	<th>Note</th>
	                                    	<th>Name</th>
											<th>Account No.</th>
											<th>Value</th>
	                                    	<th>Usage_1</th>
	                                    	<th>Usage_2</th>
											<th>Amount</th>
											<th>Action</th>
	                                    </thead>
	                                    <tbody>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
?>
											<tr>
	                                        	<td><?php echo $_smarty_tpl->tpl_vars['foo']->value->date;?>
 </td>
	                                        	<td><?php echo $_smarty_tpl->tpl_vars['foo']->value->note;?>
 </td>
	                                        	<td><?php echo $_smarty_tpl->tpl_vars['foo']->value->name;?>
</td>
												<td ><?php echo $_smarty_tpl->tpl_vars['foo']->value->account_number;?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['foo']->value->value;?>
 </td>
	                                        	<td><?php echo $_smarty_tpl->tpl_vars['foo']->value->usage1;?>
 </td>
	                                        	<td><?php echo $_smarty_tpl->tpl_vars['foo']->value->usage2;?>
</td>
												<td ><?php echo $_smarty_tpl->tpl_vars['foo']->value->amount;?>
</td>
												<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" onclick="edit_data1(<?php echo $_smarty_tpl->tpl_vars['foo']->value->id;?>
);" data-original-title="Edit">
																<i class="material-icons">edit</i>
															<div class="ripple-container"></div></button>
															<button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" onclick="delete_data1(<?php echo $_smarty_tpl->tpl_vars['foo']->value->id;?>
);" data-original-title="Remove">
																<i class="material-icons">close</i>
															</button>
														</td>
	                                        </tr>
	                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

										</tbody>
	                                </table>

	                            </div>
	                        </div>
	                    </div>

	                    
	                </div>
	            </div>
	        </div>
			
	
	
	
	
 

	        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			
	
	
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog " role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Edit Details</h4>
				</div>

				<div class="modal-body" id="edit_form">
					
				
				</div>
			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal --><?php }
}
