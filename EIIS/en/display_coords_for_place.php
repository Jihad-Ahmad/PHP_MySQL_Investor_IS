<?php include 'styling/include_master.php';  ?>


<?php 

echo $page_header;
echo $page_top_body;
echo $page_upper_menu;
echo $page_right_menu;

?>



<?php /* TO DO: here you make html code , javascript any work you want */ ?>


<h3>  <?php $row =  $_GET['r'];$col =  $_GET['c']; echo 'Display Coordinates  of Clicked Place: '; echo '( '.$row.' , '.$col.' ) ';?> </h3>



<?php echo $page_footer; 

echo $bottom_website_footer ;

echo $page_end;
?>

