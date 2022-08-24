<?php include("connect.php");
header('location: paymentmethod.php');


$name = $_POST['name'];
$email = $_POST['email'];
$selectpaymentoption= $_POST['selectpaymentoption'];


$sql = "SELECT * FROM payment WHERE email='$email'";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Your Message?";
}
else{
    $reg = "INSERT INTO payment(name,email,selectpaymentoption) VALUES ('$name','$email','$selectpaymentoption')";
    mysqli_query($conn,$reg);
    echo "Message Received";
}

?>