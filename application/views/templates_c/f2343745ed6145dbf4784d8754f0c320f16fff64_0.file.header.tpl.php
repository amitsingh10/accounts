<?php
/* Smarty version 3.1.30, created on 2017-06-24 11:45:02
  from "C:\xampp\htdocs\accounting\application\views\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594e349eacda78_31077785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2343745ed6145dbf4784d8754f0c320f16fff64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\accounting\\application\\views\\templates\\header.tpl',
      1 => 1498297494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594e349eacda78_31077785 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/css/bootstrap.min.css">
    <!--  Material Dashboard CSS    -->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/css/material-dashboard.css">
    <!--  CSS for Demo Purpose, don't include it in your project     -->
	
	<?php if (isset($_smarty_tpl->tpl_vars['header_css']->value)) {?>
		<?php
$__section_outer_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_outer']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer'] : false;
$__section_outer_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['header_css']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_outer_0_total = $__section_outer_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_outer'] = new Smarty_Variable(array());
if ($__section_outer_0_total != 0) {
for ($__section_outer_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] = 0; $__section_outer_0_iteration <= $__section_outer_0_total; $__section_outer_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']++){
?>
			<link href="<?php echo base_url();?>
assets/css/<?php echo $_smarty_tpl->tpl_vars['header_css']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>
" rel="stylesheet">
		<?php
}
}
if ($__section_outer_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_outer'] = $__section_outer_0_saved;
}
?>
	<?php }?>
    
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body><?php }
}
