document.getElementById("popupOverlay").style.display = "none";

document.getElementById("closePopup").onclick = function() {
    document.getElementById("popupOverlay").style.display = "none";
};

setTimeout(function() {
    document.getElementById("popupOverlay").style.display = "flex";
}, 5000); // Shows popup after 5 seconds

window.onclick = function(event) {
    if (event.target == document.getElementById("popupOverlay")) {
        document.getElementById("popupOverlay").style.display = "none";
    }
}; //Closes popup if you click outside

if (!sessionStorage.getItem("popupShown")) {
    document.getElementById("popupOverlay").style.display = "block";
    sessionStorage.setItem("popupShown", "true");
}; //Only shows the popup once per session