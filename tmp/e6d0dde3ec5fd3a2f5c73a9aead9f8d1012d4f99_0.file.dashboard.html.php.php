<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-03 04:08:03
  from 'C:\xampp\htdocs\wspolnota-mieszkaniowa\templates\aplikacja\dashboard.html.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e378e93ad02f9_73638263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6d0dde3ec5fd3a2f5c73a9aead9f8d1012d4f99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wspolnota-mieszkaniowa\\templates\\aplikacja\\dashboard.html.php',
      1 => 1580698845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/komunikaty.html' => 1,
    'file:includes/menuUzytkownik.html' => 1,
    'file:includes/uzytkownikWspolnoty.html' => 1,
  ),
),false)) {
function content_5e378e93ad02f9_73638263 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang="pl">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Dashboard</title>

</head>

<body>

<!-- 
<?php if (isset($_smarty_tpl->tpl_vars['budzetArray']->value)) {?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['budzetArray']->value, 'budzetElement');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['budzetElement']->value) {
?>
    tutaj wyświetlam sobie id Budżetu:
    <?php echo $_smarty_tpl->tpl_vars['budzetElement']->value->getId();?>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['budzetElement']->value->getPlanyWydatkow(), 'planwydatku');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['planwydatku']->value) {
?>
      <br>
      tutaj wyświetlam sobie id planu wydatku w budżecie:
      <?php echo $_smarty_tpl->tpl_vars['planwydatku']->value->getId();?>


    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?> -->




<div>
<?php $_smarty_tpl->_subTemplateRender('file:includes/komunikaty.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('info'=>$_smarty_tpl->tpl_vars['info']->value,'error'=>$_smarty_tpl->tpl_vars['error']->value), 0, false);
?>
</div>

<div class="container" style="width: 30%; position: absolute; left: 0px;"  class="center">
<?php $_smarty_tpl->_subTemplateRender('file:includes/menuUzytkownik.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:includes/uzytkownikWspolnoty.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<div class="container" style="width: 70%; position: absolute; left: 500px;"">
<img src="images/wspolnota.jpg" alt="Italian Trulli">
</div>


</body>
</html>

<style>
.container img {
   width: 80%;
} 
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style><?php }
}
