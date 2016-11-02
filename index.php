<?php include __DIR__ . '/includes/functions.php' ?>
<?php $errors = processRegistrationForm();?>
<?php include __DIR__ . '/header/header.php'; ?>

<div class="content">
    <?php
    include __DIR__ . '/templates/photo-gallery.php';
    include __DIR__ . '/templates/pagination.php';
    ?>

</div><!-- end of .content -->


<?php include __DIR__ . '/templates/footer.php'; ?>