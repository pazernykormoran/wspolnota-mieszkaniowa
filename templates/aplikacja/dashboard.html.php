<!DOCTYPE HTML>
<html lang="pl">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Dashboard</title>

</head>

<body>
<div>
{include file='includes/komunikaty.html'}
</div>

<div class="container" style="width: 30%; position: absolute; left: 0px;"  class="center">
{include file='includes/menuUzytkownik.html'}
{include file='includes/uzytkownikWspolnoty.html'}
</div>

<div class="container" style="width: 70%; position: absolute; left: 500px;"">
<img src="images/wspolnota.jpg" alt="Italian Trulli">
</div>


</body>
</html>

<style>
.container img {
   width: 80%;
} 
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>