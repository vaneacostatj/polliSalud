<?php include_once('layouts/header.php'); ?>
<br>
<div class="container">
    <form action="save_appointment.php" method="post" onsubmit="return validate2();">
    <h1>General Medicine</h1>
        <div class="form-row">
            
            <div class="form-group col-md-4">
                <label for="appointment_date">appointment date</label>
                <input type="date" class="form-control" name="appointment_date" id="appointment_date">
            </div>
            <div class="form-group col-md-4">
                <label for="appointment_time">appointment time</label>
                <input type="time" class="form-control" name="appointment_time" id="appointment_time">
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