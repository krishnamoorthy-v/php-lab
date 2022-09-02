<html>
  <head>
    <title>
      Greater number
    </title>
  </head>
  <body>
  <h1> Hello everyone</h1>  
  <form action = "greater.php" method="post">
      Age:
      <input type = "text" name = "age" >
      <input type = "submit" value = "submit" name = "submit">
    </form>
    <?php
      if(isset($_POST["submit"]))
      {
        trace_age($_POST["age"]);
      }
      function trace_age($n)
      {
       echo $n < 40 ? ("age greater than 40"):( $n < 30 ? ("age greater than 30"):($n < 20 ?"age is greater than 20":"your not eligible"));
}
  ?>
  </body>
</html>
