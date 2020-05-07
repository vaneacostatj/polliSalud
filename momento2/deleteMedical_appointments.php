<?php 
if(isset($_GET['ID'])){
    include_once('db_conection.php');
    $ID = $_GET['ID'];
    $sql = "DELETE FROM medical_appointments WHERE ID={$ID}";
    $result = $conn->query($sql);
    header("location: diary.php");

}

?>