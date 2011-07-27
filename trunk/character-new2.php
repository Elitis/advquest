<?php
include("config.php");

$intStartClass = mysql_real_escape_string($_POST["intStartClass"]);
$strUserName = mysql_real_escape_string($_POST["strUserName"]);
$strPassword = mysql_real_escape_string($_POST["strPassword"]);
$intFace = mysql_real_escape_string($_POST["intFace"]);
$strFaceColors = mysql_real_escape_string($_POST["strFaceColors"]);
$strCharactername = mysql_real_escape_string(trim($_POST["strCharactername"]));

$user = mysql_query("SELECT * FROM aq_users WHERE username='{$strUserName}' AND password='{$strPassword}' LIMIT 1");

if(mysql_num_rows($user) != 0){
  $ins = mysql_query("INSERT INTO aq_characters (username, charname, intStartClass, intFace, FaceColors)VALUES('$strUserName', '$strCharactername', '$intStartClass', '$intFace', '$strFaceColors')");
  echo "&user=success&status=success";
}
?>