<?php include 'styling/include_master.php';  ?>


<?php 

echo $page_header;
echo $page_top_body;
echo $page_upper_menu;
echo $page_right_menu;

?>



<?php /* TO DO: here you make html code , javascript any work you want */ ?>


<?php


$document = "<?php include 'master_page.php'; ?>";
$filename = './styling/include_master.php'; 





$filehandler = fopen($filename,'w+');


fwrite($filehandler,$document);
fclose($filehandler);

echo "<table class='contain'>";
echo "<tr><td>confirm logging out administration</td><tr>";
echo "<tr><td><a class='right_menu' href='./home.php'> go home unlogged </a></td></tr>";
echo "</table>"



?>




<?php echo $page_footer; 

echo $bottom_website_footer ;

echo $page_end;
?>

