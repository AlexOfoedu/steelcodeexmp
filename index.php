<?php
include_once 'header.php';

echo "<br /><span class='main'>Hi,";

if ($loggedin) echo " Yo, $user";
else           echo ' Youre not logged in yet';

?>

</span><br /><br /></body></html>
