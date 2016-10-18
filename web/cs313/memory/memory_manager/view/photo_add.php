<?php include 'memory/view/header.php'; ?>
<main>
    <h1>Add Memory</h1>
    <form action="index.php" method="post" id="add_photo_form">
        <input type="hidden" name="action" value="add_photo">

        <label>Names:</label>
        <select name="people_id">
        <?php foreach ( $peoples as $people ) : ?>
            <option value="<?php echo $people['peopleID']; ?>">
                <?php echo $people['peopleName']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>
        
        <label>Name of who is in the photo:</label>
        <input type="text" name="photoName"/>
        <br>
        
        <label>Date the Photo was Taken:</label>
        <input type="text" name="dateTaken"/>
        <br>
        
        <label>Photo Caption:</label>
        <textarea name="photoCaption" cols="30" rows="20"></textarea>
        <br>
        
        <label>Photo Story:</label>
        <textarea name="photoStory" cols='30' rows='20'></textarea>
        <br><br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Memory" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_photos">View Memory List</a>
    </p>
    
    <div id="formatting_directions">
        <h2>How to format the Caption and Story entry</h2>
        <ul>
            <li>Use two returns to start a new paragraph.</li>
            <li>Use an asterisk to mark items in a bulleted list.</li>
            <li>Use one return between items in a bulleted list.</li>
            <li>Use standard HMTL tags for bold and italics.</li>
        </ul>
    </div>
</main>
<?php include '../view/footer.php'; ?>

