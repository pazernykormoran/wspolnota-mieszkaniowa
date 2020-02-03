<!DOCTYPE HTML>
<html lang="pl">
<head>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Aktualny budżet</title>
</head>

<body>
  
<div>
{include file='includes/komunikaty.html' info=$info error=$error}
</div>

<div class="container" style="width: 30%; position: absolute; left: 0px;">
{include file='includes/menuUzytkownik.html'}
{include file='includes/uzytkownikWspolnoty.html'}
</div>

    <div class="container"  style="width: 70%; position: absolute; left: 300px;">
  
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
</html>