<?php
$filter = filter_input( INPUT_POST, 'img', FILTER_SANITIZE_STRING );
?><form enctype="multipart/form-data" method="post">

    Select a file: <input type="file" name="image" value="<?php echo $filter?>">

    title: <input type="text" name="title" value="<?php echo filter_input( INPUT_POST, 'title', FILTER_SANITIZE_STRING);?>"><br>

    description: <textarea rows="4" cols="20" name="description"<?php echo filter_input( INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);?></textarea>

    <input type="submit" class="btn btn-default">
</form>

<a class="userImages" href="userImages.php">my uploads</a>