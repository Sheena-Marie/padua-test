<?php

$handle = fopen($_FILES['filename']['tmp_name'], "r");

// Original example of this code had this as false, but as the question said that the CSVs would alwasy be correct, I've switched this to true to give the table a header.
$header = true;


  // Creating a Header for the table.
  if($header) {
    $csvcontents = fgetcsv($handle);
    echo '<thead class="thead">';
      echo '<tr>';
      foreach ($csvcontents as $headercolumn) {
        echo '<th>' . $headercolumn . '</th>';
      }
      echo '</tr>';
    echo '</thead>';

  // Putting the rows in underneath
  }
  while ($csvcontents = fgetcsv($handle)) {
    echo '<tbody class="tbody">';
      echo '<tr>';
      foreach ($csvcontents as $column) {

        /*
        Attempting to get the 'Amount' column to convert to currency.  Code is currently not working.
        Getting this error: money_format() expects parameter 2 to be   double, string given
          setlocale(LC_MONETARY, 'en_AUS');
          if ($column[4]) {
          $money = money_format('%#xn', $column[4]);
          echo $money;
          }

          /*
          Code for sorting the rows by date to go here?
          Would it be a mysqli_query ?? Would this work after the CSV has   been parsed to the screen?

          mysqli_query('SELECT date FROM $handle ORDER BY date DESC');

          - Would something like that work? Can you even put PHP like that  into SQL querys??

          More research needed!
          */



          echo '<td>' . $column  . '</td>';
        }
        echo '</tr>';
    echo '</tbody>';
  }

?>
