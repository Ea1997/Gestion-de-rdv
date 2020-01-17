 <?php
session_start();
        $result=false;
        if(isset($_POST['Submit'])){
        $date=$_POST['date'];
        $time=$_POST['time'];
        $time1=$_POST['time1'];
        $patient=$_SESSION['idpatient'];
       $link = '../patient/rdv.php'; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "psychologue";

       
            
                     try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO rdv (daterdv,timerdv , timerdv1, idpatient)
    VALUES ('$date', '$time', '$time1','$patient')";
    $conn->exec($sql);
    
    header('Location:' .$link);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
                    
            }
        
                 
    ?>