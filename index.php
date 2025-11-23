<?php
require_once __DIR__ . '/header.php';
?>

<main>

    <div class="popup-overlay" id="popupOverlay">
        <div class="popup" id="popup">
            <img class="close" id="closePopup" src="assets/menu-x.svg">
            <h4>GET FIRST ACCESS TO NEW RELEASES</h4>
            <p>Be the first to know whennew drops go live. Join our early-access list.</p>
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
            <img class="hero-img" src="products/lifestyle/Life_Style_Bild_01.jpg">
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
            </div>
            <img class="arrows" src="assets/arrow left.svg">
            <img class="arrows" src="assets/arrow right.svg">
        </div>
        <div class="product-scroll">

            <div class="product-container" data-product="1">
                <div class="product-img-container">
                    <img class="product" src="products/1/Jacka_Beige/Jacka_Beige_Bak.png">
                </div>
                <div class="expand-product">
                    <h4 class="product-name">SHELL JACKET</h4>
                    <button class="toggle-btn">+</button>
                </div>
                <div class="color-picker">
                    <div class="color-box stone" id="jacket-stone" data-img="products/1/Jacka_Blå/Jacka_Blå_Fram.png"></div>
                    <div class="color-box sand" id="jacket-sand" data-img="products/1/Jacka_Beige/Jacka_Beige_Fram.png"></div>
                    <div class="color-box moss" id="jacket-moss" data-img="products/1/Jacka_Brungrå/Jacka_Brungrå_Fram.png"></div>
                </div>
                <div class="description">
                    <p class="prod-description">Lightweight, weatherproof shell engineered for freedom of movement.</p>
                </div>
            </div>

            <div class="product-container" data-product="2">
                <div class="product-img-container">
                    <img class="product" src="assets/product.jpg">
                </div>
                <div class="expand-product">
                    <h4 class="product-name">OPTICAL FRAME</h4>
                    <button class="toggle-btn">+</button>
                </div>
                <div class="color-picker">
                    <div class="color-box sand" id="glasses-sand" data-img="products/2/Solglasögon_sand.png"></div>
                    <div class="color-box moss" id="glasses-moss" data-img="products/2/Solglasögon_moss.png"></div>
                </div>
                <div class="description">
                    <p class="prod-description">Lightweight titanium eyewear with UV protection.</p>
                </div>
            </div>

            <div class="product-container" data-product="3">
                <div class="product-img-container">
                    <img class="product" src="assets/product.jpg">
                </div>
                <div class="expand-product">
                    <h4 class="product-name">VOLUME BAG</h4>
                    <button class="toggle-btn">+</button>
                </div>
                <div class="color-picker">
                    <div class="color-box sand" id="bag-sand" data-img="products/3/Väska_sand.png"></div>
                    <div class="color-box moss" id="bag-moss" data-img="products/3/Väska_moss.png"></div>
                </div>
                <div class="description">
                    <p class="prod-description">Constructed from recycled nylon with water resistant coating.</p>
                </div>
            </div>

            <div class="product-container" data-product="4">
                <div class="product-img-container">
                    <img class="product" src="products/4/Ring_Guld_Silver_2.png">
                </div>
                <div class="expand-product">
                    <h4 class="product-name">LOOP UNIT</h4>
                    <button class="toggle-btn">+</button>
                </div>
                <div class="color-picker">
                    <div class="color-box stone" id="ring-stone" data-img="product4-stone"></div>
                    <div class="color-box sand" id="ring-sand" data-img="product4-sand"></div>
                    <div class="color-box moss" id="ring-moss" data-img="product4-moss"></div>
                </div>
                <div class="description">
                    <p class="prod-description">Crafted in stainless steel.</p>
                </div>
            </div>
        </div>
        <button class="button">VIEW LOOKBOOK</button>
    </section>


    <section class="tech">
        <h4>EXPLORE THE LAYERS BEHIND THE INNOVATION.</h4>
        <div class="tech-flex">
            <div class="tech-img-container">
                <video class="tech-img" id="tech-vid" autoplay muted loop>
                    <source src="products/tech/tech-turntable.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="tech-info-wrapper">
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
            </div>
        </div>
        <p class="button">LEARN MORE</p>
    </section>

    <section class="function">
        <h4>DESIGNED TO MOVE, BUILT TO LAST</h4>
        <p>Each piece is crafted from regenerative materials engineered to endure motion, wear and time.</p>
        <div class="motion-img-container">
            <img class="motion-img" src="assets/motion.jpg">
        </div>
        <button class="button sustainability">READ OUR SUSTAINABILITY REPORT</button>
    </section>
</main>

<script src="script.js"></script>

<?php
require_once __DIR__ . '/footer.php';
?>