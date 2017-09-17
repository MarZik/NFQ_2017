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

<div class="col-sm-111">

<div class="jumbotron">
<h1>Skalbykla</h1>
<div class="pav">
<h1 class="pav">"Švara"</h1>
</div>
</div>

<h1>
<strong>
Jūsų užsakymas priimtas.<br> 
</strong>
</h1>

<h3>Greitu metu su jumis susisieks mūsų konsultantai dėl užsakymo patvirtinimo.
<br><br>

<!--paieska START-->
<form action="search.php" method="get">
<label>
Paieška
	<input type="text" name="keywords" autocomplete="off">
</label>
	<input type="submit" value="Ieškoti">
</form>
<!-- paieska FINISH -->
</h3>

<!-- Uzsakymai START -->
<div class="container-fluid bg">
<h2>Jūsų įmonės užsakymų sąrašas</h2>
<p>

<?php
//pagination START
$per_page = 10;
if(!isset($_GET['page']))
{ 
    $page = 1;
}else{
    $page = $_GET['page'];
}

if($page<=1){
$start = 0;
}else{
$start = $page * $per_page - $per_page;
}

include 'conn.php';
include 'safe.php';

$sql = "SELECT * FROM Uzsakymai";
$num_rows = mysqli_num_rows(mysqli_query($conn,$sql));
$num_pages = ceil($num_rows / $per_page);
$sql .= " LIMIT $start, $per_page";
$result = mysqli_query($conn,$sql);

//Irasu is db rodymas START
echo
"
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
while($row = $result->fetch_assoc())
{
    $id = $row['id'];
    $vardas = $row['Vardas'];
    $telefonas = $row['Telefonas'];
    $elpastas = $row['Elpastas'];
    $svoris = $row['Svoris'];
    $komentarai = $row['Komentarai'];
    
 ?>
	<tr>
    	<td><?php echo e($id)?></td>
    	<td><?php echo e($vardas)?></td>
    	<td><?php echo e($telefonas)?></td>
        <td><?php echo e($elpastas)?></td>
        <td><?php echo e($svoris)?></td>
    	<td><?php echo e($komentarai)?></td>
    </tr>
  <?php  
    

}
echo "
        </table>
</h2>
";
//Irasu is db rodymas FINISH


echo "<hr>";
$prev = $page - 1;
$next = $page + 1;

if (!($page<=1))
    echo " <a href='?page=$prev'> Atgal </a> ";
    
    $number = 1;
    for ($number; $number <= $num_pages; $number +=1)
    {
        if ($number == $page)
        {
            echo "<b> [$number] </b>";
        } else {
            echo " <a href='?page=$number'>$number</a> ";
        }
    }
    
    if ($page<$num_pages)
        echo " <a href='?page=$next'> Pirmyn </a> ";
        //pagination FINISH
?>

</p>
<hr>
<a href= 'index.php'> Grįžti į pagrindinį puslapį </a>
</div>
</div>
</div>
<br><br>
<!-- Uzsakymai FINISH -->



<footer>
<br><br>
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

