<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>User Detail</title>
  <style>
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

</style>
</head>
<body class="blogdesire-body">
  <div class="blogdesire-wrapper">
    <button class="button button2"><a href="two.php">View Details</a></button>
    <div class="blogdesire-heading">
      User Details Form
    </div>
    <form class="blogdesire-form" method="post">
      <input type="text" name="username" placeholder="Firstname" required autocomplete="off"> <br>
      <input type="text" name="lastname" placeholder="Lastname" required autocomplete="off"> <br>
      <select name="gender_choose" id="exampleFormControlSelect1" required>
                <option value="">Select a Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
      </select><br>
      <select name="hobby_choose" id="exampleFormControlSelect1" required>
                <option value="">Select a Hobby</option>
                <option value="Reading">Reading</option>
                <option value="Music">Music</option>
                <option value="Writing">Writing</option>
                <option value="Cooking">Cooking</option>
                <option value="Traveling">Traveling</option>
                <option value="Other">Other</option>
      </select>

      <input type="submit" name="submit" value="SAVE" class="blogdesire-submit">
    </form>
  </div>
</body>
</html>

<?php

if(isset($_POST['submit'])){
$Unique_num = uniqid('IDN');
$Unique_id = "Unique Number: "."$Unique_num
";
$Name = "First_name: ".$_POST['username']."
";
$Pass = "Last_name: ".$_POST['lastname']."
";
$gen = "Gender: ".$_POST['gender_choose']."
";
$hobb = "Hobby: ".$_POST['hobby_choose']."
";
$dash = "------------------------"."
";
$file=fopen("saved.txt", "a");
$text = $Unique_id . $Name  . $Pass  . $gen  . $hobb . $dash;
  if(fwrite($file, $text)) {
  echo "$Unique_num";
  }
fclose($file);
}

?>

