<?php
    if(!isset($_SESSION['language']))
    {
        $_SESSION['language']="french";

    }else if(!empty($_GET['language']) && $_SESSION['language']!=$_GET['language'] )
    {
        $_SESSION['language']=$_GET['language'];
    }

    require_once "includes/languages/" . $_SESSION['language'] . ".php";
?>