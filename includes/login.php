<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <link rel="stylesheet" href="includes/style.css">
    <title>Forms</title>
  </head>
  <body>
    <main>
    <h2 class="form-title">Welcome</h2>
    <section>
    <?php
      $un = $_GET["reg_un"];
      $pw = $_GET["reg_pass"];

      if ($un == "david" && $pw == "123456"){
        echo "<h1>Hey good day to " . $un . "</h1>";
      }else{
        echo "<h1>Sorry" . $un . " who the f... are you?</h1>";
      }

     ?>
     </section>
     </main>
  </body>
</html>
