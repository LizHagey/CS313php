<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Assignments | CS313</title>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" type="text/css" rel="stylesheet" media="screen"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="Home page for CS313">
    </head>
    <body>
        <nav>
          <ul>
              <li><a href="home.php">Home</a></li>
              <li><a href="assignments.php">Assignments</a></li>
              <li><a href="aboutme.php">About Me</a></li>
          </ul>  
        </nav>
        <div id="body_background">
        <pre>
        <?php
        //printing out results for use
           
            
            //set default values
            if (isset($_POST['submit'])) {
                $name = isset($_POST['name']) ? $_POST['name'] : "";
                $email = isset($_POST['email']) ? $_POST['email'] : "";
                $major = isset($_POST['major']) ? $_POST['major'] : "";
                $visited = isset($_POST['visited']) ? $_POST['visited'] : "";
                $comment = isset($_POST['comment']) ? $_POST['comment'] : "";
            } else {
                //otherwise set to empty.
                $name = "";
                $email = "";
                $major = "";
                $visited = "";
                $comment = "";
            }
        ?>
        </pre>
        <?php
        //print out what the values are.
            echo "Hi {$name}! <br> ";
            echo "Your email address is: <a href='../'>{$email}</a> <br> "; //escape character
            echo "Your major is: {$major} <br>";
            if (!empty($visited)){
                foreach($visited as $i){
                    echo "You have visited: {$i} <br>";
                }
            }
            echo "Comments: {$comment}";
        ?>
        </div>
    </body>
</html>