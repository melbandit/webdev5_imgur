<?php

// ================= IMAGES =================
/**
 * This function will fetch an image object from the db by id.
 *
 * @param integer $id This is the ID of the image in the db.
 *
 * @return object|false Will return an image object from the database or false if an invalid id is provided.
 *
 */
function getImage( $id ){
    global $db;
    $query = $db->prepare( 'SELECT * FROM images WHERE id = :id' );
    $query->bindValue( ':id', $id, PDO::PARAM_INT );
    $query->execute();
    return $query->fetchObject();
}

/**
 * This function will fetch all images object from the db.
 *
 * @param int $count This is the number of the images taken from the db to be displayed at a time.
 * @param int $offset This is the offset where the images will start being selected in db.
 *
 * @return array Will return an array of images from the database.
 */
function getImages($count=12, $offset=0){
    global $db;
    $query = $db->prepare( 'SELECT * FROM images LIMIT :offset, :count' );
    $query->bindValue( ':count', $count, PDO::PARAM_INT );
    $query->bindValue( ':offset', $offset, PDO::PARAM_INT );
    $query->execute();
    $query->setFetchMode( PDO::FETCH_OBJ );
    return $query->fetchAll();
}

/**
 * This is a function for creating a new image in the db.
 *
 * @param $image This is the image object that is entered in the db.
 */
function insertImage($image){
    global $db;
    $query = $db->prepare( 'INSERT INTO images (author, url, title, description) VALUE (:id, :url, :title, :description)' );
    $query->bindValue( ':id', $image->author, PDO::PARAM_INT ); // how do we get the user id?
    $query->bindValue( ':url', $image->url, PDO::PARAM_STR );
    $query->bindValue( ':title', $image->title, PDO::PARAM_STR );
    $query->bindValue( ':description', $image->description, PDO::PARAM_STR );
    $query->execute();
}
/**
 * This is a function for updating an existing image object within the db.
 *
 * @param integer $id This is the ID of the image in the db.
 *
 * @param $image This is the changes to the image that will be applied in the db.
 */
function updateImage($id, $image){
    global $db;
    $query = $db->prepare( 'UPDATE images SET url = :url, title = :title, description = :description  WHERE id = :id' );
    $query->bindValue( ':id', $id, PDO::PARAM_INT );
    $query->bindValue( ':url', $image->url, PDO::PARAM_STR );
    $query->bindValue( ':title', $image->title, PDO::PARAM_STR );
    $query->bindValue( ':description', $image->description, PDO::PARAM_STR );
    $query->execute();
}
/**
 * This is a function for fetching and deleting an image within the db by id.
 *
 * @param integer $id This is the ID of the image in the db.
 */
function deleteImage($id){
    global $db;
    $query = $db->prepare( 'DELETE FROM images WHERE id = :id' );
    $query->bindValue( ':id', $id, PDO::PARAM_INT );
    $query->execute();
}
// ================= END of IMAGES =================


//  ============ COMMENTS =================
/**
 * This function will fetch a comment object from the db by id.
 *
 * @param integer $id This is the ID of the comment in the db.
 *
 * @return object|false Will return a comment object from the database or false if an invalid id is provided
 */
function getComment( $id ){
    global $db;
    $query = $db->prepare( 'SELECT * FROM comments WHERE id = :id' );
    $query->bindValue( ':id', $id, PDO::PARAM_INT );
    $query->execute();
    return $query->fetchObject();
}
/**
 * This a function for fetching a collection of comments in the db for an image id.
 *
 * @param integer $image_id This is the ID of the image to get its comments in the db.
 *
 * @return array Will return an array of comments from the database.
 */
function getComments($image_id){
    global $db;
    $query = $db->prepare( 'SELECT * FROM comments WHERE id = :id' );
    $query->bindValue( ':id', $image_id, PDO::PARAM_INT );
    $query->execute();
    $query->setFetchMode( PDO::FETCH_OBJ );
    return $query->fetchAll();
}
/**
 * This is a function for creating a new comment in the db.
 *
 * @param $comment This is the comment object that is entered in the db.
 */
function insertComment($comment){
    global $db;
    $query = $db->prepare( 'INSERT INTO comments (author, text, image_id) VALUE (:author, :text, :image_id)' );
    $query->bindValue( ':author', $comment->author, PDO::PARAM_INT );
    $query->bindValue( ':text', $comment->text, PDO::PARAM_STR );
    $query->bindValue( ':image_id', $comment->image_id, PDO::PARAM_INT );
    $query->execute();
}
/**
 * This is a function for updating an existing comment in the db.
 *
 * @param integer $id This is the ID of the comment in the db.
 *
 * @param $comment This is the changes to the comment that will be applied in the db.
 */
function updateComment($id, $comment){
    global $db;
    $query = $db->prepare( 'UPDATE comments SET author = :author, text = :text WHERE id = :id' );
    $query->bindValue( ':id', $id, PDO::PARAM_INT );
    $query->bindValue( ':author', $comment->author, PDO::PARAM_INT );
    $query->bindValue( ':text', $comment->text, PDO::PARAM_STR );
    $query->execute();
}
/**
 * This is a function for deleting a comment in the db by id.
 *
 * @param $id This the ID of the comment in the db.
 */
function deleteComment($id){
    //DELETE
    global $db;
    $query = $db->prepare( 'DELETE FROM comments WHERE id = :id' );
    $query->bindValue( ':id', $id, PDO::PARAM_INT );
    $query->execute();
}
// ================= END of COMMENTS =================

// ================= USERS =================
/**
 * This function is for fetching a collection of users from the db.
 *
 * @return array Will return an array of users from the database.
 */
function getUsers(){
    global $db;
    $query = $db->prepare( 'SELECT * FROM users' ); //LIMIT 0, 3
    $query->execute();
    $query->setFetchMode( PDO::FETCH_OBJ );
    return $query->fetchAll();
}
/**
 * This function will fetch a user object from the db by id.
 *
 * @param integer $id This is the ID of the user in the db.
 *
 * @return object|false Will return a user object from the database or false if an invalid id is provided.
 */
function getUser($id){
//getUser($image->user_id)->author;
    global $db;
    $query = $db->prepare( 'SELECT * FROM users WHERE id = :id' );
    $query->bindValue( ':id', $id, PDO::PARAM_INT );
    $query->execute();
    return $query->fetchObject();
}
function getUserByUserLogin($user_login){
//getUser($image->user_id)->author;
    global $db;
    $query = $db->prepare( 'SELECT * FROM users WHERE user_login = :user_login' );
    $query->bindValue( ':user_login', $user_login, PDO::PARAM_STR );
    $query->execute();
    return $query->fetchObject();
}

/**
 * This function is for creating a new user into the db.
 *
 * @param object $user This is the user object added to the db.
 */
function insertUser($user){
    global $db;
    $query = $db->prepare( 'INSERT INTO users (user_login, user_password, user_email) VALUE (:user_login, :user_password, :user_email)' );
    $query->bindValue( ':user_login', $user->user_login, PDO::PARAM_STR );
    $query->bindValue( ':user_password', $user->user_password, PDO::PARAM_STR );
    $query->bindValue( ':user_email', $user->user_email, PDO::PARAM_STR );
    $query->execute();
}

/**
 * This is a function for updating an exiting user in the db by id.
 *
 * @param integer $id This is the ID of the user in the db.
 *
 * @param $user This is the user object updated in the db.
 */
function updateUser($id, $user){
    global $db;
    $query = $db->prepare( 'UPDATE users SET user_login = :user_login, user_password = :user_password, user_email = :user_email  WHERE id = :id' );
    $query->bindValue( ':id', $id, PDO::PARAM_INT );
    $query->bindValue( ':user_login', $user->user_login, PDO::PARAM_STR );
    $query->bindValue( ':user_password', $user->user_password, PDO::PARAM_STR );
    $query->bindValue( ':user_email', $user->user_email, PDO::PARAM_STR );
    $query->execute();
}

/**
 * This is a function that deletes a user in the db by id.
 *
 * @param integer $id This is the ID of the user in the db.
 */
function deleteUser($id){
    global $db;
    $query = $db->prepare( 'DELETE FROM users WHERE id = :id' );
    $query->bindValue( ':id', $id, PDO::PARAM_INT );
    $query->execute();
}

/**
 * @param $username
 *
 * @return bool
 */

function userExists( $username ){
    global $db;
    $query = $db->prepare( 'SELECT user_login FROM users WHERE user_login = :user_login' );
    $query->bindValue( ':user_login', $username, PDO::PARAM_INT );
    $query->execute();

    $user = $query->fetchObject();
    return (bool) $user;
}

function pwdExists( $password ){
    global $db;
    $query = $db->prepare( 'SELECT user_password FROM users WHERE user_password = :user_password' );
    $query->bindValue( ':user_password', $password, PDO::PARAM_INT );
    $query->execute();

    $pwd = $query->fetchObject();
    return (bool) $pwd;
}


// ================= END of USERS =================

/**
 * @param $email
 *
 * @return bool
 */
function emailExists( $email ){
    global $db;
    $query = $db->prepare( 'SELECT user_email FROM users WHERE user_email = :user_email' );
    $query->bindValue( ':user_email', $email, PDO::PARAM_INT );
    $query->execute();

    $email = $query->fetchObject();
    return (bool) $email;
}

function displayDate( $timestamp ){
    $imageDate = new DateTime();
    $imageDate->setTimestamp($timestamp);
    echo $imageDate->format('F d,Y \a\t h:ia');
}

function processRegistrationForm(){

    $errors = array();
//
//    if( empty($_POST) ){
//        return $errors;
//    }
    // If the registration form wasn't submitted, cut out early
    if ( ! isset( $_POST['registration-form'] ) ) {
        return $errors;
    }

    //check if username already exists
    $username = filter_input(INPUT_POST, 'username');
    if(empty($username)){
        $errors['username'] = "no username!!";
    }
    if(strlen($username) < 5){
        $errors['username'] = "username too short/weak";
    }
    if(userExists($username)){
        $errors['username'] = "username exists!";
    }

    // invalid email
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if( empty($email) ){
        $errors['email'] = "invalid email";
    }
    //email already exists
    if( emailExists($email) ){
        $errors['email'] = "email exists!";
    }

    $password = filter_input(INPUT_POST, 'pwd');
    $passwordVerify = filter_input(INPUT_POST, 'pwd-verify');
    //password don't match
    if($password !== $passwordVerify){
        $errors['pwd'] = "your passwords don't match";
    }
    //password too weak
    if(strlen($password) < 8){
        $errors['pwd'] = "pwd too short/weak";
    }
    //create user
    if(empty($errors)){
        $user = (object)[ //or array(insert info here)
            'user_login' => $username,
            'user_password' => $password,
            'user_email' => $email
        ];


        insertUser( $user );

    //redirect user to login
        header( 'Location: ' . APP_URL . '/after-login.php');
        //'Location: http://localhost:3002/webdev5_imgur/index.php'
    }
    //var_dump($username, $email, $password, $passwordVerify);

    return $errors;

}

//=========== Log In/Out ===========

function logIn($id){
    $_SESSION['id'] = $id;
}

function logOut(){
    session_unset();
    session_destroy();
}


function getCurrentUserId(){
    $user_id = 0;

    //fetch the logged in user's ID

    if(isset($_SESSION, $_SESSION['id'])){
        $user_id = $_SESSION['id'];
    }

    //return user's ID

    return $user_id;
}

function processLoginForm(){

    $loginErrors = array();

    if ( ! isset( $_POST['login-form'] ) ) {
        return $loginErrors;
    }
    //username field empty & //username doesn't exist
    $username = filter_input(INPUT_POST, 'username');
    if(empty($username)){
        $loginErrors['username'] = "no username!!";
    } else if( userExists($username) == false ){
        $loginErrors['username'] = "username doesn't exist!";
    }

    //password field-empty
    $password = filter_input(INPUT_POST, 'pwd');
   // $password = isset($_POST['pwd']) ? $_POST['pwd'] : false;

    $user = getUserByUserLogin($username);
    if(empty($password)) {
        $loginErrors['pwd'] = "Fill out your password!";
    } else if(empty($user) || $user->user_password !== $password){
        $loginErrors['pwd'] = "Incorrect password!";
    }
    //password incorrect
    if(empty($loginErrors)){

        logIn( $user->id );
        header( 'Location: ' . APP_URL . '/userImages.php');
    }

    return $loginErrors;
}


function processUploadForm(){
$stop = true;
}
processUploadForm();