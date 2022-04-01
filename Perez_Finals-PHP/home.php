<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finals!!!</title>
    <link rel="stylesheet" href="cssFolder/style.css">
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
                    <a href="home.php">
                        <li class="li-one">HOME (guest)</li>
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

            $selectQuery = mysqli_query($con, "SELECT * FROM questions");
            while ($fetchQuery = mysqli_fetch_assoc($selectQuery)) {
                $questionId = $fetchQuery["id"];
                $questionName = $fetchQuery["name"];
                echo
                "
                    <div class='questions-container box'>
                        <div class='questions box'>
                            <div class='korik'>
                                <div class='question-ai box'>
                                    <h1>$questionName</h1>
                                </div>
                                <div class='btn box'>
                                    <a href='edit-question.php?id=$questionId'><button>
                                        edit
                                    </button></a>
                                    <a href='delete-question.php?id=$questionId'><button>
                                        delete
                                    </button></a>
                                </div>
                            </div>
                        </div>
                        <div class='choices box'>
                            <form action='handleAddVote.php?id=$questionId' method='POST'>
                                <div class='ohmygod'>
                                    <div class=''>
                                        <input name='one-only' type='radio' value='sd'><label for=''>Strongly Disagree</label>
                                    </div>

                                    <div class=''>
                                        <input name='one-only' type='radio' value='d'><label for=''>Disagree</label>
                                    </div>
                                    
                                    <div class=''>
                                        <input name='one-only' type='radio' value='n'><label for=''>Neutral</label>
                                    </div>

                                    <div class=''>
                                        <input name='one-only' type='radio' value='a'><label for=''>Korik</label>
                                    </div>

                                    <div class=''>
                                        <input name='one-only' type='radio' value='sa'><label for=''>Strongly Korik</label>
                                    </div>

                                    <div class=''>
                                        <input type='submit'><label for='' >
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                
                    ";
            }
            ?>
        </div>
    </div>
</body>

</html>