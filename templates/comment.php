<div class="date-time"><?php echo date( ('F d, Y') . ' \a\t ' . date('h:i') . 'a', $comment->timestamp); ?></div>

<div class="comment">
    <div class="username"><?php echo $comment->author; ?> <span>says:</span></div>
    <div class="user-comment">"<?php echo $comment->comment; ?>"</div>
</div>