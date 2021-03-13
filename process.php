<?php

error_reporting(E_ERROR);
session_start();

$mysqli = new mysqli("localhost","root","","crud") or die(mysqli_error($mysqli));

$id=0;
$update= false;
$name='';
$location='';
$mail='';
$contact_number='';
$last_call='';
$next_call='';
$remark='';

if (isset ($_POST['save'])){
	
	$name= $_POST['name'];
	$location= $_POST['location'];
	$mail = $_POST['mail'];
	$contact_number = $_POST['contact_number'];
	$last_call= $_POST['last_call'];
	$next_call= $_POST['next_call'];
	$remark= $_POST['remark'];
	
	
	$mysqli->query("INSERT INTO data (name,location,mail,contact_number,last_call, next_call, remark) VALUES ('$name','$location','$mail','$contact_number','$last_call','$next_call','$remark')") or die($mysqli->error);

	$_SESSION['message']="Record Has Been Saved!";
	$_SESSION['msg_type']="info";

	header("location: index.php");

		
	
}



if (isset($_GET['delete'])){

	$id=$_GET['delete'];

	$mysqli->query("DELETE FROM data WHERE id=$id ") or die($mysqli->error()) ;

	$_SESSION['message']="Record Has Been Deleted!";
	$_SESSION['msg_type']="danger";

	header("location: index.php");


}


if (isset($_GET['edit'])){

	$id=$_GET['edit'];
	$update= true;

	$result=$mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error);

	if (count($result==1)){
		
	

		$row=$result->fetch_array();
		$name=$row['name'];
		$location=$row['location'];
		$mail = $row['mail'];
		$contact_number = $row['contact_number'];
		$last_call=$row['last_call'];
		$next_call=$row['next_call'];
		$remark=$row['remark'];
	  }
}

if (isset($_POST['update'])){

	$id= $_POST['id'];
	$name=$_POST['name'];
	$location=$_POST['location'];
	$mail = $_POST['mail'];
	$contact_number = $_POST['contact_number'];
	$last_call=$_POST['last_call'];
	$next_call=$_POST['next_call'];
	$remark=$_POST['remark'];
	

	$mysqli->query("UPDATE data SET name='$name',location='$location', mail='$mail', contact_number='$contact_number',last_call='$last_call',next_call='$next_call', remark='$remark' where id=$id") or die($mysqli->error);

	$_SESSION['message']="Record Has Been Updated!";
	$_SESSION['type']="warning";

	header('location: index.php');



}

	
	
?>	
