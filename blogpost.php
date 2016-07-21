<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'valencebond';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$tab=" CREATE TABLE blog(
content VARCHAR(1000) NOT NULL,
reg_data TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP)";
$text=$_POST["q"];
$sql = "INSERT INTO blog ".
       "(content) ".
       "VALUES ".
       "('$text')";
mysql_select_db('mydb');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo"success";
mysql_close($conn);
header('Location: index.html');    


?>

