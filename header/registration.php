<div class="registration btn-group <?php echo isset($_POST['registration-form']) ? ' open' : '';?>">
    <button type="button" class="btn btn--register dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Register <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        <form method="post">
            <?php if ( $registration_errors ) { ?>
                <p style="color:red;">
                    <?php foreach ( $registration_errors as $error ) {
                        echo $error . '<br />';
                    } ?>
                </p>
            <?php } ?>

            <label>
                Username <input type="text"
                                 name="username"
                                 style="<?php echo ! empty( $registration_errors['username'] ) ? 'color:red' : 'color:black' ?>"
                                 value="<?php echo filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING) ?>"><br>
            </label>

            <label>
                Email <input type="email" name="email"
                              style="<?php echo ! empty( $registration_errors['email'] ) ? 'color:red' : 'color:black' ?>"
                              value="<?php echo filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?>"><br> <!-- TODO: fix later, type="email" later -->
            </label>

            <label>
                Password <input type="password" name="pwd" maxlength="18"
                                 style="<?php echo ! empty( $registration_errors['pwd'] ) ? 'color:red' : 'color:black' ?>"
                                 value="<?php echo filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_STRING) ?>"><br>
            </label>

            <label>
                Password Verify <input type="password" name="pwd-verify" maxlength="18"
                                        style="<?php echo ! empty( $registration_errors['pwd-verify'] ) ? 'color:red' : 'color:black' ?>"
                                        value="<?php echo filter_input(INPUT_POST, 'pwd-verify', FILTER_SANITIZE_STRING) ?>"><br>
            </label>

            <input type="submit" name="registration-form" class="btn btn-default">
        </form>
    </ul>
</div>