<!DOCTYPE html>
<!-- Unit4-04-PHP-Museum-->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Museum">
    <meta name="keywords" content="immaculata, ICS2O">
    <meta name="author" content="Noah Smith">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
  
    <!--Link to CSS file-->
    <link rel="stylesheet" href="./css/style.css">
  
    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">

    <!--Title-->
    <title>Museum Admission</title>
  
  </head>
  <body>
    
    <!--Header-->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Museum Admission</span>
        </div>
      </header>
    </div>
    <main class="mdl-layout__content">
    <img src="./images/museum.webp" alt="museum" height="230" width="300">
    <img src="./images/museum_trex.jpg" alt="t rex museum" height="230" width="300">
    
      <!-- Select day of the week -->
      <form action="./results.php" method="post" target="results">
        <label for="days">Select the day of the week:</label>
        <select name="days" id="days">
          <option value="monday">Monday</option>
          <option value="tuesday">Tuesday</option>
          <option value="wednesday">Wednesday</option>
          <option value="thursday">Thursday</option>
          <option value="friday">Friday</option>
          <option value="saturday">Saturday</option>
          <option value="sunday">Sunday</option>
        </select>
      </form>

      <!-- Get user's age -->
    <form action="./results.php" method="post" target="results">
      <label for="user-age">Enter your age:</label>
      <input type="number" id="user-age" placeholder="Enter your age..."  name="user-age">
      <br>
      <input type="submit" value="calculate">
    </form>
        <iframe id="results" name="results">
        </iframe>
    </main>
  </body>
</html>