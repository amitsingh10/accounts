<?php
/* Smarty version 3.1.30, created on 2017-06-24 11:32:21
  from "C:\xampp\htdocs\accounting\application\views\templates\test.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594e31a587a903_28535605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e9c849dee9e2993861593b4fed05b69fe04e06c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\accounting\\application\\views\\templates\\test.tpl',
      1 => 1498296732,
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
function content_594e31a587a903_28535605 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="wrapper">

	    <?php $_smarty_tpl->_subTemplateRender("file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		
		<div class="main-panel">
                       <h1>hello</h1>
					    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
