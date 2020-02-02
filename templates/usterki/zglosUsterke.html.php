<!DOCTYPE HTML>
<html lang="pl">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Sklep - reklamacja</title>
</head>

<body>
  
<div>
{include file='includes/komunikaty.html'}
</div>

<div class="container" style="width: 30%; position: absolute; left: 0px;">
{include file='includes/menuUzytkownik.html'}
{include file='includes/uzytkownikWspolnoty.html'}
</div>

    <div class="container"  style="width: 70%; position: absolute; left: 300px;">

  <div class="alert alert-success">
    <strong>Sukces!</strong> Poprawnie wykonana operacja.
  </div>

  <div class="alert alert-warning">
    <strong>Błąd</strong> Wystąpił błąd zwiazany wczytaniem danych.
  </div>

  <center>  <h2> Zgłaszanie usterki</h> </center>

    <form action="functions/zloz-reklamacje.php?<?php echo $string_pom ?>" method="post">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Temat</label>
        <div class="col-4">
          <input class="form-control" type="text" placeholder="Podaj temat usterki">
        </div>
      </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Dokładny adres</label>
      <div class="col-4">
     <textarea class="form-control" name="opis" rows="3" placeholder="Podaj adres"></textarea>
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
    <button type="button"  onclick="location.href = '?task=aplikacja&action=dashboard';" class="btn btn-secondary ">Powrót</button>
      </div>
      
    </div>
  </div>  
  </form>
  
</div>



</body>
</html>