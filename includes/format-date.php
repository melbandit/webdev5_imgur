<?php
    $uploaded_date = $image->timestamp;
    $date = DateTime::createFromFormat('Y-m-d H:i:s', $uploaded_date);
    $formatted_date = $date->format('F j, Y h:i:sa');
    echo $formatted_date;
?>