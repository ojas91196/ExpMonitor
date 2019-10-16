 <?php
//session_start();

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
  .myTable tr:nth-last-child(1){background-color: #000000;
    border-bottom: none;
}



.label {
  color: white;
  padding: 8px;
  font-family: Arial;
  border-radius: 4em;
}
.success {background-color: #4CAF50;} /* Green */
.info {background-color: #2196F3;} /* Blue */
.warning {background-color: #ff9800;} /* Orange */  
.danger {background-color: #f44336;} /* Red */ 
.other {background-color: #e7e7e7; color: black;} /* Gray */ 
.newcol {background-color: #FFCCBC; color: black;} /* Gray */ 



  </style>
<!--

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
  }

  .myTable tr:nth-child(even){background-color: #fff7ab;}
  .myTable tr:nth-last-child(1){background-color: #000000;
    border-bottom: none;
}
-->
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
//session_start();  
include('db.php');
echo '   <table style="width:80%; font-size:3vh;" align="center"  class="myTable">
  <tr style="align:center;">
    <th><span class="label newcol" style="font-size:3vh;">Month</span></th>
    <th><span class="label newcol" style="font-size:3vh;">Budget</span></th>
    <th><span class="label newcol" style="font-size:3vh;">Expense</span></th>
    <th><span class="label newcol" style="font-size:3vh;">Saved</span></th>
  </tr>';

#SELECT SUM(exptable.amount),exptable.month,exptable.year FROM exptable GROUP By month
#SELECT SUM(budgettable.budgetToday),budgettable.month,budgettable.year FROM budgettable GROUP By budgettable.month  

#SELECT SUM(exptable.amount),exptable.month,exptable.year,SUM(budgettable.budgetToday) FROM exptable,budgettable WHERE exptable.month=budgettable.month GROUP BY month


$sql="SELECT * FROM budgetsum INNER JOIN expsum WHERE budgetsum.month=expsum.month";
$result_set= mysqli_query($db,$sql);
$sumtoday=0;
$sumtotal=0;
$totsaved=0;
$totspent=0;    
$totbud=0;

while ($row=mysqli_fetch_array($result_set))
{
    $bud=$row['allBudget'];
    $spent=$row['allExp'];     
    $saved=$bud-$spent;
    $totbud=$totbud+$bud;
    $totsaved=$totsaved+$saved;
    $totspent=$totspent+$spent;
    $monthno = $row['month'];    
    $monthname =  date("F", mktime(0, 0, 0, $monthno, 10));

//          echo "<tr><td>{$monthname}</td><td>{$row['SUM(budgetToday)']}</td><td>{$row['SUM(amount)']}</td>";
          echo "<tr><td><a href='charts.php?month=".$monthno."'>".$monthname."</a></td><td>{$row['allBudget']}</td><td>{$row['allExp']}</td>";
          //ehco '<a href='newcharts.php?date=".$ndate."'>".$newDate."</a>';
          //echo '<tr><td>{$monthname}</td><td>{$row["SUM(budgetToday)"]}</td><td>{$row["SUM(amount)"]}</td>';
          if($saved>=0)
          {	
          echo "<td><span class='label success' style='font-size:3vh;'>{$saved}</span></td></tr>\n";
      }else
      {
      	 echo "<td><span class='label danger' style='font-size:3vh;'>{$saved}</span></td></tr>\n";
      }
     $sumtotal=$sumtotal+$saved;
}
echo "<br><div style='text-align:center'><span class='label other' style='font-size:5vh;'><b>TOTAL SAVINGS :</span> ";
if($sumtotal>=0)
{
  echo "<span class='label success' style='font-size:5vh;'>";
  echo "",$sumtotal,"</span></tr><br><br>";
	echo '<tr style="background-color: #00ff00;">';
}
else
{
  echo "<span class='label danger' style='font-size:5vh;'>";
  echo "",$sumtotal,"</span></tr>";
	echo '<tr style="background-color: #ff0000;">';
}
//echo "",$sumtotal,"</font></h1></tr>";

echo '<td><b>Total</b></td><td><b>',$totbud,'</b></td><td><b>',$totspent,'</b></td><td><b>',$totsaved,'</b></td></tr></table>';

mysqli_query($db,$sql);
?>

