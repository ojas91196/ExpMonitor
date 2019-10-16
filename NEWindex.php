  <!DOCTYPE html>
  <html>
  <head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


  <style>
  body {
    margin:0;
       background-image: linear-gradient(#4ACBF3 , #F4FF81); /*#4ACBF3 , #EDC560 Standard syntax (must be last) */
  background-position: center center;
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;  
      height: 100vh;
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

<div class="container">
  <br>
  <div class="card-columns">
  <div class="card" style="width:100%; height: 30vh">
    <img class="card-img-top" src=".png" alt="Budget" style="width:100%">
    <div class="card-body" style="padding: 0em;">
      <h1 class="card-title">$20</h1>
      <a href="#" class="btn btn-primary" style="margin-left: 1em">Enter</a>
    </div>
  </div>
<div class="card" style="width:100%; height: 30vh">
    <img class="card-img-top" src=".png" alt="Budget" style="width:100%">
    <div class="card-body" style="padding: 0em;">
      <h1 class="card-title">$20</h1>
      <a href="#" class="btn btn-primary" style="margin-left: 1em">Enter</a>
    </div>
  </div>

</div>
  

</body>