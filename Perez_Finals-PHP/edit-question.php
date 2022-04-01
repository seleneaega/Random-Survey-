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
                $selectQuery = mysqli_query($con, "SELECT * FROM questions WHERE id = '$question_id'");
                $getQuery = mysqli_fetch_assoc($selectQuery);
                $question_name = $getQuery["name"];

                echo
                "
                <div class='edit-survey-box'>
                    <div>
                        <form action='handleEdit.php?id=$question_id' method='POST'>
                        <h1 id='title-edit'>EDIT SURVEY QUESTION</h1>
                            <textarea name='textArea' id='textArea' cols='32' rows='12'>$question_name</textarea>
                            <input id='back-btn' type='submit' value='save changes'>
                        </form>
                        <a href='home.php?type=1'><button id='save-changes'>back</button></a>
                    </div>
                </div>
                ";
            ?>
        </div>
    </div>
</body>
</html>