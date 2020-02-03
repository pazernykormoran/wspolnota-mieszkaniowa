<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-03 04:45:39
  from 'C:\xampp\htdocs\wspolnota-mieszkaniowa\templates\includes\komunikaty.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e379763ce7233_49593766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc2efd625f88403e0cab604f0a7b5578fac3faae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wspolnota-mieszkaniowa\\templates\\includes\\komunikaty.html',
      1 => 1580701537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e379763ce7233_49593766 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang="pl">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Sklep - reklamacja</title>
</head>

<body>

    <div style="padding-left: 20%; padding-bottom: 50px;">
     
      <?php if ($_smarty_tpl->tpl_vars['info']->value) {?>
        <div class="alert alert-success">
          <?php echo $_smarty_tpl->tpl_vars['info']->value;?>

          </div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
      <div class="alert alert-danger" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

          </div>
          <?php }?>     
        </div>
    
<?php }
}
