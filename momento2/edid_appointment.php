<?php 
if(isset($_GET['ID'])){
    include_once('db_conection.php');
    $ID = $_GET['ID'];
    $sql = "SELECT * FROM appointment WHERE ID={$ID}";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        $row= $result->fetch_assoc();
        //print_r ($row); 
    }

}

?>
<?php include_once('layouts/header.php'); ?>

<div class="container">
    <form action="update_appointments.php?ID=<?php echo $row['ID'] ?>" method="post">
        <h1>General Medicine</h1>
        <div class="form-row">
            
            <div class="form-group col-md-4">
                <label for="appointment_date">appointment date</label>
                <input type="date" class="form-control" value="<?php echo $row['appointment_date']?>" name="appointment_date" id="appointment_date" >
            </div>
            <div class="form-group col-md-4">
                <label for="appointment_time">appointment time</label>
                <input type="time" class="form-control" value="<?php echo $row['appointment_time']?>" name="appointment_time" id="appointment_time">
            </div>
            <div class="form-group col-md-4">
                <label for="venue">venue </label>
                <input type="text" class="form-control" name="venue" id="venue" value="Polli Salud Cr 5 #18 20 (Poblado)" readonly="readonly">              
            
            </div>
        </div> 
    
    
        <button type="submit" class="btn btn-primary">Apply for</button>
    </form>
</div>
  
<?php include_once('layouts/footer.php'); ?>