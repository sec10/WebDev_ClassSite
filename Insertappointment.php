<?php
   $dbEntries = $_POST;
   @$DB = new mysqli('localhost','root','pwdpwd','pet_shop');
    if (mysqli_connect_errno()){
      echo 'Cannot connect to database: ' . mysqli_connect_error();
    }


    $query = "INSERT INTO grooming
        (FirstName, LastName, Address,
            City, State, Zip, PhoneNumber,
            Email, PetType, Breed, PetName, NeuteredOrSpayed,
            PetBirthday)
        VALUES ('" .    $dbEntries['FirstName'] . "','" .
                        $dbEntries['LastName'] . "','" .
                        $dbEntries['Address'] . "','" .
                        $dbEntries['City'] . "','" .
                        $dbEntries['State'] . "','" .
                        $dbEntries['Zip'] . "','" .
                        $dbEntries['PhoneNumber'] . "','" .
                        $dbEntries['Email'] . "','" .
                        $dbEntries['PetType'] . "','" .
                        $dbEntries['Breed'] . "','" .
                        $dbEntries['PetName'] . "','" .
                        $dbEntries['NeuteredOrSpayed'] . "','" .
                        $dbEntries['PetBirthday'] . "')";
                      
                        
                       
    if ($DB->query($query))
    {
        echo'<h3>Appointment was added!</h3>';
    }
    else 
    {
        '<h3>Insert failed.</h3>';
    }
?>