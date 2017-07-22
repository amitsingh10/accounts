{include file="header.tpl" title=$title name=$Name}

	<div class="wrapper">

	    {include file="sidebar.tpl"}
		
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
										{foreach from=$items item=foo}
											<tr>
	                                        	<td>{$foo->order_number} BY {$foo->billing_address->first_name} {$foo->billing_address->last_name}</td>
	                                        	<td>{$foo->shipping_address->first_name} {$foo->shipping_address->last_name}, {$foo->shipping_address->company}, {$foo->shipping_address->address_1}{$foo->shipping_address->address_2}, {$foo->shipping_address->city} {$foo->shipping_address->state} ,{$foo->shipping_address->postcode} {$foo->shipping_address->country}</td>
	                                        	<td>{$foo->created_at}</td>
												<td >{$foo->currency} {$foo->total} By {$foo->payment_details->method_title}</td>
	                                        </tr>
	                                    {/foreach}
										</tbody>
	                                </table>

	                            </div>
	                        </div>
	                    </div>

	                    
	                </div>
	            </div>
	        </div>

	        {include file="footer.tpl"}