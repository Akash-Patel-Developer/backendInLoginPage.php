<?php
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['number']) && isset($_POST['dob']) && isset($_POST['save'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $num = $_POST['number'];
    $dob = $_POST['dob'];
    
    $fptr = fopen("data.txt", "a");
    $add = "this is new line added.";
    echo fwrite($fptr , "First name : " . $fname . "\n");
    echo fwrite($fptr , "Last name : " . $lname . "\n");
    echo fwrite($fptr , "Mobile no : " . $num . "\n");
    echo fwrite($fptr , "D-O-B : " . $dob . "\n");
    fclose($fptr);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
<form action="" method="POST">
    <tr>
        <th>Fill your form</th>
    </tr>  
    <tr>
        <td>First Name :</td>
        <td><input type="text" name="fname" id=""></td>
    </tr> 
    <tr>
        <td>Second Name :</td>
        <td><input type="text" name="lname" id=""></td>
    </tr>
    <tr>
        <td>Mob no :</td>
        <td><input type="number" name="number" id=""></td>
    </tr>
    <tr>
        <td>DOB :</td>
        <td><input type="date" name="dob"></td>
    </tr>
    <tr>
        <td><input type="submit" name="save"></td>
    </tr>
    
     
     
    
    </form>
</table>
    <fieldset>
        <legend>About you</legend>
        <?php
             $read = fopen('data.txt', 'r');
             while(!feof($read)){
                echo fgets($read) . "<br>";
                echo  "\n";
             }
             fclose($read);
        ?>
    </fieldset>
</body>
</html>