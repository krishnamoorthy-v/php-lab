<html>
  <head>
    <title>
      Krishna
    </title>
  </head>
  <body>
    <h1> using php to print the name that entered in text box</h1>
    <form action = "name.php" method  = "post">
      <input type = "text" name = "name" size = 20>
      <input type = "submit" name = "submit" value = "submit">
    </form>
    <?php
      if(isset($_POST["submit"]))
      {
        $name = $_POST["name"];
        echo "Welcome to our website $name ";
      }
    ?>
  </body>
</html>

