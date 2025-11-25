<?php
require_once __DIR__ . '/header.php';
?>

<main>

    <div class="popup-overlay" id="popupOverlay">
        <div class="popup" id="popup">
            <img class="close" id="closePopup" src="assets/menu-x.svg">
            <h4>GET FIRST ACCESS TO NEW RELEASES</h4>
            <p>Be the first to know when new drops go live. Join our early-access list.</p>
            <div class="email-container">
                <form class="popup-form" method="post" action="">
                    <input id="email-input" type="email" placeholder="Enter your email adress">
                    <button id="email-signup" class="button" type="submit">SIGN UP</button>
                </form>
            </div>
        </div>
    </div>

    <section class="hero">
        <div class="hero-container">
            <img class="hero-img" src="products/lifestyle/Life_Style_Bild_03.png">
            <div class="hero-text">
                <h4>THE FUTURE OF FASHION, TODAY.</h4>
                <p>Experience a new dimension of fashion, where technology, sustainability and adaptive design meet.</p>
            </div>
        </div>
        <div class="text-container">
            <p class="button">EXPLORE THE COLLECTION</p>
        </div>
    </section>

    <section class="scroll">
        <div class="section-head">
            <h4>DROP 01: ADAPTIVE FORMS</h4>
            <div class="arrow-control">
                <img class="arrows" src="assets/arrow left.svg">
                <img class="arrows" src="assets/arrow right.svg">
            </div>
        </div>
        <div class="product-scroll">

            <div class="product-container" data-product="1">
                <div class="product-img-container">
                    <img class="product" src="products/lifestyle/Life_Style_Bild.png">
                </div>
                <div class="expand-product">
                    <h4 class="product-name">SHELL JACKET</h4>
                    <button class="toggle-btn">+</button>
                </div>
                <div class="color-picker">
                    <div class="color-box stone" id="jacket-stone" data-img="products/1/Jacka_Beige/Jacka_Biege_Kritvit.png"></div>
                    <div class="color-box sand" id="jacket-sand" data-img="products/1/Jacka_Beige/Jacka_Biege_Kritvit.png"></div>
                    <div class="color-box moss" id="jacket-moss" data-img="products/1/Jacka_Brungrå/Jacka_Brun_Vitt.png"></div>
                </div>
                <div class="description">
                    <p class="prod-description">Lightweight, weatherproof shell engineered for freedom of movement.</p>
                </div>
            </div>

            <div class="product-container" data-product="2">
                <div class="product-img-container">
                    <img class="product" src="products/lifestyle/Life_Style_Bild_04.png">
                </div>
                <div class="expand-product">
                    <h4 class="product-name">OPTICAL FRAME</h4>
                    <button class="toggle-btn">+</button>
                </div>
                <div class="color-picker">
                    <div class="color-box sand" id="glasses-sand" data-img="products/2/Solglasögon_Sand_Vit_fram.png"></div>
                    <div class="color-box moss" id="glasses-moss" data-img="products/2/Solglasögon_Moss_Vit_fram.png"></div>
                </div>
                <div class="description">
                    <p class="prod-description">Lightweight titanium eyewear with UV protection.</p>
                </div>
            </div>

            <div class="product-container" data-product="3">
                <div class="product-img-container">
                    <img class="product" src="products/lifestyle/Life_Style_Bild_02.jpg">
                </div>
                <div class="expand-product">
                    <h4 class="product-name">VOLUME BAG</h4>
                    <button class="toggle-btn">+</button>
                </div>
                <div class="color-picker">
                    <div class="color-box sand" id="bag-sand" data-img="products/3/Väska_Vit_sand.png"></div>
                    <div class="color-box moss" id="bag-moss" data-img="products/3/Väska_Vit_moss.png"></div>
                </div>
                <div class="description">
                    <p class="prod-description">Constructed from recycled nylon with water resistant coating.</p>
                </div>
            </div>

            <div class="product-container" data-product="4">
                <div class="product-img-container">
                    <img class="product" src="products/4/Ring_med_case_2.png">
                </div>
                <div class="expand-product">
                    <h4 class="product-name">LOOP UNIT</h4>
                    <button class="toggle-btn">+</button>
                </div>
                <div class="color-picker">
                    <div class="color-box silver" id="ring-silver" data-img="products/4/Ring_Guld_Silver_Vit.png"></div>
                    <div class="color-box guld" id="ring-guld" data-img="products/4/Ring_Silver_Guld_Vit.png"></div>
                </div>
                <div class="description">
                    <p class="prod-description">Crafted in stainless steel.</p>
                </div>
            </div>
        </div>
        <button class="button">VIEW LOOKBOOK</button>
    </section>


    <section class="tech">
        <h4 class="small-screen">EXPLORE THE LAYERS BEHIND THE INNOVATION.</h4>
        <div class="tech-flex">
            <div class="tech-img-container">
                <video class="tech-img" id="tech-vid" autoplay muted loop>
                    <source src="products/tech/tech-turntable.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="tech-info-wrapper">
                <h4 class="big-screen">EXPLORE THE LAYERS BEHIND THE INNOVATION.</h4>
                <div class="tech-info-container">
                    <img class="tech-icon" src="assets/square.svg">
                    <h5 class="tech-info-header">AeroShell™</h5>
                    <p>Hydro-resistant layer</p>
                </div>
                <div class="tech-info-container">
                    <img class="tech-icon" src="assets/triangle.svg">
                    <h5 class="tech-info-header">BioMem™</h5>
                    <p>Thermo-adaptive membrane</p>
                </div>
                <div class="tech-info-container">
                    <img class="tech-icon" src="assets/circle.svg">
                    <h5 class="tech-info-header">ReForm™</h5>
                    <p>Eco-regenerative knit</p>
                </div>
                <p id="tech-button" class="button big-screen">LEARN MORE</p>

            </div>
        </div>
        <p class="button small-screen">LEARN MORE</p>
    </section>

    <section class="function">
        <div class="function-info">
            <h4>DESIGNED TO MOVE, BUILT TO LAST</h4>
            <p>Each piece is crafted from regenerative materials engineered to endure motion, wear and time.</p>
            <button id="function-button" class="button sustainability big-screen">READ OUR SUSTAINABILITY REPORT</button>

        </div>
        <div class="motion-img-container">
            <div class="carousel">
                <div class="carousel-slides">
                    <img class="motion-img" src="products/lifestyle/Life_Style_Bild_01_fyrkant.png">
                    <img class="motion-img" src="products/lifestyle/Life_Style_Bild_02_fyrkant.png">
                    <img class="motion-img" src="products/lifestyle/Life_Style_Bild_04_fyrkant.png">
                </div>
            </div>
            <div class="dot-container">
                <span class="dot one"></span>
                <span class="dot two"></span>
                <span class="dot three"></span>
            </div>
        </div>
        <button class="button sustainability small-screen">READ OUR SUSTAINABILITY REPORT</button>
    </section>
</main>

<script src="script.js"></script>

<?php
require_once __DIR__ . '/footer.php';
?>