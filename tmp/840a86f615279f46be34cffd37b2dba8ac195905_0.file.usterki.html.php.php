<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-02 16:48:43
  from 'C:\xampp\htdocs\wspolnota-mieszkaniowa\templates\usterki\usterki.html.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e36ef5b14d3c1_27636540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '840a86f615279f46be34cffd37b2dba8ac195905' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wspolnota-mieszkaniowa\\templates\\usterki\\usterki.html.php',
      1 => 1580650740,
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
function content_5e36ef5b14d3c1_27636540 (Smarty_Internal_Template $_smarty_tpl) {
?> <!DOCTYPE HTML>
<html lang="pl">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Aktualny budżet</title>
</head>

<body>

<div>
<?php $_smarty_tpl->_subTemplateRender('file:includes/komunikaty.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<div class="container" style="width: 30%; position: absolute; left: 0px;">
<?php $_smarty_tpl->_subTemplateRender('file:includes/menuUzytkownik.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:includes/uzytkownikWspolnoty.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

    <div class="container"  style="width: 70%; position: absolute; left: 300px;">

          <div class="col">

            <div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Numer</th>
                        <th scope="col">Temat</th>
                        <th scope="col">Adres</th>
                      </tr>
                    </thead>
                    <tbody>
            
                      <tr>
                        <th scope="row">1</th>
                        <td><a href="ForgottenPassword.html">Remont budynku</a></td>
                        <td>Remonty</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Fundusz odtworzeniowy</td>
                        <td>KOszenie trawy</td>
                      <tr>
                        <th scope="row">3</th>
                        <td>Fundusz odtworzeniowy</td>
                        <td>Fundusz odtworzeniowy</td>
                      </tr>
            
                    </tbody>
                  </table>

            

          </div>
        </div>
      </div>









</body>
</html><?php }
}
