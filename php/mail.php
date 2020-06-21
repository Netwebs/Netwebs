<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $sub=$_POST['subject'];
    $msg=$_POST['msg'];
    $to = "netwebs20@gmail.com";
    $txt = 'Name => '.$name."\nMessege => ".$msg;
    $headers = "From: ".$email;
    if(@mail($to,$sub,$txt,$headers))
        echo 'Successfully Mail sended! Thank you For Your attention. :-)';
    else
        echo "Some thing goes wrong.\n Please Try again!";

?>