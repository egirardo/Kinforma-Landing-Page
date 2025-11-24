<?php
require __DIR__ . "/assets.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kinforma</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=B612:ital,wght@0,400;0,700;1,400;1,700&family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="large-media.css">
    <link rel="stylesheet" href="fonts.css">
</head>

<body>
    <header>
        <nav class="header-wrapper">
            <div class="logo-container">
                <img class="logo" src="assets/logo.svg">
                <h3 class="logo-typo">kinforma</h3>
            </div>
            <div class="nav-container">
                <img class="cart" src="assets/shopping cart.svg">
                <img class="nav-button" id="open-menu" src="assets/nav.svg">
                <img class="hidden menu-x" id="hidden" src="assets/menu-x.svg">
            </div>
        </nav>
        <div class="header-menu" id="hidden">
            <div class="search-bar">
                <input type="search" id="searchInput" placeholder="SEARCH">
                <a class="search-icon"><img src="/assets/ei_search.svg"></a>
            </div>
            <div class="slogan-menu-container">
                <div class="slogan">
                    <p class="discover">DISCOVER THE FUTURE OF ADAPTABLE DESIGN</p>
                </div>
                <div class="menu-section">
                    <?= $headerMenuLine ?>
                    <div class="menu-option">
                        <a>COLLECTION</a>
                        <img class="menu-arrow" src="/assets/menu-arrow.svg">
                    </div>
                    <?= $headerMenuLine ?>
                    <div class="menu-option">
                        <a>CUSTOMIZE</a>
                        <img class="menu-arrow" src="/assets/menu-arrow.svg">
                    </div>
                    <?= $headerMenuLine ?>
                    <div class="menu-option">
                        <a>TECHNOLOGY</a>
                        <img class="menu-arrow" src="/assets/menu-arrow.svg">
                    </div>
                    <?= $headerMenuLine ?>
                    <div class="menu-option">
                        <a>ABOUT KINFORMA</a>
                        <img class="menu-arrow" src="/assets/menu-arrow.svg">
                    </div>
                    <?= $headerMenuLine ?>
                    <div class="menu-option">
                        <a>COMMUNITY</a>
                        <img class="menu-arrow" src="/assets/menu-arrow.svg">
                    </div>
                    <?= $headerMenuLine ?>
                </div>
            </div>
            <div class="menu-img-container">
                <img class="menu-img" src="/assets/menu-background.png">
            </div>
            <div class="menu-footer">
                <?= $headerFooterLine ?>
                <div class="menu-footer-content">
                    <a>CUSTOMER SUPPORT</a>
                    <a>LOG IN</a>
                </div>
            </div>

        </div>

    </header>