<?php include __DIR__ . '/templates/header.php'; ?>

    <form>
        Select a file: <input type="file" name="img">
        title: <input type="text" name="title"><br>
        description: <textarea rows="4" cols="20" ></textarea>
        <input type="submit" class="btn btn-default">
    </form>
    <a class="userImages" href="userImages.php">my uploads</a>

<?php include __DIR__ . '/templates/footer.php'; ?>