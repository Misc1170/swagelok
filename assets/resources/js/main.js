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
let offerFormMini = document.getElementById('offer_form_mini');
let offerFormMiniOpen = document.getElementsByClassName('offer_mini__open');

for (let i = 0; i < offerFormMiniOpen.length; i++) {
    offerFormMiniOpen[i].addEventListener('click', () => {
        offerFormMini.classList.toggle('hidden')
        offerFormMini.classList.toggle('flex')
    });
}

// Форма мини при "Запросить КП" END


// Форма модальное окно при "Добавить поле" в offer_form_mini START

let modal = document.getElementById("my-modal");
let openModal = document.querySelector(".open-btn");

// Open Modal
openModal.addEventListener('click', () => {
    modal.style.display = "block";
    offerFormMini.classList.add('hidden')
});

// for (let i = 0; i < openModal.length; i++) {
//     openModal[i].addEventListener('click', () => {
//         modal.style.display = "block";
//         offerFormMini.classList.add('hidden')
//     });
// }

// Close Modal
let closeModal = document.getElementById("close-btn");

closeModal.onclick = function () {
    modal.style.display = "none";
    offerFormMini.classList.remove('hidden')
    offerFormMini.classList.add('flex')
}

// Форма модальное окно при "Добавить поле" в offer_form_mini END


// Передача значений inputs из offet_form_mini в offer_form_modal и обратно START

let offerFormMiniInputs = document.querySelectorAll('#offer_form_mini input');
let offerFormModalInputs = document.querySelectorAll('#offer_form_modal input');
offerFormMiniInputs.forEach((el, index) => {
    el.addEventListener('input', () => {
        let offerFormModalInputsName = document.querySelector(`#offer_form_modal input[ name=${el.name}]`);
        offerFormModalInputsName.value = el.value;
    })
})
for (let i = 0; i < offerFormModalInputs.length; i++) {
    offerFormModalInputs[i].addEventListener('input', () => {
        let offerFormMiniInputsName = document.querySelector(`#offer_form_mini input[name=${offerFormModalInputs[i].name}]`) ?? null;
        if (offerFormMiniInputsName !== null) {
            offerFormMiniInputsName.value = offerFormModalInputs[i].value;
        }
    })
}
// Передача значений inputs из offer_form_mini в offer_form_modal и обратно END
