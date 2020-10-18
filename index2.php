// Get metadata on a file.

<?php
    $info = [];

    $filename = './books/Charles Dickens/Great Expectations.txt';
 
    $info['last accessed'] = new DateTime('@'.fileatime($filename));
    $info['last modified'] = new DateTime('@'.filemtime($filename));
    $info['size (B)'] = filesize($filename);
    $info['type'] = filetype($filename);

    $info['readable?'] = is_readable($filename);
    $info['writable?'] = is_writable($filename);
    $info['executable?'] = is_executable($filename);
    $info['link?'] = is_link($filename);

    var_dump($info);
?>    
