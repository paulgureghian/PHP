// Get file permissions.

<?php
    $filename = '/home/paul/Great Expectations.txt';

    function getPermissionInfo($filename) {
        return [
            'file owner' => fileowner($filename),
            'file group' => fileowner($filename),
            'permissions' => sprintf('%o', fileperms($filename))
        ];
    }
    
    var_dump(getPermissionInfo($filename));
?>
