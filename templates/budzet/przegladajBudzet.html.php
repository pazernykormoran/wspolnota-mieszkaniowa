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
                        <td><a href="ForgottenPassword.html">Czynsze mieszkaniowe</a></td>
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
            
                      <tr>
                        <th scope="row">1</th>
                        <td>Remont budynku</td>
                        <td>Remonty</td>
                        <td>212133</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Fundusz odtworzeniowy</td>
                        <td>KOszenie trawy</td>
                        <td>2131</td>
                      <tr>
                        <th scope="row">3</th>
                        <td>Fundusz odtworzeniowy</td>
                        <td>Fundusz odtworzeniowy</td>
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
        </div>

        <div style=" position: absolute; right: 100px;">
    

          <div class="form-group row">
            <label class="col-4 col-form-label">Twój czynsz</label>
            <div class="col-8">
                <input class="form-control" type="number" value = "1000" readonly>
            </div>
          </div>
      
          <div style="padding-top: 30px;">
            <button type="button"  onclick="location.href = 'moje-zamowienia.php';" class="btn btn-secondary ">Powrót</button>
        </div>

        </div>
        

      

      </div>





</body>
</html>