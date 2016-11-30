<div class="login_logout">
    <div class="btn-group <?php echo isset($_POST['login-form']) ? ' open' : '';?>">
        <button type="button" class="btn btn--register dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Login <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <form method="post" action="<?php echo APP_URL?>">
                <?php if ( $login_errors ) { ?>
                    <p style="color:red;">
                        <?php foreach ( $login_errors as $loginError ) {
                            echo $loginError . '<br />';
                        } ?>
                    </p>
                <?php } ?>
                Username: <input type="text" name="username"
                                 style="<?php echo ! empty( $login_errors['username'] ) ? 'color:red' : 'color:black' ?>"
                                 value="<?php echo filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING) ?>"><br>
<!--                type="email"-->
                Password: <input type="text" name="pwd"
                                 style="<?php echo ! empty( $login_errors['pwd'] ) ? 'color:red' : 'color:black' ?>"
                                 value="<?php echo filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_STRING) ?>"
                                 ><br>
                <button type="button" class="btn btn--register">
                    forgot?
                </button>
                <input type="submit" name="login-form" class="btn btn-default">
            </form>
        </ul>
    </div>
</div>