<?php include("connect.php");
header('location: buyform.php');


$name = $_POST['name'];
$email = $_POST['email'];
$number= $_POST['number'];
$bookname = $_POST['bookname'];
$author = $_POST['author'];



$sql = "SELECT * FROM buy WHERE email='$email'";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Your Message?";
}
else{
    $reg = "INSERT INTO buy(name,email,number,bookname,author) VALUES ('$name','$email','$number','$bookname','$author')";
    mysqli_query($conn,$reg);
    echo "Message Received";
}

?>