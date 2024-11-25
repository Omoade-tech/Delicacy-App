---
### Simple Quiz Application: Task Outline for README.md
---

#### Project: Simple Quiz Application

**Objective**: Build a quiz application in PHP where users can answer multiple-choice questions and receive a score at the end.

---

### Requirements

1. **Question Display**:

    - The quiz should have at least 5 multiple-choice questions.
    - Each question should be displayed one at a time, with four answer options (A, B, C, D).

2. **Answer Selection**:

    - The user should select an answer for each question.
    - Store the answers in an array to keep track of the user’s selections.

3. **Score Calculation**:

    - After the user completes the quiz, display their score based on the number of correct answers.

4. **Input Validation**:
    - Use PHP regular expressions to validate that the user has selected an option for each question.
    - Display an error message if any question is left unanswered.

---

### Instructions

1. **Set Up Questions**:

    - Create an array with five questions.
    - Each question should contain:
        - The question text.
        - Four answer options (A, B, C, D).
        - The correct answer.

2. **Form for Each Question**:

    - Use a form to display one question at a time with radio buttons for each answer option.
    - Add a "Next" button to submit the answer and move to the next question.

3. **Store Answers**:

    - Store each selected answer in an array, which will help in scoring after the final question.

4. **Calculate and Display Score**:

    - At the end of the quiz, compare the user’s answers with the correct answers.
    - Calculate the total score and display it.

5. **Validation**:
    - Ensure that the user has selected an answer before moving to the next question.
    - Display an error message if any question is left unanswered.

---

### Example Code Structure

```php
<?php
// Array of questions
$questions = [
    [
        "question" => "What is the capital of France?",
        "options" => ["A" => "Paris", "B" => "London", "C" => "Rome", "D" => "Berlin"],
        "answer" => "A"
    ],
    // Add more questions here...
];

// Code logic for displaying questions, validating answers, and calculating score...
?>
```

---

### Additional Tips

-   **Use sessions** if you need to store data across multiple pages.
-   **Break down** each part (question display, answer storage, score calculation) into separate functions for clarity.
-   **Test** each step as you build to make sure everything works as expected.

---
