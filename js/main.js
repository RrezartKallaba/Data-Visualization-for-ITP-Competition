window.addEventListener('load', () => {
    setTimeout(() => {
        document.getElementById('loader').style.display = 'none';
    }, 3000);
});

function toggleMenu() {
    var menu = document.getElementById("myLinks");
    var iconHamburger = document.querySelector(".openbtn");
    var iconClose = document.querySelector(".closebtn");

    if (menu.style.display === "block") {
        menu.style.display = "none";
        iconHamburger.style.display = "block";
        iconClose.style.display = "none";
    } else {
        menu.style.display = "block";
        iconHamburger.style.display = "none";
        iconClose.style.display = "block";
    }
}