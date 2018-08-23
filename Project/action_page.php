<?php
// define variables and set to empty values
$name = $people = $timedate = $comment = $phone = "";

  $name = $_GET["Name"];
  $phone = $_GET["Phone"];
  $people = $_GET["People"];
  $timedate = $_GET["Date"];
  $message = $_GET["Message"];


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'ProjectWeb';
mysql_connect($db_host, $db_username, $db_password) or die(mysql_error());
mysql_select_db($db_name);

/*$query = "SELECT * FROM `ProjectWeb` WHERE `id` = '$id'";
$sqlsearch = mysql_query($query);
$resultcount = mysql_numrows($sqlsearch);*/

/*if ($resultcount > 0) {

    mysql_query("UPDATE `ProjectWeb` SET
                                `id` = '$id',
                                `Name` = '$name',
                                `Phone` = '$email',
                                `People` = '$people',
                                `Date` = '$time',
                                `Message` = '$message'
                             WHERE `id` = '$id'")
     or die(mysql_error());

} else {*/

    mysql_query("INSERT INTO ProjectWeb (id, name, phone, people, timedate, message)
                               VALUES ('$id', '$name', '$phone', '$people', '$timedate', '$message') ")
    /*or die(mysql_error());*/

?>
