<?php
ini_set('display_errors', 1);
//$lifetime = 60 * 60 * 24 * 2;    // 2 days in seconds
//session_set_cookie_params($lifetime, '/');
//session_start();
require('memory/util/main.php');
require('memory/util/tags.php');
require('memory/model/database.php');
require('memory/model/photo_db.php');
require('memory/model/people_db.php');

$action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_photos';
    }
}

switch( $action ) {
    case 'list_photos' :
        $people_id = filter_input(INPUT_GET, 'people_id', 
            FILTER_VALIDATE_INT);
        if ($people_id == NULL || $people_id == FALSE) {
            $people_id = 1;
        }
        $people_name = get_people_name($people_id);
        $peoples = get_people();
        $photos = get_photos_by_people_name($people_id);
        include('memory/memory_manager/view/photo_list.php');
        break;

    case 'delete_photo' :
       $photo_id = filter_input(INPUT_POST, 'photo_id', 
            FILTER_VALIDATE_INT);
        $people_id = filter_input(INPUT_POST, 'people_id', 
                FILTER_VALIDATE_INT);
        if ($people_id == NULL || $people_id == FALSE ||
                $photo_id == NULL || $photo_id == FALSE) {
            $error = "Missing or incorrect recipe id or category id.";
            include('memory/errors/error.php');
        } else { 
            delete_photo($photo_id);
            header("Location: .?people_id=$people_id");
        } 
        break;
        
    case 'show_add_form' :
        $peoples = get_people();
        include('memory/memory_manager/view/photo_add.php'); 
        break;
    
    case 'list_people' :
        $peoples = get_people();
        include('memory/memory_manager/view/people_list.php');
        break;
    
    case 'add_people' :
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        if ( $name == NULL || $name == FALSE) {
          $error = "Please provide name";
          include('memory/errors/error.php');
        }else {
            add_people($name);
            header('Location: .?action=list_people');
        }
        break;
        
    case 'delete_people' :
        $people_id = filter_input(INPUT_POST, 'people_id', 
            FILTER_VALIDATE_INT);
        if ($people_id == NULL || $people_id == FALSE) {
            $error = "Missing category ID";
            include('memory/errors/error.php');
        }else {
            delete_people($people_id);
            header('Location: .?action=list_people');
        }
        break;
        
    case 'add_photo' :
        $people_id = filter_input(INPUT_POST, 'people_id', 
            FILTER_VALIDATE_INT);
        $photoName = filter_input(INPUT_POST, 'photoName');
        $dateTaken = filter_input(INPUT_POST, 'dateTaken');
        $photoCaption = filter_input(INPUT_POST, 'photoCaption');
        $photoStory = filter_input(INPUT_POST, 'photoStory');
        if ($people_id == NULL || $people_id == FALSE || $photoName == NULL || 
                $dateTaken == NULL) {
            $error = "Invalid data. Check all fields and try again.";
            include('memory/errors/error.php');
        } else { 
            add_photo($people_id, $photoName, $dateTaken, $photoCaption, $photoStory);
          header("Location: .?people_id=$people_id");
        }
        break;
        
    case 'show_edit_form' :
        $photo_id = filter_input(INPUT_POST, 'photo_id', 
                FILTER_VALIDATE_INT);
        $peoples = get_people();
        $photo = get_photo($photo_id);
        include('memory/memory_manager/view/photo_edit.php'); 
        break;
    
    case 'edit_photo' :
        $people_id = filter_input(INPUT_POST, 'people_id', 
            FILTER_VALIDATE_INT);
        $photoName = filter_input(INPUT_POST, 'photoName');
        $dateTaken = filter_input(INPUT_POST, 'dateTaken');
        $photoCaption = filter_input(INPUT_POST, 'photoCaption');
        $photoStory = filter_input(INPUT_POST, 'photoStory');
        $photo = filter_input(INPUT_POST, 'photoID');
        if ($people_id == NULL || $people_id == FALSE) {
            $error = "Choose a persons name.";
            include('memory/errors/error.php');
        }else { 
            edit_photo($photo, $people_id, $photoName, $dateTaken, $photoCaption, $photoStory);
            header("Location: .?people_id=$people_id");
        } 
        break;
    
}



