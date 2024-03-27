<?php
session_start();
require_once "includes/dbh.inc.php";

if(isset($_SESSION["auto_login_email"]) && isset($_SESSION["auto_login_password"])){

    $sql = "SELECT user_id, email, password_hash FROM users WHERE email= :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":email", $_SESSION["auto_login_email"]);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user && $_SESSION["auto_login_password"] === $user["password_hash"]){
        $_SESSION["user_id"] = $user["user_id"];
        $_SESSION["email"] = $user["email"];

        header("Location: home.php");
    } else{
        echo "Failed to log in, return to home page.";
    }
}