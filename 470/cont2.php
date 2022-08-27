<?php include("connect.php");
header('location: sellform.php');


$name = $_POST['name'];
$email = $_POST['email'];
$number= $_POST['number'];
$bookname = $_POST['bookname'];
$bookdetails = $_POST['bookdetails'];
$edition = $_POST['edition'];
$author = $_POST['author'];
$authordetails = $_POST['authordetails'];
$howold = $_POST['howold'];
$estimateprice = $_POST['estimateprice'];
$preferredpaymentmethod = $_POST['preferredpaymentmethod'];
$bookpicturelink = $_POST['bookpicturelink'];



$sql = "SELECT * FROM sell WHERE email='$email'";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Your Message?";
}
else{
    $reg = "INSERT INTO sell(name,email,number,bookname,bookdetails,edition,author,authordetails,howold,estimateprice,preferredpaymentmethod,bookpicturelink) VALUES ('$name','$email','$number','$bookname','$bookdetails','$edition','$author','$authordetails','$howold','$estimateprice','$preferredpaymentmethod','$bookpicturelink')";
    mysqli_query($conn,$reg);
    echo "Message Received";
}

?>