<DOCTYPE html>
<html>
<head>
<title>SKALBYLA "Švara"</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, 
initial-scale-1">
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/
bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="CSS/style.css"> 
<link href="https://fonts.googleapis.com/css?family=Mukta+Mahee" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> 
</head>


<body>
<div class="col-sm-12">

<div class="col-sm-1">
</div>


<div class="col-sm-10">

<div id="apie">
<div class="jumbotron">
<h1>Skalbykla</h1>
<div class="pav">
<h1 class="pav">"Švara"</h1>
</div>
</div>

<!-- Apie START -->
<div id="apie">
<div class="container-fluid bg">
<div class="row">
<h2>Nauja skalbykla Vilniuje!</h2>
<div class="col-sm-8">
<p>
Mes atvažiuojame į Jūsų namus, ofisą, ar kitą sutartą vietą, 
paimame Jūsų skalbinius. Galime pristatyti išskalbtus skalbinius 
jau po 3 valandų arba Jums patogiu metu. 
</p>
</div>
<div class="col-sm-4">
<img src="CSS/Images/6.png" class="img-rounded"
height="200" width="300">
<br><br>
</div>
</div>
</div>
</div>
<!-- Apie FINISH -->


<!-- Alergijos START -->
<br><br>
<div class="container-fluid bg2">
<div class="row">
<h2>Greita, švaru ir visiškai nekenksminga!</h2>
<div class="col-sm-8">
<p>
<ul>
	<li>Taupykite savbo laiką ir patikėkite skalbimą mums.</li>
	<li>Mes naudojame tik aukščiausios kokybės skambimo priemones,
	todėl iš Jūsų skalbinių galime pašalinti bet kokias dėmes.</li>
	<li>Mūsų naudojamos priemonės yra visiškai nekenksmingos, 
	todėl neturės jokios neigiamos įtakos nei Jūsų, nei Jūsų vaikų odai.</li>
</ul>
</p>
</div>
<div class="col-sm-4">
<img src="CSS/Images/8.jpg" class="img-rounded"
height="200" width="300">
<br><br>
</div>
</div>
</div>
<!-- Alergijos FINISH -->


<!-- Procedura START -->
<div id="procedura">
<br><br>
<div class="container-fluid bg">
<div class="row">
<h2>Procedūra</h2>
<div class="col-sm-8">
<p>
<ol>
	<li>Užsisakote skalbimą.</li>
	<li>Mes paimame Jūsų skalbinius iš Jūsų nurodytos vietos.</li>
	<li>Išskalbiame ir grąžiname Jums jau po 3 valandų, 
	arba Jūsų pageidaujamu laiku.</li>
</ol>
</p>
</div>
<div class="col-sm-4">
<img src="CSS/Images/10.png" class="img-rounded"
height="300" width="300">
<br><br>
</div>
</div>
</div>
</div>
<!-- Procedura FINISH -->


<!-- Uzsakymas START -->
<div id="uzsakymas">
<br><br>
<div class="container-fluid bg2">
<div class="row">
<h2>Užsakymo forma</h2>
<div class="col-sm-12">
<p2>
<form action="uzsakyti.php" method="post">
Vardas:<br><input type="text" name="username" size="80" autocomplete="off" required><br><br>
Telefono numeris:<br><input type="text" name="phonenumber" size="80" autocomplete="off" required><br><br>
Elektroninio pašto adresas:<br><input type="text" name="email" size="80" autocomplete="off" required><br><br>
Numanomas skalbinių svoris: (pasirinkite apytikrį svorį)<br>
<select name="weight" required>
	<option>1 kg</option>
	<option>3 kg</option>
	<option>5 kg</option>
	<option>7 kg</option>
	<option>10 kg</option>
</select> <br><br>
Komentarai
<br><textarea type="text" name="comments" cols="80" rows="5"></textarea><br><br>
<br>
<button class="btn btn-default pull-right" 
type="submit">Užsakyti</button>
<br><br>
</form>
</p2>
</div>
</div>
</div>
</div>
<!-- Uzsakymas FINISH -->


<!-- Kontaktai START -->
<div id="kontaktai">
<br><br>
<div class="container-fluid bg">
<div class="row">
<h2>Kontaktai</h2>
<div class="col-sm-8">
<p>UAB "Švara"</p>
<p><span class="glyphicon glyphicon-map-marker">
</span>  Šeškinės g. 20, Vilnius<p>
<p><span class="glyphicon glyphicon-phone">
</span>  +370 64215487<p>
<p><span class="glyphicon glyphicon-envelope">
<a href="mailto:svara@gmail.com" style="color: black";>
svara@gmail.com</a>
</span></p>
</div>
<div class="col-sm-4">
<img src="CSS/Images/k.jpg" class="img-rounded"
height="300" width="300">
<br><br>
</div>
</div>
</div>
<!-- Kontaktai FINISH -->



<!-- Navbar  START -->
<nav class="navbar navbar-default 
navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" 
data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>                        
</button>
<a class="navbar-brand">
Skalbykla "Švara"
</a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar-right">
	<li><a href="#apie"><strong>Apie</strong></a></li>
	<li><a href="#procedura"><strong>Procedūra</strong></a></li>
	<li><a href="#uzsakymas"><strong>
Užsakymo forma</strong></a></li>
	<li><a href="#kontaktai"><strong>
Kontaktai</strong></a></li>
</ul>
</div>
</div>
</nav>
<!-- Navbar  FINISH -->


<footer>
<br>
<p3 id="copyright">&copy; Martynas Zikaras
<br>
<a href="mailto:martynas.zikaras@gmail.com" 
style="color: white;">
martynas.zikaras@gmail.com</a>
</p3>
</footer>


<!-- sitas div del sm10 -->
</div>



<div class="col-sm-1">
</div>


</div>
</body>
</html>

