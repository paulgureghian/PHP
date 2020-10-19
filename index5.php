// Directory functions.

<?php
    $root = './books';
    $dir = opendir($root);

    $library = [];
    
    while(($author = readdir($dir)) != FALSE) {
        if($author == '.' || $author == '..') {
            continue;
        }
        
        $books = scandir("$root/$author");
        foreach($books as $title) {
            if(is_dir($title)) {
                continue;
            }
            
            $library[] = [$author, substr($title, 0, -4)];
        }
    }
    closedir($dir);

    echo "Which book would you like to read? \n\n";
    foreach($library as $idx => $book) {
            $option = $idx + 1;
            echo "$option) $book[1] by $book[0] \n"; 
    }
   
    list($option) = fscanf(STDIN, "%d \n");
    list($author, $title) = $library[$option - 1];
    
    $filename = "$root/$author/$title.txt";
    $f = fopen($filename, 'r');
   
    while(!feof($f)) {
        echo fread($f, 512);
        fgets(STDIN);
    }
   
    fclose($f);
?>
