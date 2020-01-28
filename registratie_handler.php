<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      foreach ($_POST as $key => $value) {
        ?> <div class=""> <?php
        echo "Jouw $key is $value";
        ?> </div> <?php
      }
    ?>

  </body>
</html>
