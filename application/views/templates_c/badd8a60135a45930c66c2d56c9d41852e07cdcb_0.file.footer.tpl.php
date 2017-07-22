<?php
/* Smarty version 3.1.30, created on 2017-07-22 09:53:50
  from "C:\xampp\htdocs\accounts\application\views\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5973048e545fa5_15181346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'badd8a60135a45930c66c2d56c9d41852e07cdcb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\accounts\\application\\views\\templates\\footer.tpl',
      1 => 1498655280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5973048e545fa5_15181346 (Smarty_Internal_Template $_smarty_tpl) {
?>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul>
							<li>
								<a href="#">
									Home
								</a>
							</li>
							<li>
								<a href="#">
									Company
								</a>
							</li>
							<li>
								<a href="#">
									Portfolio
								</a>
							</li>
							<li>
								<a href="#">
								   Blog
								</a>
							</li>
						</ul>
					</nav>
					<p class="copyright pull-right">
						&copy; <?php echo '<script'; ?>
>document.write(new Date().getFullYear())<?php echo '</script'; ?>
> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
					</p>
				</div>
			</footer>
		</div>
	</div>

</body>

	<!--   Core JS Files   -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/js/jquery-3.1.0.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/js/material.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/js/material-dashboard.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php if (isset($_smarty_tpl->tpl_vars['header_js']->value)) {?>
  
	<?php
$__section_outer_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_outer']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer'] : false;
$__section_outer_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['header_js']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_outer_1_total = $__section_outer_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_outer'] = new Smarty_Variable(array());
if ($__section_outer_1_total != 0) {
for ($__section_outer_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] = 0; $__section_outer_1_iteration <= $__section_outer_1_total; $__section_outer_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']++){
?>
       	<?php echo '<script'; ?>
 src="<?php echo base_url();?>
assets/js/<?php echo $_smarty_tpl->tpl_vars['header_js']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>
"><?php echo '</script'; ?>
>
    <?php
}
}
if ($__section_outer_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_outer'] = $__section_outer_1_saved;
}
}?>

</html>
<?php }
}
