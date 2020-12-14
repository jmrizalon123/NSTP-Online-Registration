document.getElementById("next").onclick = function(){
    if (studentId.value ==""){
    alert("All fields is required");
    return false;
    }
    else if (fname.value ==""){
        alert("Firstname is required");
        return false;
    }
    else if (lname.value ==""){
        alert("Lastname is required");
        return false;
    }
    else if (middlename.value ==""){
        alert("Middlename is required");
        return false;
    }
    else if (username.value ==""){
        alert("Extension name is required");
        return false;
    }
    else if (bday.value ==""){
        alert("Birth of Date is required");
        return false;
    }
    else if (placeofbirth.value ==""){
        alert("Place of Birth is required");
        return false;
    }
    else if (Gender.value =="Gender"){
        alert("Gender is required");
        return false;
    }
    else if (height.value ==""){
        alert("Height is required");
        return false;
    }
    else if (Weight.value ==""){
        alert("Weight is required");
        return false;
    }else{
        document.getElementById("next").style.color = "green" ;
        document.getElementById("next").innerHTML = "Please wait...";
        var load;
        load = setTimeout(showPage, 4000);
            function showPage() {
                document.getElementById("nextform").style.display = "none";
                document.getElementById("next22").style.display = "block";
                return true;
        }
    }
}


document.getElementById("next2").onclick = function(){
    if (Religion.value ==""){
    alert("Religion is required");
    return false;
    }
    else if (Nationality.value ==""){
        alert("Nationality is required");
        return false;
    }
    else if (Course.value ==""){
        alert("Course is required");
        return false;
    }
    else if (yearSec.value ==""){
        alert("Year & Section");
        return false;
    }
    else if (email.value ==""){
        alert("Email Address is required");
        return false;
    }else if (contact_number.value ==""){
        alert("Contact Number Address is required");
        return false;
    }else{
        document.getElementById("next2").style.color = "green" ;
        document.getElementById("next2").innerHTML = "Please wait...";
        var load;
        load = setTimeout(showPage, 3000);
            function showPage() {
                document.getElementById("next22").style.display = "none";
                document.getElementById("next33").style.display = "block";
                return true;
        }
    }
}

document.getElementById("submit").onclick = function(){
    if (Elementary.value ==""){
    alert("Elementary is required");
    return false;
    }
    else if (elem_year.value ==""){
        alert("Year is required");
        return false;
    }
    else if (Secondary.value ==""){
        alert("Secondary is required");
        return false;
    }
    else if (second_year.value ==""){
        alert("Secondary year is required");
        return false;
    }
    else if (Tetiary.value ==""){
        alert("Tetiary is required");
        return false;
    }else if (teriary_year.value ==""){
        alert("Teriary year is required");
        return false;
    }else{
        return true;
    }
}

