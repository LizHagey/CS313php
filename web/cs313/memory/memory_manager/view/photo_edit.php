<?php include '../view/header.php'; ?>
<main>
    <h1>Edit Memory</h1>
    <form action="index.php" method="post" id="edit_photo">
        <input type="hidden" name="action" value="edit_photo">

        <label>Category:</label>
        <select name="people_id">
        <?php foreach ( $peoples as $people ) : ?>
            <option value="<?php echo $people['peopleID']; ?>">
                <?php echo $people['peopleName']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>

        <label>Name:</label>
        <input type="text" name="photoName" value='<?php echo htmlspecialchars($photo['photoName'])?>'/>
        <br>
        
        <label>Date Taken:</label>
        <input type="text" name="dateTaken" value='<?php echo htmlspecialchars($photo['dateTaken'])?>'/>
        <br>
      
        <label>Photo Caption:</label>
        <textarea name="photoCaption" cols="30" rows="20" ><?php echo $photo['photoCaption'] ?></textarea>
        <br>
        
        <label>Photo Story: </label>
        <textarea name="photoStory" cols="30" rows="20"><?php echo $photo['photoStory']?></textarea>
        <br>
        
        <label>Name of jpg:</label>
        <input type="text" name="imageCode" value='<?php echo htmlspecialchars($photo['imageCode'])?>'/>
        <br><br><br>

        <input type="hidden" name="photoID" value='<?php echo $photo['photoID']?>'/>
        <br>
        
        <label>&nbsp;</label>
        <input type="submit" value="Edit Memory" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_photos">View Memories</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>

