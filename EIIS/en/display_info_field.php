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
$field_name =  $_GET['q'];
$img =  mysql_query("SELECT icon_path FROM tbl_fields where name = '".$field_name."';");
$img_arr = mysql_fetch_array($img);
?>
<h3>  <?php  echo '<img src="'.$img_arr[0].'" />Investment Field:  '; echo $field_name;?> </h3>


<?php 

// get distinct fields in place_field for that place
$opps_for_field =  mysql_query("SELECT distinct field_place_opportunity_desc FROM tbl_place_fields where field_name = '".$field_name."';");
$nopps = mysql_affected_rows();
	

echo "<table width='100%' >";

if($nopps>0)
{
echo "<tr><td class='found_n'>Opportunities in ".$field_name."</td></tr>";
}

		

	for($p=1;$p<=$nopps;$p++)
	{
		$opp_desc = mysql_fetch_array($opps_for_field );
		
		$opp_details =  mysql_query("SELECT * FROM tbl_place_fields where field_place_opportunity_desc = '".$opp_desc[0]."' and field_name = '".$field_name."';"); 

                              echo "<tr><td class='found_n'>Opportunities # ".$p."</td></tr>";
		$opportunity_row = mysql_fetch_array($opp_details);
		// display here opportunity kaza in field kaza 
		echo "<tr><td><h4 class='found_sub'>Opportunity Description: </h4><p class='found_item'> ".$opportunity_row[3]."</p> </td></tr>";
		echo "<tr><td><h4 class='found_sub'>Place: </h4><p class='found_item'> ".$opportunity_row[1]."</p> </td></tr>";
		echo "<tr><td><hr/></td></tr>";

}


// get distinct projects  for that place in table projects and that is it;
$projects =  mysql_query("SELECT * FROM tbl_field_projects where field_name ='".$field_name."' ;");
$nprojects = mysql_affected_rows();
if($nprojects>0)
{

echo "<tr><td class='found_n'>Projects in ".$field_name ."</td></tr>";
}

	// for each project and place get all its info from its table and display just like search_budget
	for($i = 1 ; $i<=$nprojects; $i++)
	{
		$project_detail = mysql_fetch_array($projects);

		
		
		echo "<tr><td class='found_n'>Project # ".$i." </td></tr>";

		echo "<tr><td><h4 class='found_sub'>Project name: </h4><p class='found_item'> ".$project_detail[1]."</p> </td></tr>";
		echo "<tr><td><h4 class='found_sub'>Project description: </h4><p class='found_item'> <img src='".$project_detail[4]."' /> ".$project_detail[2]." </p> </td></tr>";
		echo "<tr><td><h4 class='found_sub'>Place: </h4><p class='found_item'><img src='' /> ".$project_detail[6]."</p> </td></tr>";
		echo "<tr><td><h4 class='found_sub'>Project average budget:</h4><p class='found_item'> ".$project_detail[5]."L.E.</p> </td></tr>";
		echo "<tr><td><h4 class='found_sub'>Risk description (if any): </h4><p class='found_item'> ".$project_detail[8]."</p> </td></tr>";
		echo "<tr><td><h4 class='found_sub'>Risk effect: </h4><p class='found_item'> ".$project_detail[7]."%</p> </td></tr>";
		echo "<tr><td><h4 class='found_sub'>Risk Overcome method: </h4><p class='found_item'> ".$project_detail[9]."</p> </td></tr>";

		echo "<tr><td><hr/> </td></tr>";
}


echo "</table >";
?>


<?php mysql_close($con); ?>
<?php echo $page_footer; 

echo $bottom_website_footer ;

echo $page_end;
?>

