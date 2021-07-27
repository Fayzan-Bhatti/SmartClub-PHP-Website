<?php
$conn=mysqli_connect("localhost","root","","snooker");
if($conn)
{
    echo "connected successfully";
}
else
{
    echo "Not connected";
}

?>




<!--include("filename.php");    if there is an error show  fatal error

require("filename.php");  if there is an error show warning  error

built-in function 
isset();
purpose:
to check the value in your variable or not??
if (isset($_POST['submit']))
-->