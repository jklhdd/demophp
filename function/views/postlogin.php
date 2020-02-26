<?php

$username = $_POST["user"];
$password = $_POST["pass"];
// var_dump($username);
// var_dump($password);
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
echo "Connect successfully";
// query sql
$sql = "select * from user where username like '{$username}' and password like '".$password."'";
$result = $conn -> query($sql);
if ($result->num_rows > 0) {
    echo "login successfully";
    $user = null;
    while ($row = $result->fetch_assoc()) {
        $user = $row;
    }
    $_SESSION["user"] = $user;
    header("Location: ?route=");
}
else {
    $_SESSION["login_err"] = "Username or password is wrong";
    header("Location: ?route=login");
}
?>