<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-03 07:07:50
  from 'C:\xampp\htdocs\wspolnota-mieszkaniowa\templates\budzet\przegladajBudzet.html.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e37b8b60d8b96_91188435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2abad82d86a77f62884bf150b6ad3b1069cc8ea4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wspolnota-mieszkaniowa\\templates\\budzet\\przegladajBudzet.html.php',
      1 => 1580710068,
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
function content_5e37b8b60d8b96_91188435 (Smarty_Internal_Template $_smarty_tpl) {
?> <!DOCTYPE HTML>
<html lang="pl">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Aktualny budżet</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

 <body>

   <div>
     <?php $_smarty_tpl->_subTemplateRender('file:includes/komunikaty.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('info'=>$_smarty_tpl->tpl_vars['info']->value,'error'=>$_smarty_tpl->tpl_vars['error']->value), 0, false);
?>
   </div>

   <div class="container" style="width: 30%; position: absolute; left: 0px;">
     <?php $_smarty_tpl->_subTemplateRender('file:includes/menuUzytkownik.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <?php $_smarty_tpl->_subTemplateRender('file:includes/uzytkownikWspolnoty.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   </div>

   <div class="container" style="width: 70%; position: absolute; left: 300px;">
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
                 <td>Czynsze mieszkaniowe</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['sumaActM']->value;?>
</td>
               </tr>
               <tr>
                 <th scope="row">2</th>
                 <td>Czynsze lokalowe</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['sumaActL']->value;?>
</td>

             </tbody>
           </table>

           <div class="form-group row" style="float: right;">
             <label class="col-sm-4 col-form-label">Wpłynęło</label>
             <div class="col-8">
               <input class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['sumaActL']->value+$_smarty_tpl->tpl_vars['sumaActM']->value;?>
" readonly>
             </div>
             <label class="col-sm-4 col-form-label">Zaplanowano</label>
             <div class="col-8">
               <input class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['wszystkieCzynszeM']->value+$_smarty_tpl->tpl_vars['wszystkieCzynszeL']->value;?>
" readonly>
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
               <!-- tutaj wyświetlam sobie id Budżetu:
                        <?php echo $_smarty_tpl->tpl_vars['budzet']->value->getId();?>
 -->

               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['budzet']->value->getPlanyWydatkow(), 'planwydatku', false, NULL, 'wyp', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['planwydatku']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_wyp']->value['iteration']++;
?>
               <tr>
                 <th scope="row"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_wyp']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_wyp']->value['iteration'] : null);?>
</th>
                 <td> <a href="?task=budzet&action=elementBudzetu&idElementuBudzetu=<?php echo $_smarty_tpl->tpl_vars['planwydatku']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['planwydatku']->value->getNazwa();?>
</a> </td>
                 <td><?php echo $_smarty_tpl->tpl_vars['planwydatku']->value->getKategoria()->getNazwa();?>
</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['planwydatku']->value->getKwota();?>
</td>
               </tr>
               <!-- tutaj wyświetlam sobie id planu wydatku w budżecie:
                          <?php echo $_smarty_tpl->tpl_vars['planwydatku']->value->getId();?>

                          tutaj sobie id kategorii wysiwetlam
                          <?php echo $_smarty_tpl->tpl_vars['planwydatku']->value->getKategoria()->getNazwa();?>
 -->

               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
               <?php }?>

             </tbody>
           </table>

           <div class="form-group row" style="float: right;">
             <label class="col-sm-2 col-form-label">Razem</label>
             <div class="col-10">
               <input class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['actWplywy']->value;?>
" readonly>
             </div>
           </div>

         </div>


       </div>
     </div>

     <div style=" position: absolute; right: 100px;">

     </div>





     <div class="container" style="padding-top: 50px">
       <h2>Czynsze</h2>

       <div class="col">
         <div>
           <table class="table table-striped">
             <thead>
               <tr>
                 <th scope="col">Numer</th>
                 <th scope="col">Typ</th>
                 <th scope="col">Czynsz</th>
                 <th scope="col">Adres</th>
                 <th scope="col">Numer lokalu</th>
               </tr>
             </thead>
             <tbody>
             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Lokale']->value, 'foo', false, NULL, 'petla', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_petla']->value['iteration']++;
?>
 
               <tr>
                 <th scope="row"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_petla']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_petla']->value['iteration'] : null);?>
</th>
                 <td>Lokal</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['foo']->value->getCzynsz();?>
</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['foo']->value->getAdres()->getMiejscowosc();?>
</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['foo']->value->getNumer();?>
</td>
               </tr>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
               


               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Mieszkania']->value, 'foo', false, NULL, 'petla2', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->value) {
?>
               <tr>
                 <th scope="row"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_petla']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_petla']->value['iteration'] : null)+(isset($_smarty_tpl->tpl_vars['__smarty_foreach_petla']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_petla']->value['iteration'] : null);?>
</th>
                 <td>Mieszkanie</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['foo']->value->getCzynsz();?>
</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['foo']->value->getAdres()->getMiejscowosc();?>
</td>
                 <td><?php echo $_smarty_tpl->tpl_vars['foo']->value->getNumer();?>
</td>
               </tr>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

             </tbody>
           </table>



         </div>
       </div>
     </div>

     <div style="padding-top: 30px;">
         <button type="button" onclick="location.href = '?task=aplikacja&action=dashboard';" class="btn btn-secondary ">Powrót</button>
       </div>


   </div>




 </body>

 </html><?php }
}
