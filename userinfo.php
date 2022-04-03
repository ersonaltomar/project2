<?php
//$user = '';
//$email = '';
//$mobile = '';
//$comment = '';

$con = mysqli_connect('localhost','root');
if($con){
    echo "connection successful";
}else{
    echo "no connection";
}
mysqli_select_db($con, 'rajeev');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "INSERT INTO userinfodata ( user, email, mobile, comment) VALUES ( '$user', '$email', '$mobile', '$comment')";

if (mysqli_query($con, $query)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
  }
  
  mysqli_close($con);

?>