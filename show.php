<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test Page</title>
    <?php include 'styling/bootstrap.php'; ?>
    <style> <?php include 'styling/style.css'; ?> </style>
  </head>
  <body>

  <div class="container">
    <div class="container-fluid">

      <?php

        //Upload File
        if (isset($_POST['submit'])) {

          // Checking that the file has uploaded.
          include 'partials/upload_check.php';

          // Putting the table code out into a partial to keep the show page as clean as possible.
          echo '<table class="table table-hover table-sm">';
            include 'partials/table.php';
          echo '</table>';

          fclose($handle);

          echo "<hr>";

          include 'partials/linkto.php';

        } else {

          include 'partials/form.php';

        }

      ?>



    </div>
  </div>

  </body>
</html>
