<?php
 $db =new mysqli('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'peopledb' ) or die(mysqli_error($db));
?>