<?php include 'view/header.php'; ?>
<main>
    <aside>
        <h3>People</h3>
        <?php include('view/people_nav.php'); ?>
    </aside>
    <section>
        <h1 id="photoViewHeading"><?php echo $photoName; ?></h1>
        <div id="left_column">
            <p>
                <img id="mainImg" src="<?php echo $image_filename; ?>"
                    alt="<?php echo $image_alt; ?>" />
            </p>
        </div>
       
        <?php $name_tags = add_tags($photoName); ?>
        <?php $date_tags = add_tags($dateTaken); ?>
        <?php $caption_tags = add_tags($photoCaption); ?>
        <?php $story_tags = add_tags($photoStory); ?>

        <div id="right_column">
            <p><b>Caption:</b> <?php echo $caption_tags; ?></p>
            <p><b>Date Photo Was Taken:</b> <?php echo $date_tags; ?></p>
            <p><b>Story:</b> <?php echo $story_tags; ?></p>
            
        </div>
    </section>
</main>
<?php include 'view/footer.php'; ?>

