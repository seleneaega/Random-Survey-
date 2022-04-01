<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finals!!!</title>
    <link rel="stylesheet" href="cssFolder/edit.css">
    <link rel="icon" href="img/poll.png">
</head>
<body>
<div class="main-container">
        <div class="first-container">
            <div class="navbar">
                <ul class="ul">
                    <a href="home.php">
                        <li class="li-one">HOME (admin)</li>
                    </a>
                    <a href="results.php">
                        <li class="li-two">RESULTS</li>
                    </a>
                    <a href="add-survey.php">
                        <li class="li-three">ADD SURVEY QUESTION</li>
                    </a>
                    <a href="logout.php">
                        <li class="li-four">LOGOUT</li>
                    </a>
                </ul>
            </div>
        </div>
    
        <div class="second-container">
            <?php 

                error_reporting(0);

                include_once("database.php");

                $question_id = $_GET["id"];
                $textarea = $_POST["textArea"];
                $blank = false;

                if($textarea == ""){
                    $blank = true;
                }else{
                    $updateQuery = mysqli_query($con, "UPDATE questions SET name = '$textarea' WHERE id = '$question_id'");
                }
                if($blank == true){
                    echo
                    "
                        <div class='updated-box'> 
                            <h2>Please put an input!</h2>
                            <a href='home.php?type=1'><button id='go-to-home'>Go to home</button></a>
                        </div>
                    ";
                }else{
                    echo
                    "
                        <div class='updated-box'> 
                            <h2>Question updated!</h2>
                            <a href='home.php?type=1'><button id='go-to-home'>Go to home</button></a>
                        </div>
                    ";
                }
            ?>
        </div>
    </div>
</body>
</html>