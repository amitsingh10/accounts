<div class="sidebar" data-color="purple" data-image="{$base_url}assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="{$base_url}" class="simple-text">
					My App
				</a>
			</div>

	    	<div class="sidebar-wrapper ps-container">
	            <ul class="nav">
	                <li {if $selected_page eq 'home'}class='active'{/if}>
	                    <a href="{$base_url}">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
					<li {if $selected_page eq 'orders'}class='active'{/if}>
	                    <a href="{$base_url}orders/carovna_slova_order">
	                        <i class="material-icons">person</i>
	                        <p>Order</p>
	                    </a>
	                </li>
					<li {if $selected_page eq 'test'}class='active'{/if}>
	                    <a href="{$base_url}uploadcsv">
	                        <i class="material-icons">person</i>
	                        <p>Upload CSV</p>
	                    </a>
	                </li>
					<li {if $selected_page eq 'showdata'}class='active'{/if}>
	                    <a href="{$base_url}showdata">
	                        <i class="material-icons">person</i>
	                        <p>Show Uploaded Data </p>
	                    </a>
	                </li>
					<li {if $selected_page eq 'showdata2'}class='active'{/if}>
	                    <a href="{$base_url}showdata/data2">
	                        <i class="material-icons">person</i>
	                        <p>Raiffeisen bank Data  </p>
	                    </a>
	                </li>
					<li {if $selected_page eq 'test'}class='active'{/if}>
	                    <a href="{$base_url}test">
	                        <i class="material-icons">person</i>
	                        <p>test</p>
	                    </a>
	                </li>
					<li {if $selected_page eq 'others'}class='active'{/if}>
                        <a data-toggle="collapse" href="#pagesExamples">
                            <i class="material-icons">image</i>
                            <p>Pages
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="pagesExamples">
                            <ul class="nav">
                                <li>
                                    <a href="./pages/pricing.html">Pricing</a>
                                </li>
                                <li>
                                    <a href="./pages/timeline.html">Timeline</a>
                                </li>
                                <li>
                                    <a href="./pages/login.html">Login Page</a>
                                </li>
                                <li>
                                    <a href="./pages/register.html">Register Page</a>
                                </li>
                                <li>
                                    <a href="./pages/lock.html">Lock Screen Page</a>
                                </li>
                                <li>
                                    <a href="./pages/user.html">User Profile</a>
                                </li>
                            </ul>
                        </div>
                    </li>
	                
	                
					
	            </ul>
				<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div>
				<div class="ps-scrollbar-y-rail" style="top: 0px; height: 587px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 331px;"></div></div>
	    	</div>
	    </div>