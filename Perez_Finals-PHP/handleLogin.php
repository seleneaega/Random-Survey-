<?php

    error_reporting(0);

    include_once("database.php");

    $userName = $_POST["inputUsername"];
    $password = $_POST["inputPassword"];

    $missingInput = false;
    $missingUsername = false;
    $missingPassword = false;

    if($userName != "" && $password != ""){
        $selectQuery = mysqli_query($con, "SELECT * FROM admins WHERE username = '$userName'");
        $fetchQuery = mysqli_fetch_assoc($selectQuery);
        $user_id = $fetchQuery["id"];
        $user_name = $fetchQuery["username"];
        $cryptPassword = $fetchQuery["password"];

        if(isset($cryptPassword)){
            if(password_verify($password, $cryptPassword)){
                header("Location: home.php?msg=1");
            }
            else{
                $incorrect_password = true;
            }
        }
        else{
            $missingUsername = true;
        }
    }
    else{
        $missingInput = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @font-face{
            font-family: 'Chihaya';
            src: url(font/chihayajun.ttf);
        }
        *{
            font-family: 'Chihaya';
            /* color: #d8d8d8; */
        }
        body{
            background-color: #d8d8d8;
        }
        .table{
            margin: auto;
            margin-top: 200px;
            border-radius: 10px;
            padding: 30px;
            font-size: 2em;
            margin-bottom: 200px;
            color: #d8d8d8;
            
        }
        input[type=text]{
            width: 100%;
            padding: 12px;
            border: 1px solid #6699cc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            resize: vertical;
            font-size: 20px;
            color: #6699cc;
        }
        input[type=password]{
            width: 100%;
            padding: 12px;
            border: 1px solid #6699cc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            resize: vertical;
            font-size: 20px;
            color: #6699cc;
        }
        button{
            background-color: #6699cc;
            color: #d8d8d8;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
            font-family: 'Chihaya';
            font-size: 20px;
            font-weight: bold;
        }
        button:hover{
            background-color: #d8d8d8;
            color: #6699cc;
        }
        .login-header{
            margin-left: auto;
            margin-right: auto;
            color: #d8d8d8;
        }
        h1{
            text-align: center;
        }
        .table{
            background-color: #6699cc;
            margin-left: auto;
            margin-right: auto;
            width: 500px;
        }
        label{
            color: #d8d8d8;
        }
    </style>
</head>
<body>
    <div id="">
        <div class="table">
            <h2>LOG IN</h2>
            <?php

                if($missingInput == true){
                    if($userName == ""){
                        echo "<h3>Please enter a username.</h3>";
                    }
                    if($password == ""){
                        echo "<h3>Please enter a password.</h3>";
                    }
                }
                if($missingUsername == true){
                    echo "<h3>The user is incorrect.</h3>";
                }
                if($incorrect_password == true){
                    echo "<h3>The password is incorrect.</h3>";
                }
                echo "<a href='login.php'><button><b>Please try again.</b></button></a>";
            ?>
        </div>
    </div>
</body>
</html>