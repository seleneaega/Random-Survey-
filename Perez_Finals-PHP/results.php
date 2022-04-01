<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finals!!!</title>
    <link rel="stylesheet" href="cssFolder/results.css">
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

                $selectQuery = mysqli_query($con, "SELECT * FROM questions");
                while($fetchQuery = mysqli_fetch_assoc($selectQuery)){
                    $questionId = $fetchQuery["id"];
                    $questionName = $fetchQuery["name"];

                    $answerQuery = mysqli_query($con, "SELECT * FROM questions_answers WHERE question_id = '$questionId'");
                    $retrieve = mysqli_fetch_assoc($answerQuery);
                    $stronglyDisagree = $retrieve["sd"];
                    $disagree = $retrieve["d"];
                    $neutral = $retrieve["n"];
                    $agree = $retrieve["a"];
                    $stronglyAgree = $retrieve["sa"];
                    $sum = $stronglyAgree + $disagree + $neutral + $neutral + $agree + $stronglyAgree;
                    $sd = ($stronglyDisagree / $sum) * 800;
                    $d = ($disagree / $sum) * 800;
                    $n = ($neutral / $sum) * 800;
                    $a = ($agree / $sum) * 800;
                    $sa = ($stronglyAgree / $sum) * 800;

                    echo
                    "
                    <div id='graph-main-container'>
                        <div id='graph-container'>
                            <div id='question-name'>
                                <h1>$questionName</h1>
                            </div>

                            <div id='graph'>
                                <table>
                                    <tr>
                                        <td class='choice-tag'><div class='tag'><b>Strongly Disagree</b></div></td>
                                        <td><div class='bar' style='background-color: #ffc0cb; width:".$sd."px'>$stronglyDisagree vote/s</div></td>
                                    </tr>
                                    <tr>
                                        <td class='choice-tag'><div class='tag'><b>Disagree</b></div></td>
                                        <td><div class='bar' style='background-color: #add8e6; width:".$d."px'>$disagree vote/s</div></td>
                                    </tr>
                                    <tr>
                                        <td class='choice-tag'><div class='tag'><b>Neutral</b></div></td>
                                        <td><div class='bar' style='background-color: #afffaf; width:".$n."px'>$neutral vote/s</div></td>
                                    </tr>
                                    <tr>
                                        <td class='choice-tag'><div class='tag'><b>Agree</b></div></td>
                                        <td><div class='bar' style='background-color: #87cefa; width:".$a."px'>$agree vote/s</div></td>
                                    </tr>
                                    <tr>
                                        <td class='choice-tag'><div class='tag'><b>Strongly Agree</b></div></td>
                                        <td><div class='bar' style='background-color: #ffac8b; width:".$sa."px'>$stronglyAgree vote/s</div></td>
                                </table>
                            </div>
                        </div>
                    </div>
                    ";
        }
            ?>
        </div>
    </div>
</body>
</html>