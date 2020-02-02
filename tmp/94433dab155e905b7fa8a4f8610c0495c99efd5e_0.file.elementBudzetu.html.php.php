<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-02 12:29:12
  from 'D:\xampp\htdocs\wspolnota-mieszkaniowa\templates\budzet\elementBudzetu.html.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e36b288f21f60_60972206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94433dab155e905b7fa8a4f8610c0495c99efd5e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\wspolnota-mieszkaniowa\\templates\\budzet\\elementBudzetu.html.php',
      1 => 1580642914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e36b288f21f60_60972206 (Smarty_Internal_Template $_smarty_tpl) {
?> <!DOCTYPE HTML>
<html lang="pl">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Aktualny budżet</title>
</head>

<body>

    <div class="container" style="width: 70%; position: absolute; right: 0px;">
  
    <span class="d-block p-2 bg-primary text-white">Nazwa budżetu</span>


    <div class="container" style="padding-top: 30px;">
      <div class="row">
        
        <div class="col-3">
          <label class="form-label">Kategoria:</label>
          <input class="form-control" type="text" value = "fdasd" readonly>
        </div>

        <div class="col-3">
          <label class="form-label">Usługi:</label>
          <input class="form-control" type="text" value = "1003" readonly>
        </div>

        <div class="col-3">
          <label class="form-label">Koszt:</label>
          <input class="form-control" type="number" value = "1002" readonly>
        </div>

        <div class="col-3">
          <label class="form-label">Częstotliwość (rocznie):</label>
          <input class="form-control" type="text" value = "1003" readonly>
        </div>

      </div>
    </div>


    <div style="padding-top: 50px;">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" placeholder="Podaj opis usterki">Opis usterki</label>
        <div class="col-7">
       <textarea class="form-control" name="opis" rows="6" readonly></textarea>
        </div>
    </div>


    <div style="padding-top: 50px;">
<h2>Stan realizacji</h2>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Numer</th>
          <th scope="col">Data</th>
          <th scope="col">Opis</th>
        </tr>
      </thead>
      <tbody>

        <tr>
          <th scope="row">1</th>
          <td>Remont budynku</td>
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

</body>
</html><?php }
}
