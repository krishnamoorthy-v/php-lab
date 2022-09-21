<html>
  <body>
      <form method = "post" action = "add.php">
        Enter the number:
        <input type = "text" name = "num">
        <input type = "submit" name = "submit" value = "submit">
      </form>
      <?php
        if(isset($_POST["submit"]))
        {
          $n = $_POST["num"];
          $sum = 0;
          for($i = 0; $i<= $n; $i++)
            $sum += $i;
          echo "The sum of series from 0 to $n is : $sum";
    }
?>
  </body>
</html>
