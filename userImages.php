<?php
include __DIR__ . '/templates/header.php';
?>


<div class="content">

    <h2>Your uploads</h2>
    <?php
    include __DIR__ . '/templates/user-photo-gallery.php';
    include __DIR__ . '/templates/pagination.php';
    ?>

</div><!-- end of .content -->

<?php
include __DIR__ . '/templates/footer.php';
?>