<?php
//start the session
session_start();

//Include Files
require_once "connect.php";

//Initial Variable
$currentFile = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Creature Identity Test'; ?></title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<header>
    <div id="header-content">
        <img src='media/logo.png' alt='Logo' width='50' height='50'>
        <h1>Creature Identity Test</h1>
    </div>

    <nav>
        <?php
        // Navigation Links
        echo ($currentFile == "index.php") ? "Home " : "<a href='index.php'>Home  </a>";
        echo ($currentFile == "creatures_list.php") ? "Creatures " : "<a href='creatures_list.php'>Creatures  </a>";
        echo ($currentFile == "user_results.php") ? "Results " : "<a href='user_results.php'>Results  </a>";
        ?>
    </nav>
</header>
<main>
    <h2><?php if(isset($pageName)) echo $pageName;?></h2>