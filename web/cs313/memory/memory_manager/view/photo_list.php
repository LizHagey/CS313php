<?php include '../view/header.php'; ?>
<main>
    <h1>Memories</h1>

    <aside>
        <!-- display a list of categories -->
        <h2>Memories</h2>
        <nav>
        <ul>
        <?php foreach ($peoples as $people) : ?>
            <li>
            <a href="?people_id=<?php echo $people['peopleID']; ?>">
                <?php echo $people['peopleName']; ?>
            </a>
            </li>
        <?php endforeach; ?>
        </ul>
        </nav>
    </aside>

    <section>
        <!-- display a table of recipes -->
        <h2><?php echo $people_name; ?></h2>
        <?php foreach ($photos as $photo) : ?>
            
            <p><strong>Name: </strong><?php echo $photo['photoName']; ?> </p>
            <p><strong>Date Taken: </strong><?php echo $photo['dateTaken']; ?> </p>
            <p><strong>Caption: </strong><?php echo $photo['photoCaption']; ?> </p>
            <p><strong>Story: </strong><?php echo $photo['photoStory']; ?> </p>
             
            <table>
                <tr>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_photo">
                    <input type="hidden" name="photo_id"
                           value="<?php echo $photo['photoID']; ?>">
                    <input type="hidden" name="people_id"
                           value="<?php echo $photo['peopleID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
                <td><form action="index.php" method="post" id="edit_photo">
                    <input type="hidden" name="action"
                           value="show_edit_form">
                    <input type="hidden" name="photo_id"
                           value="<?php echo $photo['photoID']; ?>">
                    
                    
                    <input type="submit" value="Edit">
                </form></td>
            </tr>
           
        </table>
             <?php endforeach; ?>
        <p><a href="?action=show_add_form">Add Memory</a></p>
        <p class="last_paragraph"><a href="?action=list_people">List Memories</a></p>        
    </section>
</main>
<?php include '../view/footer.php'; ?>
