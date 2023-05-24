<!DOCTYPE html>
<html>
<head>
<title> Registration Form </title>
<link rel="stylesheet" href="/style.css">
</head>

<BODY>

<form method="POST">
    <h1> Please Enter the Information information below</h1>
    <br>
    <p>
        <label">Name:</label><input type = "text"  name = "name" />
        <br>
        <br>
        <label>Roll No.</label><input type = "text" name = "pwd" maxlength="7"/>
        <br/>
        <br/>
        <label>Phone No.</label><input type = "number" name = "phn" maxlength="10"/>
        <br/>
        <br/>
        <label>DOB </label><input type = "date" name = "dob" />
        <br/>
        <br/>
    </p>
    <input type = "submit" name="submit_btn" id = "submit" value = "submit"/>
    <br>
    <input type = "reset"  id = "reset" value = "reset"/>
</form>
</BODY>
</html>
<?php

 if(isset($_POST['submit_btn']))
 {
  $username = $_POST['name'];
  $roll = $_POST['pwd'];
  $phone = $_POST['phn'];
  $dob = $_POST['dob'];
  $text = $username . "," . $roll . ","  . $phone . ","  . $dob . "\n";
  $fp = fopen('data.txt', 'a+');

    if(fwrite($fp,$text))  {
        header("index.php");
        echo 'saved';
    }
fclose ($fp);    

}

?>