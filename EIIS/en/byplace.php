<?php include 'styling/include_master.php'; ?>


<?php 

echo $page_header;
echo $page_top_body;
echo $page_upper_menu;
echo $page_right_menu;

?>



<?php /* TO DO: here you make html code , javascript any work you want */ ?>
<?php include 'connect_database.php';  ?>
<h1>Search By Egypt Map</h1>

<?php
mysql_select_db("idss", $con);

echo '<div id="stretch">';
echo '<div class="map" >';
echo '<table class="map" >';

for($row=0; $row<20;$row++)
{

echo '<tr>';
for($col=0; $col<20;$col++)
{

$get_img = "SELECT distinct icon_path FROM  tbl_place_fields pf,tbl_place p,tbl_fields f";
$get_img .= "  where p.row = '".$row."' and p.col = '".$col."' and p.name = pf.place_name and pf.field_name =  f.name;";

$result = mysql_query($get_img);
$img = mysql_fetch_array($result);
$n_img = mysql_affected_rows();
if($n_img<=1)
 {echo '<td class="map"><a href="display_fields_for_place.php?r='.$row.'&c='.$col.'"> <img class="map"  src="'.$img[0].'"/>   </a></td>';}
else
{echo '<td class="map"><a href="display_fields_for_place.php?r='.$row.'&c='.$col.'"> <img class="map"  src="./images/many.GIF"/>   </a></td>';}
}
echo '</tr>';
}

echo '</table>';
echo '</div>';
echo '</div>';
?>

<?php mysql_close($con); ?>
<?php echo $page_footer; 

echo $bottom_website_footer ;

echo $page_end;
?>

