<?php
//session_start();
include('db.php');

if (isset($_POST['AddExpBtn'])) {
	$expdesc = mysqli_real_escape_string($db, $_POST['expdesc']);
	$exptype = mysqli_real_escape_string($db, $_POST['exptype']);
	$expamt = mysqli_real_escape_string($db, $_POST['expamt']);
	date_default_timezone_set("Asia/Kolkata");
	$currdate= date("Y-m-d");
	$currtime=date("h:i");
	$month=date("m");
	$year=date("Y");


$sql="INSERT  INTO  exptable(  exptype,  expdescp,amount,date,month,year,time)VALUES( '$exptype',  '$expdesc','$expamt',  '$currdate','$month','$year','$currtime')";

mysqli_query($db,$sql);

  echo '<script language="javascript">';
  echo 'alert("Expense added!!!")';  
  echo '</script>';
}else {
	echo "ERRRRR!! something went wrogn!!";
}
header("location:index.php");
?>