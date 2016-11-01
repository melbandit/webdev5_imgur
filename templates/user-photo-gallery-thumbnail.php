<!--<a class="photo-gallery__link" href="details.php?image=--><?php //echo $image->id; ?><!--">-->
<!--    <img class="thumbnail" src="--><?php //echo $image->url; ?><!--" alt="--><?php //echo $image->alt ?><!--"/>-->
<!---->
<!--    <div class="highlight">-->
<!--        <button class="cross">&#735; Delete</button>-->
<!--        <p class="thumbnail--title">--><?php //echo $image->title; ?><!--</p>-->
<!--        <p class="thumbnail--description">"--><?php //echo $image->description; ?><!--"</p>-->
<!--        <p class="thumbnail--date-time">--><?php //include __DIR__ . '/../includes/format-date.php'; ?><!--</p>-->
<!--        <a href="upload.php">Edit</a>-->
<!--    </div>-->
<!--</a>-->
<a class="photo-gallery__link" href="details.php?image=<?php echo $image->id; ?>">
    <img class="thumbnail" src="<?php echo $image->url; ?>" alt="<?php echo $image->alt ?>"/>
    <div class="highlight">
        <p class="thumbnail--title"><?php echo $image->title; ?></p>
        <p class="thumbnail--date-time"><?php include __DIR__ . '/../includes/format-date.php'; ?></p>
        <p class="thumbnail--description"> "<?php echo $image->description; ?>"</p>
    </div>
    <button class="cross">&#735; Delete</button>

    <p><a class="thumbnail--edit" href="upload.php">Edit</a></p>
</a>