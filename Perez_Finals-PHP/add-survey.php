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

                echo
                "
                <div class='edit-survey-box'>
                    <div>
                        <form action='handleAdd.php' method='POST'>

                        <h1 id='title-add'>ADD SURVEY QUESTION</h1>

                            <textarea name='inputQuestion' id='textArea' cols='32' rows='12' placeholder='Add question here...'></textarea>

                            <input id='add-btn' type='submit' value='add'>

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