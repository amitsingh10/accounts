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
	                                <h4 class="title">Uploded data List</h4>
	                                <p class="category">This the data table</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table" id="fixTable">
	                                    <thead class="text-primary" >
	                                    	<th>Date</th>
	                                    	<th>Value</th>
	                                    	<th>Name1</th>
											<th>Name2</th>
											<th>Account IBAN</th>
											<th>BIC/Swift</th>
	                                    	<th>Note</th>
	                                    	<th>Currency</th>
											<th>Amount</th>
											<th>Action</th>
	                                    </thead>
	                                    <tbody>
										{foreach from=$items item=foo}
											<tr>
	                                        	<td>{$foo->date} </td>
	                                        	<td>{$foo->value} </td>
	                                        	<td>{$foo->name1}</td>
												<td >{$foo->name2}</td>
												<td>{$foo->account_iban} </td>
	                                        	<td>{$foo->bic_swift} </td>
	                                        	<td>{$foo->note}</td>
												<td>{$foo->currency}</td>
												<td >{$foo->amount}</td>
												<td class="td-actions text-right">
															<button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" onclick="edit_data2({$foo->id});" data-original-title="Edit">
																<i class="material-icons">edit</i>
															<div class="ripple-container"></div></button>
															<button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" onclick="delete_data2({$foo->id});" data-original-title="Remove">
																<i class="material-icons">close</i>
															</button>
														</td>
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
	</div><!-- modal -->