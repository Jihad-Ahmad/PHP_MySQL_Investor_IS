
<?php

$select_form = '<form action="insert_coord_place.php" method="post">';

$select_form .= '<table class="contain"><tr>';
$select_form .= '<td> Place name:  <br/><input type="text" name="esm" /> </td>';


$select_form .= '</tr><tr><td> coordinate: row,col <br/>';

$select_form .= '<select name="row">';


for($d=0;$d<=39;$d++) {
      $select_form .= '<option value=';
      $select_form .= $d;
      $select_form .='>';
      $select_form .=(($d<=9)?"0":"").$d;
      $select_form .='</option>';
    }
$select_form .= '</select>';

$select_form .= '<select name="col">';


for($d=0;$d<40;$d++) {
      $select_form .= '<option value=';
      $select_form .=$d;
      $select_form .='>';
      $select_form .=(($d<=9)?"0":"").$d;
      $select_form .='</option>';
    }

$select_form .= '</select>';



$select_form .= ' </td></tr><tr><td><br/></td><td><br/></td><td><br/></td><td><br/></td></tr>';





$select_form .= '<tr><td ><br/><input type="submit" value="  save  "/></td></tr>';

$select_form .='</table>';
$select_form .='</form>';

?>