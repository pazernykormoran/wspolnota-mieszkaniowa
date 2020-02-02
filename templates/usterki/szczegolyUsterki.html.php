<!DOCTYPE HTML>
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


      </div>
    </div>

    <div style="padding-top: 20px;">
        <div class="form-group row">
          <label class="col-sm-2 col-form-label" placeholder="Podaj opis usterki">Dokładny adres</label>
          <div class="col-5">
         <textarea class="form-control" name="opis" rows="3" readonly></textarea>
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