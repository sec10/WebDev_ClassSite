<?php
    require 'Includes/fnStrings.php';
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sandy's Petshop | Grooming</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    require 'Includes/header.html';

	if (array_key_exists('Submitted',$_POST))
	{
		require 'Includes/processappointment.php';
	}
	elseif (array_key_exists('Confirmed',$_POST))
	{
		require 'Includes/Insertappointment.php';
	}
?>

<div id="gservice">
    <h3 class="line">Full-Service Bath</h3>
    <p class="para">Includes bath with natural shampoo, blow dry, 15-minute brush-out, ear cleaning, nail trim, gland expression and scented spritz.</p>
    <p class="para">Dogs: $20 Cats: $15</p>
    <h3 class="line">Full-Service Bath with Haircut</h3>
    <p class="para">Includes bath with natural shampoo, blow dry, 15-minute brush-out, ear cleaning, nail trim, gland expression and scented spritz. PLUS a cut and style to breed-specific standard or shave down.</p>
    <p class="para">Dogs: $35 Cats: $25.</p>
</div>

<div class="box">
    <form  method="post" id="myForm" action="insertappointment.php" onsubmit="return validateForm();">
        <div id="groom">
            <h1>Make A Grooming Appointment</h1>
        </div>
        <div class="row">
            <div class="field1">
                <label for="FirstName">First Name:</label>
            </div>
            <div class="field2">
                <input type="text" name="FirstName" id="FirstName"  title="First Name" placeholder="Required">
            </div>
        </div>
        <div class="row">
            <div class="field1">
                <label for= "LastName">Last Name:</label>
            </div>
            <div class="field2">
                <input type="text" name="LastName" id="LastName" title="Last Name" placeholder="Required">
            </div>
        </div>
        <div class="row">
            <div class="field1">
                <label for="Address">Address:</label>
            </div>
            <div class="field2">
                <input type="text" name="Address" id="Address" title="Address" placeholder="Required">
            </div>
        </div>
        <div class="row">
            <div class="field1">
                <label for="City">City:</label>
            </div>
            <div class="field2">
                <input type="text" name="City" id="City" title="City" placeholder="Required">
            </div>
        </div>
        <div class="row">
            <div class="field1">
                <label for="State">State:</label>
            </div>
            <div class="field2">
                <input type="text" name="State" id="State"  title="State" placeholder="Required">
            </div>
        </div>
        <div class="row">
            <div class="field1">
                <label for="Zip">Zip:</label>
            </div>
            <div class="field2">
                <input type="text" name="Zip" id="Zip" title="Zip" placeholder="Required">
            </div>
        </div>
        <div class="row">
            <div class="field1">
                <label for="PhoneNumber">Phone Number:</label>
            </div>
            <div class="field2">
                <input type="text" name="PhoneNumber" id="PhoneNumber" title="PhoneNumber" placeholder="Required">
            </div>
        </div>
        <div class="row">
            <div class="field1">
                <label for="Email">Email:</label>
            </div>
            <div class="field2">
                <input type="text" name="Email" class="mail"  id="Email" title="Email" placeholder="Optional">
            </div>
        </div>
        <div class="row">
            <div class="field1">
                <label for="PetName">Pet Name:</label>
            </div>
            <div class="field2">
                <input type="text" name="PetName" id="PetName" title="PetName" placeholder="Required">
            </div>
        </div>
        <div class="row">
            <div class="field1">
                <label for="PetBirthday">Pet Birthday:</label>
            </div>
            <div class="field2">
                <input type="text" name="PetBirthday" id="PetBirthday" title="PetBirthday" placeholder="Optional">
            </div>
        </div>
        <div class="row">
          <div class="field1">
              <label for="PetType">Pet Type:</label>
          </div>
          <div class="field2">
              <select name="PetType" id="PetType" onchange="return showBreed();">
                  <option value="0">Required</option>
                  <option value="DG">Dog</option>
                  <option value="CT">Cat</option>
                  <option value="RE">Reptile</option>
              </select>
          </div>
        </div>
      <div class="row">
          <div class="field1">
              <label style="visibility: hidden;">Breed:</label>
          </div>
          <div class="field2">
              <select name="Breed" id="Breed" style="visibility: hidden;">
                  <option value="0">Choose Breed</option>
                  <option value="AU">Australian Cattle</option>
                  <option value="DA">Dalmation</option>
                  <option value="HO">Hound</option>
                  <option value="PU">Pug</option>
                  <option value="OT">Other</option>
              </select>
          </div>
        </div>

        <div class="row">
            <div class="field1">
                <label>Neutered or Spayed (optional):</label>
            </div>
            <div class="field2">
                <input type="radio" class="NeuteredOrSpayed" name="NeuteredOrSpayed" value="Neutered"> Neutered<br>
                <input type="radio" class="NeuteredOrSpayed" name="NeuteredOrSpayed" value="Spayed">Spayed<br>
            </div>
        </div>
        <div class="row">
            <input type="submit" id="thesubmit" name="submit" value="SUBMIT"><span class="output_message"></span>
        </div>
    </form>
</div>

<?php include("Includes/footer.html");?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="jscode.js"></script>
</body>
</html>
