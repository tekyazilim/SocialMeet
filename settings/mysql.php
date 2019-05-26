<?php 
$host = "localhost";
$database = "socialmeet";
$dbusername = "root";
$dbpassword = "";

$db = new BasicDB($host, $database, $dbusername, $dbpassword);

$smsettings = $db->from('sm_settings')->select('site_name, site_lang')->first();

if($smsettings) {
    $site_name = $smsettings['site_name'];
    $site_lang = $smsettings['site_lang'];
}
?>