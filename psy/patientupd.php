
<?php
if(isset($_POST['mit'])){
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
$temp=$_GET['idpatient'];
$link = 'patient.php';

                   
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE patient SET Nom='$Nom', Prenom='$Prenom', Age='$Age', Profession='$Profession', Email='$Email', Datepc='$Datepc', Type='$Type', Moyen='$Moyen', Anxiete='$Anxiete' WHERE idpatient='$temp'";
    $conn->exec($sql);
    
   
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
 header('Location:../patient.php');
$conn = null;
}
?>
