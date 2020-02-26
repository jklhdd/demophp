<?php
session_start();
// sv info
$serverName = "localhost";
$serverUser = "root";
$serverPass = "";
$database = "t1904a";
// sv connect
$conn = new mysqli($serverName,$serverUser,$serverPass,$database);
// check connect
if($conn -> connect_error){
    die("connection error");
}
// get sign up
$sname = $_POST["username"];
$spass = $_POST["password"];
$scpass = $_POST["cpass"];
$sage = $_POST["age"];
$saddress = $_POST["address"];
$sphone = $_POST["phone"];
$semail = $_POST["email"];
if ($spass == $scpass) {
    $_SESSION["sign_err"] = "Confirm pass do not match";
    header("location: signup.php");
}
$sql = "insert into user(username,email,password,age,address,telephone) values ('{$sname}',
'{$semail}','{$spass}','{$sage}','{$saddress}','{$sphone}')";
$result = $conn->query($sql);
if ($result) {
    echo "signup successfully";
    $user = null;
    $sql = "select * from user where username like '{$sname}' and password like '".$spass."'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $user = $row;
    }
    $_SESSION["user"] = $user;
    header("location: index.php");
}
else {
    $_SESSION["login_err"] = "DB not connect";
    header("location: form.php");
}


?>