<?php
session_start();

require_once "includes/dbh.inc.php";

if(isset($_SESSION["login_error"])){

    header("Location: loginpage.php");
}