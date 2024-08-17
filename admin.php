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
    
    $sql = "SELECT * FROM grooming";
    
    $records = mysqli_query($DB, $sql);
?>
<h1>APPOINTMENTS ADDED</h1>
<table border=2 cellpadding=3 cellspacing=1>
    <tr>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Zip</th>
        <th>PhoneNumber</th>
        <th>Email</th>
        <th>PetName</th>
        <th>PetBirthday</th>
        <th>PetType</th>
        <th>Breed</th>
        <th>NeuteredOrSpayed</th>
    </tr>
    
    <?php
    while($row=mysqli_fetch_array($records))
    {
        echo "<tr><form action=update.php method=post>";
        echo "<td><input type=text name=FirstName value='".$row['FirstName']."'</td>";
        echo "<td><input type=text name=LastName value='".$row['LastName']."'</td>";
        echo "<td><input type=text name=Address value='".$row['Address']."'</td>";
        echo "<td><input type=text name=City value='".$row['City']."'</td>";
        echo "<td><input type=text name=State value='".$row['State']."'</td>";
        echo "<td><input type=text name=Zip value='".$row['Zip']."'</td>";
        echo "<td><input type=text name=PhoneNumber value='".$row['PhoneNumber']."'</td>";
        echo "<td><input type=text name=Email value='".$row['Email']."'</td>";
        echo "<td><input type=text name=PetName value='".$row['PetName']."'</td>";
        echo "<td><input type=text name=PetBirthday value='".$row['PetBirthday']."'</td>";
        echo "<td><input type=text name=PetType value='".$row['PetType']."'</td>";
        echo "<td><input type=text name=Breed value='".$row['Breed']."'</td>";
        echo "<td><input type=text name=NeuteredOrSpayed value='".$row['NeuteredOrSpayed']."'</td>";
        echo "<input type=hidden name=GroomingID value='".$row['GroomingID']."'>";
        echo "<td><input type=submit></td>";
        echo "</form></tr>";
    }
    ?>
</table>
    
<h1>DELETE APPOINTMENTS</h1>    
<table border=2 cellpadding=3 cellspacing=3>
    <tr>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Zip</th>
        <th>PhoneNumber</th>
        <th>Email</th>
        <th>PetName</th>
        <th>PetBirthday</th>
        <th>PetType</th>
        <th>Breed</th>
        <th>NeuteredOrSpayed</th>
        <th>Delete</th>
    </tr>
    
    <?php
        @$DB = new mysqli('localhost','root','pwdpwd','pet_shop');
    if (mysqli_connect_errno()){
      echo 'Cannot connect to database: ' . mysqli_connect_error();
    } 
    mysqli_select_db($DB, 'pet_shop');
    
    $sql = "SELECT * FROM grooming";
    
    $records = mysqli_query($DB, $sql);

    while($row = mysqli_fetch_array($records))
      {
        echo "<tr>";
        echo "<td>".$row['FirstName']."</td>";
        echo "<td>".$row['LastName']."</td>";
        echo "<td>".$row['Address']."</td>";
        echo "<td>".$row['City']."</td>";
        echo "<td>".$row['State']."</td>";
        echo "<td>".$row['Zip']."</td>";
        echo "<td>".$row['PhoneNumber']."</td>";
        echo "<td>".$row['Email']."</td>";
        echo "<td>".$row['PetName']."</td>";
        echo "<td>".$row['PetBirthday']."</td>";
        echo "<td>".$row['PetType']."</td>";
        echo "<td>".$row['Breed']."</td>";  
        echo "<td>".$row['NeuteredOrSpayed']."</td>";
        echo "<td><a href=deletegrooming.php?GroomingID=".$row['GroomingID'].">Delete</a></td>";
        echo "</tr>";
        }
    ?>
</table>
</body>
</html>