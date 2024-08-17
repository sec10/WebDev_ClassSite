<!doctype html>
<html>
<head>
<title>Admin Page</title> 

</head>
<body>
<?php
   
@$DB = new mysqli('localhost','root','pwdpwd','pet_shop');
    if (mysqli_connect_errno()){
      echo 'Cannot connect to database: ' . mysqli_connect_error();
    } 
    mysqli_select_db($DB, 'pet_shop');
    
    
    $sql = "UPDATE grooming SET FirstName='$_POST[FirstName]', LastName='$_POST[LastName]', Address='$_POST[Address]', City='$_POST[City]', State='$_POST[State]', Zip='$_POST[Zip]', PhoneNumber='$_POST[PhoneNumber]', Email='$_POST[Email]', PetName='$_POST[PetName]', PetBirthday='$_POST[PetBirthday]', PetType='$_POST[PetType]', Breed='$_POST[Breed]', NeuteredOrSpayed='$_POST[NeuteredOrSpayed]' WHERE GROOMINGID='$_POST[GroomingID]'";
    
    if(mysqli_query($DB, $sql))
        echo "Database Updated!";
    else
        echo "Not Updated";
    
?>  
</body>
</html>