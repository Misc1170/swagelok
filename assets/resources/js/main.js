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
