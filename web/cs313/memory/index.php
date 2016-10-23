<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>Memories</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css" media="screen"/>
    
</head>

<!-- the body section -->
<body>
    <header><img src="images/Logo.jpg" alt="memoryLogo"></header>

<main>
    <h1>Menu</h1>
    <ul>
        
        <li>
            <a href="memory_manager">Click here to manage your photos</a>
        </li>
        <li>
            <a href="memory_book/index.php">Memory Book</a>
        </li>
        
    </ul>
    <br><br><br><br>
    
    
<form action="" method="post">
    
    <h3>Name Search</h3>
  <input name="search" type="search" autofocus><input type="submit" name="button">

</form>

<table>
    <tr><td><b>Name</b></td><td></td></tr>

<?php

//$con=mysql_connect('localhost', 'root', 'test');
//$db=mysql_select_db('memory');


if(isset($_POST['button'])){    //trigger button click

  $search=$_POST['search'];

  $query=mysql_query("SELECT * FROM people WHERE peopleName like '%{$search}%' ");

if (mysql_num_rows($query) > 0) {
  while ($row = mysql_fetch_array($query)) {
    echo "<tr><td>".$row['peopleName']."</td></tr><br><br>";
  }
}else{
    echo "No person Found<br><br>";
  }

//}else{                          //while not in use of search  returns all the values
//  $query=mysql_query("SELECT * FROM people");
//
//  while ($row = mysql_fetch_array($query)) {
//    echo "<tr><td>".$row['peopleName']."</td><td></td>></tr>";
//  }
}


//mysql_close();
?>
    
</main>
<?php include 'view/footer.php'; ?>