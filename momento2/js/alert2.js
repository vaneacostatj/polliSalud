function validate2() {

    let appointment_date = document.getElementById('appointment_date');
    let appointment_time = document.getElementById('appointment_time');
   
    

    if (appointment_date.value == "") {
        alert("must fill in the appointment date field");
        appointment_date.focus();
        appointment_date.select();
        return false;
    }

    if (appointment_time.value == "") {
        alert("must fill in the appointment time field");
        appointment_time.focus();
        appointment_time.select();
        return false;
    }
    
};



function alertdelete2()
{    
    var option = confirm("Are you sure to delete your data");
    if (option == true) {
        window.location.href='delete_appointment.php' + delete +'';
	} else {
        window.location.href='diary_appointment.php'
        return false;
	}
	
}