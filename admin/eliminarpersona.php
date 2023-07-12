<?php ;
include('includes/dbconnection.php');

$ID=$_GET['ID'];

if(isset($_GET['ID'])) {
$ID = $_GET['ID'];
 $delete="DELETE FROM `tblperson` WHERE `ID`=$ID";
// echo $delete;
// exit;
$consulta=mysqli_query($conexion,$delete);

}

var_dump($id);
$_SESSION['message'] = 'Task Removed Successfully';

header("Location: manage-person.php");




?>