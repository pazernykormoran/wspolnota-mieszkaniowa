<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-03 02:44:12
  from 'C:\xampp\htdocs\wspolnota-mieszkaniowa\templates\budzet\przegladajPlanBudzetowy.html.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e377aec8cfe55_38799843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95dbfeb3eeb601f12daaeb4660a3b0516ebcb874' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wspolnota-mieszkaniowa\\templates\\budzet\\przegladajPlanBudzetowy.html.php',
      1 => 1580692737,
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
function content_5e377aec8cfe55_38799843 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
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
        <div class="row">
          <div class="col">

            <h2>Wpływy</h2>
            <div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Numer</th>
                        <th scope="col">Wpływ</th>
                        <th scope="col">Wartość</th>
                      </tr>
                    </thead>
                    <tbody>
            
                      <tr>
                        <th scope="row">1</th>
                        <td>sddsads</td>
                        <td>213</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Czynsze lokalowe</td>
                        <td>2131</td>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>324234</td>
                      </tr>
            
                    </tbody>
                  </table>
                  
                  <div class="form-group row" style ="float: right;">
                    <label class="col-sm-2 col-form-label">Razem</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value = "1000" readonly>
                    </div>
                  </div>
            </div>
     

          </div>

          <div class="col">
<h2>Wypływy</h2>
            <div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Numer</th>
                        <th scope="col">Nazwa</th>
                        <th scope="col">Kategoria</th>
                        <th scope="col">Koszt</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php if (isset($_smarty_tpl->tpl_vars['budzet']->value)) {?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['budzet']->value->getPlanyWydatkow(), 'planwydatku');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['planwydatku']->value) {
?>
                        <tr>
                          <th scope="row">1</th>
                          <td> <a href="?task=budzet&action=elementPlanuBudzetowego&idElementuPlanuBudzetowego=<?php echo $_smarty_tpl->tpl_vars['planwydatku']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['planwydatku']->value->getNazwa();?>
</a> </td>
                          <td><?php echo $_smarty_tpl->tpl_vars['planwydatku']->value->getKategoria()->getNazwa();?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['planwydatku']->value->getKwota();?>
</td>
                        </tr>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
            
                    </tbody>
                  </table>
            
                  <div class="form-group row" style ="float: right;">
                    <label class="col-sm-2 col-form-label">Razem</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value = "1000" readonly>
                    </div>
                  </div>
                  
            </div>
            

          </div>
        </div>

        <div style=" position: absolute; right: 100px;">
      

          <div class="form-group row">
            <label class="col-4 col-form-label">Twój czynsz</label>
            <div class="col-8">
                <input class="form-control" type="number" value = "1000" readonly>
            </div>
          </div>
      
          <div style="padding-top: 30px;">
          <button type="button"  onclick="location.href = '?task=aplikacja&action=dashboard';" class="btn btn-secondary ">Powrót</button>
        </div>

        </div>
        

      

      </div>





</body>
</html><?php }
}
