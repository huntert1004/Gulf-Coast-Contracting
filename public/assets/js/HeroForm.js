import {
    isValidName,
    isValidEmail,
    isRequired
} from './Validation.js';

const form = document.querySelector('.hero-form');

if (form) {
    form.addEventListener('submit', function (event) {
        const name = form.querySelector('#name').value.trim();
        const email = form.querySelector('#email').value.trim();
        const work_type = form.querySelector('#work_type').value.trim();

         if (!isValidName(name)) {
            event.preventDefault();
            alert('Invalid Name');
            return;
        }

        if (!isValidEmail(email)) {
            event.preventDefault();
            alert('Invalid Email');
            return;
        }

        if (!isRequired(workType)) {
            event.preventDefault();
            alert('Select a Service');
            return;
        }
    });
}