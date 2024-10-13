function handleFormSubmission(formId, route) {
    const form = document.getElementById(formId);

    if (!form) {
        console.error(`Le formulaire avec l'ID ${formId} n'existe pas.`);
        return;
    }

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Empêche la soumission normale du formulaire

        clearValidationErrors(); // Effacer les erreurs avant la nouvelle soumission

        if (validateForm(form)) {
            submitForm(form, route); // Soumettre via AJAX si la validation est réussie
        }
    });

    function validateForm(form) {
        let isValid = true;
        const inputs = form.querySelectorAll("input, select, textarea");

        inputs.forEach(input => {
            if (input.hasAttribute('required') && !input.value.trim()) {
                showValidationError(input, 'Ce champ est requis');
                isValid = false;
            }
        });

        return isValid;
    }


    // const loaderRegister = document.getElementById('btn-register-formateur');
    // loaderRegister.style.display = 'none';

    // const btnRegister = document.getElementById('loader-register-formateur');
    // btnRegister.style.display = 'block';


    function submitForm(form, route) {
        const formData = new FormData(form);

        fetch(route, {
            method: "POST",
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then((data) => {
                    throw data; // Lancer les données pour les capturer dans le `catch`
                });
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                window.location.href = "/sucess/creation";
            }
        })
        .catch(data => {
            if (data.errors) {
                handleValidationErrors(data.errors); // Gestion des erreurs de validation Laravel
            } else {
                console.error("Erreur :", data);
                alert("Oups quelque chose s'est mal passé" );
            }
        });
    }

    function handleValidationErrors(errors) {
        Object.keys(errors).forEach(function (field) {
            // Pour gérer les tableaux, comme `skills[]`, il faut ajuster pour sélectionner correctement l'élément
            const fieldElement = document.querySelector(`[name="${field}"], [name="${field}[]"]`);
            if (fieldElement) {
                showValidationError(fieldElement, errors[field][0]);
            }
        });
    }

    function showValidationError(input, message) {
        input.classList.add('is-invalid');
        let errorElement = input.nextElementSibling;

        if (!errorElement || !errorElement.classList.contains('invalid-feedback')) {
            errorElement = document.createElement('div');
            errorElement.classList.add('invalid-feedback');
            input.parentNode.appendChild(errorElement);
        }

        errorElement.innerText = message;
    }

    function clearValidationErrors() {
        const invalidElements = form.querySelectorAll('.is-invalid');
        invalidElements.forEach(element => element.classList.remove('is-invalid'));

        const errorMessages = form.querySelectorAll('.invalid-feedback');
        errorMessages.forEach(element => element.remove());
    }
}

// Appel de la fonction pour gérer le formulaire
document.addEventListener("DOMContentLoaded", function () {
    handleFormSubmission("multiStepForm", "/createNewTeacher");
});
