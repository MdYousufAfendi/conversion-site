<!DOCTYPE html>
  <html lang="en">
  <head>
    
    <title>PHP IO</title>
  </head>
  <body>
    <h1>Page-1 [Home]</h1>
    
    <?php
      define("filepath", "home.txt");

    if ($_SERVER['REQUEST_METHOD'] === "POST")
    { 
      
      $Value=basic_validation($_POST['Value']);
      $Catagory=basic_validation($_POST['Catagory']);


      

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
<label><h3>Converter :</h3></label>
      
      Select Catagory:
        <select name="Catagory" required > 
          <option value="" name="" ></option> 
          <option value="feet to inchies" name="Catagory" >feet to inchies</option> 
          <option value="inchies to feet" name="Catagory" >inchies to feet</option>
          <option value="kg to gm" name="Catagory" >kg to gm</option>  
        </select>
        <br><br><br>

        <label for="Value">Value :</label>
        <input type="number" id="Value" name="Value" required><br>


      <input type="submit" value="submit">
      <br><br><br>
      <label for="result">Result :</label>
        <input type="result" id="result" name="Result"><br>


    </form>




  </body>
  </html>