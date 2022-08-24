<?php
 session_start();
 $conn = mysqli_connect('localhost', 'root', '','book');
 if($conn){
	echo "succesfully connected";
}
else{
	echo "not connected";
}
    
?>