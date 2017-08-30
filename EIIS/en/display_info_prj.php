<?php include 'styling/include_master.php';  ?>


<?php 

echo $page_header;
echo $page_top_body;
echo $page_upper_menu;
echo $page_right_menu;

?>



<?php /* TO DO: here you make html code , javascript any work you want */ ?>
<?php include 'connect_database.php';  ?>


<?php

mysql_set_charset('utf8',$con); 
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $con);

mysql_select_db("idss", $con);
?>

<?php
$prj_name =  $_GET['q'];
$project =  mysql_query("SELECT * FROM tbl_field_projects where project_name = '".$prj_name."';");
$project_detail = mysql_fetch_array($project);
?>

<?php 


echo "<table width='100%' >";

		
		
		echo "<tr><td class='found_n'>".$project_detail[1]." Project  </td></tr>";

		echo "<tr><td><h4 class='found_sub'>Project description: </h4><p class='found_item'> <img src='".$project_detail[4]."' /> ".$project_detail[2]." </p> </td></tr>";
		echo "<tr><td><h4 class='found_sub'>Place: </h4><p class='found_item'><img src='' /> ".$project_detail[6]."</p> </td></tr>";
		echo "<tr><td><h4 class='found_sub'>Project average budget:</h4><p class='found_item'> ".$project_detail[5]."L.E.</p> </td></tr>";
		echo "<tr><td><h4 class='found_sub'>Investment Field:</h4><p class='found_item'> ".$project_detail[3]."</p> </td></tr>";

		echo "<tr><td><h4 class='found_sub'>Risk description (if any): </h4><p class='found_item'> ".$project_detail[8]."</p> </td></tr>";
		echo "<tr><td><h4 class='found_sub'>Risk effect: </h4><p class='found_item'> ".$project_detail[7]."%</p> </td></tr>";
		echo "<tr><td><h4 class='found_sub'>Risk Overcome method: </h4><p class='found_item'> ".$project_detail[9]."</p> </td></tr>";

		echo "<tr><td><hr/> </td></tr>";



echo "</table >";
?>


<?php mysql_close($con); ?>
<?php echo $page_footer; 

echo $bottom_website_footer ;

echo $page_end;
?>

