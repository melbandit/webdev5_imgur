<a class="photo-gallery__link" href="details.php?image=<?php echo $image->id; ?>">
    <div class="thumbnail" style="background-image: url('<?php echo $image->url ?>')"></div>
    <div class="highlight">
        <p class="thumbnail--title"><?php echo $image->title; ?></p>
        <p class="thumbnail--username">by <?php echo getUser($image->author)->user_login; ?></p>
        <p class="thumbnail--date-time"><?php include __DIR__ . '/../includes/format-date.php'; ?></p>
        <p class="thumbnail--description"> "<?php echo $image->description; ?>"</p>
    </div>
</a>


