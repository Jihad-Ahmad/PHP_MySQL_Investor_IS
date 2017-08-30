<?php include 'styling/include_master.php';?>

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
<tr><td> <h1> Insert new Place Field </h1> </td></tr>



<?php

mysql_set_charset('utf8',$con); 
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $con);


?>



<?php include 'form_insert place-field.php'; ?>

<tr><td>
<table class=grid><tr><td>
<?php echo $select_form; ?>
</td></tr></table>


<tr><td> 


<?php 

mysql_select_db("idss", $con);

if(empty($_POST["place"])||empty($_POST["field"])||empty($_POST["opp"]))
{$insert_message = " fields are neccessary";}


else{


$selected_cols = "(";
$entered_values = "(";  

$selected_cols .="place_name,";
$entered_values .="'".$_POST['place']."',";

$selected_cols .="field_place_opportunity_desc,";
$entered_values .="'".$_POST['opp']."',";


$selected_cols .="field_name";
$entered_values .="'".$_POST['field']."'";



 $selected_cols .=") ";
 $entered_values.=");";


$insert_table_stmt = "INSERT INTO `idss`.`tbl_place_fields` ".$selected_cols." VALUES ".$entered_values;





if(mysql_query($insert_table_stmt))
{ $insert_message = "saved successfully"; }
else
{

 $insert_message = $insert_table_stmt."insert failed".mysql_error();}


}


?>



<br/>
<p>
<?php echo $insert_message ?>
</p>





 </td></tr>
</table>


<!------------------------------------------------------------------------------------------->
<?php mysql_close($con); ?>

<?php echo $page_footer; 

echo $bottom_website_footer ;

echo $page_end;
?>

