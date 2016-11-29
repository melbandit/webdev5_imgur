<div class="photo-gallery">
    <?php foreach ( getImages(12, getCurrentOffset()) as $image ){ ?>
        <?php include __DIR__ . '/photo-gallery-thumbnail.php'; ?>
    <?php } ?>
</div>