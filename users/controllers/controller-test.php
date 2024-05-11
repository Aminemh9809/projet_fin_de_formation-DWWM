<?php

require_once '../models/tests.php';
session_start();
if (isset($_SESSION['user'])) {
    $test_id = 1;
    $questions = Tests::questions($test_id);
    $current_question_index = 0;
    // Check if the current question index is already set in the session
    if (!isset($_SESSION['current_question_index'])) {
        $_SESSION['current_question_index'] = $current_question_index;
    }
    $answers  = Tests::answers($_SESSION['current_question_index']);

    $current_question = $questions[$_SESSION['current_question_index']];
    $answers  = Tests::answers($_SESSION['current_question_index'] + 1);
    var_dump($answers);

    // Initialize the user_answers array if it doesn't exist
    if (!isset($_SESSION['user_answers'])) {
        $_SESSION['user_answers'] = array();
    }

    $selected_answer = isset($_POST[$_SESSION['current_question_index']]) ? $_POST[$_SESSION['current_question_index']] : null;

    // if  the user is using post 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // if the user clicks on next 

        // Store the selected answer in the user_answers array
        if ($selected_answer !== null) {
            $_SESSION['user_answers'][$_SESSION['current_question_index']] = $selected_answer;
        }
        var_dump($_SESSION['user_answers']);

        $_SESSION['current_question_index']++;

        if ($_SESSION['current_question_index'] < count($questions)) {
            if (isset($_POST["next"])) {
                //if ($_SESSION['current_question_index'] >= count($questions)) {
                // All questions have been answered, handle the submission or move to the next step
                // For example, you could redirect to a different page
                //$_SESSION['current_question_index'] = 0;
                // $_SESSION['user_answers_save'] = $_SESSION['user_answers'];
                //echo "stop";
                // header("Location: result.php");
                //exit;
                //}

                $current_question = $questions[$_SESSION['current_question_index']];
                $answers  = Tests::answers($_SESSION['current_question_index'] + 1);
            }
        } else {
            $_SESSION['current_question_index'] = 0;
            $_SESSION['user_answers_save'] = $_SESSION['user_answers'];
            $_SESSION['user_answers']= array() ;
            echo "stop";
            // header("Location: result.php");
            exit;
        }
    }
} else {
    header("Location: ../../index.php");
    exit();
}


include_once '../views/view-test.php';