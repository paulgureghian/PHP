// Open a csv file.

<?php
    $f = fopen('./library.csv', 'r');
    $entries = [];

    while(($entry = fgetcsv($f)) != null) {
        if (trim($entry[1]) == 'Charles Dickens') {
            $entries[] = $entry;
        }
    }
    fclose($f);

    $dest = fopen('./dickens_books.csv', 'w');
    foreach($entries as $entry) {
        fputcsv($dest, $entry);
    }

    fclose($dest);
?>
