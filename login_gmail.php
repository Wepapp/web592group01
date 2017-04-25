<?php
$appid = "web592group01.appspot.com/";
$page = $_GET['p']; 
if($page=='') $page='home';
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
?>