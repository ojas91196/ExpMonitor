<?php
  include('db.php');
?>




  <!DOCTYPE html>
  <html>
  <head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


  <style>
  body {margin:0;}

  .navbar {
    overflow: hidden;
    background-color: #333;
    position: fixed;
    bottom: 0;
    width: 100%;
  }
 .topbar {
    overflow: hidden;
    position: fixed;
    bottom: 100;
    width: 103%;
  }

  .navbar a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 4px 3px;
   }

  .navbar a:hover {
    background: #ddd;
    color: black;
  }

  .main {
    padding: 16px;
    margin-bottom: 30px;
    height: 1500px; 
  }

  /* Create two equal columns that floats next to each other */
  .column {
    float: left;
    width: 100%;
    padding-left: 15px;
    text-align: center; 
  }

  /* Clear floats after the columns */
  .row:after {
    content: "";
    clear: both;
  }

  .row{
    margin-right: 0px;
  }

.block {
  display: block;
  width: 100%;
  border: none;
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  font-weight: bold;
} 


.myTable { 
  background-color: lemonchiffon;
  border-collapse: collapse; 
  border: 1px solid DarkOrange;
  border-radius: 13px; 
  border-spacing: 0;
  }
.myTable th { 
  background-color: goldenrod;
  color: white; 
  }
.myTable td, 
.myTable th { 
  padding: 10px;
  border-bottom: 1px solid DarkOrange;
  padding: 10px; 
  text-align: center;
  }

  .myTable tr:nth-child(even){background-color: #fff7ab;}
  .myTable tr:nth-last-child(1){background-color: #ffff00;
    border-bottom: none;
}

  </style>
</head>

  <body background="bluebg.jpg">

  <div class="navbar">
    <a href="index.php" style="font-size: 3vh;">SELF EXP</a>
    <a href="dailyexp.php" style="font-size: 3vh;">Daily</a>
    <a href="month.php" style="font-size: 3vh;">Monthly</a>
    <a href="chart.php" style="font-size: 3vh;">Charts</a>
  </div>
</body>





<?php
  if (isset($_GET['date']));
  {
  	$getDate = $_GET['date'];

  	#$sql="SELECT budgetToday from budgettable WHERE date='$getDate' ";
	#$res=mysqli_query($db,$sql);
	#$row=mysqli_fetch_array($res);

$sql1='SELECT * FROM `dailyexp` ;';
$result_set1=mysqli_query($db,$sql1);
while ($row=mysqli_fetch_array($result_set1)) {
 if($row['date']==$getDate)
  { 
  $bud=$row['budgetToday'];
  $expense=$row['SUM(exptable.amount)'];
}
}

echo "<h1 style='text-align:center'>".$getDate."</h1>";
echo '<table style="width:80%; font-size:3vh;" align="center"  class="myTable">
  <tr style="align:center;">
    <th>Type</th>
    <th>Descp</th>
    <th>Amount</th>
    <th>Time</th>
  </tr>';

$sql="SELECT * FROM exptable";
$result_set= mysqli_query($db,$sql);
$sumtoday=0;
    
while ($row=mysqli_fetch_array($result_set))
{
  if($row['date']==$getDate)
  {
    $exptoday=$row['amount'];
    $sumtoday=$sumtoday+$exptoday;
          echo "<tr><td>{$row['exptype']}</td><td>{$row['expdescp']}</td><td>{$row['amount']}</td><td>{$row['time']}</td></tr>\n";
  }
}

$remainder=$bud-$sumtoday;
echo '';
if($bud<$sumtoday)
{
echo '<tr><td><b>Total</b></td><td><button class="btn btn-info">',$bud,'</button></td><td><b><button class="btn btn-info">',$sumtoday,'</button></b></td><td><button class="btn btn-daanger">',$remainder,'</button></td></tr></table>';
}else{
echo '<tr><td><b>Total</b></td><td><button class="btn btn-info">',$bud,'</button></td><td><b><button class="btn btn-info">',$sumtoday,'</button></b></td><td><button class="btn btn-success">',$remainder,'</button></td></tr></table>';
}
mysqli_query($db,$sql);
}
?>            