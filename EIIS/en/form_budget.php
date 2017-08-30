<?php include 'connect_database.php';  ?>

<?php

mysql_select_db("idss", $con);

$select_form = '<form action="search_budget.php" method="post">';

$select_form .= '<table class="contain"><tr>';

$select_form .= '<td> Start From: <br/>';

$select_form .= '<select name="From">';

$start_value = 10000;
for($d=0;$d<5;$d++) {

      $select_form .= '<option value=';
      $select_form .= $start_value;
      $select_form .='>';
      $select_form .=$start_value;
      $select_form .='</option>';
     $start_value *= 10;
    }
$select_form .= '</select></td>';

$select_form .= '<td> Up To: <br/>';

$select_form .= '<select name="To">';


$start_value = 100000;
for($d=0;$d<5;$d++) {

      $select_form .= '<option value=';
      $select_form .= $start_value;
      $select_form .='>';
      $select_form .=$start_value;
      $select_form .='</option>';
     $start_value *= 10;
    }

$select_form .= '</select>';



$select_form .= ' </td></tr><tr><td><br/></td><td><br/></td><td><br/></td><td><br/></td></tr>';





$select_form .= '<tr><td ><br/><input type="submit" value="  Search  "/></td></tr>';

$select_form .='</table>';
$select_form .='</form>';

?>