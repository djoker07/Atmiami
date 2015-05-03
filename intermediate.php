<?php

include 'Connections/dataBaseConnection.php';

$userinfo = $_GET['info'];

$query = "SELECT RoomID FROM `Rooms` WHERE `Email` = '".$userinfo."'";
$roomid = $conn->query($query)->fetch_object()->RoomID;

if($roomid == 1){
session_start();
$_SESSION['authenticated'] = $roomid;    
header('Location: roomViewer.html');
}
else{
echo "no account found";
echo "$roomid";	
}
?>