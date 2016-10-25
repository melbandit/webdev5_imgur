<?php $image = getImage( $_GET['image']); ?>
<div class="post__img">
    <img src="<?php echo $image->url; ?>" alt="<?php echo $image->alt ?>"/>
</div>
<div class="post__title"><?php echo $image->title; ?></div>
<div class="post__username">by <?php echo $image->author; ?></div>
<div class="post__description"><?php echo $image->description; ?></div>
<div class="post__date-time"><?php echo date( 'F d,Y \a\t h:ia', $image->timestamp); ?></div>