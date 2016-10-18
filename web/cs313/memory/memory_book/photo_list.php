<?php include 'memory/view/header.php'; ?>
<main>
    <h1>Memory Book</h1>

<!--    <aside>
         display a list of categories 
        <h2>People Names</h2>
        <nav>
        <ul>
        <?php //foreach ($people as $people) : ?>
            <li>
            <a href="?people_id=<?php //echo $people['peopleID']; ?>">
                <?php //echo $people['peopleName']; ?>
            </a>
            </li>
        <?php //endforeach; ?>
        </ul>
        </nav>
    </aside>-->

<aside>
    <form action="" method="post">
    
    <h3>Name Search</h3>
  <input name="search" type="search" autofocus><input type="submit" name="button">

</form>


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
</aside>

    <section>
        <!-- display a list of names -->
        <h2><?php echo $people_name; ?></h2>
        <ul class="nav">
            <!-- display photos for person -->
            <?php foreach ($photos as $photo) : ?>
            <li>
                <a href="?action=view_photo&amp;photo_id=<?php 
                          echo $photo['photoID']; ?>">
                    <?php echo $photo['photoName']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        
        
    </section>
</main>
<?php include '../view/footer.php'; ?>
