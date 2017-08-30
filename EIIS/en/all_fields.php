<?php include 'styling/include_master.php';  ?>
<?php include 'connect_database.php';  ?>

<?php

mysql_select_db("idss", $con);


echo $page_header;
echo $page_top_body;
echo $page_upper_menu;
echo $page_right_menu;

?>



<?php /* TO DO: here you make html code , javascript any work you want */ ?>
<?php 


$menu ="<br/><br/><ul><h3> Investment Fields</h3><p>";
$all_fields = mysql_query("SELECT * FROM tbl_fields where name != 'other' ");
$n_fields = mysql_affected_rows();
for($d=0;$d<$n_fields;$d++) {
$this_field =  mysql_fetch_array($all_fields);
$menu .= "<li><a class='right_menu' href='display_info_field.php?q=".$this_field[2]."'> <img src='".$this_field[1]."' width='30px' height='30px' />  ".$this_field[2]."</a></li>";
    }


$menu .= "</ul></p>";

echo $menu;

?>


<?php mysql_close($con); ?>

<?php echo $page_footer; 

echo $bottom_website_footer ;

echo $page_end;
?>

