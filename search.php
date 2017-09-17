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


<div class="jumbotron">
<h1>Skalbykla</h1>
<div class="pav">
<h1 class="pav">"Švara"</h1>
</div>
</div>
<br>
<br>
<br>
<br>


<?php 

include 'conn.php';

if(isset($_GET['keywords'])) {
   $keywords = $conn->escape_string($_GET['keywords']);
   $query = $conn->query("
        SELECT id, Vardas, Telefonas, Elpastas, Svoris, Komentarai
        FROM Uzsakymai
        WHERE id LIKE '%{$keywords}%'
        OR Vardas LIKE '%$keywords%'
        OR Telefonas LIKE '%$keywords%'
        OR Elpastas LIKE '%$keywords%'
        OR Svoris LIKE '%$keywords%'
        OR Komentarai LIKE '%$keywords%'
");
?>

<div class="container-fluid bg">
<div class="result-count">
	<h2>Rasta rezultatų: <?php echo $query->num_rows; ?></h2>
	
	
<?php   

echo "

<h2>
<table>
    <tr>
        <th>Užsakymo numeris</th>
        <th>Vardas</th>
        <th>Telefono numeris</th>
        <th>Elektroninis paštas</th>
        <th>Skalbinių svoris</th>
        <th>Komentarai</th>
    </tr>
";
?>

</div>

<?php

if($query->num_rows) {
    while($r = $query->fetch_object()) {
        
   ?>
  
<div class="result">

<?php    	
 
echo "
    <tr>
        <td>$r->id</td>
        <td>$r->Vardas</td>
        <td>$r->Telefonas</td>
        <td>$r->Elpastas</td>
        <td>$r->Svoris</td>
        <td>$r->Komentarai</td>
    </tr>
";
}
echo"
</table>
</h2>
";

?>
    	
	
<?php 

}
}

?>


</div>
<br>
<br>
<a href= 'uzsakymai.php' class='book' > Grįžti atgal </a>
	

</body>
</html>

