<?php
/* Smarty version 3.1.30, created on 2017-06-24 14:43:14
  from "/data/web/virtuals/115873/virtual/www/application/views/templates/test.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594e5e622e2583_89562672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adf51931c4ad66791a85b39e3d23d6832af8b2ab' => 
    array (
      0 => '/data/web/virtuals/115873/virtual/www/application/views/templates/test.tpl',
      1 => 1498303924,
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
function content_594e5e622e2583_89562672 (Smarty_Internal_Template $_smarty_tpl) {
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
