<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SJP Company</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->

    <!-- CSS -->
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">
</head>
<body>

    <!-- navigation -->
    <ul class="menu">
        <li class="link"><a class="alink" href="<?php echo URL; ?>home/startpage">home</a></li>
        <li class="link"  id='dropbtn'><a class="alink" href="#">About</a>
            <div class="dropdown">
                <a class="alink" href="#">Projects</a>
                <a class='alink' href="#">The members</a>
                <a class='alink' href="#">How we started</a>
        </li>
        <li class="link"><a class="alink" href="#">Contact</a></li>
    </ul>
