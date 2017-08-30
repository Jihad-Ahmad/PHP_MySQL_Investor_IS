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

<?php

mysql_set_charset('utf8',$con); 
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $con);
mysql_select_db("idss", $con);

?>


<table class="just_organize">
<tr><td> <h3> Search New Projects By Budget </h3> </td></tr>






<?php include 'form_budget.php'; ?>

<tr><td>
<table class=grid><tr><td>
<?php echo $select_form; ?>
</td></tr></table>


<tr><td> 


<?php 



if(empty($_POST["From"])||empty($_POST["To"]))
{$insert_message = " fields are neccessary";}


else{


$greater_value = "'".$_POST['To']."'";
$less_value = "'".$_POST['From']."'";


$search_table_stmt = "SELECT * FROM tbl_field_projects where budget_avg >= ".$less_value." and budget_avg <= ".$greater_value.";";


$result = mysql_query($search_table_stmt);
$n_rows = mysql_affected_rows();

if($result)
{ echo "<p>".$n_rows." result(s) found successfully</p>"; }
else
{
 echo "<p>".$search_table_stmt."insert failed".mysql_error()."</p>";
}



echo "<table width='100%' >";
for($i = 1 ; $i<=$n_rows; $i++)
{
$row = mysql_fetch_array($result);
echo "<tr><td class='found_n'>Project # ".$i." </td></tr>";

echo "<tr><td><h4 class='found_sub'>Project name: </h4><p class='found_item'> ".$row[1]."</p> </td></tr>";
echo "<tr><td><h4 class='found_sub'>Project description: </h4><p class='found_item'> <img src='".$row[4]."' /> ".$row[2]." </p> </td></tr>";
echo "<tr><td><h4 class='found_sub'>Investment Field: </h4><p class='found_item'><img src='' /> ".$row[3]."</p> </td></tr>";
echo "<tr><td><h4 class='found_sub'>Project average budget:</h4><p class='found_item'> ".$row[5]."L.E.</p> </td></tr>";
echo "<tr><td><h4 class='found_sub'>Place: </h4><p class='found_item'> ".$row[6]."</p> </td></tr>";
echo "<tr><td><h4 class='found_sub'>Risk description (if any): </h4><p class='found_item'> ".$row[8]."</p> </td></tr>";
echo "<tr><td><h4 class='found_sub'>Risk effect: </h4><p class='found_item'> ".$row[7]."%</p> </td></tr>";
echo "<tr><td><h4 class='found_sub'>Risk Overcome method: </h4><p class='found_item'> ".$row[9]."</p> </td></tr>";

echo "<tr><td><hr/> </td></tr>";
}
echo "</table >";

}


?>



<br/>





 </td></tr>
</table>


<!------------------------------------------------------------------------------------------->

<?php mysql_close($con); ?>
<?php echo $page_footer; 

echo $bottom_website_footer ;

echo $page_end;
?>

