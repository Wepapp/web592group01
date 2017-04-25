<?php

$appid = "web592group01.appspot.com/";
$page = $_GET['p']; 
if($page=='') $page='main';
$title = $page;
function panel_include($title,$file,$ptype='default'){
echo "<div class='panel panel-$ptype'>";

echo "<div class='panel-body'>";
if(file_exists($file)){
include($file);
}else{
echo "ไม่พบไฟล์ $file ";
}
echo "</div>";
echo "</div>";
}

use google\appengine\api\cloud_storage\CloudStorageTools;
function userpic($uid){
	global $appid;
	$userpic="gs://$appid/{$uid}.jpg";
	if(!file_exists($userpic)){
		return "user.png";
	}
	return CloudStorageTools::getImageServingUrl($userpic,["size"=>200]);
	}


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