<?php
session_start();
$questions = $_SESSION['questions'];
$score = 0;
$num_correct = 0;
$num_wrong = 0;

foreach ($questions as $index => $question) {
    if (isset($_POST["question$index"]) && $_POST["question$index"] == $question['correct']) {
        $score++;
        $num_correct++;
    } else {
        $num_wrong++;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz Results</title>
</head>
<body>
    <h1>Quiz Results</h1>
    <p>Score: <?php echo $score; ?></p>
    <p>Correct: <?php echo $num_correct; ?></p>
    <p>Wrong: <?php echo $num_wrong; ?></p>
    <a href="index.php">Retake Quiz</a>
</body>
</html>
