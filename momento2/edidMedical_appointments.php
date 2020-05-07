<?php 
if(isset($_GET['ID'])){
    include_once('db_conection.php');
    $ID = $_GET['ID'];
    $sql = "SELECT * FROM medical_appointments WHERE ID={$ID}";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        $row= $result->fetch_assoc();
        //print_r ($row); 
    }

}

?>
<?php include_once('layouts/header.php'); ?>

<div class="container">
    <form action="update_medical_appointments.php?ID=<?php echo $row['ID'] ?>" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="Name">Name: </label>
        <input type="text" class="form-control" value="<?php echo $row['Name']?>" name="Name" id="Name" placeholder="Name">
        </div>
        <div class="form-group col-md-6">
        <label for="Lastname">Lastname</label>
        <input type="text" class="form-control" value="<?php echo $row['Lastname']?>" name="Lastname" id="Lastname" placeholder="Lastname">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="Document">Document: </label>
        <input type="int" class="form-control" value="<?php echo $row['Document']?>" name="Document" id="Document" placeholder="Document">
        </div>
        <div class="form-group col-md-6">
        <label for="Birthdate">Birthdate: </label>
        <input type="date" class="form-control" value="<?php echo $row['Birthdate']?>" name="Birthdate" id="Birthdate" placeholder="Birthdate">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="city_of_residence">city of residence: </label>
        <input type="text" class="form-control" value="<?php echo $row['city_of_residence']?>" name="city_of_residence" id="city_of_residence" placeholder="city_of_residence">
        </div>
        <div class="form-group col-md-6">
        <label for="Neighborhood">Neighborhood: </label>
        <input type="text" class="form-control" value="<?php echo $row['Neighborhood']?>" name="Neighborhood" id="Neighborhood" placeholder="Neighborhood">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="Mobile">Mobile</label>
        <input type="int" class="form-control" value="<?php echo $row['Mobile']?>" name="Mobile" id="Mobile" placeholder="Mobile">
        </div>      
    </div>
 
    <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
</div>

<?php include_once('layouts/footer.php'); ?>