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
    <button class="button button1"><a href="index.php"> User From </a></button>
    <div class="blogdesire-heading">
      View User Data
    </div>
      <form class="blogdesire-form" action="" method ="POST">
        <p> ENTER UNIQUE ID : <input type = "text" name="Unique_id" value=""> </p>

        <button type="submit" name = 'submit' value="submit" class="btn btn-primary">Submit</button>
      </form>

  </div>
</body>
</html>



<?php
if(isset($_POST['submit'])){
  $Unique_id = $_POST['Unique_id'];


$search = 'Unique Number';
$First_name = 'First_name';
$Last_name = 'Last_name';
$Gender = 'Gender';
$Hobby = 'Hobby';
$linebr = '------------------------';

$found='False';
// Read from file
$lines = file('saved.txt');
foreach($lines as $line)
{
  // explode the line into an array
  $values = explode(':',$line);
  // trim the whitspace from the value
  if(trim($values[0]) == $search)
  {
    if(trim($values[1]) == $Unique_id){
     echo " ".$search.": ".$values[1] ."<br>";
      // exit the foreach if we found the needle
      $found='True';
      //break;
    }   
  }
 if($found == 'True'){
    if(trim($values[0]) == $First_name){
        echo " ".$First_name.": ".$values[1] ."<br>";
    }
     if(trim($values[0]) == $Last_name){
        echo " ".$Last_name.": ".$values[1] ."<br>";
    }
      if(trim($values[0]) == $Gender){
        echo " ".$Gender.": ".$values[1] ."<br>";
    }
      if(trim($values[0]) == $Hobby){
        echo " ".$Hobby.": ".$values[1] ."<br>";
    }
     if(trim($values[0]) == $linebr){
       break;
    }
}

}
} 

?>

