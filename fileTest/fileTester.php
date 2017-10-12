<?php

    $result = file_exists("foo.txt");

    if($result) {
        echo "File Exists <br />";
        } else {
            echo "Can't file the file<br />";
        }

    // $file_handle =fopen("myfile.txt", 'w') or die("Can't create file!");

    // $text = "Blah blah blah";

    // fwrite($file_handle, $text) or die ("Can't write to the file!");
    // fclose($file_handle);

    $file_handle = fopen("foo.txt", 'r') or die ("Can't open file");
    // $first_line = fgets($file_handle);
    // $second_line = fgets($file_handle);
    // fclose($file_handle);

    // echo "$first_line <br />";
    // echo "$second_line <br />";

    // while ($line = fgets($file_handle)) {
    //     echo "$line <br />";
    // } **reads all lines of text in the file

    $text = fread($file_handle, 6);
    echo "$text <br />";
    fclose($file_handle);

    // copy("foo.txt", "foo.txt.copy") or die ("Can't copy file!");

    // rename("foo.txt.copy", "foo2") or die ("Can't rename file");

    // unlink("foo2") or die ("Can't remove file!"); remove file from directory

    $file_handle =fopen("myfile.txt", 'a') or die("Can't create file!");

    $text = "Blah blah blah";

    fwrite($file_handle, $text) or die ("Can't write to the file!");
    fclose($file_handle);


?>