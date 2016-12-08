 <?php $images = getImagesFromUserId(getCurrentUserId());?>
    <?php if ( empty($images)) {?>
        <h1>Looks like you don't have any images!</h1>
        <h3>Click on the upload button to add images.</h3>
        <div class="photo-gallery"></div>
    <?php } else { ?>
        <div class="photo-gallery">
            <?php foreach ( $images as $image ){ ?>
                <?php include __DIR__ . '/user-photo-gallery-thumbnail.php'; ?>
            <?php } ?>
        </div>
    <?php } ?>