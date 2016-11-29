<div class="photo-gallery">
    <?php foreach ( getImagesFromUserId(getCurrentUserId()) as $image ){ ?>
        <?php include __DIR__ . '/user-photo-gallery-thumbnail.php'; ?>
    <?php } ?>
</div>