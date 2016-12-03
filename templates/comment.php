<div class="date-time"><?php

    $uploaded_date = $comment->timestamp;
    $date = DateTime::createFromFormat('Y-m-d H:i:s', $uploaded_date);
    $formatted_date = $date->format('F j, Y h:i:sa');
    echo $formatted_date;

    ?></div>

<div class="comment">
    <div class="username"><?php echo getUser($comment->author)->user_login; ?> <span>says:</span></div>
    <div class="user-comment">"<?php echo $comment->text; ?>"</div>
</div>