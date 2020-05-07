<?php 
if(isset($_GET['ID'])){
    include_once('db_conection.php');
    $ID = $_GET['ID'];
    $Name= $_POST['Name'];
    $Lastname= $_POST['Lastname'];
    $Document= $_POST['Document'];
    $Birthdate= $_POST['Birthdate'];
    $city_of_residence= $_POST['city_of_residence'];
    $Neighborhood= $_POST['Neighborhood'];
    $Mobile= $_POST['Mobile'];
    //print_r ($ID);
    $sql = "UPDATE medical_appointments SET Name='{$Name}', Lastname='{$Lastname}', Document={$Document}, Birthdate='{$Birthdate}', city_of_residence='{$city_of_residence}', Neighborhood='{$Neighborhood}', Mobile={$Mobile} WHERE ID={$ID}";
    $result = $conn->query($sql);
    header("location: diary.php");

}

?>