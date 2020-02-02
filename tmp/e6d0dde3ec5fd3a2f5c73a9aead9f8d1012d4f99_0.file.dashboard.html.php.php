<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-02 13:48:50
  from 'C:\xampp\htdocs\wspolnota-mieszkaniowa\templates\aplikacja\dashboard.html.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e36c532d5cf51_18503377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6d0dde3ec5fd3a2f5c73a9aead9f8d1012d4f99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wspolnota-mieszkaniowa\\templates\\aplikacja\\dashboard.html.php',
      1 => 1580647729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/komunikaty.html' => 1,
  ),
),false)) {
function content_5e36c532d5cf51_18503377 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang="pl">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Dashboard</title>

</head>

<body>
<?php $_smarty_tpl->_subTemplateRender('file:includes/komunikaty.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container" style="width: 70%; position: absolute; right: 0px;">
<img src="images/wspolnota.png" alt="Italian Trulli">
</div>


</body>
</html>

<style>
.container img {
   width: 100%;
} </style><?php }
}
