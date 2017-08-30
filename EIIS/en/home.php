<?php include 'styling/include_master.php';  ?>


<?php 

echo $page_header;
echo $page_top_body;
echo $page_upper_menu;
echo $page_right_menu;

?>



<?php /* TO DO: here you make html code , javascript any work you want */ ?>
<?php 

 include 'connect_database.php'; 
mysql_set_charset('utf8',$con); 
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $con);
mysql_select_db("idss", $con);
$all_fields = mysql_query("SELECT distinct name,icon_path FROM tbl_fields");

?>
<table >
<tr><td width="50%"><div  id="stretch"><a href="byplace.php" ><img src="./styling/images/egypt.PNG"  width="418px" height="300px" / ></a></div></td> 
<td width="50%">



<div  id="stretch"><a href="search_budget.php"><img src="./images/budget_2.JPG"  width="418px" height="300px" / ></a></div>






</td></tr>
<tr vertical-align="middle"><td>
<div  id="stretch">
<table  border="2" width="418px" height="300px">
<tr><td class="found_n">
<b>Enjoy IS services </b>
</td></tr>

<tr><td align="bottom">
<img src="./images/video.JPG" width="100%" height="100%"  / >
</td></tr>
</table>
</div>
</td><td>

<?php

echo '<div  id="stretch">';

echo '<table width="418px" height="300px" style=" margin-top:0px;" border="0" >';
echo '<tr><td class="found_n" colspan="3">  Learn About Investment Fields </td><tr>';

for($i=0;$i<3;$i++)
{
echo '<tr>';
for($j=0;$j<3;$j++)
{

$field = mysql_fetch_array($all_fields);
echo '<td  align="center" vertical-align="center" ><table width="100%"><tr><td class="found_n">'.$field[0].'</td></tr>  ';
if($i==2&&$j==2)
{echo ' <tr><td align="center"><a href="all_fields.php">';}
else
{echo ' <tr><td align="center"><a href="display_info_field.php?q='.$field[0].'">';}

echo '<img src="'.$field[1].'" width="40px" height="40px" /></a></td></tr></table>';


echo '</td>';
}
echo '</tr>';

}

echo '</table>';

echo '</div>';
?>


</td></tr>
</table>
<?php mysql_close($con); ?>

<?php echo $page_footer; 

echo $bottom_website_footer ;

echo $page_end;
?>

