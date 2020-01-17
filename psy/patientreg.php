
<?php
function pass()
{
	$num="0123456789";
	return substr(str_shuffle($num),0);
}



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "psychologue";
$Nom=$_POST['Nom'];
$Prenom=$_POST['Prenom'];
$Age=$_POST['Age'];
$Profession=$_POST['Profession'];
$Email= $_POST['Email'] ;
$Datepc=$_POST['Datepc'];
$Type=$_POST['Type'];
$Moyen=$_POST['Moyen'];
$Anxiete=$_POST['Anxiete'];
$link = 'patient.php'; 
$pass=pass();

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO patient (Nom,Prenom , Age, Profession, Email,password,Datepc,Type,Moyen,Anxiete)
    VALUES ('$Nom', '$Prenom', '$Age','$Profession','$Email','$pass','$Datepc', '$Type' ,'$Moyen','$Anxiete')";
    $conn->exec($sql);
    
    header('Location:' .$link);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
