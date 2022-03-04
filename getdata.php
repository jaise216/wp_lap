<?php
require 'config.php';
$query="select * from user";
if($is_query_run=mysqli_query($conn,$query))
{
 echo "query executed!!!<br><br>";
 echo "<table><tr><th>Name</th><th>Surname</th></tr></table><br>";
 while($query_execute=mysqli_fetch_assoc($is_query_run))
 {
  echo '<table><tr><td>'.$query_execute['name'].'</td><td>'.$query_execute['surname'].'</td></tr></table>';
 }
}
else
{
echo "query not executed";
}
?>