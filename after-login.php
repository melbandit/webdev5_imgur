<?php include __DIR__ . '/header/header.php' ?>

<style>
    header .login_logout{
        display: none;
    }
    header .registration{
        display: none;
    }
</style>

<div class="login_logout">
    <div class="btn-group">
        <?php if ( $login_errors ) { ?>
            <p style="color:red;">
                <?php foreach ( $login_errors as $loginError ) {
                    echo $loginError . '<br />';
                } ?>
            </p>
        <?php } ?>
        <ul class="">
            <form method="post">
                Username: <input type="text" name="username"
                                 style="<?php echo ! empty( $login_errors['username'] ) ? 'color:red' : 'color:black' ?>"
                                 value="<?php echo filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING) ?>"><br>
                <!--                type="email"-->
                Password: <input type="text" name="pwd"
                                 style="<?php echo ! empty( $login_errors['password'] ) ? 'color:red' : 'color:black' ?>"
                                 value="<?php echo filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING) ?>"
                                 ><br>
                <button type="button" class="btn btn--register">
                    forgot?
                </button>
                <input type="submit" name="login-form" class="btn btn-default">
            </form>
        </ul>
    </div>
</div>

