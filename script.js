function validateForm() {
    
    var box = document.getElementById("FirstName");
    var box2 = document.getElementById("LastName");
    var box3 = document.getElementById("Email");
    var box4 = document.getElementById("Message");
    
    if (box.value == "" || box2.value=="" || box3.value=="" || box4.value==""){
        alert("Please fill out all required fields");
        return false;
    }
}


$(function() {
 
    varforms = $("#conForm");
 
    forms.validate({
 
    submitHandler: function(forms) {
 
    $('#loader', forms).html('Please Wait...');
 
    $.ajax({
    type: "POST",
    url: "contactphp.php",
    data: $(forms).serialize(),
    timeout: 20000,
 
        success: function(msg) { $(forms).fadeOut((500, function(){ 
            
                    $(forms).html("<h2>Thank you.</h2>").fadeIn(); 
            
                    }));
                },
 
                error: $('.thanks').show()
 
            });
            
            return false;
        }
    });
});

