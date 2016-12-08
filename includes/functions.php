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
 * This image takes in an int to set how many images will be shown per page for pagination.
 *
 * @param int $per_page The int amount to be set for how many images you want per page
 *
 * @return int Will return the amount of images used per page
 */
function getTotalPageCount($per_page = 12){
//    $total = getTotalImageCount();
//    return round($total / $per_page);
    return (integer) ceil (getTotalImageCount() / $per_page);
}

/**
 * This function will find out the amount of images there are in the database.
 *
 * @return int Will return an int amount equal to the image count from the database.
 */
function getTotalImageCount(){
    global $db;
    $query = $db->prepare( 'SELECT COUNT(*) FROM images');
    $query->execute();
    return (integer) $query->fetch()[0];
}

/**
 * This function gets the current image offset based on the amount of pages.
 *
 * @return int $page_number Will return which images to start showing for each page
 */
function getCurrentOffset(){
    $page_number = max( (integer) filter_input(INPUT_GET, 'page'), 1);
    return ($page_number -1) * 12;
}

/**
 * This function takes in a user id and goes to the db to fetch the author's images.
 *
 * @param $id The id to be passed so the database can find the author and then return the authors images
 *
 * @return array Will return the images of the user using and param id
 */
function getImagesFromUserId($id){
    global $db;
    $query = $db->prepare( 'SELECT * FROM images WHERE author = :author' );
    $query->bindValue( ':author', $id, PDO::PARAM_INT );
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
    $query = $db->prepare( 'INSERT INTO images (author, url, title, description, alt) VALUE (:id, :url, :title, :description, :alt)' );
    $query->bindValue( ':id', $image->author, PDO::PARAM_INT ); // how do we get the user id?
    $query->bindValue( ':url', $image->url, PDO::PARAM_STR );
    $query->bindValue( ':title', filter_var($image->title, FILTER_SANITIZE_SPECIAL_CHARS), PDO::PARAM_STR );
    $query->bindValue( ':description', filter_var($image->description, FILTER_SANITIZE_SPECIAL_CHARS), PDO::PARAM_STR );
    $query->bindValue( ':alt', $image->title, PDO::PARAM_STR );
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


function getFirstImageId(){
    global $db;
    $query = $db->prepare('SELECT id FROM images LIMIT 1');
    $query->execute();
    return $query->fetchColumn();
}

function getLastImageId(){
    global $db;
    $query = $db->prepare('SELECT id FROM images ORDER BY id DESC LIMIT 1');
    $query->execute();
    return $query->fetchColumn();
}

function getNextImage($id){
    $next_id = $id;
    $last_id = getLastImageId();
    $image = false;

    if($id == $last_id){
        return getFirstImageId();
    }
    while($image === false  && $next_id < $last_id){
        $next_id ++;
        $image  = getImage($next_id);
    }

    return $next_id;
}


function getPrevImage($id){
    $prev_id = $id;
    $first_id = getFirstImageId();
    $image = false;

    if($id == $first_id){
        return getLastImageId();
    }

    while($image === false  && $prev_id > $first_id){

        $prev_id --;
        $image  = getImage($prev_id);
    }

    return $prev_id;
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
    $query = $db->prepare( 'SELECT * FROM comments WHERE image_id = :image_id' );
    $query->bindValue( ':image_id', $image_id, PDO::PARAM_INT );
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
    $query->bindValue( ':text', filter_var($comment->text, FILTER_SANITIZE_SPECIAL_CHARS), PDO::PARAM_STR );
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
    global $db;
    $query = $db->prepare( 'SELECT * FROM users WHERE id = :id' );
    $query->bindValue( ':id', $id, PDO::PARAM_INT );
    $query->execute();
    return $query->fetchObject();
}

/**
 * This function get the user's id when the user logs-in user login.
 *
 * @param $user_login This is the user_login param entered into the login form
 *
 * @return mixed Will return the user's id information
 */

function getUserByUserLogin($user_login){
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
 * This function checks if the user exists in the db while registering.
 *
 * @param $username This is the username the user enters when registering
 *
 * @return bool Will return true or false whether the username already exists
 */

function userExists( $username ){
    global $db;
    $query = $db->prepare( 'SELECT user_login FROM users WHERE user_login = :user_login' );
    $query->bindValue( ':user_login', $username, PDO::PARAM_INT );
    $query->execute();

    $user = $query->fetchObject();
    return (bool) $user;
}

/**
 * This function checks id the user password already exists in the db.
 *
 * @param $password This is the password the user enters when registering
 *
 * @return bool Will return true or false whether the password already exists
 */
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
 * This function checks id the user password already exists in the db.
 *
 * @param $password This is the password the user enters when registering
 *
 * @return bool Will return true or false whether the password already exists
 */
/**
 * This function checks if the email already exists in the db.
 *
 * @param $email This is the email param entered
 *
 * @return bool Will return true or false if the email exists
 */
function emailExists( $email ){
    global $db;
    $query = $db->prepare( 'SELECT user_email FROM users WHERE user_email = :user_email' );
    $query->bindValue( ':user_email', $email, PDO::PARAM_INT );
    $query->execute();

    $email = $query->fetchObject();
    return (bool) $email;
}

/**
 * This function displays a timestamp in certain date format and return that info.
 *
 * @param $timestamp Will take in the timestamp given to change
 *
 * return string This will return the timestamp as a date format given.
 */

function displayDate( $timestamp ){
    $imageDate = new DateTime();
    $imageDate->setTimestamp($timestamp);
    echo $imageDate->format('F d,Y \a\t h:ia');
}

/**
 * This function processes all the registration information typed in by the new user.
 * This function checks if the username exists, username is too short, username entered.
 * This function checks if there is an email entered, valid email, and if email exists.
 * This function also check is there is a password entered, password too short, and if the passwords match.
 *
 * @return array Will return the errors or the username, email and password and add them to the db.
 */
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
    }else if(strlen($username) < 5){
        $errors['username'] = "username too short/weak";
    }else if(userExists($username)){
        $errors['username'] = "username exists!";
    }

    // invalid email
    $email = filter_input(INPUT_POST, 'email');
    if( empty($email) ){
        $errors['email'] = "missing email";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "invalid email";
    } else if( emailExists($email) ){
        //email already exists
        $errors['email'] = "email exists!";
    }

    $password = filter_input(INPUT_POST, 'pwd');
    $passwordVerify = filter_input(INPUT_POST, 'pwd-verify');
    //password don't match
    if(empty($password)){
        $errors['pwd'] = "no password!!";
    } else if($password !== $passwordVerify){
        $errors['pwd'] = "your passwords don't match";
    } else if(strlen($password) < 8){
        $errors['pwd'] = "pwd too short/weak";
        //password too weak
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
    }

    return $errors;

}

//=========== Log In/Out ===========
/**
 * This function logs in the user and creates a session for that user.
 *
 * @param $id Will take in the id of the user for database access.
 */
function logIn($id){
    $_SESSION['id'] = $id;
}

/**
 * This functions logs out the user and destroys the session.
 */
function logOut(){
    session_unset();
    session_destroy();
}

/**
 * This function fetches the logged in user's id from session.
 *
 * @return int Will return the user_id created form the session.
 */
function getCurrentUserId(){
    $user_id = 0;

    //fetch the logged in user's ID

    if(isset($_SESSION, $_SESSION['id'])){
        $user_id = $_SESSION['id'];
    }

    //return user's ID

    return $user_id;
}

/**
 * This function process log in information to log in users.
 * This function checks if there is a username entered or if the username exists in the db.
 * This function checks if there is a password entered and if that password matches the username's password in the db.
 *
 * @return array Will return errors or login the user using their id.
 */
function processLoginForm(){
    $loginErrors = array();

//    if( !empty($_POST)){
//        var_dump($_POST);
//        die();
//    }

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
//====End of Login/logout ======


//====== Upload form ========
/**
 * This function add an image, text and description to the db with the user_id.
 * This function checks of there is a title entered,
 * if there is if there is an image being uploaded, a valid image uploaded and if the upload failed.
 * Once there is success the image is added to the db using the user id and then
 * added to the user-images page.
 * The image uploaded get added to the uploads folder, not contained in the db.
 *
 * @return array Will return any errors and the image to be added to the db.
 */
function processUploadForm()
{

    $uploadErrors = array();
//    if ( ! isset( $_POST['upload-form'] ) ) {
//        return $uploadError;
//    }
    // die("test");
    //var_dump($uploadErrors);

    if (!isset($_FILES['image'])) {
        return $uploadErrors;
    }

    //Check if title is empty
    $title = filter_input(INPUT_POST, 'title');


    if (empty($title)) {
        $uploadErrors['title'] = "no title!!";
    }

    //no file provided
    if (4 === $_FILES['image']['error']) {
        $uploadErrors['image'] = "no files";
    } else if ('image' !== explode('/', $_FILES['image']['type'])[0]) {
        //Invalid file type
        $uploadErrors['image'] = "Invalid Type";
    } else if ($_FILES['image']['error'] !== 0) {
        $uploadErrors['image'] = "Upload Failed";
    } else {
        //let's save it
        $filepath = __DIR__ . '/../uploads/' . $_FILES['image']['name'];
        $upload_success = move_uploaded_file($_FILES['image']['tmp_name'], $filepath);
    }

    if (isset($upload_success) && $upload_success === false) {
        $uploadErrors['image'] = "Upload not filed";
    }

    if (empty($uploadErrors)) {
        $uploadErrors['image'] = "it worked";
        $image = (object)[ //or array(insert info here)
            'author' => getCurrentUserId(),
            'url' => APP_URL . '/uploads/' . basename($filepath),
            'title' => filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING),
            'description' => filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING)
        ];
        //Success! Upload image data into the database. (use insertImage() function)
        insertImage($image);
        //Redirect user to the image management screen
        header('Location: ' . APP_URL . '/userImages.php');
    }

    return $uploadErrors;
}

/**
 * This function deletes an image and it's information from the db.
 */
function processDeleteForm(){

    if ( isset( $_POST['img'] ) ) {
        $image_id = $_POST['img'];
        $image = getImage($image_id);
        if (false !== $image){

            $filepath = __DIR__ . '/../uploads/' . basename($image->url);
            unlink($filepath);

            foreach (getComments($_POST['img'])as $comment){
                deleteComment($comment->id);
            }
            deleteImage($_POST['img']);
        }
    }
}

/**
 * This function post a comment to the db and to the site.
 *
 * return Will add who posted the image with author, text(comment), and image_id to the db.
 */
function processCommentForm(){
    //event.preventDefault();

    if ( isset( $_POST['comment-form'] ) ) {
        insertComment((object)$_POST, FILTER_SANITIZE_SPECIAL_CHARS);
    //other way of doing it
//        $comment = (object)[
//            "text" => $_POST['text'],
//            "image_id" => $_POST['image_id'],
//            "author" => $_POST['author']
//        ];
        //insertComment($comment);
//        var_dump($comment, (object)$_POST);
//        die();
    }
}