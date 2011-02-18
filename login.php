<?php
include("config.php");

$username = mysql_real_escape_string(stripslashes($_POST["u"]));
$password = mysql_real_escape_string(stripslashes($_POST["p"]));

$users = mysql_query("SELECT * FROM aq_users WHERE username='{$username}' LIMIT 1");
$pass = mysql_query("SELECT * FROM aq_users WHERE username='{$username}' AND password='{$password}' LIMIT 1");
$characters = mysql_query("SELECT * FROM aq_characters WHERE username='{$username}' LIMIT 6");
$u = mysql_fetch_array($pass);

if(mysql_num_rows($users) == 0){
  echo "&status=usernotfound";
} else if(mysql_num_rows($pass) == 0){
  echo "&status=badpassword";
} else if(mysql_num_rows($pass) == 1){
  echo "&status=success";

  echo "&idLore_Users={$u["ID"]}";
  echo "&strEmail={$u["strEmail"]}";
  echo "&intCanEmail={$u["intCanEmail"]}";
  echo "&intHits={$u["intHits"]}";
  echo "&aaa={$u["intAge"]}";
  echo "&ccc={$u["strCountryCode"]}";


  $i = 1;

  while($c = mysql_fetch_array($characters)){
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
}
?>