<?php
require('memory/util/main.php');
require('memory/util/tags.php');
require('memory/model/database.php');
require('memory/model/photo_db.php');
require('memory/model/people_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_photo_names';
    }
}  

switch( $action ) {
    case 'list_photo_names' :
        $people_id = filter_input(INPUT_GET, 'people_id', 
            FILTER_VALIDATE_INT);
        if ($people_id == NULL || $people_id == FALSE) {
            $people_id = 1;
        }
        $people_name = get_people_name($people_id);
        $people = get_people();
        $photos = get_photos_by_people_name($people_id);
        include('memory/memory_book/photo_list.php');
        break;
    case 'view_photo' :
        $photo_id = filter_input(INPUT_GET, 'photo_id', 
            FILTER_VALIDATE_INT);   
        if ($photo_id == NULL || $photo_id == FALSE) {
            $error = 'Missing or incorrect product id.';
            include('memory/errors/error.php');
        } else {
            $people = get_people();
            $photo = get_photo($photo_id);
        }
        // Get photo data
        
        $photoName = $photo['photoName'];
        $dateTaken = $photo['dateTaken'];
        $photoCaption = $photo['photoCaption'];
        $photoStory = $photo['photoStory'];
        $code = $photo['imageCode'];
        
        // Get image URL and alternate text
        $image_filename = '../images/' . $code . '.jpg';
        $image_alt = 'Image: ' . $code . '.jpg';
        
        include('memory/memory_book/photo_view.php');
        break;
  
}

?>