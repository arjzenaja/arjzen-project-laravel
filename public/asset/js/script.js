const header = document.querySelector("header")

window.addEventListener ("scroll", function() {
    header.classList.toggle ("sticky", this.window.scrollY > 120);
});

let menu = document.querySelector('#menu-icon');
let daftarnav = document.querySelector('.daftarnav');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    daftarnav.classList.toggle('bx-x');
}