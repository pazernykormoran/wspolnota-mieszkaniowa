<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-02 12:53:36
  from 'C:\xampp\htdocs\wspolnota-mieszkaniowa\templates\usterki\szczegolyUsterki.html.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e36b840776990_49618954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3c1d7d37713abe4d5cc5e7a9c931e0699c8b138' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wspolnota-mieszkaniowa\\templates\\usterki\\szczegolyUsterki.html.php',
      1 => 1580644414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e36b840776990_49618954 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang="pl">
<head>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"><?php echo '</script'; ?>
>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Aktualny budżet</title>
</head>

<body>

    <div class="container" style="width: 70%; position: absolute; right: 0px;">
  
    <span class="d-block p-2 bg-primary text-white">Nazwa usterki</span>


    <div class="container" style="padding-top: 30px;">
      <div class="row">
        
        <div class="col-3">
          <label class="form-label">Temat:</label>
          <input class="form-control" type="text" value = "fdasd" readonly>
        </div>

        <div class="col-3">
          <label class="form-label">Data:</label>
          <input class="form-control" type="date" value = "1003" readonly>
        </div>


      </div>
    </div>

    <div style="padding-top: 20px;">
   
    <div class="form-group" style="width:50%;">
  <label for="sel1">Wybierz adres:</label>
  <select class="form-control" id="sel1">
    <option>fdsfsdfdsfsdf, dfsdfsdf ,dffsddsfsdf ,dsffdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaas</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
</div>

      </div>

    <div style="padding-top: 50px;">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" placeholder="Podaj opis usterki">Opis usterki</label>
        <div class="col-7">
       <textarea class="form-control" name="opis" rows="6" readonly></textarea>
        </div>
    </div>

    <div class="container">
        <div class="row">
          <div class="col-sm">
            <input type="submit" class="btn btn-success" value="W trakcie realizacji" />
              </div>
          <div class="col-sm">
        <button type="button"  onclick="location.href = 'moje-zamowienia.php';" class="btn btn-secondary ">Powrót</button>
          </div>


      </div>

</body>
</html><?php }
}
