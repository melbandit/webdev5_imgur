<?php
$filter = filter_input( INPUT_POST, 'img', FILTER_SANITIZE_STRING );
?>

<form method="post">
    Select a file: <input type="file" name="img" value="<?php echo $filter?>">
    title: <input type="text" name="title"><br>
    description: <textarea rows="4" cols="20" ></textarea>
    <input type="submit" class="btn btn-default">
</form>
<a class="userImages" href="userImages.php">my uploads</a>