//Popup
document.getElementById("popupOverlay").style.display = "none";

document.getElementById("closePopup").onclick = function() {
    document.getElementById("popupOverlay").style.display = "none";
};

/*setTimeout(function() {
    document.getElementById("popupOverlay").style.display = "flex";
}, 5000); // Shows popup after 5 seconds*/

window.onclick = function(event) {
    if (event.target == document.getElementById("popupOverlay")) {
        document.getElementById("popupOverlay").style.display = "none";
    }
}; //Closes popup if you click outside

if (!sessionStorage.getItem("popupShown")) {
    document.getElementById("popupOverlay").style.display = "block";
    sessionStorage.setItem("popupShown", "true");
}; //Only shows the popup once per session


//Product color selector
const products = document.querySelectorAll('.product-container');

products.forEach(product => {
  const productImage = product.querySelector('.product');
  const colorOptions = product.querySelectorAll('.color-box');

  colorOptions.forEach(option => {
    option.addEventListener('click', () => {
      // Set the image for THIS product
      productImage.src = option.dataset.img;

      // Update active state
      colorOptions.forEach(o => o.classList.remove('active'));
      option.classList.add('active');
    });
  });
});
