<a class="photo-gallery__link" href='details.php'>
    <img class="thumbnail" src="<?php echo $image->url; ?>" alt="<?php echo $image->alt ?>"/>
    <div class="highlight">
        <p class="thumbnail--title"><?php echo $image->title; ?></p>
        <p class="thumbnail--username">by <?php echo $image->author; ?></p>
        <p class="thumbnail--date-time"><?php echo date( ('F d, Y') . ' \a\t ' . date('h:i') . 'a', $image->timestamp); ?></p>
        <p class="thumbnail--description"> "<?php echo $image->description; ?>"</p>
    </div>
</a>