<?php
    // Collects all files in the slider directory
    // Last parameter variable is to descend the directory 
    $images = scandir('images/slider', 1);

    // Removes the last two unwanting "files" in the directory
    unset($images[sizeof($images) - 1]);
    unset($images[sizeof($images) - 1]);


    echo "<script>\n";
    echo 'var images = ' . json_encode($images, JSON_PRETTY_PRINT) . "\n";
    echo "</script>";
?>