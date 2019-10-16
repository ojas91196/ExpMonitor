  <?php
    //session_start();
    include('db.php');
    date_default_timezone_set('Asia/Kolkata');
    $currdate=date('Y-m-d');
    ?>
  <!--

#4ACBF3 Blue + #90EE02 Green = GOOD SIDE
#4ACBF3 Blue + #EDC560 Yellow = OK





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
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
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
-->

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
  <!--
  <div class="column" style="width: 33%; height: 20vh; background-color:lavender; " >
    <div class="row" style="height: 100%; background-color: gray; font-size: 3vh;">BUDGET</div>
  </div>

  <div class="column" style="width: 34%; height: 20vh;">SPENT</div>

  <div class="column" style="width: 33%; height: 20vh; background-color:lavender;">
    <div class="row" style="height: 100%; background-color: gray;">REMAINING</div>
  </div>

  <div class="column" style="width: 100%">
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
 

 <div class="column" style="height: 15vh; background-color:lavender;">Helo worlss



 </div>

 <div class="column" style="height: 50vh;">lorem ipsum</div>
-->



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
<!--

     <button type="submit" class="btn btn-info" name="AddExpBtn">Home</button>
    <button type="submit" class="btn btn-info" name="AddExpBtn">Daily</button>
    <button type="submit" class="btn btn-info" name="AddExpBtn">Monthly</button>
     -->

  </div>


    <div class="row topbar" style="height:15vh; background-color:lavender;">
        <div class="align-self-center" style="width: 33%; font-size:15vh ; text-align: center; background-color:gray;">
          <a href="setbudget.php">
            <button class="block" style="background-color:#00ACC1; height: 15vh; font-size:4vh ">Budget: 
            <?php
//            echo "".$currdate."";
//            $sql='SELECT budgetToday FROM budgettable WHERE date="2019-10-01"';
            $sql='SELECT budgetToday FROM budgettable where date="'.$currdate.'";';
         //   echo $sql;
            $result_set= mysqli_query($db,$sql);

            if($result_set && mysqli_num_rows($result_set))
            {
             while ($row=mysqli_fetch_array($result_set))
            { 
              $budget=$row['budgetToday'];
              echo "₹".$budget;
            }
            }
            else
            {
              echo "0";
              $budget=0;
            }                     
            ?>
            </button>  
          </a>
        </div>
        

        <div class="align-self-center" style="width: 33%; font-size:5vh ; text-align: center; background-color:gray;">
        <a href="#table">
          <button class="block"  style="background-color: #FF3D00; height: 15vh; font-size:4vh ">Spent:
            <?php
  /*
            $sql1='SELECT amount FROM exptable WHERE date="2019-10-01" ';
//            $sql='SELECT amount FROM exptable WHERE date='.$currdate.';';
            $result_set= mysqli_query($db,$sql1);
            if ($result_set <=0)
            {
              echo "0";
              $spent=0;
            } else{
            while ($row=mysqli_fetch_array($result_set))
            { 
              $spent=$row['amount'];
              echo "$".$spent;
            }
          }
*/
            ?>
            <?php
//            $sql='SELECT SUM(exptable.amount) FROM exptable WHERE exptable.date="2019-08-07" ';
            $sql='SELECT SUM(exptable.amount) FROM exptable WHERE exptable.date="'.$currdate.'";';
            $result_set= mysqli_query($db,$sql);
            if($result_set && mysqli_num_rows($result_set))
            {
             while ($row=mysqli_fetch_array($result_set))
            { 
              $spent=$row['SUM(exptable.amount)'];
              echo "₹".$spent;
            }
            }
            else
            {
              echo "0";
              $spent=0;
            }                     
            ?>
           </button>  
        </a></div>

        <div class="align-self-center" style="width: 33%; font-size:5vh ; text-align: center; background-color:gray;">
          <a href="">
            <button class="block" style="background-color: #64DD17; height: 15vh; font-size:4vh ">Purse: 
              <?php 
              $rem = $budget-$spent;
              echo '<b>₹'.$rem.'</b>';
              ?>
            </button>  
          </a>
        </div>

    </div>


    <div class="row">
        <div class="col-xs-12" style="width:100%; text-align: center; font-size: 3vh; margin-top: 17vh;">
  
  <!--
   <div class="dropdown form-group">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Food
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Stationery</a></li>
    <li><a href="#">Travel</a></li>
    <li><a href="#">Other</a></li>
  </ul>
</div> 
-->
<form class="form-horizontal" action="add.php" style="padding: 12vh;" method="POST">
<div class="form-group  input-group-lg">
<select class="form-control" style="height:6vh; font-size: 3vh;  border-radius: 10rem;" name="exptype">
  <option>Food</option>
  <option>Stationery</option>
  <option>Travel</option>   
  <option>Miscellaneous</option>
  <option>Other</option>
</select>
</div>
  
    <div class="form-group input-group-lg">
      <input type="text" style="height:6vh; font-size: 3vh; border-radius: 10rem;" class="form-control input-lg" placeholder="Expense Descp" name="expdesc">
    </div>
    <div class="form-group input-group-lg">
      <input type="number" style="height:6vh; font-size: 3vh;  border-radius: 10rem;"  class="form-control" id="pwd" placeholder="Amount" name="expamt">
    </div>
    <button type="submit" style="height:6vh; font-size: 3vh;  border-radius: 10rem;" class="btn btn-info" name="AddExpBtn">Submit</button>
  </form>
        </div>
    </div>

  </body>
  </html>