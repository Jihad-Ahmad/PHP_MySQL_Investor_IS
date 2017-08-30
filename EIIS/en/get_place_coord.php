<?php include 'styling/include_master.php';  ?>


<?php 

echo $page_header;
echo $page_top_body;
echo $page_upper_menu;
echo $page_right_menu;

?>



<?php /* TO DO: here you make html code , javascript any work you want */ ?>

<?php
echo '<div id="stretch">';
echo '<div id="admin" >';
echo '<table class="map"  >';

for($row=0; $row<20;$row++)
{

echo '<tr>';
for($col=0; $col<20;$col++)
{
 echo '<td class="map"><a href="display_coords_for_place.php?r='.$row.'&c='.$col.'"><img  src="./styling/images/tip.png"   /></a></td>';
}
echo '</tr>';


}

echo '</table>';
echo '</div>';
echo '</div>';
?>


<?php echo $page_footer; 

echo $bottom_website_footer ;

echo $page_end;
?>

