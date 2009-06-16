<?php
include("config.php");

$username = $_POST["u"];
$password = $_POST["p"];

$users = mysql_query("SELECT * FROM aq_users WHERE username='{$username}' LIMIT 1");
$pass = mysql_query("SELECT * FROM aq_users WHERE username='{$username}' AND password='{$password}' LIMIT 1");
$characters = mysql_query("SELECT * FROM aq_characters WHERE username='{$username}' LIMIT 6");
$u = mysql_fetch_array($pass);

if(mysql_num_rows($pass) == 0){
  $status = "badpassword";
}

if(mysql_num_rows($users) == 0){
  $status = "usernotfound";
}

if(mysql_num_rows($pass) == 1){
  $status = "success";
}

echo "&status={$status}";


echo "&idLore_Users={$u["ID"]}";
echo "&strEmail={$u["strEmail"]}";
echo "&intCanEmail={$u["intCanEmail"]}";
echo "&intHits={$u["intHits"]}";
echo "&aaa={$u["intAge"]}";
echo "&ccc={$u["strCountryCode"]}";


$i = 1;

foreach ($characters as $c){
  echo "&id{$i}={$c["ID"]}";
  echo "&char{$i}={$c["charname"]}";
  echo "&level{$i}={$c["level"]}";
  echo "&CharType{$i}={$c["CharType"]}";
  echo "&intCharType{$i}={$c["intCharType"]}";
  echo "&FaceFileName{$i}={$c["FaceFileName"]}";
  echo "&FaceColors{$i}={$c["FaceColors"]}";
  echo "&LastSeen{$i}={$c["LastSeen"]}";
  $i++;
}
?>