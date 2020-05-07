<?php include_once('layouts/header.php'); ?>

<!---->
<br>
<div class="container">
<h1>Registration Form</h1>
    <form id="form1"   method="post" action="save_medical_appointments.php" onsubmit="return validate();"> 
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="Name1">Name: </label>
            <input type="text" class="form-control" name="Name1" id="Name1" placeholder="Name">
            </div>
            <div class="form-group col-md-6">
            <label for="Lastname">Lastname</label>
            <input type="text" class="form-control" name="Lastname" id="Lastname" placeholder="Lastname">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="Document">Document: </label>
            <input type="int" class="form-control" name="Document" id="Document" placeholder="Document">
            </div>
            <div class="form-group col-md-6">
            <label for="Birthdate">Birthdate: </label>
            <input type="date" class="form-control" name="Birthdate" id="Birthdate" placeholder="Birthdate">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="city_of_residence">city of residence: </label>
            <input type="text" class="form-control" name="city_of_residence" id="city_of_residence" placeholder="city_of_residence">
            </div>
            <div class="form-group col-md-6">
            <label for="Neighborhood">Neighborhood: </label>
            <input type="text" class="form-control" name="Neighborhood" id="Neighborhood" placeholder="Neighborhood">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="Mobile">Mobile</label>
            <input type="int" class="form-control" name="Mobile" id="Mobile" placeholder="Mobile">
            </div>      
        </div>
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
            </div>
        </div>
        <input id="btn1" name="btn1" type="submit" class="btn btn-primary" value="Sign in">
    </form>
</div>

<?php include_once('layouts/footer.php'); ?>

