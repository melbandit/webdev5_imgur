<div class="photo-gallery">
    <?php foreach ( getImages() as $index => $image ){ ?>
        <?php include __DIR__ . '/photo-gallery-thumbnail.php'; ?>
    <?php } ?>
</div>