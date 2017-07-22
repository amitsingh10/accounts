<?php
/* Smarty version 3.1.30, created on 2017-06-24 14:43:10
  from "/data/web/virtuals/115873/virtual/www/application/views/templates/orders.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594e5e5e484145_45136399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f7c2fa2d717ff2ba168c9da7dc0320cce24d3ae' => 
    array (
      0 => '/data/web/virtuals/115873/virtual/www/application/views/templates/orders.tpl',
      1 => 1498303922,
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
function content_594e5e5e484145_45136399 (Smarty_Internal_Template $_smarty_tpl) {
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
	                                <h4 class="title">Orders List</h4>
	                                <p class="category">This the orders table</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
	                                    	<th>Order</th>
	                                    	<th>Send to</th>
	                                    	<th>Date</th>
											<th>Price</th>
	                                    </thead>
	                                    <tbody>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
?>
											<tr>
	                                        	<td><?php echo $_smarty_tpl->tpl_vars['foo']->value->order_number;?>
 BY <?php echo $_smarty_tpl->tpl_vars['foo']->value->billing_address->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['foo']->value->billing_address->last_name;?>
</td>
	                                        	<td><?php echo $_smarty_tpl->tpl_vars['foo']->value->shipping_address->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['foo']->value->shipping_address->last_name;?>
, <?php echo $_smarty_tpl->tpl_vars['foo']->value->shipping_address->company;?>
, <?php echo $_smarty_tpl->tpl_vars['foo']->value->shipping_address->address_1;
echo $_smarty_tpl->tpl_vars['foo']->value->shipping_address->address_2;?>
, <?php echo $_smarty_tpl->tpl_vars['foo']->value->shipping_address->city;?>
 <?php echo $_smarty_tpl->tpl_vars['foo']->value->shipping_address->state;?>
 ,<?php echo $_smarty_tpl->tpl_vars['foo']->value->shipping_address->postcode;?>
 <?php echo $_smarty_tpl->tpl_vars['foo']->value->shipping_address->country;?>
</td>
	                                        	<td><?php echo $_smarty_tpl->tpl_vars['foo']->value->created_at;?>
</td>
												<td ><?php echo $_smarty_tpl->tpl_vars['foo']->value->currency;?>
 <?php echo $_smarty_tpl->tpl_vars['foo']->value->total;?>
 By <?php echo $_smarty_tpl->tpl_vars['foo']->value->payment_details->method_title;?>
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
}
}
