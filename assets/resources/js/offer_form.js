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

        $(".pop_up__input").removeClass("has-error");
        $(".error-message").remove();

        const data = $(formMini).serializeArray();

        $.post('assets/base/snippets/form_processing.php', data, (response) => {
            response = JSON.parse(response)
            console.log(response)
            if (!response.success) {

                if (response.errors.count) {
                    $.each(response.errors.count, (index, value) => {
                        $(`#group-${index}-mini`).children('.pop_up__input').addClass('has-error');
                        $(`#group-${index}-mini`).append(
                            value
                        );
                    })
                }

                if (response.errors.phone) {
                    $('#group-phone-mini input').addClass('has-error');
                    $('#group-phone-mini').append(
                        '<div class="help-block">' + response.errors.phone + '</div>'
                    );
                }
                if (response.errors.email) {
                    $('#group-email-mini input').addClass('has-error');
                    $('#group-email-mini').append(
                        '<div class="help-block">' + response.errors.email + '</div>'
                    );
                } else {
                    $("#offer_form_mini").html(
                        '<div class="alert alert-success flex flex-col justify-center items-center gap-y-4 py-24 px-10">' +
                        '<p class="text-66B645">Спасибо за вашу заявку!</p>' +
                        '<p>Мы свяжемся с вами в ближайшее время, чтобы обсудить детали</p>' +
                        '</div>'
                        // '<div class="alert alert-success">' + response.message + "</div>"
                    );
                }
            }
        })
            .fail(() => {
                $("#offer_form_mini").html(
                    '<div class="alert alert-danger">Не получилось отправить форму, попробуйте позже.</div>'
                );
            })


        e.preventDefault();
    })

});