<?php include 'connect_database.php';  ?>

<?php

mysql_select_db("idss", $con);

$select_form = '<form action="insert_place-field.php" method="post">';

$select_form .= '<table class="contain"><tr>';

$select_form .= '<td> Place <br/>';

$select_form .= '<select name="place">';

$all_places = mysql_query("SELECT distinct name FROM tbl_place");
$n_places = mysql_affected_rows();

for($d=0;$d<$n_places;$d++) {
$this_place =  mysql_fetch_array($all_places);

      $select_form .= '<option value=';
      $select_form .= $this_place[0];
      $select_form .='>';
      $select_form .=$this_place[0];
      $select_form .='</option>';
    }
$select_form .= '</select></td>';

$select_form .= '<td> Field <br/>';

$select_form .= '<select name="field">';

$all_fields = mysql_query("SELECT distinct name FROM tbl_fields where name != 'other' ");
$n_fields = mysql_affected_rows();

for($d=0;$d<$n_fields;$d++) {
$this_field =  mysql_fetch_array($all_fields);
      $select_form .= '<option value=';
      $select_form .=$this_field[0];
      $select_form .='>';
      $select_form .=$this_field[0];
      $select_form .='</option>';
    }

$select_form .= '</select>';



$select_form .= ' </td>';

$select_form .= ' <td> Opportunity Description: <br/><input type="text" name="opp" />';


$select_form .= ' </td>';




$select_form .= '<tr><td ><br/><input type="submit" value="  save  "/></td></tr>';

$select_form .='</table>';
$select_form .='</form>';

?>