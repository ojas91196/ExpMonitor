  <?php
    //session_start();
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
    width: 50%;
    padding-left: 15px;
    height: 50vh; /* Should be removed. Only for demonstration */
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

  </style>

  </head>
  <body>

  <div class="navbar">
    <a href="index2.php" style="font-size: 3vh;">SELF EXP</a>
    <a href="dailyexp.php" style="font-size: 3vh;">Daily</a>
    <a href="month.php" style="font-size: 3vh;">Monthly</a>
    <a href="chart.php" style="font-size: 3vh;">Charts</a>
  </div>

  <!--
  <div class="main">
    <h1>Fixed Bottom Menu</h1>
    <h2>Scroll this page to see the effect</h2>
    <h2>The navigation bar will stay at the bottom of the page while scrolling</h2>
    
    <p>Some text some text some text some text..</p>
    <p>Some text some text some text some text..</p>
    <p>Some text some text some text some text..</p>
    <p>Some text some text some text some text..</p>
    <p>Some text some text some text some text..</p>
    <p>Some text some text some text some text..</p>
    <p>Some text some text some text some text..</p>
    <p>Some text some text some text some text..</p>
    <p>Some text some text some text some text..</p>
    <p>Some text some text some text some text..</p>
    <p>Some text some text some text some text..</p>
    <p>Some text some text some text some text..</p>
    <p>Some text some text some text some text..</p>
    <p>Some text some text some text some text..</p>
    <p>Some text some text some text some text..</p>
    <p>Some text some text some text some text..</p>
    <p>Some text some text some text some text..</p>
    <p>Some text some text some text some text..</p>
    <p>Some text some text some text some text..</p>
    <p>Some text some text some text some text..</p>
  </div>

  -->
  <div class="column" style="width: 20%; background-color:lavender; " >
    <div class="row" style="height: 50%; background-color: white;">1st</div>
    <div class="row" style="height: 50%; background-color: gray;">1st</div>
  </div>

  <div class="column" style="width: 60%">sa</div>

  <div class="column" style="width: 20%; background-color:lavender;">
    <div class="row" style="height: 50%; background-color: white;">1st</div>
    <div class="row" style="height: 50%; background-color: gray;">1st</div>
  </div>

  <div class="column" style="width: 100%">
      <h1>&nbsp</h1>
      <h1>&nbsp</h1>
      <h1>TODATYS EXP</h1>
  <table style="width:100; font-size: 3vh;" align="center"  >
    <thead>
      <tr>
        <th>Date</th>
        <th>Budget&nbsp&nbsp</th>
        <th>Spent&nbsp&nbsp</th>
        <th>Saved&nbsp&nbsp</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>2019-07-06</td>
        <td>1000</td>
        <td>200</td>
        <td>800</td>
      </tr>

      <tr>
        <td>2019-07-06</td>
        <td>1000</td>
        <td>200</td>
        <td>800</td>
      </tr>

      <tr>
        <td>2019-07-06</td>
        <td>1000</td>
        <td>200</td>
        <td>800</td>
      </tr>

      <tr>
        <td>2019-07-06</td>
        <td>1000</td>
        <td>200</td>
        <td>800</td>
      </tr>

    </tbody>
  </table>
  </div>
  </body>
  </html>