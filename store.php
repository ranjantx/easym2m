<?php
// EASYM2M WIFITRACKER DATA STORE IN A LOG FILE
// Write the contents to the file, 
// using the FILE_APPEND flag to append the content to the end of the file
// and the LOCK_EX flag to prevent anyone else writing to the file at the same time

file_put_contents("./test.log", date('Y-m-d H:i:s'), FILE_APPEND | LOCK_EX);
file_put_contents("./test.log", print_r($_GET, true), FILE_APPEND | LOCK_EX);
header("HTTP/1.1 200 OK");
http_response_code(200);
?>