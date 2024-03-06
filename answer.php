<?php
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $question_number = $_POST["question_number"];
    $answer = $_POST["answer"];
    
    $sql = "SELECT answer FROM answers WHERE number = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $question_number);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $correct_answer);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);
    
    // Check if user's answer matches the correct answer
    if ($answer == $correct_answer) {
        echo "<script>alert('Correct Answer.');</script>";
    } else {
        echo "<script>alert('Incorrect Answer.');</script>";
    }

}



?>