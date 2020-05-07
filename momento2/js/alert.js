function validate() {

    let Name1 = document.getElementById('Name1');
    let Lastname = document.getElementById('Lastname');
    let Document = document.getElementById('Document');
    let Birthdate = document.getElementById('Birthdate');
    let city_of_residence = document.getElementById('city_of_residence');
    let Neighborhood = document.getElementById('Neighborhood');
    let Mobile = document.getElementById('Mobile');

    if (Name1.value == "") {
        alert("must fill in the name field");
        Name1.focus();
        Name1.select();
        return false;
    }

    if (Lastname.value == "") {
        alert("must fill in the Lastname field");
        Lastname.focus();
        Lastname.select();
        return false;
    }


    if (Document.value == "") {
        alert("must fill in the Document field");
        Document.focus();
        Document.select();
        return false;
    }
    else {
        if (Document.value.length > 10) {
            alert("the document is very long");
            return false;
        }
    }


    if (Birthdate.value == "") {
        alert("must fill in the Birthdate field");
        Birthdate.focus();
        Birthdate.select();
        return false;
    }


    if (city_of_residence.value == "") {
        alert("must fill in the city of residence field");
        city_of_residence.focus();
        city_of_residence.select();
        return false;
    }


    if (Neighborhood.value == "") {
        alert("must fill in the Neighborhood field");
        Neighborhood.focus();
        Neighborhood.select();
        return false;
    }


    if (Mobile.value == "") {
        alert("must fill in the Mobile field");
        Mobile.focus();
        Mobile.select();
        return false;
    }
    
    if(isNaN(Mobile.value)){
        alert("the phone field must be a number")
        return false;
    }  
   
};



function alertdelete()
{    
    var option = confirm("Are you sure to delete your data");
    if (option == true) {
        window.location.href='deleteMedical_appointments.php' + delete +'';
	} else {
        window.location.href='diary.php'
        return false;
	}
	
}

/*btn1.addEventListener('submit',validar,false);*/

//form1.addEventListener('submit',validate(), true)*/

