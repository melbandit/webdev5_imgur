<!DOCTYPE html>
<html>
<head>
    <title>Hello World-PHP</title>
</head>

<body>
<h1>Hello World It's Me!!</h1>
<p>PHP routing - /file working in php</p>
<?php
$text = 'Yo mama'; // $ - means it's a variable or string
// $text = []; object; string; variable; boolean;
//echo 'yo mama';
echo $text; //command shift forward slash
?>
<!-- echo or print
each command line must end in a simicolon
-->


<?php
//data types
$boolean = true;
$integer = 1;
$float = 1.2; //decimal points
$literal_string = 'Hello World';
$string_with_interpolation = "Yo, {$literal_string}";
$array = [];
$indexed_array = [
    0 => 1,
    1 => 2,
    2 => 3
];
$associative_array = [
    'first_name' => 'Melissa',
    'last_name' => 'Sattler'
];
$object = new stdClass();

var_dump(
    $boolean,
    $integer,
    $float,
    $literal_string,
    $string_with_interpolation,
    $array,
    $associative_array,
    $indexed_array,
    $object
);
//don't need if you only have <?php and make sure there is no space before php tag
?>

<!--command E to access Terminal
do all your work in git hub. mark-up and styling due next class
-->

</body>
</html>