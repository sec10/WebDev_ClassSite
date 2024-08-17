<?php
    if ($_POST['FirstName'] == '')
    {
        $FirstName = '<span style="color:red;">Please enter first name.</span>';
    }
    else
    {
        $FirstName = ucwords(trim(htmlentities($_POST['FirstName'])));
    }
     
    if ($_POST['LastName'] == '')
    {
        $LastName = '<span style="color:red;">Please enter last name.</span>';
    }
    else
    {
        $LastName = ucwords(trim(htmlentities($_POST['LastName'])));
    }
 
    if ($_POST['Address'] == '')
    {
        $Address = '<span style="color:red;">Please enter address.</span>';
    }
    else
    {
        $Address = trim(htmlentities($_POST['Address']));
    }
 
    if ($_POST['City'] == '')
    {
        $City = '<span style="color:red;">Please enter city.</span>';
    }
    else
    {
        $City = trim(htmlentities($_POST['City']));
    }
 
    if ($_POST['State'] == '')
    {
        $State = '<span style="color:red;">Please enter state.</span>';
    }
    else
    {
        $State = ucwords(trim(htmlentities($_POST['State'])));
    }
 
    if ($_POST['Zip'] == '')
    {
        $Zip = '<span style="color:red;">Please enter zip.</span>';
    }
    else
    {
        $Zip = trim(htmlentities($_POST['Zip']));
    }
 
    if ($_POST['PhoneNumber'] == '')
    {
        $PhoneNumber = '<span style="color:red;">Please enter phone number.</span>';
    }
    else
    {
        $PhoneNumber = trim(htmlentities($_POST['PhoneNumber']));
    }
 
    if ($_POST['Email'] == '')
    {
        $Email = 'none';
    }
    else
    {
        $Email = trim(htmlentities($_POST['Email']));
    }
    if ($_POST['PetName'] == '')
    {
        $PetName = '<span style="color:red;">Please enter pet name.</span>';
    }
    else
    {
        $PetName = ucwords(trim(htmlentities($_POST['PetName'])));
    }
    if ($_POST['PetBirthday'] == '')
    {
        $PetBirthday = '<span style="color:red;">Pet birthday not entered.</span>';
    }
    else
    {
        $PetBirthday = trim(htmlentities($_POST['PetBirthday']));
    }
    if ($_POST['PetType'] =='0')
	{
		$PetType = '<span style="color:red;">Pet type not selected.</span>';
	}
	else
	{
        $PetType = trim(htmlentities($_POST['PetType']));
	}
    if ($_POST['Breed'] =='0')
	{
		$Breed = '<span style="color:red;">Breed not selected.</span>';
	}
	else
	{
        $Breed = trim(htmlentities($_POST['Breed']));
	}  
    
    if ( array_key_exists('NeuteredOrSpayed',$_POST) )
	{
		$NeuteredOrSpayed = trim(htmlentities($_POST['NeuteredOrSpayed']));
	}
	else
	{
		$NeuteredOrSpayed = '<span style="color:red;">
			Not selected.</span>';
	}

?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Grooming Request</title>
</head>
<body>
	<h1>Grooming Requests</h1>
	<ul>
	<?php
		echo "<li><b>First Name:</b>$FirstName</li>";
        echo "<li><b>Last Name:</b>$LastName</li>";
		echo "<li><b>Address:</b>$Address</li>";
		echo "<li><b>City:</b>$City</li>";
        echo "<li><b>State:</b>$State</li>";
        echo "<li><b>Zip:</b>$Zip</li>";
		echo "<li><b>Phone Number:</b>$PhoneNumber</li>";
		echo "<li><b>Email:</b>$Email</li>";
        echo "<li><b>Pet Type:</b>$PetType</li>";
        echo "<li><b>Breed:</b>$Breed</li>";
		echo "<li><b>Pet Name:</b>$PetName</li>";
        echo "<li><b>Neutered Or Spayed:</b>$NeuteredOrSpayed</li>";
		echo "<li><b>Pet Birthday:</b>$PetBirthday</li>";
		
		
	?>
	</ul>
</body>
</html>




