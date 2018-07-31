<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>
    <p>
     <?php
     if(isset($_GET['firstname']) && isset($_GET['lastname'])){ // On a le nom et le prénom
         echo $_GET['firstname'] . ' ' . $_GET['lastname'];
     }
     ?>
  </body>
</html>
