<?php include_once('layouts/header.php'); ?>

<br>
<div class="container-fluid" id="background-head">
    <div class="card text-white bg-primary mb-3">
        <div class="row">
            <div class="card-body col-sm-1 text-right">#</div>
            <div class="card-body col-sm-2">Name</div>
            <div class="card-body col-sm-1">Lastname</div>
            <div class="card-body col-sm-1">Document</div>
            <div class="card-body col-sm-1">Birthdate</div>
            <div class="card-body col-sm-2">city of residence</div>
            <div class="card-body col-sm-1">Home</div>
            <div class="card-body col-sm-1">Mobile</div>
            <div class="card-body col-sm-2">Actions</div>
        </div> 
    </div>   
      
        <?php         
            try {
                include_once('db_conection.php');
                $sql = "SELECT * FROM medical_appointments";
                $result = $conn->query($sql);            
                if($result->num_rows > 0){                
                    while($row = $result->fetch_assoc()){                    
                        $rowTemplate = "<div class='row'>   
                        <div class='card-body col-sm-1 text-right'>{$row['ID']}</div>
                        <div class='card-body col-sm-2'>{$row['Name']}</div>
                        <div class='card-body col-sm-1'>{$row['Lastname']}</div>
                        <div class='card-body col-sm-1'>{$row['Document']}</div>
                        <div class='card-body col-sm-1'><font size=2>{$row['Birthdate']}</font></div>
                        <div class='card-body col-sm-2'>{$row['city_of_residence']}</div>
                        <div class='card-body col-sm-1'>{$row['Neighborhood']}</div>
                        <div class='card-body col-sm-1'>{$row['Mobile']}</div>
                        <div class='card-body col-sm-2'>                      
                        <a href='edidMedical_appointments.php?ID={$row['ID']}' class='badge badge-success'> Edidt </a>
                        <a href='deleteMedical_appointments.php?ID={$row['ID']}' class='badge badge-danger' onclick='return alertdelete();'> Delete </a>
                        <a href='Medical_appointments.php?ID={$row['ID']}' class='badge badge-success'> schedule</a>
                        </div></div>";
                        echo $rowTemplate;
                    }
                }
            
            } catch (Exception $ex) {
                echo "Error";
            }
        ?>
 
 </div>
 <br>

<?php include_once('layouts/footer.php'); ?>