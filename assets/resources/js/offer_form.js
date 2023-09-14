// *** маска телефона ***
document.getElementsByName('phone').forEach(el => {
    IMask(el, {
        mask: '+{7}(000)-000-00-00'
    })
})
// *** маска телефона ***

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

// Close Modal
let closeModal = document.getElementById("close-btn");

closeModal.onclick = function () {
    modal.style.display = "none";
    offerFormMini.classList.remove('hidden')
    offerFormMini.classList.add('flex')
}
// Форма модальное окно при "Добавить поле" в offer_form_mini END
$(document).ready(() => {

let formMini = $('#offer_form_mini');
$(formMini).on('submit', (e) => {
    e.preventDefault();
    const data = $(formMini).serializeArray();

    console.log(data)

    $.post('assets/base/snippets/form_processing.php',data,(response) => {
        console.log(response)
    })
})
});