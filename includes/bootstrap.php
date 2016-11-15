<?php
session_start();

include __DIR__ . '/config.php';
include __DIR__ . '/functions.php';

date_default_timezone_set( 'America/New_York' );

$db = new PDO( 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD );

$registration_errors = processRegistrationForm();

$login_errors = processLoginForm();


//// ===========var_dump===============
//var_dump(getCurrentUserId());
//die();
//var_dump(getComments(2));
//die();
//var_dump(insertComment(2, "happy"));
//die();
//var_dump(insertImage(1, "www.google.com", "heya", "this is a desc"));
//die();