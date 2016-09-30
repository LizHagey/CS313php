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
        <form action="results.php" method="POST">
            <h2>Basic Form Example</h2> 
            Name: <input type="text" name="name">
            <br><br>
            Email: <input type="text" name="email">
            <br><br>
            Major:
            <br>
            <input type="radio" name="major" value="Web Dev and Design">Web Dev and Design
            <br>
            <input type="radio" name="major" value="Computer Science">Computer Science
            <br>
            <input type="radio" name="major" value="CIT">CIT
            <br>
            <input type="radio" name="major" value="Computer Engineering">Computer Engineering
            <br><br>
            Places you have visited:
            <br>
            <input type="checkbox" name="visited[]" value="North America">North America
            <br>
            <input type="checkbox" name="visited[]" value="South America">South America
            <br>
            <input type="checkbox" name="visited[]" value="Europe">Europe
            <br>
            <input type="checkbox" name="visited[]" value="Asia">Asia
            <br>
            <input type="checkbox" name="visited[]" value="Australia">Australia
            <br>
            <input type="checkbox" name="visited[]" value="Africa">Africa
            <br>
            <input type="checkbox" name="visited[]" value="Antarctica">Antarctica
            <br><br>
            Comments:
            <br>
            <textarea name="comment" rows="5" cols="40" value=""></textarea>
            <br><br>
            <input type="submit" name="submit" value="Submit">  
        </form>
    </body>
</html>