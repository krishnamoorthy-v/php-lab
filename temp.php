<html>
<head><title> temp</title></head>
  <body>
    <form method ="post" action = "temp.php">
      Enter the number of temperature: 
      <input type = "number" name = "num">
      <input type= "submit" name = "get" value = "get">

      <?php

         if(isset($_POST["get"]))
         {

          echo "<br><table>";
           $n = $_POST["num"];
           for($i = 1; $i <= $n; $i++)
           {
             echo "<tr><td>";
             echo "Temp $i";
             echo "</td><td>";
              echo "<input type = 'number'  name = 'temp[]'>";
              echo "</td></tr>";
           }
           echo "</table>";
        }
?>
  
      <input type ="submit" name = "submit" value = "submit">  

      <?php
          if(isset($_POST["submit"]))
          {
            $temp = $_POST["temp"];
            asort($temp);
            echo "<br>Entered temperature: ";
            $sum = 0;
            
            foreach($temp as $value)
            {
              $sum += $value;
              echo "$value, ";
            }

            $avg = $sum/count($temp);
            echo "<br>Average temperature: $avg";
            $low = array_slice($temp, 0, 5);
  
            echo "<br>Five lowest : ";
            foreach($low as $value)
              echo "$value, ";

            echo "<br>Five greatest : ";
            $high = array_slice($temp, -5, 5);
            foreach($high as $value)
              echo "$value, ";
          } 
     ?>
  </form>
</body>
</html>
