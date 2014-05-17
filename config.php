<?php
$con = mysql_connect("localhost", "talent_on", "7b4TScW4xTbyCeEq");
$db = mysql_select_db("talent_on",$con);
date_default_timezone_set("Asia/Kolkata");
$time=time();

function protect($v){
$v=mysql_real_escape_string($v);
$v = htmlspecialchars($v);
$v=trim($v);
return $v;
}
function timec($t){
$time=time();
if(empty($t)){
$diff_state= 'Not Valid ';
}
else{
$diff=$time-$t;
if($diff<60){
if($diff==1 or $diff==0)
$diff_state='A moment ago';
else
$diff_state=$diff.' seconds ago';
}
else if($diff>=60 && $diff<3600){
$diff=floor($diff/60);
if($diff==1)
$diff_state=$diff.' minute ago';
else
$diff_state=$diff.' minutes ago';
}
else if($diff>=3600 && $diff<10800){
$diff=floor($diff/3600);
if($diff==1)
$diff_state=$diff.' hour ago';
else
$diff_state=$diff.' hours ago';
}
else if($diff>=10800){
$diff_state=date('d M h:i a',$t);
}
}
return $diff_state;
}
?>
