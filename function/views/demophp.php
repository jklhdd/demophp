<?php
echo "Hello World <br/>";
$aaa = 10;
$bbb = [1,2,3,4];
echo $aaa."<br/>";

if ($aaa > 10) {
    # code...   
    echo "Gia tri > 10<br/>";
}
else {
    echo 'gia tri < 10<br/>';
}

tenHam(1999);

foreach ($bbb as $b) {
    # code...
    echo $b."<br/>";
}

function tenHam($var){
    echo $var."<br/>";
}