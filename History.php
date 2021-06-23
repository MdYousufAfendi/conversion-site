<!DOCTYPE html>
  <html lang="en">
  <head>
    
    <title>PHP IO</title>
  </head>
  <body>
    <h1>Page-3 [History]</h1>
    
    <?php
      define("filepath", "history.txt");

    
      // validate input
    function basic_validation($data)
    {
      $data = trim($data);
      $data = htmlspecialchars($data);
      $data = stripcslashes($data);
      return $data;
    }


    ?>



    <form action="<?php echo htmlspecialchars(($_SERVER['PHP_SELF'])); ?>" method = "POST">

    <a href="http://localhost/WT/home.php">1.Home</a>
    <a href="http://localhost/WT/conversion.php">2.Conversion Rate</a>
    <a href="http://localhost/WT/history.php">3.History</a>
<label><h3>History :</h3></label>
      
      


    </form>




  </body>
  </html>