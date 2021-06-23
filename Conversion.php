<!DOCTYPE html>
  <html lang="en">
  <head>
    
    <title>PHP IO</title>
  </head>
  <body>
    <h1>Page-2 [Conversion Site]</h1>
    
    <?php
      define("filepath", "conversion.txt");

    if ($_SERVER['REQUEST_METHOD'] === "POST")
    { 
      $Catagory=basic_validation($_POST['Catagory']);
      $Unit=basic_validation($_POST['Unit']);
      $Rate=basic_validation($_POST['Rate']);
      
      

    }

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

      
<label><h3>Convertion Rate :</h3></label>
      
     
        <label for="catagory">Catagory :</label>
        <input type="text" id="catagory" name="Catagory" required>

        <label for="Unit">Unit :</label>
        <input type="number" id="Unit" name="Unit" required>

        <label for="Rate">Rate :</label>
        <input type="number" id="Rate" name="Rate" required>


      <input type="submit" value="submit">
      <br><br><br>


    </form>




  </body>
  </html>