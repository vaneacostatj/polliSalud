<?php include_once('layouts/header.php'); ?>
<br>
<div class="container">
    <div class="card text-white bg-primary mb-3">
          <div class="row">
              <div class="card-body col-sm-1 text-right">ID</div>
              <div class="card-body col-sm-2">Appointment date</div>
              <div class="card-body col-sm-2">Appointment time</div>
              <div class="card-body col-sm-3">Venue of the appointment</div>  
              <div class="card-body col-sm-2">Actions</div>  
          </div>  
    </div>  

    <?php         
        try {
            include_once('db_conection.php');
            $sql = "SELECT * FROM appointment";
            $result = $conn->query($sql);            
            if($result->num_rows > 0){                
                while($row = $result->fetch_assoc()){                   
                    $rowTemplate = "<div class='row'>     
                    <div class='card-body col-sm-1 text-right'>{$row['ID']}</div>
                    <div class='card-body col-sm-2'>{$row['appointment_date']}</div>
                    <div class='card-body col-sm-2'>{$row['appointment_time']}</div>
                    <div class='card-body col-sm-3'>{$row['venue']}</div>
                    <div class='card-body col-sm-2'>
                      <a href='edid_appointment.php?ID={$row['ID']}' class='badge badge-success'> Edidt </a>
                      <a href='delete_appointment.php?ID={$row['ID']}' class='badge badge-danger' onclick='return alertdelete2();'> Delete </a>
                    </div>
                    </div>";
                    echo $rowTemplate;
                }
            }
           
        } catch (Exception $ex) {
            echo "Error";
        }
    ?>
      <input type="button" onclick=" location.href='index.php' " value="go out" name="boton" /> 
</div>
<br> 

<?php include_once('layouts/footer.php'); ?>