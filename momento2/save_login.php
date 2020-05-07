<?php

    if(!isset($_POST['User'])){
        die("Error not comming data");
    }
        
        $User = $_POST['User'];
        $Password = $_POST['password'];       
        
    
        try {
            include_once('db_conection.php');    
            $sql = "INSERT INTO user(User, Password) VALUES('{$User}','{$Password}')";
            $result = $conn->query($sql);

            header("location: form.php");

        } catch (Exception $ex) {
            echo "DB connection error";
            
            /*$alert_template="<div class='alert alert-danger' role='alert'>
            DB connection error!
            </div>"
            echo $alert_template;*/
            
        }
?>