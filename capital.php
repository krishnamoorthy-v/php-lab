<head>
  <body>
    <?php
      echo "<h1> The capital of country</h1>";
      $data = array("Delhi" => "India", "Moscow" => "Russia", "Bejing" => "China", "Beljium" => "Germany", "London" => "UK", "New york" => "USA");
      foreach($data as $key => $value)
      {
        echo "The capital of $key is $value.";
        echo "<br>";
      }
   ?>
  </body>
</html>
