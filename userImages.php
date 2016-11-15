<?php
include __DIR__ . '/header/header.php';
?>

<div class="content">

    <h2><?php echo getUser(getCurrentUserId())->user_login ?> 's uploads</h2><!--getUser($_GET[\'id\']->author)?>-->
    <?php
    include __DIR__ . '/templates/user-photo-gallery.php';
    include __DIR__ . '/templates/pagination.php';
    ?>

</div><!-- end of .content -->

<?php
include __DIR__ . '/templates/footer.php';
?>