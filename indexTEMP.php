<?php
//session_start();
include('db.php');
?>

<head>

<!--
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

   <style>
   body{
     padding-top:5%;
   }
 table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>

<body>


<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">ExpMonitor</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="dailyexp.php">Daily Exp</a></li>
        <!-- <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Page 1-1</a></li>
              <li><a href="#">Page 1-2</a></li>
              <li><a href="#">Page 1-3</a></li>
            </ul>
          </li> 	-->
          <li><a href="month.php">Monthly Exp</a></li>
  <!--        <li><a href="#">Charts</a></li>		-->
          <button class="btn btn-danger navbar-btn"><a href="chart.php">Charts</a></button>

        </ul>
      </div>
    </div>
  </nav>


<div class="container-fluid"> 

<div class="row">

<div class="col-sm-2" style="background-color:lavender;">
<a href="SetBudget.php"><h1>
<?php 
  date_default_timezone_set("Asia/Kolkata");
  $currdate= date("Y-m-d");

$sql="SELECT budgetToday from budgettable WHERE date='$currdate' ";
$res=mysqli_query($db,$sql);  

$row=mysqli_fetch_array($res);
$newBudgetToday=$row['budgetToday'];
#$budgetToday=1000;
echo "Set Budget: ",$newBudgetToday ;
?>

</h1>     
</a>

</div>

<div class="col-sm-8" style="background-color:lavenderblush;">
<h1 style="text-align: center;">

</h1>
<form action="add.php" method="POST">
 <?php
//session_start();  
include('db.php');
echo '   <table style="width:50%" align="center" >
  <tr>
    <th>Type</th>
    <th>Descp</th>
    <th>Amount</th>
    <th>Date</th>
    <th>Time</th>
  </tr>';

$sql="SELECT * FROM exptable";
$result_set= mysqli_query($db,$sql);
$sumtoday=0;
    
while ($row=mysqli_fetch_array($result_set))
{
  if($row['date']==$currdate)
  {
    $exptoday=$row['amount'];
    $sumtoday=$sumtoday+$exptoday;
          echo "<tr><td>{$row['exptype']}</td><td>{$row['expdescp']}</td><td>{$row['amount']}</td><td>{$row['date']}</td><td>{$row['time']}</td></tr>\n";
  }
}
mysqli_query($db,$sql);

?>



<h2 style="text-align: center;"><br />&nbsp; 
	Expense type: <select name='exptype'>
  <option value="Food">Food</option>
  <option value="Trvel">Travel</option>
  <option value="Stationery">Stationery</option>
  <option value="Miscellaneous">Miscellaneous</option>
</select>
<br/>  <br />&nbsp; Expense descp: <input name="expdesc" type="text" /><br/>  <br />
  Amount: <input name="expamt" type="number" />
<br><br>
<!--
<button type="submit" name="register_btn" class="btn btn-success-lg">Add expense</button>
<button type="submit" name="register_btn" class="btn btn-info">Clear</button>
--> 
<input name="AddExpBtn" type="submit" value="Add" />


<input name="clear" type="submit" value="Clear" />
 <br /><br /><br /><br /> 
 <?php 
$leftover=$newBudgetToday-$sumtoday;
echo 'Remaining: ',$leftover;
 ?>
</h2>
</form>
</div>

<div class="col-sm-2" style="background-color:lavender;">
<h1>
<?php
echo "Expense Today: ",$sumtoday;
//echo 'Money left',$leftover;

?>
</h1>
</div>
 </div>
</div>
 </body>
