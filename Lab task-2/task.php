<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$nameErr = $emailErr = $genderErr = $degreeErr =  "";
$name = $email = $gender = $degree =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name can not be empty";
  } else {
    $name = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email can not be empty";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  
  }
    if (empty($_POST["gender"])) {
    $genderErr = "At least one of them must be selected";
  } else {
    $gender = $_POST["gender"];
  }
  if (empty($_POST["degree"])) {
    $degreeErr = "At least two of them must be selected";
  } else {
    $degree = $_POST["degree"];
  }
}


?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  Date Of Birth:
  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday">
  <br><br>


  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  
   Degree:
  <input type="checkbox" id="degree1" name="degree1" value="SSC">
  <label for="degree1"> Ssc</label>
  <input type="checkbox" id="degree2" name="degree2" value="HSC">
  <label for="degree2"> Hsc</label>
  <input type="checkbox" id="degree3" name="degree3" value="BSC">
  <label for="degree3"> Bsc</label>
  <input type="checkbox" id="degree4" name="degree4" value="MSC">
  <label for="degree4"> Msc</label>
  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>
  
  Blood Group:
  <label for="group">Choose a group:</label>
  <select name="group" id="group">
    <option value="A+">A+</option>
    <option value="B+">B+</option>
    <option value="AB+">AB+</option>
    <option value="O+">O+</option>
  </select>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
?>

</body>
</html>