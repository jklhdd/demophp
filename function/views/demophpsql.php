<?php
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
    $sql = "select * from user";
    $result = $conn -> query($sql);
    //var_dump($result);
    $user = [];   
    if($result->num_rows >0){
        while($row = $result-> fetch_assoc()){
            //echo $row["id"].$row['username'].$row['email'];
            $user[] = $row;
        }
    }else{
        echo "No result found";
    }    
?>
<?php foreach ($user as $u ): ?>
    <p><?php echo $u["id"]." - ".$u['username']." - ".$u['email']; ?></p>
<?php endforeach ?>