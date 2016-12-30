
<?php include 'partials/form.php'; ?>

<div class="checker col-xs-12 text-center">
  <?php

    // Checking ot see if the file uploaded successfully. If so, let the user know that it worked.

      if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
      echo "<p class=''>" . $_FILES['filename']['name'] . " uploaded successfully</p>";
    } else {
      if(UPLOAD_ERR_NO_FILE) {
        echo '<p class="warning">No file was uploaded</p>';
        die;
      }
    }





  ?>
</div>
