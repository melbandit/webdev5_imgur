<?php

date_default_timezone_set( 'America/New_York' );

function getImage( $id ){
    return getImages()[ $id ];
}

function getImages(){
    return array(
        (object) array( 'url' => 'http://i.imgur.com/izzpeRbb.jpg', 'alt' => '', 'title' => 'PatrickStarU', 'description' => 'Patrick looks like Staru!!', 'author' => 'MelBandit', 'timestamp' => 1420288620),
        (object) array( 'url' => 'http://i.imgur.com/5UvoYdIb.jpg', 'alt' => '', 'title' => 'Bender as a Human', 'description' => 'Obama just lifted the ban on Cuban rum and cigars!', 'author' => 'HappyCamper', 'timestamp' => 1420965240),
        (object) array( 'url' => 'http://i.imgur.com/3qi0ivzb.jpg', 'alt' => '', 'title' => 'Angry Mob', 'description' => 'Angry mobs makes angry slobs', 'author' => 'CharlieBites', 'timestamp' => 1424781900),
        (object) array( 'url' => 'http://i.imgur.com/RzBgfhob.jpg', 'alt' => '', 'title' => 'Girls or Boys?', 'description' => 'Gender party!!', 'author' => 'BoyGirlParty', 'timestamp' => 1425819360),
        (object) array( 'url' => 'http://i.imgur.com/iTMFYwRb.jpg', 'alt' => '', 'title' => 'No Wind Burn Here', 'description' => 'Two guys, tight suits, power walking with safe.', 'author' => 'SkaterBoy', 'timestamp' => 1427526540),
        (object) array( 'url' => 'http://i.imgur.com/mIcObyLb.jpg', 'alt' => '', 'title' => 'Mustachio Cat', 'description' => 'Evil cat, lovely mustache!', 'author' => 'CatLover', 'timestamp' => 1431231840),
        (object) array( 'url' => 'http://i.imgur.com/XUgDxKxb.jpg', 'alt' => '', 'title' => 'Can I play?', 'description' => 'Shy little guy hiding', 'author' => 'AnimalLover24', 'timestamp' => 1436704440),
        (object) array( 'url' => 'http://i.imgur.com/8hfW8JSb.jpg', 'alt' => '', 'title' => 'No More Girlfriend!', 'description' => 'All alone, and ready to mingle!', 'author' => 'AllDaSingleLadies', 'timestamp' => 1445483400),
        (object) array( 'url' => 'http://i.imgur.com/nVlJf9Ob.jpg', 'alt' => '', 'title' => 'Wubalubadubdub!', 'description' => "Looks like we're somewhere new", 'author' => 'newbie', 'timestamp' => 1448931720),
        (object) array( 'url' => 'http://i.imgur.com/6CZGit4b.jpg', 'alt' => '', 'title' => 'Saturday Night Live Devil', 'description' => 'My plans are working out this year for the Elections! I have two souls in the running! MWAHAHA!', 'author' => 'AmericasGreat', 'timestamp' => 1452396780),
        (object) array( 'url' => 'http://i.imgur.com/jm0fP9Ub.jpg', 'alt' => '', 'title' => 'Playstation!', 'description' => "Oh the days of Crash Bandicoot, I miss the classics!", 'author' => 'PSFan', 'timestamp' => 1460432700),
        (object) array( 'url' => 'http://i.imgur.com/tnxhjzEb.jpg', 'alt' => '', 'title' => 'PUGLY', 'description' => 'You want to know how pugs got their face... chasing parked cars!', 'author' => 'PugHater', 'timestamp' => 1456797720)

    );
}

function getComment( $id ){
    return getComments()[ $id ];
}


function getComments(){
    return array(
        (object) array( 'timestamp' => 1467112140, 'author' => 'Why?ME!', 'comment' => 'Oh how I miss you so!'),
        (object) array( 'timestamp' => 1456110600, 'author' => 'DancingQueen', 'comment' => 'Why is he such a dumb dumb?'),
        (object) array( 'timestamp' => 1454302500, 'author' => 'HatBack', 'comment' => "Can't help but laugh!"),
        (object) array( 'timestamp' => 1446193200, 'author' => 'CharlieBites', 'comment' => 'Gotta Catch em ALL??'),
        (object) array( 'timestamp' => 1428820020, 'author' => 'MelBandit', 'comment' => 'HAHAHA! Oh dear!')
    );

}

?>