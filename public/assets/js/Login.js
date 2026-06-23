import {
    isValidName,
    isValidEmail,
    isRequired
} from './Validation.js';

const form = document.querySelector(".auth-card");

if (form) {
    form.addEventListener('submit', async function (event) {
        event.preventDefault();

        console.log("Form submitted with JS");

        const username = form.querySelector('#username').value.trim();
        const password = form.querySelector('#password').value.trim();

        if (!isRequired(username) || !isRequired(password)) {
            alert('All fields are required.');
            return;
        }

        const success = document.createElement('div');
        success.classList.add('success-message');
        success.textContent = 'Login successful!';

        form.submit();
    });
}
