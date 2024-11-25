<?php 

session_start();

$questions = [
    [
        "question" => "What is the capital of France?",
        "options" => ["A" => "Paris", "B" => "London", "C" => "Rome", "D" => "Berlin"],
        "answer" => "A"
    ],
    [
        "question" => "CSS stands for",
         "options"=> ["A"=> "Computer Styled", "B"=> "Cascading Style Sheets", "C" => "Crazy Solid Shape", "D" => "Cascading Sheets Style"],
         "answer"=> "B"
    ],
    [
        "question"=> "What is the full meaning of php?",
        "options"=> ["A"=> "HyperText Preprocessors", "B"=> "Cascading Style Sheet", "C"=> "Php HyperText Preprocessors", "D"=> "Personal Home Page"],
        "answer"=> "C"
    ],
    [
        "question"=> "What is the name of the CEO of Edutams?",
        "options"=> ["A"=> "Dr. Ademola", "B"=> "Dr. Tiamiyuh", "C"=> "Dr. Dayo", "D"=> "Mr Dangote"],
        "answer"=> "A"
    ],
    [
        "question"=> "What is the name of the CEO of Globalcom?",
        "options"=> ["A"=> "Dr Adeleke", "B"=>  "Mr Adenuga", "C"=> "Dr Otedola", "D"=> "Mr Dele Mamudu"],
        "answer"=> "B"
    ],
];



if (!isset($_SESSION['current_question'])) {
    $_SESSION['current_question'] = 0; // Start from the first question
    $_SESSION['score'] = 0; // Initialize score
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate input
    if (isset($_POST['answer'])) {
        $selected_answer = $_POST['answer'];
        // Check if the answer is correct
        if ($selected_answer == $questions[$_SESSION['current_question']]['answer']) {
            $_SESSION['score']++;
        }
        // Move to the next question
        $_SESSION['current_question']++;
    }

    // Check if we have reached the end of the questions
    if ($_SESSION['current_question'] >= count($questions)) {
        // Display score
        echo "<h1>Your Score: " . $_SESSION['score'] . "/" . count($questions) . "</h1>";
        // Reset session
        session_destroy();
        exit;
    }
}

// Display the current question
$current_question = $_SESSION['current_question'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Quiz Application</title>
</head>
<body>
    <h2><?php echo $questions[$current_question]['question']; ?></h2>
    <form method="POST">
        <?php foreach ($questions[$current_question]['options'] as $key => $value): ?>
            <label>
                <input type="radio" name="answer" value="<?php echo $key; ?>" required>
                <?php echo $key . ": " . $value; ?>
            </label><br>
        <?php endforeach; ?>
        <button type="submit">Next</button>
    </form>
</body>
</html>