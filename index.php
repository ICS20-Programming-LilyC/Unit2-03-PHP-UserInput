<!DOCTYPE html>
<html lang="en-ca">
  <head>

    <!-- Meta data -->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage with user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Lily C">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.pngg">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Title -->
    <title>User Input with PHP</title>
  </head>
  <body>
    <?php echo "<h1>User Input in PHP</h1>" ?>
    <form action="./welcome.php" method="post" target="result">
      <label for="first-name">First Name</label>
      <input type="text" id="first-name" placeholder="Your Name" name="first-name">
      <br><br>
      <label for="age">Age</label>
      <input type="text" id="age" placeholder="Your Age" name="age">
      <br><br>
      <input type="submit" value="Enter">
      <br><br>
    </form>
    <div id="result"></div>
    <center>
      <iframe id="result" name="result">
        Your first name is <?php echo $_POST["first-name"]; ?> and your age is <?php echo $_POST["age"]; ?>.
      </iframe>
    </center>
  </body>
</html>