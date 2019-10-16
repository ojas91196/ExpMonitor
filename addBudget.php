<?php
//session_start();
include('db.php');
		date_default_timezone_set("Asia/Kolkata");
	$currdate= date("Y-m-d");
	$currtime=date("h:i");
	$month=date("m");
	$year=date("Y");


if (isset($_POST['setBdgtBtn'])) {
$budgetToday = mysqli_real_escape_string($db, $_POST['setBdgtBtn']);	
//UPDATE budgettable SET budgetToday=200 WHERE date='2019-10-08'
$sql1="Select * from budgettable";
$result_set= mysqli_query($db,$sql1);
    
while ($row=mysqli_fetch_array($result_set))
{
  if($row['date']==$currdate)
  {
	$sql="UPDATE budgettable SET budgetToday=".$budgetToday." WHERE date='2019-10-08';";   
  }else{
  	$sql="INSERT  INTO  budgettable(  budgetToday,date,month,year)VALUES( '$budgetToday','$currdate','$month','$year')";
  }
}

//$sql="UPDATE budgettable SET budgetToday=".$budgetToday." WHERE date='2019-10-08';";
//$sql="UPDATE INTO  budgettable(  budgetToday,date,month,year)VALUES( '$budgetToday','$currdate','$month','$year') ";
mysqli_query($db,$sql);
echo "Budge for today is ",$budgetToday;
header("location:index.php");

}else{
$budgetToday = 0;	
$sql="INSERT  INTO  budgettable(  budgetToday,date,month,year)VALUES( '$budgetToday','$currdate','$month','$year')";
mysqli_query($db,$sql);
header("location:index.php");
}

?>
