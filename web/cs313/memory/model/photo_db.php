<?php
function get_photos_by_people_name($people_id) {
    global $db;
    $query = 'SELECT * FROM photos
              WHERE photos.peopleID = :people_id
              ORDER BY photoID';
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(":people_id", $people_id);
    $statement->execute();
    $photo = $statement->fetchAll();
    $statement->closeCursor();
    return $photo;
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}

function get_photo($photo_id) {
    global $db;
    $query = 'SELECT * FROM photos
              WHERE photoID = :photo_id';
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(":photo_id", $photo_id);
    $statement->execute();
    $photo = $statement->fetch();
    $statement->closeCursor();
    return $photo;
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}

function delete_photo($photo_id) {
    global $db;
    $query = 'DELETE FROM photos
              WHERE photoID = :photo_id';
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(':photo_id', $photo_id);
    $statement->execute();
    $statement->closeCursor();
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}

function add_photo($people_id, $photoName, $dateTaken, $photoCaption, $photoStory, $imageCode) {
    global $db;
    $query = 'INSERT INTO photos
                 (peopleID, photoName, dateTaken, photoCaption, photoStory, imageCode)
              VALUES
                 (:people_id, :photoName, :dateTaken, :photoCaption, :photoStory, :imageCode)';
    

    try {
    $statement = $db->prepare($query);
    $statement->bindValue(':people_id', $people_id);
    $statement->bindValue(':photoName', $photoName);
    $statement->bindValue(':dateTaken', $dateTaken);
    $statement->bindValue(':photoCaption', $photoCaption);
    $statement->bindValue(':photoStory', $photoStory);
    $statement->bindValue(':imageCode', $imageCode);
    $statement->execute();
    $statement->closeCursor();
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}

function edit_photo($photo, $people_id, $photoName, $dateTaken, $photoCaption, $photoStory, $imageCode) {
    global $db;
    
     $query = 'UPDATE photos
        SET 
        peopleID = :people_id, 
        photoName = :photoName,
        dateTaken = :dateTaken,
        photoCaption = :photoCaption,
        photoStory = :photoStory,
        imageCode = :imageCode
        WHERE photoID = :photo';
  
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(':people_id', $people_id);
    $statement->bindValue(':photoName', $photoName);
    $statement->bindValue(':dateTaken', $dateTaken);
    $statement->bindValue(':photoCaption', $photoCaption);
    $statement->bindValue(':photoStory', $photoStory);
    $statement->bindValue(':imageCode', $imageCode);
    $statement->bindValue(':photo', $photo);
    $statement->execute();
    $statement->closeCursor();
    echo "Successfully updated the Memory";
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}
?>

