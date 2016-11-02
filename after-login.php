<?php include __DIR__ . '/includes/functions.php' ?>
<?php $errors = processRegistrationForm();?>

<div class="login_logout">
    <div class="btn-group">
        <ul class="dropdown-menu">
            <form method="post">
                Username: <input type="text" name="username" <?php echo $errors ? 'style="color:red"' : '' ?><br>
                <!--                type="email"-->
                Password: <input type="text" name="pwd" maxlength="10"><br>
                <button type="button" class="btn btn--register">
                    forgot?
                </button>
                <input type="submit" class="btn btn-default">
            </form>
        </ul>
    </div>
</div>