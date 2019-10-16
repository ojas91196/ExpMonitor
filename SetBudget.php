  <?php
    //session_start();
    include('db.php');
    date_default_timezone_set('Asia/Kolkata');
    $currdate=date('Y-m-d');
    ?>


<!--
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
  </style>

  </head>
  <body background="bluebg.jpg">

  <div class="navbar">
    <a href="index2.php" style="font-size: 3vh;">SELF EXP</a>
    <a href="dailyexp.php" style="font-size: 3vh;">Daily</a>
    <a href="month.php" style="font-size: 3vh;">Monthly</a>
    <a href="chart.php" style="font-size: 3vh;">Charts</a>
  </div>

<div class="container" style="width: 103%; margin: 10vh; margin-top:14vh ; text-align: center;">
  <div class="row">
      <div class="col-sm-12" style="background-color:yellow; ">
      	<form method="POST" action="addBudget.php">
      	<span class="align-middle">
<div class="form-group input-group-lg" style="padding-top: 10vh; padding-bottom: 5vh;">
      <label style="font-size: 6vh;"><b>Set budget for today:   </b></label>  
      <input type="text" class="form-control input-lg" placeholder="Budget Amount" name="setBdgtBtn">
    </div>
    <div style="padding-bottom: 5vh;">
      	 <button type="submit"  name="BudgtBtn" class="btn btn-info btn-md">Set Budget Amount</button>
      	</div>
        </span>
      	</form>
     </div>
  </div>
</div>
</body>

</html>
-->


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


     <div class="col-sm-12" style="background-color:yellow; margin-top: 20vh;">
        <form method="POST" action="addBudget.php">
        <span class="align-middle">
<div class="form-group input-group-lg" style="padding-top: 2vh; padding-bottom: 5vh;">
  <?php
  echo "<label style='font-size: 6vh;'><b>".$currdate."</b></label>";
  ?>
      <label style="font-size: 6vh;"><b>Set budget for today:   </b></label>  
      <input type="text" class="form-control input-lg" placeholder="Budget Amount" name="setBdgtBtn">
    </div>
    <div style="padding-bottom: 5vh;">
         <button type="submit"  name="BudgtBtn" class="btn btn-info btn-md">Set Budget Amount</button>
        </div>
        </span>
        </form>
     </div>


</body>

