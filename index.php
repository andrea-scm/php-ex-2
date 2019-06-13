
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <?php
      $psw = $_GET["password"];
      $color = '';

      if ($psw === 'Boolean'){
        $color .= 'green';
      }else{
        $color .= 'red';
      }

      echo "<h3 id = $color> $psw</h3>"
    ?>
  </body>
</html>
