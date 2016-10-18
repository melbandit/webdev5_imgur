<div class="comment-container">
    <?php foreach ( getComments() as $comment ){ ?>
        <?php include __DIR__ . '/comment.php'; ?>
    <?php } ?>
</div>