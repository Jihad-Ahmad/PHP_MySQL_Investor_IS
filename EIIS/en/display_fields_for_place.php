<?php include 'styling/include_master.php';  ?>


<?php 

echo $page_header;
echo $page_top_body;
echo $page_upper_menu;
echo $page_right_menu;

?>

<?php /* TO DO: here you make html code , javascript any work you want */ ?>

<?php include 'connect_database.php'; 

mysql_set_charset('utf8',$con); 
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $con);

mysql_select_db("idss", $con);

?>

<?php  
$row =  $_GET['r'];$col =  $_GET['c'];
//get place name from its coordinates:
$places = mysql_query("SELECT name FROM tbl_place t where t.row='".$row."' and t.col='".$col."';");
$place_1 = mysql_fetch_array($places); // now place name is in $place_1[0];


//$result = mysql_query();
?>


<h3>  <?php  echo 'Investment Field(s) for Place: '.$place_1[0];?> </h3>

<?php 

// get distinct fields in place_field for that place
$fields_for_place =  mysql_query("SELECT distinct field_name FROM tbl_place_fields where place_name = '".$place_1[0]."';");
$nfields = mysql_affected_rows();
	



	echo "<table width='100%' >";

		

	for($f=0;$f<$nfields;$f++)
	{
		$field_name = mysql_fetch_array($fields_for_place);
		
		// for each field get distinct  opportunities in that place - where place = kaza display by opportunity # i in Field kaza: description




		$fopp_for_place =  mysql_query("SELECT distinct field_place_opportunity_desc FROM tbl_place_fields where place_name = '".$place_1[0]."' and field_name = '".$field_name[0]."';"); 



$nopp = mysql_affected_rows();


if($nopp>0)
{

echo "<tr><td class='found_n'>Opportunities in ".$place_1[0] ."</td></tr>";
}
		


		for($i = 0 ; $i<$nopp; $i++)
		{
		$opportunity_row = mysql_fetch_array($fopp_for_place);
		// display here opportunity kaza in field kaza 
		echo "<tr><td><h4 class='found_sub'>Opportunity Description: </h4><p class='found_item'> ".$opportunity_row[0]."</p> </td></tr>";
		echo "<tr><td><h4 class='found_sub'>Investment Field: </h4><p class='found_item'> ".$field_name[0]."</p> </td></tr>";
		echo "<tr><td><hr/></td></tr>";

		
		}
	





}


// get distinct projects  for that place in table projects and that is it;
$projects =  mysql_query("SELECT distinct project_name FROM tbl_field_projects where place_name ='".$place_1[0]."' ;");
$nprojects = mysql_affected_rows();
if($nprojects>0)
{

echo "<tr><td class='found_n'>Projects in ".$place_1[0] ."</td></tr>";
}

	// for each project and place get all its info from its table and display just like search_budget
	for($i = 1 ; $i<=$nprojects; $i++)
	{
		$project_name = mysql_fetch_array($projects);

		$project_details_r = mysql_query(" SELECT * FROM tbl_field_projects where project_name = '".$project_name[0]."' and place_name= '".$place_1[0]."';");

		$project_detail = mysql_fetch_array($project_details_r);
		echo "<tr><td class='found_n'>Project # ".$i." </td></tr>";

		echo "<tr><td><h4 class='found_sub'>Project name: </h4><p class='found_item'> ".$project_detail[1]."</p> </td></tr>";
		echo "<tr><td><h4 class='found_sub'>Project description: </h4><p class='found_item'> <img src='".$project_detail[4]."' /> ".$project_detail[2]." </p> </td></tr>";
		echo "<tr><td><h4 class='found_sub'>Investment Field: </h4><p class='found_item'><img src='' /> ".$project_detail[3]."</p> </td></tr>";
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

