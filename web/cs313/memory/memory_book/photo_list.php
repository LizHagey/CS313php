<?php include '../view/header.php'; ?>
<main>
    <h1>Memory Book</h1>

   <aside>
<!--         display a list of categories -->
        <h2>Select a Name</h2>
        <nav>
        <ul>
        <?php foreach ($people as $people) : ?>
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