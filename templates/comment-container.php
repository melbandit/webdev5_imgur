<div class="comment-container">
    <?php foreach ( getComments($_GET['image']) as $comment ){ ?>
        <?php include __DIR__ . '/comment.php'; ?>
    <?php } ?>
</div>