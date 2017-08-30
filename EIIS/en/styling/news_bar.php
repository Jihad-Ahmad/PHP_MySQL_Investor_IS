<?php include 'connect_database.php';  ?>

<?php mysql_select_db("idss", $con); ?>

<?php
$news_bar ="";
$sql = "select  *  from tbl_place_fields;";
$opps = mysql_query($sql);
            while ($opps_details = mysql_fetch_array($opps)){
              $news_bar .= 'opportunity in field, '.$opps_details[2].'  in  '.$opps_details[1].' => '.$opps_details[3].'  |        ';
            }        
            



?>












