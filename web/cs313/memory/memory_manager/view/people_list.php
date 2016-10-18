<?php include 'memory/view/header.php'; ?>
<main>

    <h1>List of Names</h1>
    <table id="categoryTable">
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>        
        <!-- add category rows here -->
         <?php foreach ($peoples as $people) : ?>
        <tr>
            <td><?php echo $people['peopleName']; ?></td>
            <td><form action="index.php" method="post">
                <input type="hidden" name="people_id"
                       value= "<?php echo $people['peopleID'];?>">
                <input type='hidden' name='action' value='delete_people'>
                <input type="submit" value="Delete">
            </form></td>
        </tr>
        <?php endforeach; ?> 
    </table>
    <label>Name</label>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value='add_people'>
        <input type='text' name='name'>
        <input type="submit" value="Add" /><br>
    </form>
        <br>

    <h2>Add Person</h2>
    <!-- add code for form here -->

    <p><a href="index.php?action=list_photos">List Photos</a></p>

</main>
<?php include '../view/footer.php'; ?>

