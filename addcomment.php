<?php
$a=$_POST["s"];
$b=$_POST["id"];
echo $a;
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'valencebond';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = "INSERT INTO comments ".
       "(comments,id) ".
       "VALUES ".
       "('$a','$b')";
mysql_select_db('mydb');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo"success";
mysql_close($conn);    
header('Location: index.html');    


