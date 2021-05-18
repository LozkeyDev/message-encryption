<?php
    if(isset($_GET["logout"]) && $_GET["logout"] == "yes")
    {
        session_start();

        session_destroy();

        header("location: index.php");
    }


?>