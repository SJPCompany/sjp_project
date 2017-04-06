<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>MINI3</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->

    <!-- CSS -->
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">
</head>
<body>
    <!-- logo, check the CSS file for more info how the logo "image" is shown -->
    <div class="logo"></div>

    <!-- navigation -->
    <ul class="menu">
        <li class="link"><a class="alink" href="<?php echo URL; ?>home/startpage.php">home</a></li>
        <li class="link"  id='dropbtn'><a class="alink" href="#">About</a>
            <div class="dropdown">
                <a class="alink" href="#">Myself</a>
                <a class='alink' href="#">School</a>
                <a class='alink' href="#">Work</a>
        </li>
        <li class="link"><a class="alink" href="#">CV</a></li>
        <li class="link"><a class="alink" href="#">Contact</a></li>
        <li class="link"  id='dropbtn'><a class="alink" href="#">SchoolProjects</a>
            <div class="dropdown">
                <a class="alink" href="#">Foodbank</a>
                <a class='alink' href="#">Projects</a>
                <a class='alink' href="#">lesson</a>
        </li>
    </ul>
