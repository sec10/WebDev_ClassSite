function validateForm() {
    var box = document.getElementById("FirstName");
    var box2 = document.getElementById("LastName");
    var box3 = document.getElementById("Address");
    var box4 = document.getElementById("City");
    var box5 = document.getElementById("State");
    var box6 = document.getElementById("PhoneNumber");
    var box7 = document.getElementById("PetName");
    
    if (box.value == "" || box2.value=="" || box3.value=="" || box4.value=="" || box5.value=="" || box6.value=="" || box7.value==""){
        alert("Please fill out all required fields.");
        return false;
    }
}



function showBreed()  {
var selectBox =document.getElementById('PetType');
var userInput =selectBox.options[selectBox.selectedIndex].value;
if (userInput =='DG') {
document.getElementById('Breed').style.visibility ='visible';
} else {
document.getElementById('Breed').style.visibility ='hidden';
}
return false;
}

