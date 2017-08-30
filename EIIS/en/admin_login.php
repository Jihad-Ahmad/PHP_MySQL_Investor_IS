<?php include 'styling/include_master.php';  ?>


<?php 

echo $page_header;
echo $page_top_body;
echo $page_upper_menu;
echo $page_right_menu;

?>



<?php /* TO DO: here you make html code , javascript any work you want */ ?>


<?php

include 'form_admin_login.php';

echo $select_form."";


if(empty($_POST["esm"])||empty($_POST["pass"]))
{
echo "Administrator and Password are neccessary fields";
}


else
{

if(($_POST["esm"]=="root")&&($_POST["pass"]=="root"))
{

$document = "<?php include 'admin_master_page.php'; ?>";
$filename = './styling/include_master.php'; 





$filehandler = fopen($filename,'w+');


fwrite($filehandler,$document);
fclose($filehandler);

echo "<a class='right_menu' href='./home.php'>logged in , go to home </a>";

//echo "<a class='right_menu' href='./admin/home.php'>logged in , go to home </a>";
}

else
{echo "wrong admin name and/or password";}

}


?>




<?php echo $page_footer; 

echo $bottom_website_footer ;

echo $page_end;
?>

