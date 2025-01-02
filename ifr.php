<?php
 header("Access-Control-Allow-Origin: *");
 $url = 
 'https://media.geeksforgeeks.org/wp-content/uploads/gfg-40.png';
 
 // Use basename() function to return the base name of file
 $file_name = basename($url);
if (file_put_contents($file_name, file_get_contents($url)))
    {
        echo "File downloaded successfully";
    }
    else
    {
        echo "File downloading failed.";
    }
 ?>