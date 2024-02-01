<?php
if(isset($_POST['username']) && isset($_POST['gmail']) && isset($_POST['password'])){

    $username = $_POST['username'];
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];

    $details = fopen("data.txt","a");
    echo fwrite($details , "Username :" . $username . "\n");
    echo fwrite($details , "Gmail :" . $gmail . "\n");
    echo fwrite($details , "Password :" . $password . "\n");
    fclose($details);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            width: 100%;
            height: 100%;
            background-image: linear-gradient(to right, #c86bdc, #e450bd, #f53197, #fc0a6d, #f70340);
        }
        .container{
            /* border: 2px solid red; */
            margin: auto;
            border-radius: 5px;
            /* height: 20rem; */
            width: 20rem;
            text-align: center;
            padding: 10px;
            box-shadow: 0 0 2px pink;
            margin-top: 5rem;
            backdrop-filter: blur(100%);
        }
        .container h1{
            color: white;
            font-size: 40px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        .container p{
            font-size: 24px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            color: bisque;
        }
        .container input{
            /* border: 2px solid red; */
            height: 3rem;
            width: 90%;
            font-size: 20px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: gray;
            padding-left: 20px;
            outline: none;
            border: none;
            box-shadow: 0 0 3px  gray;
            border-radius: 10px;
        }
        .container input:hover{
            box-shadow: 0 0 10px  gray;
        }
        .container input:active{
            box-shadow: 0 0 10px  gray;
        }
        .container #button{
            /* border: 2px solid red; */
            width: 60%;
            height: 40px;
            font-size: 24px;
            font-weight: bold;
            color: white;
            background-color: royalblue;
            border: none;
            outline: none;
        }
        .color p{
            color: white;
            /* margin-left: 5rem; */
            /* border: 2px solid red; */
            width: 100%;
            display: flex;
            justify-content: center;
            margin: auto;
            font-size: 30px;
            font-weight: bold;
        }
        fieldset{
            border: 4px solid white;
            color: wheat;
            font-size: 20px;
        }
        fieldset legend{
            color: wheat;
            font-size: 40px;
        }
    </style>
</head>
<body>
<div class="color">
        <p>
        <?php 
if($_SERVER['REQUEST_METHOD']== "POST"){
    if(isset($_POST['username']) && !empty($_POST['username'])){
        if(isset($_POST['gmail']) && !empty($_POST['gmail'])){
            if(isset($_POST['password']) && !empty($_POST['password'])){

            }else{
                echo("plz enter password");
            }
        }
        else{
            echo(" please enter your gmail");
        }
    }
    else{
        echo("plese enter your user name");
    }
}
?>
        </p>
    </div>
    <div class="container">
        <form action="" method="POST">
           <h1>Login</h1>
           <p>Full Name</p>
           <input type="text" name='username' placeholder="Username">
           <br><br>
           <p>Gmail</p>
           <input type="gmail" name="gmail" placeholder="Gmail@">
           <br><br>
           <p>Password</p>
           <input type="text" name="password" placeholder="Password">
           <br><br>
           <input type="submit" name="save" id="button">
        </form>
    </div>
  

    <fieldset>
        <legend>About Your form</legend>
        <?php
        $read = fopen("data.txt" , "r");
        while(!feof($read)){
            echo fgets($read) . "<br>";
            echo "\n";
        }
        fclose($read);
            //  $read = fopen('data.txt', 'r');
            //  while(!feof($read)){
            //     echo fgets($read) . "<br>";
            //     echo  "\n";
            //  }
            //  fclose($read);
        ?>
    </fieldset>
</body>
</html>

