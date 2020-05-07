<?php

if(!isset($_POST['Name1'])){
    die("Error not comming data");
    }
    
    $Name = $_POST['Name1'];
    $Lastname = $_POST['Lastname'];
    $Document = $_POST['Document'];
    $Birthdate = $_POST['Birthdate'];
    $city_of_residence = $_POST['city_of_residence'];
    $Neighborhood = $_POST['Neighborhood'];
    $Mobile = $_POST['Mobile'];
   
    try {
        include_once('db_conection.php');    
        $sql = "INSERT INTO medical_appointments(Name, Lastname, Document, Birthdate, city_of_residence, Neighborhood, Mobile) VALUES('{$Name}','{$Lastname}','{$Document}','{$Birthdate}','{$city_of_residence}','{$Neighborhood}','{$Mobile}')";
        $result = $conn->query($sql); 
        
        header("location: diary.php");


    } catch (Exception $ex) {
        echo ('DB connection error');
        
        /*$alert_template="<div class='alert alert-danger' role='alert'>
        DB connection error!
        </div>"
        echo $alert_template;*/
        
    }


    

?>
