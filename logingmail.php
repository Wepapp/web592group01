<?php


// ส่วนตัง้ ค่า เรียกใชง้ าน UserService ของ Google
use google\appengine\api\users\User;
use google\appengine\api\users\UserService;
global $user,$userdata,$appid;
$user = UserService::getCurrentUser();
if($user){
$uid = $user->getUserId();
$userfile = "gs://$appid/user_$uid.json";
$userdata = array();
if(file_exists($userfile)){
// จะโหลดขอ้ มูลในไฟล์ json
$filedata = file_get_contents($userfile);
$userdata = json_decode($filedata,true);
}else{
$userdata['nick']=$user->getNickname();
}
$url = UserService::createLogoutUrl('/main.php');
// แสดงภาพผูใ้ ช ้ โดยการเรียกฟังก์ชัน userpic จากขอ้ ที่ 1
echo "<img src='".userpic($uid)."' width='200'><br>";
echo $userdata['nick'];

//แก้ไข user
echo "<br><a href='test3.php?p=edituser'>Edit User</a>";
echo "<br><a href='$url'>Logout</a>";
}else{
$url = UserService::createLoginUrl('/main.php');
echo "<a href='$url'>Login or Register</a>";
}

?>