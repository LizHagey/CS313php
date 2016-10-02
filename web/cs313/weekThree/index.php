<?php
// Start session management with a persistent cookie
$lifetime = 60 * 60 * 24 * 14;    // 2 weeks in seconds
session_set_cookie_params($lifetime, '/');
session_start();

        $action = filter_input(INPUT_POST, 'action');
        if ($action == NULL) {
            $action = filter_input(INPUT_GET, 'action');
            if ($action == NULL) {
                $action = 'survey';
                $food = isset($_SESSION['food'])? $_SESSION['food']: '';
                $born = isset($_SESSION['born'])? $_SESSION['born']: '';
                $movie = isset($_SESSION['movie'])? $_SESSION['movie']: '';
                $color = isset($_SESSION['color'])? $_SESSION['color']: '';
                include('/view/survey.php');
        }
    }
    
    if ($action == 'survey'){
    // get the data from the form
    $food = filter_input(INPUT_POST, 'food');
    $born = filter_input(INPUT_POST, 'born');
    $movie = filter_input(INPUT_POST, 'movie');
    $color = filter_input(INPUT_POST, 'color');
    
    $_SESSION['$food'] = $food;
    $_SESSION['$born'] = $born;
    $_SESSION['$movie'] = $movie;
    $_SESSION['$color'] = $color;
    
 
  if ($_SESSION['$food'] === FALSE ) {
        $error_message = 'Must enter valid message.'; 
    } else if ( $_SESSION['$born'] === FALSE )  {
        $error_message = 'Must enter valid message.'; 
    } else if ( $_SESSION['$movie'] === FALSE ) {
        $error_message = 'Must enter valid message.';
    } else if ( $_SESSION['$color'] === FALSE ) {
        $error_message = 'Must enter valid message.';
    }else {
        $error_message = ''; 
    }
  
    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit();
    }   
include('/view/results.php');
 }