 <?php
include 'safe.php'; 
include 'conn.php';

$user = $_POST['username'];
$phone = $_POST['phonenumber'];
$email = $_POST['email'];
$weight = $_POST['weight'];
$comments = $_POST['comments'];

$sql = "INSERT INTO Uzsakymai (Vardas, Telefonas, Elpastas, Svoris, Komentarai)
VALUES ('$user', '$phone', '$email', '$weight', '$comments')";

if ($conn->query($sql) === TRUE) {
    echo e(" ");
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

header("refresh:0; url=uzsakymai.php");


?> 
