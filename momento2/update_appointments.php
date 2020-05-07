<?php 
if(isset($_GET['ID'])){
    include_once('db_conection.php');
    $ID = $_GET['ID'];
    $appointment_date= $_POST['appointment_date'];
    $appointment_time= $_POST['appointment_time'];
    $venue= $_POST['venue'];
    //print_r ($appointment_date);
    $sql = "UPDATE appointment SET appointment_date='{$appointment_date}', appointment_time='{$appointment_time}', venue='{$venue}' WHERE ID={$ID}";
    $result = $conn->query($sql);
    header("location: diary_appointment.php");

}

?>