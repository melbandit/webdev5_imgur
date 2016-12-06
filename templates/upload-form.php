<?php if ( $upload_errors ) { ?>
    <p style="color:red;">
        <?php foreach ( $upload_errors as $uploadError ) {
            echo $uploadError . '<br />';
        } ?>
    </p>
<?php } ?>
<div class="upload-form">
    <form enctype="multipart/form-data" method="post">

        select a file <input type="file" name="image">

        title <input type="text" name="title" value="<?php echo filter_input( INPUT_POST, 'title', FILTER_SANITIZE_STRING);?>"><br>

        description <textarea rows="4" cols="20" name="description"><?php echo filter_input( INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);?></textarea>

        <button type="submit" class="btn btn-default">upload</button>
    </form>
    <a class="userImages" href="userImages.php">my uploads</a>
</div>