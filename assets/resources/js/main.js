// ВЫЗОВ BURGER MENU
let burgerMenu = document.querySelector('#burger_menu');
let burgerBtnOpen = document.querySelector('#burger_btn_open');
let burgerBtnClose = document.querySelector('#burger_btn_close');

const hamburger = () => {
    burgerMenu.classList.toggle('hidden');
    burgerMenu.classList.toggle('flex');
}

burgerBtnOpen.addEventListener('click', hamburger);
burgerBtnClose.addEventListener('click', hamburger);
// ВЫЗОВ BURGER MENU


// Форма мини при "Запросить КП" START
let offer_form_mini = document.getElementById('offer_form_mini');
offer_form_mini.addEventListener('click', () => {

})
offer_form_mini.classList.toggle('flex')
offer_form_mini.classList.toggle('hidden')
console.log(offer_form_mini)

// Форма мини при "Запросить КП"  END


// Форма модальное окно при "Добавить поле" START

let modal = document.getElementById("my-modal");

let openModal = document.getElementsByClassName("open-btn");

for (let i = 0; i < openModal.length; i++) {
    openModal[i].addEventListener('click', () => {
        modal.style.display = "block";
    });
}

let closeModal = document.getElementById("close-btn");

// Open Modal


// Close Modal
closeModal.onclick = function () {
    modal.style.display = "none";
}

// Форма модальное окно при "Добавить поле"  END
