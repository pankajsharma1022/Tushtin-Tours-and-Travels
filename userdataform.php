<?php
$con =  mysqli_connect('localhost','root');

if($con){
   // echo "Connection Successful";
}else{
    echo "No Connection";
}

mysqli_select_db($con, 'tushtinusersdata');

$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$state = $_POST['state'];
$feedback = $_POST['feedback'];


$query = " insert into userinputdata (name, email, city, state, feedback)
 Values ('$name' , '$email' , '$city' , '$state' , '$feedback') ";


mysqli_query($con, $query);

header('location: index.html')

?>