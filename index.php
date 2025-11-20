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
                <form method="post" action="">
                    <input id="email-input" type="email" placeholder="Enter your email adress">
                    <button class="button" type="submit">SIGN UP</button>
                </form>
            </div>
        </div>
    </div>

    <section class="hero">
        <div class="hero-container">
            <img class="hero-img" src="assets/hero.png">
        </div>
        <div class="text-container">
            <p class="button">EXPORE THE COLLECTION</p>
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
                    <img class="product" src="assets/product.jpg">
                </div>
                <div class="expand-product">
                    <h4 class="product-name">SHELL JACKET</h4>
                    <button class="toggle-btn">+</button>
                </div>
                <div class="color-picker">
                    <div class="color-box stone" id="jacket-stone" data-img="products/1/product1-stone.avif"></div>
                    <div class="color-box sand" id="jacket-sand" data-img="products/1/product1-sand.avif"></div>
                    <div class="color-box moss" id="jacket-moss" data-img="products/1/product1-moss.avif"></div>
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
                    <div class="color-box stone" id="glasses-stone" data-img="product2-stone"></div>
                    <div class="color-box sand" id="glasses-sand" data-img="product2-sand"></div>
                    <div class="color-box moss" id="glasses-moss" data-img="product2-moss"></div>
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
                    <div class="color-box stone" id="glasses-stone" data-img="product3-stone"></div>
                    <div class="color-box sand" id="glasses-sand" data-img="product3-sand"></div>
                    <div class="color-box moss" id="glasses-moss" data-img="product3-moss"></div>
                </div>
                <div class="description">
                    <p class="prod-description">Constructed from recycled nylon with water resistant coating.</p>
                </div>
            </div>

            <div class="product-container" data-product="4">
                <div class="product-img-container">
                    <img class="product" src="assets/product.jpg">
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
        <div class="tech-img-container">
            <img class="tech-img" src="assets/layers.jpg">
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
        <p class="button">LEARN MORE</p>
    </section>

    <section class="function">
        <h4>DESIGNED TO MOVE, BUILT TO LAST</h4>
        <p>Each piece is crafted from regenerative materials engineered to endure motion, wear and time.</p>
        <div class="motion-img-container">
            <img class="motion-img" src="assets/motion.jpg">
        </div>
    </section>
</main>

<script src="script.js"></script>

<?php
require_once __DIR__ . '/footer.php';
?>