<div class="date-time"><?php include __DIR__ . '/../includes/format-date.php'; ?></div>

<div class="comment">
    <div class="username"><?php echo getUser($image->author)->user_login; ?> <span>says:</span></div>
    <div class="user-comment">"<?php echo $comment->text; ?>"</div>
</div>