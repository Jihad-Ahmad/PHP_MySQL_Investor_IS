<?php include 'styling/include_master.php';  ?>


<?php 

echo $page_header;
echo $page_top_body;
echo $page_upper_menu;
echo $page_right_menu;

?>



<?php /* TO DO: here you make html code , javascript any work you want */ ?>

<?php 
include './documentation/imp_reas.php';include './documentation/introduction.php';
include './documentation/method.php';include './documentation/limit.php';
include './documentation/future.php';include './documentation/problem.php';
include './documentation/objectives.php';include './documentation/org.php';
include './documentation/scope.php';include './documentation/theory.php';
include './documentation/chapter3.php';include './documentation/chapter6.php';
include './documentation/References.php';include './documentation/GUI.php';
include './documentation/chapter4.php';include './documentation/Appendix.php';

?>
<?php $page_count = 0; ?>

<?php


$document = "<html><head>";
$document .= "<title>(EIIS) project documentation </title>";
$document  .= "<link rel='stylesheet' type='text/css' href='./styling/document_style.css' />";
$document  .= "</head><body>";


// page 1
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> <tr><td> <h2>Executive Summary</h2> </td></tr>";
$document .="<tr><td><h3>Abstract</h3></td></tr>";
$document .="<tr><td align='left'><p>".$intro."</p></td></tr>";
$document .="<tr><td><h3>Why our research matters ?</h3></td></tr>";
$document .="<tr><td align='left'><p>".$importance."</p></td></tr>";
$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";


//page 2

$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'><p> <table class='normalt'> ";
$document .="<tr><td colspan='2'><br/><h3> Table of contents </h3></td></tr>";
$document .="<tr><td align='left'>Executive Summary</td><td align='right' width='20%'>01</td></tr>";
$document .="<tr><td align='left'>Table of Contents</td><td align='right' width='20%'>02</td></tr>";
$document .="<tr><td align='left'>Table of Contents</td><td align='right' width='20%'>03</td></tr>";
$document .="<tr><td align='left'>List of Figures</td><td align='right' width='20%'>04</td></tr>";
$document .="<tr><td align='left'>List of Tables</td><td align='right' width='20%'>05</td></tr>";
$document .="<tr><td align='left'>Chapter 1: Introduction</td><td align='right' width='40px'>06</td></tr>";
$document .="<tr><td align='left'>1.1. Background</td><td align='right' width='20%'>06</td></tr>";
$document .="<tr><td align='left'>1.2. Problem Specification</td><td align='right' width='20%'>07</td></tr>";
$document .="<tr><td align='left'>1.3. Research Objectives</td><td align='right' width='20%'>07</td></tr>";
$document .="<tr><td align='left'>1.4. Research Methodology</td><td align='right' width='20%'>07</td></tr>";
$document .="<tr><td align='left'>1.5. Project Scope </td><td align='right' width='20%'>08</td></tr>";
$document .="<tr><td align='left'>1.6. Limitation</td><td align='right' width='20%'>08</td></tr>";
$document .="<tr><td align='left'>1.7. Research Organization</td><td align='right' width='20%'>09</td></tr>";
$document .="<tr><td align='left'>Chapter 2: System domain-Investment in Egypt</td><td align='right' width='40px'>10</td></tr>";
$document .="<tr><td align='left'>2.1. Overview </td><td align='right' width='20%'>10</td></tr>";
$document .="<tr><td align='left'>2.2. Investment Fields in Egypt </td><td align='right' width='20%'>11</td></tr>";
$document .="<tr><td align='left'>2.3. Investment Risks </td><td align='right' width='20%'>16</td></tr>";
$document .="<tr><td align='left'>Chapter 3: Case Study: Namaa website</td><td align='right' width='40px'>17</td></tr>";
$document .="<tr><td align='left'>3.1.  Namaa Information provided to investors </td><td align='right' width='20%'>17</td></tr>";
$document .="<tr><td align='left'>3.2. Searching </td><td align='right' width='20%'>18</td></tr>";
$document .="<tr><td align='left'>3.3. Services and ideas </td><td align='right' width='20%'>18</td></tr>";
$document .="<tr><td align='left'>3.4. Trainning </td><td align='right' width='20%'>18</td></tr>";
$document .="<tr><td align='left'>3.5. Namaa Limitations </td><td align='right' width='20%'>18</td></tr>";



$document .="</table></p></td></tr>";


$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";




//page 3

$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'><p> <table class='normalt'> ";
$document .="<tr><td colspan='2'><br/><h3> Table of contents </h3></td></tr>";

$document .="<tr><td align='left'>Chapter 4: System Analysis & Design</td><td align='right' width='40px'>19</td></tr>";
$document .="<tr><td align='left'>4.1. System Requirements </td><td align='right' width='40px'>19</td></tr>";
$document .="<tr><td align='left'>4.1.1. Functional Requirements </td><td align='right' width='40px'>19</td></tr>";
$document .="<tr><td align='left'>4.1.2. Non Functional Requirements  </td><td align='right' width='40px'>26</td></tr>";
$document .="<tr><td align='left'>4.1.3. Data Requirements  </td><td align='right' width='40px'>27</td></tr>";
$document .="<tr><td align='left'>4.2. System Analysis </td><td align='right' width='40px'>28</td></tr>";
$document .="<tr><td align='left'>4.2.1. Sequence Diagram</td><td align='right' width='40px'>28</td></tr>";
$document .="<tr><td align='left'>4.3. Logical Design </td><td align='right' width='40px'>29</td></tr>";
$document .="<tr><td align='left'>4.3.1. Entity Relationship Diagram (ERD) </td><td align='right' width='40px'>29</td></tr>";
$document .="<tr><td align='left'>4.3.2. Relational Data Model</td><td align='right' width='40px'>29</td></tr>";
$document .="<tr><td align='left'>4.4. Physical Design  </td><td align='right' width='40px'>30</td></tr>";
$document .="<tr><td align='left'>4.4.1. Component Diagram </td><td align='right' width='40px'>30</td></tr>";
$document .="<tr><td align='left'>4.4.2. Deployment Diagram </td><td align='right' width='40px'>36</td></tr>";



$document .="<tr><td align='left'>Chapter 5: Testing and Results</td><td align='right' width='40px'>37</td></tr>";
$document .="<tr><td align='left'>5.1. Requirements Validation </td><td align='right' width='40px'>37</td></tr>";
$document .="<tr><td align='left'>5.1.1. Home Page </td><td align='right' width='40px'>37</td></tr>";
$document .="<tr><td align='left'>5.1.2. Search By Map </td><td align='right' width='40px'>38</td></tr>";
$document .="<tr><td align='left'>5.1.3. Search By Budget </td><td align='right' width='40px'>39</td></tr>";
$document .="<tr><td align='left'>5.1.4. Show Investment Fields </td><td align='right' width='40px'>40</td></tr>";
$document .="<tr><td align='left'>5.1.5. Show Fields List </td><td align='right' width='40px'>41</td></tr>";
$document .="<tr><td align='left'>5.1.6. Picked Investment Field details </td><td align='right' width='40px'>42</td></tr>";
$document .="<tr><td align='left'>5.1.7. Picked place investment details </td><td align='right' width='40px'>42</td></tr>";
$document .="<tr><td align='left'>5.1.8. Related Links </td><td align='right' width='40px'>43</td></tr>";
$document .="<tr><td align='left'>5.1.9.Admin login logout </td><td align='right' width='40px'>44</td></tr>";
$document .="<tr><td align='left'>5.1.10. Admin Place coordinates  </td><td align='right' width='40px'>45</td></tr>";
$document .="<tr><td align='left'>5.1.11. Project document Generation </td><td align='right' width='40px'>46</td></tr>";

$document .="<tr><td align='left'>Chapter 6: Conclusion & Future work</td><td align='right' width='40px'>47</td></tr>";
$document .="<tr><td align='left'>6.1.  Conclusion </td><td align='right' width='20%'>47</td></tr>";
$document .="<tr><td align='left'>6.2. Future work </td><td align='right' width='20%'>47</td></tr>";
$document .="<tr><td align='left'> References </td><td align='right' width='20%'>48</td></tr>";
$document .="<tr><td align='left'> Appendix A: System Installation </td><td align='right' width='20%'>49</td></tr>";
$document .="</table></p></td></tr>";


$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";





//page 4

$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td colspan='2'><br/><h3> List of figures </h3></td></tr>";
$document .="<tr><td align='left'> fig. 4.1 Use case Diagram </td><td align='right' width='40px'>19</td></tr>";
$document .="<tr><td align='left'> fig. 4.2. login sequence diagram </td><td align='right' width='40px'>28</td></tr>";
$document .="<tr><td align='left'> fig. 4.3 search sequence diagram </td><td align='right' width='40px'>28</td></tr>";
$document .="<tr><td align='left'> fig. 4.4 ER Diagram </td><td align='right' width='40px'>29</td></tr>";
$document .="<tr><td align='left'> fig. 4.5 Relational Data Model </td><td align='right' width='40px'>29</td></tr>";
$document .="<tr><td align='left'> fig. 4.6 Presentation Component Diagram </td><td align='right' width='40px'>30</td></tr>";
$document .="<tr><td align='left'> fig. 4.7 User interface Component Diagram </td><td align='right' width='40px'>31</td></tr>";
$document .="<tr><td align='left'> fig. 4.8 User Interaction Component Diagram </td><td align='right' width='40px'>32</td></tr>";
$document .="<tr><td align='left'> fig. 4.9 Database-System Interface Component Diagram </td><td align='right' width='40px'>33</td></tr>";
$document .="<tr><td align='left'> fig. 4.10 Database Component Diagram </td><td align='right' width='40px'>34</td></tr>";
$document .="<tr><td align='left'> fig. 4.11 Server layer Component Diagram </td><td align='right' width='40px'>35</td></tr>";
$document .="<tr><td align='left'> fig. 4.12 Deployment Diagram </td><td align='right' width='40px'>36</td></tr>";

$document .="<tr><td align='left'> fig. 5.1 Use case Diagram </td><td align='right' width='40px'>37</td></tr>";
$document .="<tr><td align='left'> fig. 5.2. login sequence diagram </td><td align='right' width='40px'>38</td></tr>";
$document .="<tr><td align='left'> fig. 5.3 search sequence diagram </td><td align='right' width='40px'>39</td></tr>";
$document .="<tr><td align='left'> fig. 5.4 ER Diagram </td><td align='right' width='40px'>40</td></tr>";
$document .="<tr><td align='left'> fig. 5.5 Relational Data Model </td><td align='right' width='40px'>41</td></tr>";
$document .="<tr><td align='left'> fig. 5.6 Presentation Component Diagram </td><td align='right' width='40px'>41</td></tr>";
$document .="<tr><td align='left'> fig. 5.7 User interface Component Diagram </td><td align='right' width='40px'>42</td></tr>";
$document .="<tr><td align='left'> fig. 5.8 User Interaction Component Diagram </td><td align='right' width='40px'>43</td></tr>";
$document .="<tr><td align='left'> fig. 5.9 Database-System Interface Component Diagram </td><td align='right' width='40px'>44</td></tr>";
$document .="<tr><td align='left'> fig. 5.10 Database Component Diagram </td><td align='right' width='40px'>44</td></tr>";
$document .="<tr><td align='left'> fig. 5.11 Server layer Component Diagram </td><td align='right' width='40px'>44</td></tr>";
$document .="<tr><td align='left'> fig. 5.12 Deployment Diagram </td><td align='right' width='40px'>45</td></tr>";
$document .="<tr><td align='left'> fig. 5.13 Database Component Diagram </td><td align='right' width='40px'>45</td></tr>";
$document .="<tr><td align='left'> fig. 5.14 Server layer Component Diagram </td><td align='right' width='40px'>46</td></tr>";
$document .="<tr><td align='left'> fig. 5.15 Deployment Diagram </td><td align='right' width='40px'>46</td></tr>";


$document .="</table></td></tr>";


$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";



//page 5

$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td colspan='2'><br/><h3> List of Tables  </h3></td></tr>";
$document .="<tr><td align='left'>table 4.1. Actor Identification</td><td align='right' width='40px'>20</td></tr>";
$document .="<tr><td align='left'>table 4.2. use case: UC-01 </td><td align='right' width='40px'>20</td></tr>";
$document .="<tr><td align='left'>table 4.3. use case: UC-02 </td><td align='right' width='40px'>21</td></tr>";
$document .="<tr><td align='left'>table 4.4. use case: UC-03 </td><td align='right' width='40px'>22</td></tr>";
$document .="<tr><td align='left'>table 4.5. use case: UC-04 </td><td align='right' width='40px'>23</td></tr>";
$document .="<tr><td align='left'>table 4.6. use case: UC-05 </td><td align='right' width='40px'>24</td></tr>";
$document .="<tr><td align='left'>table 4.7. use case: UC-06 </td><td align='right' width='40px'>25</td></tr>";
$document .="</table></td></tr>";


$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";


//page 6
// chapter 1 - background
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><br/><h2> Chapter 1: Introduction </h2></td></tr>";
$document .="<tr><td><h3>1.1. Background</h3></td></tr>";
$document .="<tr><td align='left'><p>".$intro2."</p></td></tr>";
$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";



//page 7 - ch1 - problem specification and objectives 
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h3>1.2. Problem Specification</h3></td></tr>";
$document .="<tr><td align='left'><p>".$problem."</p></td></tr>";
$document .="<tr><td><br/></td></tr>";
$document .="<tr><td><h3>1.3. Research Objectives</h3></td></tr>";
$document .="<tr><td align='left'><p>".$obj."</p></td></tr>";
$document .="<tr><td><br/></td></tr>";
$document .="<tr><td><h3>1.4. Research Methodology</h3></td></tr>";
$document .="<tr><td align='left'><p>".$method."</p></td></tr>";


$document .="</table></td></tr>";


$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";

//page 8
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h3>1.4. Research Methodology (Cont.)</h3></td></tr>";
$document .="<tr><td align='left'><p>".$method2."</p></td></tr>";
$document .="<tr><td><h3>1.5. Project Scope</h3></td></tr>";
$document .="<tr><td align='left'><p>".$scope."</p></td></tr>";
$document .="<tr><td align='left'><p><br/></p></td></tr>";
$document .="<tr><td><h3>1.6. Limitation</h3></td></tr>";
$document .="<tr><td align='left'><p>".$limit."</p></td></tr>";
$document .="<tr><td align='left'><p><br/></p></td></tr>";

$document .="</table></td></tr>";


$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";




//page9

$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h3>1.7. Reseach Organization</h3></td></tr>";
$document .="<tr><td align='left'><p>".$org."</p></td></tr>";
$document .="<tr><td align='left'><p><br/><br/><br/><br/><br/></p></td></tr>";
$document .="<tr><td align='left'><p><br/><br/><br/><br/><br/></p></td></tr>";
$document .="<tr><td align='left'><p><br/><br/><br/><br/><br/></p></td></tr>";
$document .="<tr><td align='left'><p><br/><br/><br/><br/><br/></p></td></tr>";
$document .="</table></td></tr>";


$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";



//page 10
// chapter 2 - theory
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><br/><h2> Chapter 2: System domain-Investment in Egypt  </h2></td></tr>";
$document .="<tr><td><h3>2.1. Investment Overview</h3></td></tr>";
$document .="<tr><td><h4>2.1.1. What is Investment ? </h4></td></tr>";
$document .="<tr><td align='left'><p>".$inv_def."</p></td></tr>";
$document .="<tr><td align='left'><p><br/><br/></p></td></tr>";
$document .="<tr><td><h4>2.1.2. What is Risk ?</h4></td></tr>";
$document .="<tr><td align='left'><p>".$risk."</p></td></tr>";
$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";



//page 11
// chapter 2 - theory
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h3>2.2. Investment Fields in Egypt</h3></td></tr>";
$document .="<tr><td><h4>2.2.1. Agriculture Investment Field (Agribusiness) </h4></td></tr>";
$document .="<tr><td align='left'><p>".$agri."</p></td></tr>";
$document .="<tr><td><br/><h4>2.2.2. Transportation Investment Field (Suez Canal) </h4></td></tr>";
$document .="<tr><td align='left'><p>".$suez."</p></td></tr>";
$document .="<tr><td><h4>2.2.3. Health Care Investment Field </h4></td></tr>";
$document .="<tr><td align='left'><p>".$health."</p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";



//page 12
// chapter 2 - theory
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h3>2.2. Investment Fields in Egypt (Cont.)</h3></td></tr>";
$document .="<tr><td><h4>2.2.4. Education Investment Field </h4></td></tr>";
$document .="<tr><td align='left'><p>".$edu."</p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";


//page 13

$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h3>2.2. Investment Fields in Egypt (Cont.)</h3></td></tr>";
$document .="<tr><td><h4>2.2.4. Education Investment Field(Cont.) </h4></td></tr>";
$document .="<tr><td><p>".$edu2."</p></td></tr>";
$document .="<tr><td><h4>2.2.5. Tourism Investment Field </h4></td></tr>";
$document .="<tr><td><p>".$tour."</p></td></tr>";
$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";





//page 14
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h3>2.2. Investment Fields in Egypt (Cont.)</h3></td></tr>";
$document .="<tr><td><h4>2.2.6. Communication and Information Technology Investment Field </h4></td></tr>";
$document .="<tr><td align='left'><p>".$it."</p></td></tr>";
$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";


//page 15
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h3>2.2. Investment Fields in Egypt (Cont.)</h3></td></tr>";
$document .="<tr><td><h4>2.2.7. Renweable Energy Investment Field </h4></td></tr>";
$document .="<tr><td align='left'><p>".$energy."</p></td></tr>";
$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";



//page 16
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h3>2.3. Investment Risks</h3></td></tr>";
$document .="<tr><td><h4>2.3.1. Why take risks ? </h4></td></tr>";
$document .="<tr><td align='left'><p>".$risk2."</p></td></tr>";
$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";



//page 17
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><br/><h2> Chapter 3:  Case Study: Namaa website  </h2></td></tr>";
$document .="<tr><td align='left'><p>".$intrch3."</p></td></tr>";
$document .="<tr><td><br/><br/><h3>Small and medium enterprise portal (namaa.org) </h3></td></tr>";
$document .="<tr><td align='left'><p>".$namaa_intro."</p></td></tr>";
$document .="<tr><td><h3>3.1. Information provided to inverstors</h3></td></tr>";
$document .="<tr><td><h4>3.1.1 Investment Fields</h3></td></tr>";
$document .="<tr><td align='left'><p>".$info1."</p></td></tr>";
$document .="<tr><td><br/><h4>3.1.2 New and Current Projects</h3></td></tr>";
$document .="<tr><td align='left'><p>".$info2."</p></td></tr>";
$document .="<tr><td><br/><h4>3.1.3 Business Opportunities</h3></td></tr>";
$document .="<tr><td align='left'><p>".$info3."</p></td></tr>";
$document .="</table></td></tr>";


$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";




//page 18

$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h3>3.2. Searching methods</h3></td></tr>";
$document .="<tr><td align='left'><p>Search by investment field for opportunities.</p></td></tr>";
$document .="<tr><td><h3>3.3. Services and ideas</h3></td></tr>";
$document .="<tr><td align='left'><p> toolkit including feasibility studies formats and contact info to help investors.</p></td></tr>";
$document .="<tr><td align='left'><p> ".$toolkit."</p></td></tr>";
$document .="<tr><td><h3>3.4. Trainning</h3></td></tr>";
$document .="<tr><td align='left'><p> ".$trainning."</p></td></tr>";
$document .="<tr><td><h3>3.5. Namaa Limitation</h3></td></tr>";
$document .="<tr><td align='left'><p> ".$nlimit."</p></td></tr>";
$document .="</table></td></tr>";


$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";

//page 19
//chapter 4
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h2> Chapter 4: System Analysis & Design  </h2></td></tr>";
$document .="<tr><td align='left'><p>This chapter will introduce requirements,system analysis via sequence diagrams, logical design and physical design for EIIS</p></td></tr>";
$document .="<tr><td><h3> 4.1. System Requirements  </h3></td></tr>";
$document .="<tr><td><h3> 4.1.1. Functional Requirements : Use Case Model </h3></td></tr>";
$document .="<tr><td><h4> 4.1.1.1. Use Case Diagram   </h4></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/design/usecase_diagram.PNG' width='450px'/></td></tr>";
$document .="<tr><td align='left'><p>fig. 4.1 shows use case diagram of EIIS system</p></td></tr>";
$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";



//page 20
//chapter 4
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";

$document .="<tr><td><h4> 4.1.1.2. Actors Description   </h4></td></tr>";
$document .="<tr><td align='center'>";
$document .="<table border='1' width='60%'>";
$document .="<tr><td><b>Actor ID</b></td><td><b>Actor Name</b></td></tr>";
$document .="<tr><td>Act1</td><td>Administrator</td></tr>";
$document .="<tr><td>Act2</td><td>Investor</td></tr>";
$document .="</table>";
$document .="</td></tr>";
$document .="<tr><td align='left'><p>table4.1 System  Actors Identification </p></td></tr>";

$document .="<tr><td><h4> 4.1.1.3. UC-01 Login   </h4></td></tr>";
$document .="<tr><td align='center'> ".$uc01."  </td></tr>";
$document .="<tr><td align='left'><p>table4.2 UC-01</p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";








//page 21
//chapter 4
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";


$document .="<tr><td><br/><h4> 4.1.1.4. UC-02 Display Admin Tasks   </h4></td></tr>";
$document .="<tr><td align='center'> ".$uc02."  </td></tr>";
$document .="<tr><td align='left'><p>table4.3 UC-02</p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";




//page 22
//chapter 4
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";


$document .="<tr><td><br/><h4> 4.1.1.5. UC-03_Identify place coordinates  </h4></td></tr>";
$document .="<tr><td align='center'> ".$uc03."  </td></tr>";
$document .="<tr><td align='left'><p>table4.4 UC-03</p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";



//page 23
//chapter 4
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";


$document .="<tr><td><br/><h4> 4.1.1.6. UC-04_Add field to place  </h4></td></tr>";
$document .="<tr><td align='center'> ".$uc04."  </td></tr>";
$document .="<tr><td align='left'><p>table4.5 UC-04</p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";





//page 24
//chapter 4
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";


$document .="<tr><td><br/><h4> 4.1.1.7. UC-05_Add project information to field  </h4></td></tr>";
$document .="<tr><td align='center'> ".$uc05."  </td></tr>";
$document .="<tr><td align='left'><p>table4.6 UC-05</p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";




//page 25
//chapter 4
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";


$document .="<tr><td><br/><h4> 4.1.1.8. UC-06_Search by map  </h4></td></tr>";
$document .="<tr><td align='center'> ".$uc06."  </td></tr>";
$document .="<tr><td align='left'><p>table4.7 UC-06</p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";



//page ??
//chapter 4
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";


$document .="<tr><td><h3> 4.1.2.Non Functional Requirements  </h3></td></tr>";
$document .="<tr><td><h4> 4.1.2.1. Speed  </h4></td></tr>";
$document .="<tr><td><p> Speed is neccessary to achieve user satisfaction, it is one of the most important software features to avoid user frastration, speed in our system is achieved by using  simple algorithms written in PHP language and served by the powerful webserver Apache 2.2 </p></td></tr>";
$document .="<tr><td><br/><h4> 4.1.2.2. Security  </h4></td></tr>";
$document .="<tr><td><p> Sql is used to fetch data from database to user and from administrator to database, so achieving security is done by separating insertion code from the GUI interfaces completely, for example: if investor wants to search for opportunity for some place, instead of prompting to enter data into textbox, he/she is allowed to just click the place on Egypt map then the system displays details about this place; by this approach we ensure complete prevention to sql-injection  </p></td></tr>";
$document .="<tr><td><br/><h4> 4.1.2.3. reliability  </h4></td></tr>";
$document .="<tr><td><p> The same as speed, it is also neccessary to achieve user satisfaction, and it is also achieved by using  simple algorithms written in PHP language and served by the powerful webserver Apache 2.2 </p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";



//page ??
//chapter 4
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";


$document .="<tr><td><br/><h3> 4.1.3.Data Requirements  </h3></td></tr>";
$document .="<tr><td><h4> 4.1.3.1. Data entry isolation  </h4></td></tr>";
$document .="<tr><td><p> Isolation between data entry and GUI achieves data intigrity. </p></td></tr>";
$document .="<tr><td><br/><h4> 4.1.3.2. Money data is in Livre Egyptian (L.E)  </h4></td></tr>";
$document .="<tr><td><p> We -researcher- insisted to make the coin used in data of money to be Livre Egyptian (L.E) so that the value of the Egyptian pound is encouraged to increase </p></td></tr>";
$document .="<tr><td><br/><h4> 4.1.3.3. Needed to be up-to-date </h4></td></tr>";
$document .="<tr><td><p> System is pretty easy to update data, and insert new ones instead of old ones and this is achieved by the system-database interface design will be shown later in the component design </p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";




//page ??
//chapter 4
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";


$document .="<tr><td><h3> 4.2. System Analysis  </h3></td></tr>";
$document .="<tr><td><h4> 4.2.1. Sequence Diagram  </h4></td></tr>";
$document .="<tr><td><h4> 4.2.1.1.  Login Sequence Diagram </h4></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/design/login_seq.PNG' width='450px'/></td></tr>";
$document .="<tr><td align='left'><p>fig. 4.2. shows login sequence diagram of EIIS system</p></td></tr>";

$document .="<tr><td><br/><h4> 4.2.1.2.  Search By Map Sequence Diagram </h4></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/design/search_seq.PNG' width='450px'/></td></tr>";
$document .="<tr><td align='left'><p>fig. 4.3. shows Search By map sequence diagram of EIIS system</p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";





//page ??
//chapter 4
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";


$document .="<tr><td><h3> 4.3. Logical Design  </h3></td></tr>";
$document .="<tr><td><h4> 4.3.1. Entity Relationship Diagram (ERD)  </h4></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/design/ER.PNG' width='450px'/></td></tr>";
$document .="<tr><td align='left'><p>fig. 4.4. shows ER diagram of database schema</p></td></tr>";

$document .="<tr><td><h4> 4.3.2.Relational Data Model  </h4></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/design/data_modeling.PNG' width='450px'/></td></tr>";
$document .="<tr><td align='left'><p>fig. 4.5. shows Relational data model of database schema</p></td></tr>";
$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";



//page ??
//chapter 4
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";

$document .="<tr><td><h3> 4.4. Physical Design  </h3></td></tr>";
$document .="<tr><td><h3> 4.4.1. Component Diagram  </h3></td></tr>";
$document .="<tr><td><h4> 4.4.1.1 Presentation Component </h4></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/design/compo_presentation.JPG' width='450px'/></td></tr>";
$document .="<tr><td align='left'><p>fig. 4.6. shows Component diagram for presentation layer of the system.</p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";




//page ??
//chapter 4
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";

$document .="<tr><td><h3> 4.4.1. Component Diagram (Cont.) </h3></td></tr>";
$document .="<tr><td><h4> 4.4.1.2 User Interface Component </h4></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/design/compo-user-interface-code.JPG' width='450px'/></td></tr>";
$document .="<tr><td align='left'><p>fig. 4.7. shows Component diagram for user interface layer of the system.</p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";





//page ??
//chapter 4
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";

$document .="<tr><td><h3> 4.4.1. Component Diagram (Cont.) </h3></td></tr>";
$document .="<tr><td><h4> 4.4.1.3 User Interface Interaction Component </h4></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/design/compo_user_inter_face_inter1.JPG' width='450px'/></td></tr>";
$document .="<tr><td align='left'><p>fig. 4.8. shows Component diagram for user interaction interface layer of the system.</p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";




//page ??
//chapter 4
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";

$document .="<tr><td><h3> 4.4.1. Component Diagram (Cont.) </h3></td></tr>";
$document .="<tr><td><h4> 4.4.1.4. Database-System Interface Component Diagram  </h4></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/design/compo_datab_sys_interface.JPG' width='450px'/></td></tr>";
$document .="<tr><td align='left'><p>fig. 4.9. shows Component diagram for Database-system interface layer of the system.</p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";





//page ??
//chapter 4
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";

$document .="<tr><td><h3> 4.4.1. Component Diagram (Cont.) </h3></td></tr>";
$document .="<tr><td><h4> 4.4.1.5. Database Component Diagram  </h4></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/design/compo-database.JPG' width='450px'/></td></tr>";
$document .="<tr><td align='left'><p>fig. 4.10. shows Component diagram for Database  layer of the system.</p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";




//page ??
//chapter 4
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";

$document .="<tr><td><h3> 4.4.1. Component Diagram (Cont.) </h3></td></tr>";
$document .="<tr><td><h4> 4.4.1.6. Server Component Diagram  </h4></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/design/compo-business-serv.JPG' width='450px'/></td></tr>";
$document .="<tr><td align='left'><p>fig. 4.11. shows Component diagram for Server  layer of the system.</p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";





//page ??
//chapter 4
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";

$document .="<tr><td><h3> 4.4. Physical Design (Cont.)  </h3></td></tr>";
$document .="<tr><td><h4> 4.4.2. Deployment Diagram  </h4></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/design/Deployment Diagram.JPG' width='450px'/></td></tr>";
$document .="<tr><td align='left'><p>fig. 4.12. shows Deployment diagram for EIIS system.</p></td></tr>";



$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";





//page ??
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h2> Chapter 5: Testing & Results  </h2></td></tr>";
$document .="<tr><td><h3> 5.1. User Requirements Validation: GUI description &testing  </h3></td></tr>";
$document .="<tr><td><h4> 5.1.1. Home Page  </h4></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/GUI/home_page.PNG' width='450px'/></td></tr>";
$document .="<tr><td align='left'><p>".$home_desc."</p></td></tr>";
$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";



//chapter 5 search by map
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h3> 5.1. User Requirements Validation: GUI description &testing (Cont.) </h3></td></tr>";
$document .="<tr><td><h4> 5.1.2. Search By Map  </h4></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/GUI/Search_by_map.PNG' width='450px'/></td></tr>";
$document .="<tr><td align='left'><p>".$bymap_desc."</p></td></tr>";
$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";


//chapter 5 search by budget
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h3> 5.1. User Requirements Validation: GUI description &testing (Cont.) </h3></td></tr>";
$document .="<tr><td><h4> 5.1.3. Search By Budget  </h4></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/GUI/Search_by_budget.PNG' width='250px'/></td></tr>";
$document .="<tr><td align='left'><p>".$bybud_desc."</p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";





//chapter 5 Fields' list
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h3> 5.1. User Requirements Validation: GUI description &testing (Cont.) </h3></td></tr>";
$document .="<tr><td><h4> 5.1.4. Show Investment Fields  </h4></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/GUI/Fields_list1.PNG' width='450px'/></td></tr>";
$document .="<tr><td align='left'><p>".$field_list1."</p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";


//chapter 5 Fields' list
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h3> 5.1. User Requirements Validation: GUI description &testing (Cont.) </h3></td></tr>";
$document .="<tr><td><h4> 5.1.5. Show Investment Fields  </h4></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/GUI/Fields_list.PNG' width='500px'/></td></tr>";
$document .="<tr><td align='left'><p>".$field_list."</p></td></tr>";
$document .="<tr><td><h4> 5.1.6. Picked Investment Field Details  </h4></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/GUI/health.PNG' width='500px'/></td></tr>";
$document .="<tr><td align='left'><p>".$health_field."</p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";




//chapter 5 Fields' list
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h3> 5.1. User Requirements Validation: GUI description &testing (Cont.) </h3></td></tr>";
$document .="<tr><td><h4> 5.1.7. Picked place Investment Details  </h4></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/GUI/result_of_map.PNG' width='500px'/></td></tr>";
$document .="<tr><td align='left'><p>".$result_place."</p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";


//chapter 5 Fields' list
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h3> 5.1. User Requirements Validation: GUI description &testing (Cont.) </h3></td></tr>";
$document .="<tr><td><h4> 5.1.8. Related Links   </h4></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/GUI/related_links.PNG' width='450px'/></td></tr>";
$document .="<tr><td align='left'><p>fig. 5.8 The investor has the option to surf other powerful links related to the context of Investment in Egypt, this list of websites is continuously updated.</p></td></tr>";
$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";





//chapter 5 Fields' list
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h3> 5.1. User Requirements Validation: GUI description &testing (Cont.) </h3></td></tr>";
$document .="<tr><td><h4> 5.1.9. Admin-login-logout   </h4></td></tr>";
$document .="<tr><td align='left'><p> Here we will test the admin tasks appearing disappearing when login and logout respectively</p></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/GUI/admin_login.PNG' width='450px'/></td></tr>";
$document .="<tr><td align='left'><p>fig. 5.9 The admin is about to login, notice the tasks do not appear in the right menu.</p></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/GUI/admin_login_form.PNG' width='450px'/></td></tr>";
$document .="<tr><td align='left'><p>fig. 5.10 The admin clicked the link button to login, the form appeared to enter name and password.</p></td></tr>";
$document .="<tr><td align='center'><img src='./documentation/GUI/admin_logged_in.PNG' width='450px'/></td></tr>";
$document .="<tr><td align='left'><p>fig. 5.11 After the admin entered name and password correctly the system gives authority to display admin tasks on right menu as shown in figure.</p></td></tr>";

$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";




//page ??
// admin place coord

//chapter 5 Fields' list
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h3> 5.1. User Requirements Validation: GUI description &testing (Cont.) </h3></td></tr>";
$document .="<tr><td><h4> 5.1.10. Admin-Identify Place Coordinates  </h4></td></tr>";
$document .="<tr><td align='left'> This is one of the system options given to administrator to identify place on map, gets its coordinates as a preparing step to visualize its fields on Egypt map. </td></tr>";

$document .="<tr><td align='center'><img src='./documentation/GUI/admin_map.PNG' width='450px'/></td></tr>";
$document .="<tr><td align='left'>fig. 5.12 shows the map with red mark for each recordable place, admin can name any marked place on map to then be assigned fields, projects, opportunities to be shown to the investor dynamically.</td></tr>";


$document .="<tr><td align='center'><img src='./documentation/GUI/admin_insert_place.PNG' width='250px'/></td></tr>";
$document .="<tr><td align='left'>fig. 5.13 shows the form by which admin inserts new name for the picked coordinate on previously shown map.</td></tr>";


$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";











//chapter 5 Fields' list
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h3> 5.1. User Requirements Validation: GUI description &testing (Cont.) </h3></td></tr>";
$document .="<tr><td><h4> 5.1.11. Project Document Generation  </h4></td></tr>";
$document .="<tr><td align='left'> This is an additional task we've made to generate our document well formed at a glance, instead of using MS Word program that sometimes consume time styling the document. this page is implemented as a webpage of the system under category 'about us'.</td></tr>";
$document .="<tr><td align='center'><img src='./documentation/GUI/generate.PNG' width='450px'/></td></tr>";
$document .="<tr><td align='left'>fig. 5.14 this page appears on clicking the navigator bar -> about us-> project documentation.</td></tr>";
$document .="<tr><td align='center'><img src='./documentation/GUI/generated.PNG' width='450px'/></td></tr>";
$document .="<tr><td align='left'>fig. 5.15 shows the generated document in your hands.</td></tr>";
$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";





//page ??
// chapter 6
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h2> Chapter 6: Conclusion & Futuer work  </h2></td></tr>";
$document .="<tr><td><h3> 6.1 Conclusion </h3></td></tr>";
$document .="<tr><td align='left'><p>".$conclusion."</p></td></tr>";
$document .="<tr><td><h3> 6.2 Future Work </h3></td></tr>";
$document .="<tr><td align='left'><p>".$future."</p></td></tr>";
$document .="</table></td></tr>";

$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";


// Referneces
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h2> References  </h2></td></tr>";
$document .="<tr><td align='left'><p>".$ref."</p></td></tr>";
$document .="</table></td></tr>";


$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";



// Appendix A: System Installation
$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><h2> Appendix A: System Installation  </h2></td></tr>";
$document .="<tr><td align='left'><p>".$app."</p></td></tr>";
$document .="</table></td></tr>";


$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";



//empty page
/*

$document .= "<table class='page' border='2'>";
$document .="<tr><td  class='page_header'>";
$document .="<table class='normalt'><tr>";
$document .="<td><img src='./styling/images/diploma_project_logo.GIF' width='42' height='42' /></td>";
$document .="<td align='center' vertical-align='middle'>ISSR Computer Science Diploma project: Egypt Investor Information System (EIIS)</td>";
$document .="<td><img src='./styling/images/ISSRlogo.PNG' width='42' height='42' /></td>";
$document .="</tr></table>";
$document .="</td></tr>";

$document .="<tr><td  class='content'> <table class='normalt'> ";
$document .="<tr><td><br/><h3> Table of contents </h3></td></tr>";
$document .="</table></td></tr>";


$page_count++;
$document .="<tr><td class='page_footer'><table class='normalt'><tr><td align='center'>".$page_count."</td></tr></table></td></tr>";
$document .="</table><br/>";
*/



?>


<?php
$document .= '<body></html>';
$filename = 'EIIS_documentation.html'; 
$filehandler = fopen($filename,'w+');
fwrite($filehandler,$document);
fclose($filehandler);
?>
<table><tr><td> <?php echo   " print preview "; ?> </td>
<!--td><input type="button" onClick="location.href='<?php echo $filename;?>'" value="generate file for print" target="_blank"/></td-->
<td><a class="right_menu" target="_blank" href='<?php echo $filename;?>'"  target="_blank">generate file for print </a></td>
</tr>
<tr><td colspan="3" id="say_printed"></td></tr>
</table>




<?php echo $page_footer; 

echo $bottom_website_footer ;

echo $page_end;
?>

