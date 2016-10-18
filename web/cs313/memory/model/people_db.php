<?php
function get_people() {
    global $db;
    $query = 'SELECT * FROM people
              ORDER BY peopleID';
    try {
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}

function get_people_name($people_id) {
    global $db;
    $query = 'SELECT * FROM people
              WHERE peopleID = :people_id'; 
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(':people_id', $people_id);
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();    
    $people_name = $category['peopleName'];
    return $people_name;
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}

function add_people($name) {
     global $db;
     $query = 'INSERT INTO people(peopleName)'
             . 'VALUES (:name)';
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();    
    $statement->closeCursor(); 
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}

function delete_people($people_id) {
     global $db;
      $query = 'DELETE FROM people '
              . 'WHERE peopleID = :id';
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $people_id);
    $statement->execute();    
    $statement->closeCursor(); 
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}
?>

