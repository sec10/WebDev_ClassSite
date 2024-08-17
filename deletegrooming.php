<?php
    @$DB = new mysqli('localhost','root','pwdpwd','pet_shop');
    if (mysqli_connect_errno()){
      echo 'Cannot connect to database: ' . mysqli_connect_error();
    }
    mysqli_select_db($DB, 'pet_shop');

    $sql = "DELETE FROM grooming WHERE GroomingID='$_GET[GroomingID]'";

    if(mysqli_query($DB, $sql))
        echo "Request Deleted!";
    else
        echo "Request Not Deleted";

?>
