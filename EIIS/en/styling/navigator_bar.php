<?php include 'connect_database.php';  ?>

<?php mysql_select_db("idss", $con); ?>

<?php
$menu ="";
$menu .= "<div id='menuWrapper'>"; 
$menu .= "<ul class='menu'>";
$menu .= "<li class='top'><a class='top_link' href='home.php'><span>Home Page</span></a></li>";

$menu .="<li class='top'><a class='top_link' href='all_fields.php'><span class='down'> Investment Fields</span></a>";
$all_fields = mysql_query("SELECT * FROM tbl_fields where name != 'other' ");
$n_fields = mysql_affected_rows();

$menu .= "<ul class='sub'>";
for($d=0;$d<$n_fields;$d++) {
$this_field =  mysql_fetch_array($all_fields);
$menu .= "<li><a  href='display_info_field.php?q=".$this_field[2]."'> <img src='".$this_field[1]."' width='20px' height='20px' />  ".$this_field[2]."</a></li>";
    }


$menu .= "</ul></li>";

$menu .= "<li class='top'><a class='top_link' href='all_projects.php'><span class='down'>Investment Projects</span></a>";
$menu .= "<ul class='sub'><li><a href='search_budget.php'>Search By Budget</a></li>";
$menu .= "<li><a href='all_projects.php'>Show All Projects</a></li>";


$menu .= "</ul></li>";
$menu .= "<li class='top'><a class='top_link' href='all_opp_by_fields.php'><span class='down'>Inv. Opportunities</span></a>";

$all_fields = mysql_query("SELECT * FROM tbl_fields where name != 'other' ");
$n_fields = mysql_affected_rows();
$menu .= "<ul class='sub'>";
for($d=0;$d<$n_fields;$d++) {
$this_field =  mysql_fetch_array($all_fields);
$menu .= "<li><a  href='display_info_field_opp.php?q=".$this_field[2]."'> <img src='".$this_field[1]."' width='20px' height='20px' />Opp. in ".$this_field[2]."</a></li>";
    }

$menu .= "</ul></li>";

$menu .="<li class='top'><a class='top_link' href='Link URL'><span class='down'>Find your target</span></a>";
$menu .= "<ul class='sub'>";
$menu .= "<li><a href='byPlace.php'>Search By Egypt Map</a></li>";
$menu .= "<li><a href='search_budget.php'>Search By Budget</a></li>";
$menu .= "</ul></li>";


$menu .="<li class='top'><a class='top_link' href=''><span class='down'>About Us</span></a>";
$menu .= "<ul class='sub'>";
//$menu .= "<li><a href='Link URL'>Who Are We</a></li>";
$menu .= "<li><a href='./document.php'>Project Documentation</a></li>";
//$menu .= "<li><a href='Link URL'>Submenu 5.3</a></li>";
$menu .= "</ul></li>";

/*
$menu .= "<li class='top'><a class='top_link' href='Link URL'><span class='down'> Title 5 </span></a><ul class='sub'><li><a class='fly' href='Link URL'>Submenu 2.1</a><ul>";
$menu .= "<li><a href='Link URL'>Submenu 2.1.1</a></li>";
$menu .= "<li><a href='Link URL'>Submenu 2.1.2</a></li>";
$menu .= "<li><a href='Link URL'>Submenu 2.1.3</a></li></ul></li><li class='mid'><a class='fly' href='Link URL'>Submenu 2.2</a><ul>";
$menu .= "</ul></li><li class='mid'><a class='fly' href='Link URL'>Submenu 2.2</a><ul>";
$menu .= "<li><a href='Link URL'>Submenu 2.2.1</a></li>";
$menu .= "<li><a href='Link URL'>Submenu 2.2.2</a></li>";
$menu .= "<li><a href='Link URL'>Submenu 2.2.3</a></li>";
$menu .= "<li><a class='fly' href='Link URL'>Submenu 2.2.4</a>";
$menu .= "<ul><li><a href='Link URL'>Submenu 2.2.4.1</a></li>";

$menu .= "<li><a href='Link URL'>Submenu 2.2.4.2</a></li>";
$menu .= "<li><a href='Link URL'>Submenu 2.2.4.3</a></li>";
$menu .= "</ul></li><li><a href='Link URL'>Submenu 2.2.5</a></li>";
$menu .= "<li><a class='fly' href='Link URL'>Submenu 2.2.6</a>";
$menu .= "<ul><li><a href='Link URL'>Submenu 2.2.6.1</a></li>";
$menu .= "<li><a href='Link URL'>Submenu 2.2.6.2</a></li></ul></li></ul></li>";
$menu .= "<li><a href='Link URL'>Submenu 2.3</a></li>";
$menu .= "<li><a href='Link URL'>Submenu 2.4</a></li>";
$menu .= "<li><a href='Link URL'>Submenu 2.5</a></li>";
$menu .= "</ul></li>";
*/
/*
$menu .= "<!-- Search Bar --><li>";

$menu .= "<form action='/search' id='search' method='get' name='searchForm' style='display:inline;'> ";
$menu .= "<input id='search-box' name='q' onblur='if (this.value == &quot;&quot;) this.value = &quot;Search here...&quot;;' onfocus='if (this.value == &quot;Search here...&quot;) this.value = &quot;&quot;;' size='28' type='text' value='Search here...'/></form></li>";

*/

$menu .= "</ul></div>";

?>












