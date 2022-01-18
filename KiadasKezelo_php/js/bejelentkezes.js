/*=============== jelszó láthatóság bejelentkezésnél ===============*/

const showHiddenInput = (inputAtfedes, inputJelszo, inputIcon) => {
    const overlay = document.getElementById(inputAtfedes),
        input = document.getElementById(inputJelszo),
        iconEye = document.getElementById(inputIcon)

    iconEye.addEventListener('click', () => {

        //Change password to text
        if (input.type === 'password') {
            // Switch to text
            input.type = 'text'

            //Change icon
            iconEye.classList.add('bx-show')
        } else {
            // Change to password
            input.type = 'password'
                // remove icon
            iconEye.classList.remove('bx-show')
        }

        // Toggle the overlay
        overlay.classList.toggle('overlay-content')
    })


}

showHiddenInput('inputOverlay', 'inputPassword', 'inputHideEyeIcon');

/*=============== karakterek száma min 10 legyen  ===============*/

function setInputError(inputElement, message) {
    inputElement.classList.add("form_input-error");
    inputElement.parentElement.querySelector(".form_input-error-message").textContent = message;
}

function clearInputError(inputElement) {
    inputElement.classList.remove("form_input-error");
    inputElement.parentElement.querySelector(".form_input-error-message").textContent = "";
}

/*=============== regisztráció és bejelentkezés kapcsoló ===============*/

document.addEventListener("DOMContentLoaded", () => {
    const BejelentkezesForm = document.querySelector('#bejelentkezesForm');
    const RegisztacioFrom = document.querySelector('#regisztracioForm');

    /*=============== Ugrás a regisztrációs felületre ===============*/

    document.querySelector('#linkRegisztracio').addEventListener("click", e => {
        e.preventDefault();
        BejelentkezesForm.classList.add("form_hiden");
        RegisztacioFrom.classList.remove("form_hiden");
    });

    /*=============== Ugrás a bejelentkezős felületre ===============*/

    document.querySelector('#linkBejelentkezes').addEventListener("click", e => {
        e.preventDefault();
        BejelentkezesForm.classList.remove("form_hiden");
        RegisztacioFrom.classList.add("form_hiden");
    });

    /*================================================   Hibakezelés  ============================================*/

    /*=============== karakterek száma min 10 legyen  ===============*/
    document.querySelectorAll(".form_input").forEach(inputElement => {
        inputElement.addEventListener("blur", e => {
            if ((e.target.id === "Felhaszn_regiszt" || e.target.id === "Jelsz_regiszt" || e.target.id === "Jelsz_regiszt_ismet") && e.target.value.length >= 1 && e.target.value.length < 5) {
                setInputError(inputElement, "Hoppá! Ügyelj a min. 5 karekterszámra!");
            }
            if ((e.target.id === "Felhaszn_regiszt" || e.target.id === "Jelsz_regiszt" || e.target.id === "Jelsz_regiszt_ismet") && e.target.value.length == 0) {
                setInputError(inputElement, "Hoppá! Üres a bevitelimező!");
            }
        });

        inputElement.addEventListener("input", e => {
            clearInputError(inputElement);
        });
    });
})