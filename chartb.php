

<?php
//session_start();
include('db.php');

 $query = "SELECT exptype,COUNT(*),SUM(amount) AS number FROM exptable WHERE month=8 GROUP BY exptype";  
 $result = mysqli_query($db, $query);  

//SELECT exptype,COUNT(*) AS number FROM exptable GROUP BY exptype 
//SELECT exptype,COUNT(*) AS number FROM exptable WHERE month=8 GROUP BY exptype 

?>

  <!DOCTYPE html>
  <html>
  <head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


  <style>
  body {margin:0;

  }

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
  </style>

  </head>
  <body>

  <div class="navbar">
    <a href="index.php" style="font-size: 3vh;">SELF EXP</a>
    <a href="dailyexp.php" style="font-size: 3vh;">Daily</a>
    <a href="month.php" style="font-size: 3vh;">Monthly</a>
    <a href="chart.php" style="font-size: 3vh;">Charts</a>
  </div>
</body>





<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	google.charts.load('current',{'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['exptype', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["exptype"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Overall Percentage of expenditure type',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
</script>
<body>
	<div id="piechart" style="width: 900px; height: 500px;"></div>
</body>