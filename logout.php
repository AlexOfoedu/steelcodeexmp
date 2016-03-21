<?php
include_once 'header.php';

if (isset($_SESSION['user']))
{
    destroySession();
    echo "<div class='main'>Logged out " .
         "<a href='index.php'>Reload</a>";
}
else echo "<div class='main'><br />" .
          "You have't logged in yet";
?>

<br /><br /></div></body></html>
