<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-02 20:14:00
  from 'C:\xampp\htdocs\wspolnota-mieszkaniowa\templates\usterki\zglosUsterke.html.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e371f78cc66a6_45065276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7dfcc13de5ea933248ca5ac5dc5306a940bfc58' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wspolnota-mieszkaniowa\\templates\\usterki\\zglosUsterke.html.php',
      1 => 1580670165,
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
function content_5e371f78cc66a6_45065276 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang="pl">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Sklep - reklamacja</title>
</head>

<body>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adresy']->value, 'foo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
?>
    <li><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


  <div>
    <?php $_smarty_tpl->_subTemplateRender('file:includes/komunikaty.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>

  <div class="container" style="width: 30%; position: absolute; left: 0px;">
    <?php $_smarty_tpl->_subTemplateRender('file:includes/menuUzytkownik.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:includes/uzytkownikWspolnoty.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>

  <div class="container" style="width: 70%; position: absolute; left: 300px;">

    <center>
      <h2> Zgłaszanie usterki</h>
    </center>

    <form action="?task=usterki&action=zglosUsterkePerform" method="post">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Temat</label>
        <div class="col-4">
          <input class="form-control" name="temat" type="text" placeholder="Podaj temat usterki">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Dokładny adres</label>
        <div class="col-4">
          <div class="form-group">

            <select class="form-control" id="adres" name="adres">
              <option>dfsfdsfsfsfsfsd</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>
        </div>
      </div>


      <div class="form-group row">
        <label class="col-sm-2 col-form-label" placeholder="Podaj opis usterki">Opis usterki</label>
        <div class="col-7">
          <textarea class="form-control" name="opis" rows="6"></textarea>
        </div>

      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm">
            <input type="submit" class="btn btn-success" value="Wyślij zgłoszenie" />
          </div>
          <div class="col-sm">
            <button type="button" onclick="location.href = '?task=aplikacja&action=dashboard';" class="btn btn-secondary ">Powrót</button>
          </div>

        </div>
      </div>
    </form>

  </div>



</body>

</html><?php }
}
