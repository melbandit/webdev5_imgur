<?php

include __DIR__ . '/config.php';

date_default_timezone_set( 'America/New_York' );

$db = new PDO( 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME , DB_USER, DB_PASSWORD);

/**
 * @param $id
 * @return mixed
 */

function getImage( $id ){
    global $db;
    $query = $db->prepare( 'SELECT * FROM images WHERE id = :id' );
    $query->bindValue( ':id', $id, PDO::PARAM_INT );
    $query->execute();
//    $query->setFetchMode( PDO::FETCH_OBJ );
//    $results = $query->fetchAll();
    return $query->fetchObject();
}

/**
 * @param int $count
 * @param int $offset
 *
 * @return array
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

function insertImage($image){
    //INSERT
}
function updateImage($id, $image){
    //SELECT?
}
function deleteImage($id){
    global $db;
    $query = $db->prepare( 'DELETE * FROM images WHERE id = :id' );
    $query->bindValue( ':id', $id, PDO::PARAM_INT );
    $query->execute();
}

function getComment( $id ){
    global $db;
    $query = $db->prepare( 'SELECT * FROM comments WHERE id = :id' );
    $query->bindValue( ':id', $id, PDO::PARAM_INT );
    $query->execute();
    return $query->fetchObject();
}

//fix
function getComments($image_id){
    global $db;
    $query = $db->prepare( 'SELECT * FROM comments WHERE id = :id' );
    $query->bindValue( ':id', $image_id, PDO::PARAM_INT );
    $query->execute();
    $query->setFetchMode( PDO::FETCH_OBJ );
    return $query->fetchAll();
}

function insertComment($id, $comment){
    //INSERT comment into database
}
function updateComment($id, $comment){
    //SELECT?
}
function deleteComment($id){
    //DELETE
}


function getUsers(){

}
function getUser($id){

}
function insertUser($id, $user){
    //INSERT
}
function updateUser($id, $user){
    //SELECT?
}
function deleteUser($id){
    //DELETE
}

//function displayDate($timestamp){
//
//}

//var_dump(getImage(2));
//die();




?>