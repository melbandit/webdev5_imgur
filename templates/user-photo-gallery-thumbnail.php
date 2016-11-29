<a class="photo-gallery__link" href="details.php?image=<?php echo $image->id; ?>">
    <img class="thumbnail" src="<?php echo $image->url; ?>" alt="<?php echo $image->alt ?>"/>
    <div class="highlight">
        <p class="thumbnail--title"><?php echo $image->title; ?></p>
        <p class="thumbnail--date-time"><?php include __DIR__ . '/../includes/format-date.php'; ?></p>
        <p class="thumbnail--description"> "<?php echo $image->description; ?>"</p>
        <form method="post">
            <input class="cross" type="submit" value="delete"<?php deleteImage($image->id); ?>>&#735; Delete</input>

<!--            <button class="cross" type="submit" value="delete">&#735; Delete</button>-->
        </form>


        <!--        echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';-->

    </div>

<!--    <p><a class="thumbnail--edit" href="upload.php">Edit</a></plete<//a>-->