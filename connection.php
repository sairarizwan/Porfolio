<?php
$conn=mysqli_connect('localhost','root',"",'portfolio');
if(!$conn)
{
echo "not connected";
}else

{
	echo "connected";
}
?>