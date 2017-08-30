<?php


$uc01 = "<table border='1' width='90%'>";
$uc01 .= "<tr><td width='20%'><b>ID</b></td><td>uc-01</td></tr>";
$uc01 .= "<tr><td><b>Use Case Name</b></td><td>logs in</td></tr>";
$uc01 .= "<tr><td><b>Actor(s)</b></td><td>Act-01</td></tr>";
$uc01 .= "<tr><td><b>Description</b></td><td>Allow  Administrator to log in to the admin page</td></tr>";
$uc01 .= "<tr><td><b>Pre-condition</b></td><td> Administrator not allowed to view Admin tasks </td></tr>";
$uc01 .= "<tr><td><b>Flow of Events</b></td><td><ol> Main flow of events:<li>prompt user  to enter name and password  </li><li>user enters name and password</li><li>System verifies the correctness of name and password</li><li>. if name and password are off authorized user  Administrator allowed  to view admin tasks. Else  error message appears</li></ol></td></tr>";
$uc01 .= "<tr><td><b>Post-conditions</b></td><td>Administrator allowed  to view admin tasks if user name and password are correct or system will remain unlogged</td></tr>";
$uc01 .= "<tr><td><b>Uses</b></td><td></td></tr>";
$uc01 .= "<tr><td><b>Extends</b></td><td></td></tr>";
$uc01 .= "<tr><td><b>Extended By</b></td><td></td></tr>";
$uc01 .= "</table>";



$uc02 = "<table border='1' width='90%'>";
$uc02 .= "<tr><td width='20%'><b>ID</b></td><td>UC-02</td></tr>";
$uc02 .= "<tr><td><b>Use Case Name</b></td><td>Displays Admin tasks</td></tr>";
$uc02 .= "<tr><td><b>Actor(s)</b></td><td>Act-01</td></tr>";
$uc02 .= "<tr><td><b>Description</b></td><td> Allow Admin to display tasks</td></tr>";
$uc02 .= "<tr><td><b>Pre-condition</b></td><td> Administrator is authorized to view Admin tasks </td></tr>";
$uc02 .= "<tr><td><b>Flow of Events</b></td><td><ol> Main flow of events:<li>system displays list of admin tasks </li><li>Admin choose any of tasks shown</li><li>Admin may choose to logout</li></ol></td></tr>";
$uc02 .= "<tr><td><b>Post-conditions</b></td><td><ul>Can be view Admin tasks <li>Identify place coordinates</li><li>Add investment field to place</li><li>Add project information to investment field</li></ul></td></tr>";
$uc02 .= "<tr><td><b>Uses</b></td><td></td></tr>";
$uc02 .= "<tr><td><b>Extends</b></td><td></td></tr>";
$uc02 .= "<tr><td><b>Extended By</b></td><td></td></tr>";
$uc02 .= "</table>";



$uc03 = "<table border='1' width='90%'>";
$uc03 .= "<tr><td width='20%'><b>ID</b></td><td>uc-03</td></tr>";
$uc03 .= "<tr><td><b>Use Case Name</b></td><td>Identify place coordinates </td></tr>";
$uc03 .= "<tr><td><b>Actor(s)</b></td><td>Act-01</td></tr>";
$uc03 .= "<tr><td><b>Description</b></td><td>Administrator identifies the place coordinates on Egypt map </td></tr>";
$uc03 .= "<tr><td><b>Pre-condition</b></td><td> Administrator is authorized to view Admin tasks  </td></tr>";
$uc03 .= "<tr><td><b>Flow of Events</b></td><td><ol> Main flow of events:<li>Egypt map is shown to admin with clickable marked places </li><li>Admin chooses one of the clickable places</li><li>System shows clicked place coordinates</li></ol></td></tr>";
$uc03 .= "<tr><td><b>Post-conditions</b></td><td>Administrator can Identify place coordinates</td></tr>";
$uc03 .= "<tr><td><b>Uses</b></td><td></td></tr>";
$uc03 .= "<tr><td><b>Extends</b></td><td></td></tr>";
$uc03 .= "<tr><td><b>Extended By</b></td><td></td></tr>";
$uc03 .= "</table>";



$uc04 = "<table border='1' width='90%'>";
$uc04 .= "<tr><td width='20%'><b>ID</b></td><td>uc-04</td></tr>";
$uc04 .= "<tr><td><b>Use Case Name</b></td><td>Add field to place  </td></tr>";
$uc04 .= "<tr><td><b>Actor(s)</b></td><td>Act-01</td></tr>";
$uc04 .= "<tr><td><b>Description</b></td><td>Administrator add investment field to place  </td></tr>";
$uc04 .= "<tr><td><b>Pre-condition</b></td><td> Administrator is authorized to view Admin tasks  </td></tr>";
$uc04 .= "<tr><td><b>Flow of Events</b></td><td><ol> Main flow of events:<li>admin open task list </li><li>Admin picks field insert task</li><li>Admin inserts field to place</li></ol></td></tr>";
$uc04 .= "<tr><td><b>Post-conditions</b></td><td>Administrator can add investment field to place</td></tr>";
$uc04 .= "<tr><td><b>Uses</b></td><td></td></tr>";
$uc04 .= "<tr><td><b>Extends</b></td><td></td></tr>";
$uc04 .= "<tr><td><b>Extended By</b></td><td></td></tr>";
$uc04 .= "</table>";


$uc05 = "<table border='1' width='90%'>";
$uc05 .= "<tr><td width='20%'><b>ID</b></td><td>uc-05</td></tr>";
$uc05 .= "<tr><td><b>Use Case Name</b></td><td>Add project information to field   </td></tr>";
$uc05 .= "<tr><td><b>Actor(s)</b></td><td>Act-01</td></tr>";
$uc05 .= "<tr><td><b>Description</b></td><td>Administrator add  project information to investment  field  </td></tr>";
$uc05 .= "<tr><td><b>Pre-condition</b></td><td> Administrator is authorized to view Admin tasks  </td></tr>";
$uc05 .= "<tr><td><b>Flow of Events</b></td><td><ol> Main flow of events:<li>admin open task list </li><li>Admin picks field insert task</li><li>Admin inserts project information to field</li></ol></td></tr>";
$uc05 .= "<tr><td><b>Post-conditions</b></td><td>Administrator can add project information to investment field </td></tr>";
$uc05 .= "<tr><td><b>Uses</b></td><td></td></tr>";
$uc05 .= "<tr><td><b>Extends</b></td><td></td></tr>";
$uc05 .= "<tr><td><b>Extended By</b></td><td></td></tr>";
$uc05 .= "</table>";




$uc06 = "<table border='1' width='90%'>";
$uc06 .= "<tr><td width='20%'><b>ID</b></td><td>uc-06</td></tr>";
$uc06 .= "<tr><td><b>Use Case Name</b></td><td>Search by map    </td></tr>";
$uc06 .= "<tr><td><b>Actor(s)</b></td><td>Act-02</td></tr>";
$uc06 .= "<tr><td><b>Description</b></td><td>Investor search about investment fields for chosen place by Egypt  map  </td></tr>";
$uc06 .= "<tr><td><b>Pre-condition</b></td><td> no pre-conditions required , this use case made reachable by all visitors, investor want to search about investment fields by map  </td></tr>";
$uc06 .= "<tr><td><b>Flow of Events</b></td><td><ol> Main flow of events:<li>investor Search by map</li><li>investor pick place on map to check details</li><li>system set control to place-field page </li></ol></td></tr>";
$uc06 .= "<tr><td><b>Post-conditions</b></td><td>Investor can display field detail for chosen place by Egypt map </td></tr>";
$uc06 .= "<tr><td><b>Uses</b></td><td></td></tr>";
$uc06 .= "<tr><td><b>Extends</b></td><td></td></tr>";
$uc06 .= "<tr><td><b>Extended By</b></td><td></td></tr>";
$uc06 .= "</table>";



?>