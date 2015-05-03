<?php
session_start();
if (!isset($_SESSION['authenticated'])) {
  header('Location: redirectToUserLogin.html');
  exit;
}
else{
	
include 'Connections/dataBaseConnection.php';

$roomid = $_GET['id'];
$command = $_GET['command'];

if($command === Light){
	$sql = "UPDATE Rooms SET LightFlag = 1 WHERE RoomID = ".$roomid."";
    if ($conn->query($sql) === False) { 
   		echo "error";
    }
}
if($command === Lock){
	$sql = "UPDATE Rooms SET LockFlag = 1 WHERE RoomID = ".$roomid."";
    if ($conn->query($sql) === False) { 
   		echo "error";
    }
}
if($command === Motor){
	$sql = "UPDATE Rooms SET MotorFlag = 1 WHERE RoomID = ".$roomid."";
    if ($conn->query($sql) === False) { 
   		echo "error";
    }
}
if($command === Camera){
	$sql = "UPDATE Rooms SET CameraFlag = 1 WHERE RoomID = ".$roomid."";
    if ($conn->query($sql) === False) { 
   		echo "error";
    }
}

}
?>