<?php
/* Smarty version 3.1.30, created on 2017-06-24 11:32:21
  from "C:\xampp\htdocs\accounting\application\views\templates\sidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594e31a58a0b56_24534297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8e5f3e5a615f5958c0787c960fd17a06ca75217' => 
    array (
      0 => 'C:\\xampp\\htdocs\\accounting\\application\\views\\templates\\sidebar.tpl',
      1 => 1498296636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594e31a58a0b56_24534297 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="sidebar" data-color="purple" data-image="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="simple-text">
					My App
				</a>
			</div>

	    	<div class="sidebar-wrapper ps-container">
	            <ul class="nav">
	                <li <?php if ($_smarty_tpl->tpl_vars['selected_page']->value == 'home') {?>class='active'<?php }?>>
	                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
					<li <?php if ($_smarty_tpl->tpl_vars['selected_page']->value == 'orders') {?>class='active'<?php }?>>
	                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
orders/carovna_slova_order">
	                        <i class="material-icons">person</i>
	                        <p>Order</p>
	                    </a>
	                </li>
					<li <?php if ($_smarty_tpl->tpl_vars['selected_page']->value == 'test') {?>class='active'<?php }?>>
	                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
test">
	                        <i class="material-icons">person</i>
	                        <p>test</p>
	                    </a>
	                </li>
					<li <?php if ($_smarty_tpl->tpl_vars['selected_page']->value == 'others') {?>class='active'<?php }?>>
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
	    </div><?php }
}
