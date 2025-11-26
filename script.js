//Popup
document.getElementById("popupOverlay").style.display = "none";

document.getElementById("closePopup").onclick = function() {
    document.getElementById("popupOverlay").style.display = "none";
};

setTimeout(function() {
    function showPopup(){
    document.getElementById("popupOverlay").style.display = "flex";
    }
    if(!document.body.classList.contains('menu-open')){
        showPopup();
    } else {
        const observer = new MutationObserver(() => {
            if (!document.body.classList.contains('menu-open')) {
                showPopup();
                observer.disconnect(); // Stop observing
            }
        });
        observer.observe(document.body, { attributes: true, attributeFilter: ['class'] });
    }
}, 5000); // Shows popup after 5 seconds

window.onclick = function(event) {
    if (event.target == document.getElementById("popupOverlay")) {
        document.getElementById("popupOverlay").style.display = "none";
    }
}; //Closes popup if you click outside




//Tech-video playbackspeed
let vid = document.getElementById("tech-vid");
vid.playbackRate = 0.7;

// Hidden Header Menu

const headerMenu = document.getElementById("hidden");
const menuButton = document.getElementById("open-menu");
const colorBoxes = document.querySelectorAll(".color-box")

menuButton.addEventListener("click", function(event){
    console.log(event.target)
    menuButton.style.display = "none";
    headerMenu.style.display = "flex";
    document.querySelector(".header-menu").style.display = "flex";
    document.body.classList.add('menu-open');

    colorBoxes.forEach(hideColorBox);
    function hideColorBox(colorBox) {
        colorBox.style.zIndex = -3;
    }
});

const xButton = document.querySelector(".menu-x");

xButton.addEventListener("click", function(event){
    console.log(event.target);
    menuButton.style.display = "flex";
    xButton.style.display = "none";
    document.querySelector(".header-menu").style.display = "none";
    document.body.classList.remove('menu-open');

        colorBoxes.forEach(showColorBox);
        function showColorBox(colorBox) {
        colorBox.style.zIndex = 0;
    }
});



//Product color selector & description expander
const products = document.querySelectorAll('.product-container');

products.forEach(product => {
  const productImage = product.querySelector('.product');
  const colorOptions = product.querySelectorAll('.color-box');

  const header = product.querySelector('.expand-product');
  const btn = product.querySelector('.toggle-btn');
  const description = product.querySelector('.description');

    //Color selector
  colorOptions.forEach(option => {
    option.addEventListener('click', () => {
      // Set the image for THIS product
      productImage.src = option.dataset.img;

      // Update active state
      colorOptions.forEach(o => o.classList.remove('active'));
      option.classList.add('active');

      
    });
});

        //Description expander
        header.addEventListener('click', () => {
        // Toggle the open class
        description.classList.toggle('open');

        // Change button text
        btn.textContent = description.classList.contains('open') ? "−" : "+";

    });
});

//Language expander in footer
const secondLang = document.querySelector('swe');
const langBtn = document.querySelector('lang');

console.log(secondLang);
console.log(langBtn);


langBtn.addEventListener('click', function(event){
    console.log(event.target)
    secondLang.style.opacity = 1;
    langBtn.textContent = description.classList.contains('open') ? "−" : "+";
});

//Description expander






