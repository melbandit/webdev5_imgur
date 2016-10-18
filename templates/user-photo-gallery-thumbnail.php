<a class="photo-gallery__link" href='details.php'>
    <div class="highlight">
        <img class="thumbnail" src="<?php echo $image->url; ?>" alt="<?php echo $image->alt ?>"/>
        <button class="cross">&#735; Delete</button>
        <p class="thumbnail--title"><?php echo $image->title; ?></p>
        <p class="thumbnail--description"><?php echo $image->description; ?></p>
        <p class="thumbnail--date-time"><?php echo date( ('F-d-Y') . ' \a\t ' . date('h:i') . 'a', $image->timestamp); ?></p>
        <a href="upload.php">Edit</a>
    </div>
</a>