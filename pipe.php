<?php

$message = $_GET['message'];
echo "Parameter : ";
echo $message;
echo "<br>";

$is_file_exist = file_exists('/tmp/mypipe');

if( $is_file_exist)
{
  echo "File Exists<br>";
}
else
{
  echo "File Not Exists<br>";
}

$myfile = fopen("/tmp/mypipe", "w");
stream_set_blocking($myfile, 0);
echo "file : " . $myfile . "<br>";

$result = fwrite( $myfile, $message );
#$result = fputs( $myfile, $message );
#
echo "write result : " . $result;
fclose( $myfile );

?>
