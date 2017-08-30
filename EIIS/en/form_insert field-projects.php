<?php include 'connect_database.php';  ?>

<?php

mysql_select_db("idss", $con);

$select_form = '<form action="insert_field-projects.php" method="post">';

$select_form .= ' <table class="contain" broder="2"><tr>';

$select_form .= ' <td>';
$select_form .= '<b> Field</b><br/><br/>Select Field ';

$select_form .= '<select name="field"> ';

$all_fields = mysql_query("SELECT distinct name FROM tbl_fields");
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


$select_form .= '<td><b> Place</b> <br/><br/> Select Place ';

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


$select_form .= '<td>';

$select_form .= ' <table broder="2">';
$select_form .= ' <tr><td colspan="4">';
$select_form .= ' <b> Projects:</b> <br/></td></tr>';


$select_form .= '<tr> ';
$select_form .= ' <td> Name:<br/> <input type="text" name="prj_name" /></td>';
$select_form .= '';
$select_form .='<td> Description:<br/> <input type="text" name="prj_desc" /></td>';
$select_form .='<td> Image path: <br/> <input type="text" name="prj_img" /></td>';
$select_form .='<td> Average budget(L.E.): <br/> <input type="text" name="prj_bud" /></td>';
$select_form .= '</tr>';

$select_form .= ' </table>';


$select_form .= '</td></tr>';

$select_form .= '<tr><td><input type="submit" value="  save  "/></td></tr>';

$select_form .= ' </table>';

$select_form .='</form>';

?>