<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    $answer1 = $_POST["mo-capital"];
    $answer2 = $_POST["ks-capital"];
    $answer3 = $_POST["co-capital"];
    $answer4 = $_POST["wy-capital"];
    $answer5 = $_POST["mt-capital"];

    $numCorrect = 0;

    if($answer1 == "Jefferson City") { $numCorrect++;}
    if($answer2 == "Topeka") { $numCorrect++;}
    if($answer3 == "Denver") { $numCorrect++;}
    if($answer4 == "Cheyenne") { $numCorrect++;}
    if($answer5 == "Helena") { $numCorrect++;}

    $score = ($numCorrect / 5) * 100;
    
    echo "<h4>SCORE $score%</h4>";
    echo "Question 1: What is the capital of Missouri?<br/>";
    echo "&#9Correct Answer: Jefferson City<br/>";
    echo "&#9Your Answer: $answer1<br/><br/>";

    echo "Question 2: What is the capital of Kansas?<br/>";
    echo "&#9Correct Answer: Topkea<br/>";
    echo "&#9Your Answer: $answer2<br/><br/>";

    echo "Question 3: What is the capital of Colorado?<br/>";
    echo "&#9Correct Answer: Denver<br/>";
    echo "&#9Your Answer: $answer3<br/><br/>";

    echo "Question 4: What is the capital of Wyoming?<br/>";
    echo "&#9Correct Answer: Cheyenne<br/>";
    echo "&#9Your Answer: $answer4<br/><br/>";

    echo "Question 5: What is the capital of Montana?<br/>";
    echo "&#9Correct Answer: Helena<br/>";
    echo "&#9Your Answer: $answer5<br/><br/>";

?>
</body>
</html>

