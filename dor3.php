<?php

$servername = "localhost";
$database = "host1784497_dor";
$username = "host1784497_dor";
$password = "72214250";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
#echo "Connected successfully";

$kl='dsdsdsd';


#$sql = "select dsdsdsd from table where dor_id = dsdsdsd limit dsdsdsd";

#if (mysqli_query($conn, "SELECT * FROM table WHERE dor_id = 'dsdsdsd'")) {echo "da";} else {echo "net";}

#echo mysqli_query($conn, $sql);


#SELECT EXISTS(SELECT id FROM table WHERE id = 1)


$sql = "SELECT dor_id FROM dor_id WHERE dor_id='223'";

#SELECT EXISTS (SELECT * FROM 'dor_id' WHERE dor_id = '{$kl}')";

#echo mysqli_query($conn, $sql);

#if (mysqli_query($conn, $sql)) {echo "da";} else {echo "net";}

echo mysqli_query($conn, $sql);

mysqli_close($conn);


#$key='root strategy unavailable';
#$key=urlencode($key);


#$poisk = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyDIex-2hTw610Xn6-pg8N7Dgy-u9GHrHSA&q='.$key.'&type=video&part=snippet&maxResults=50&videoDuration=long&videoCaption=closedCaption&videoEmbeddable=true';

#$result = file_get_contents ($poisk);

#echo $result; 

?>