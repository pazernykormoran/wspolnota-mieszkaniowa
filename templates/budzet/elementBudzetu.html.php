 <!DOCTYPE HTML>
<html lang="pl">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Aktualny budżet</title>
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
  
    <span class="d-block p-2 bg-primary text-white">Szczegóły wydatku</span>


    <div class="container" style="padding-top: 30px;">
      <div class="row">
        
        <div class="col-3">
          <label class="form-label">Kategoria:</label>
          <input class="form-control" type="text" value = "fdasd" readonly>
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
        <label class="col-sm-2 col-form-label">Opis</label>
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
</html>