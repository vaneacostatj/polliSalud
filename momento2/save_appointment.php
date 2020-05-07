<?php

    if(!isset($_POST['appointment_date'])){
        die("Error not comming data");
    }
        
        $appointment_date = $_POST['appointment_date'];
        $appointment_time = $_POST['appointment_time'];
        $venue = $_POST['venue'];
        
    
        try {
            include_once('db_conection.php');    
            $sql = "INSERT INTO appointment(appointment_date, appointment_time, venue) VALUES('{$appointment_date}','{$appointment_time}','{$venue}')";
            $result = $conn->query($sql);

            header("location: diary_appointment.php");

        } catch (Exception $ex) {
            echo "DB connection error";
            
            /*$alert_template="<div class='alert alert-danger' role='alert'>
            DB connection error!
            </div>"
            echo $alert_template;*/
            
        }
?>