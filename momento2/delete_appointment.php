<?php 
if(isset($_GET['ID'])){
    include_once('db_conection.php');
    $ID = $_GET['ID'];
    $sql = "DELETE FROM appointment WHERE ID={$ID}";
    $result = $conn->query($sql);
    header("location: diary_appointment.php");
}
?>