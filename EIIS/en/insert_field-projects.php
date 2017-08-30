<?php include 'styling/include_master.php';  ?>

<?php 

echo $page_header;
echo $page_top_body;
echo $page_upper_menu;
echo $page_right_menu;

?>


<!------------------------------------------------------------------------------------------->
<?php /* TO DO: here you make html code , javascript any work you want */ ?>
 <!--every work almost is in here -->
<?php include 'connect_database.php';  ?>

<table class="just_organize">
<tr><td> <h1> Insert new Field Projects </h1> </td></tr>



<?php

mysql_set_charset('utf8',$con); 
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $con);

mysql_select_db("idss", $con);
?>



<?php include 'form_insert field-projects.php'; ?>

<tr><td>
<table class=grid><tr><td>
<?php echo $select_form; ?>
</td></tr></table>


<tr><td> 


<?php 



if(empty($_POST["prj_name"])||empty($_POST["prj_img"])||empty($_POST["prj_bud"])||empty($_POST["prj_desc"]))

{ $insert_message = " fields are neccessary";$insert_message2 = " "; }


else{

$selected_cols = "(";
$entered_values = "(";  
$selected_cols2 = "(";
$entered_values2 = "(";  


$selected_cols .="field_name,";
$entered_values .="'".$_POST['field']."',";
$selected_cols2 .="field_name,";
$entered_values2 .="'".$_POST['field']."',";


$selected_cols .="place_name,";
$entered_values .="'".$_POST['place']."',";
$selected_cols2 .="place_name";
$entered_values2 .="'".$_POST['place']."'";


$selected_cols .="project_name,";
$entered_values .="'".$_POST['prj_name']."',";

$selected_cols .="project_desc,";
$entered_values .="'".$_POST['prj_desc']."',";

$selected_cols .="prj_img_path,";
$entered_values .="'".$_POST['prj_img']."',";

$selected_cols .="budget_avg";
$entered_values .="'".$_POST['prj_bud']."'";

$selected_cols .=") ";
$entered_values.=");";
$selected_cols2 .=") ";
$entered_values2.=");";


$insert_table_stmt = "INSERT INTO `idss`.`tbl_field_projects` ".$selected_cols." VALUES ".$entered_values;
$insert_table_stmt2 = "INSERT INTO `idss`.`tbl_place_fields` ".$selected_cols2." VALUES ".$entered_values2;

if(mysql_query($insert_table_stmt))
{ $insert_message = "Saved Field-Project Successfully"; }
else
{

 $insert_message = $insert_table_stmt."insert failed".mysql_error();
}



if(mysql_query($insert_table_stmt2))
{ $insert_message2 = "\n  Saved Field-Place Successfully"; }
else
{

 $insert_message2 = $insert_table_stmt2."insert failed".mysql_error();
}



}


?>



<br/>
<p>
<?php echo $insert_message; echo $insert_message2; ?>
</p>





 </td></tr>
</table>


<!------------------------------------------------------------------------------------------->

<?php mysql_close($con); ?>
<?php echo $page_footer; 

echo $bottom_website_footer ;

echo $page_end;
?>

