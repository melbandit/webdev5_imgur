<?php $image = getImage( $_GET['image']); ?>

<div class="post__img">
    <img class="image-view" src="<?php echo $image->url; ?>" alt="<?php echo $image->alt ?>"/>
</div>
<div class="post__title"><?php echo $image->title; ?></div>
<div class="post__username">by <?php echo getUser($image->author)->user_login; ?></div>
<div class="post__description">"<?php echo $image->description; ?>"</div>
<div class="post__date-time"><?php include __DIR__ . '/../includes/format-date.php'; ?></div>