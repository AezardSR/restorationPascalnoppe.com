let btnBurger = document.getElementById('menu-button');
let menu = document.getElementById('menu');
let classList = menu.classList;

function miseClass() {
  if (classList == "toggle-on"){
    menu.className = "toggle-off"
  } else {
    menu.className = "toggle-on";
  }

}

btnBurger.onclick = function() {miseClass()}