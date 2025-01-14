(function () {
    "use strict";

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll(".needs-validation");

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener(
            "submit",
            function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add("was-validated");
            },
            false
        );
    });
})();

document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    const password = document.querySelector('#password');
    const passwordConfirmation = document.querySelector('#password_confirmation');

    form.addEventListener('submit', function (e) {
        if (password.value !== passwordConfirmation.value) {
            e.preventDefault(); // Mencegah form submit
            passwordConfirmation.setCustomValidity('Passwords do not match');
        } else {
            passwordConfirmation.setCustomValidity(''); // Menghapus pesan error
        }
    });
});