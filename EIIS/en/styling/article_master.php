

<?php

include 'navigator_bar.php';include 'news_bar.php';
 
$page_header = "<HTML><HEAD><TITLE>";
$page_title = "Egypt Investor Information System (EIIS)";
$page_header .= $page_title ."</TITLE>";
$page_header .= "<link rel='stylesheet' type='text/css' href='./styling/styling01.css' />";
$page_header .= "<link rel='stylesheet' type='text/css' href='./styling/menu_style.css' />";

$page_header .= " <meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></HEAD>";


$page_top_body = "<BODY align='center' dir='ltr'>";

$page_top_body .= "<table style='width:100%; margin-top:0px;  padding:0 0 0 0; ' border='0'><tr>";
$page_top_body .= "<td style='width:20%; text-align:right; padding:0 0 0 0; '>";
$page_top_body .= "<!--img src= './styling/images/diploma_project_logo.GIF' width='150px' height='170px' /--></td> ";
$page_top_body .= "<td  style= ' text-align:right; width:80%; padding:0 0 0 430 ' ;><div id='stretch'> <img src= './styling/images/new_slides.GIF'/></div></td>";
$page_top_body .= "</tr></table>";
$page_top_body .= "";



$page_top_body .= "<table class='just_organize'><tr><td>  </td></tr></table>";

$page_top_body .= "<table class='normalt'>";

$page_top_body .= "<tr> <td style='border-radius: 10px;  background-color:#606060; text-align:center; color:#ffff30; width:15%;vertical-align:bottom;'>Investment Opportunities: </td><td class='news_bar'>   <marquee scrolldelay='160' width='100%' direction='left'><a class='news_bar' href='all_opp_by_fields.php'>" .$news_bar. " </marquee>   </td></tr>";
$page_top_body .= "</table>";

$page_top_body .= "<table class='normalt'>";
$page_top_body .= "<tr> <td  class='upper_menu'> ".$menu."  </td></tr>";
$page_top_body .= "</table>";

$page_top_body .= "<table class='normalt'>";

$page_upper_menu = "<!--tr> <td colspan='2' class='upper_menu'>   </td></tr-->";

$page_right_menu = "<tr> <td class='right_menu_place'>  <table class='right_menu'> ";
$page_right_menu .= "<tr><td class='right_menu'> <a href='home.php' class='right_menu'> Home Page </a> </td></tr>"; 
$page_right_menu .= "<tr><td class='right_menu'> <a href='byplace.php' class='right_menu'> Search By Egypt Map </a> </td></tr>";
$page_right_menu .= "<tr><td class='right_menu'> <a href='search_budget.php' class='right_menu'> Search By Budget </a> </td></tr>";
$page_right_menu .= "<tr><td class='right_menu'> <a href='all_fields.php' class='right_menu'> Investment Fields </a> </td></tr>";
$page_right_menu .= "<tr><td class='right_menu'> <a href='related_links.php' class='right_menu'> Related Links </a> </td></tr>";

$page_right_menu .= "</table></td><td text-align='center' vertical-align='middle'>";


$page_footer =" </td></tr><tr><td class='footer' text-align='center'colspan='2'> <a class='right_menu' href='admin_login.php'> admin login </a> </td></tr></table>";


$bottom_website_footer = "<table class='just_organize'><tr><td > </td></tr></table>";
$bottom_website_footer.= "<table class='normalt'><tr><td> <br/> </td></tr></table>";


$page_end = "</BODY></HTML>";


?>