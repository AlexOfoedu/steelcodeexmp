<?php
include_once 'functions.php';

if (isset($_POST['user']))
{
    $user = sanitizeString($_POST['user']);

    if (mysql_num_rows(queryMysql("SELECT * FROM members
        WHERE user='$user'")))
        echo  "<span class='taken'>&nbsp;&#x2718; " .
              "Username in use</span>";
    else echo "<span class='available'>&nbsp;&#x2714; " .
              "Username available</span>";
}
?>
