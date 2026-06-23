import {
    isValidName,
    isValidEmail,
    isRequired
} from './Validation.js';


async function resetButton(button, icon) {
    await new Promise(resolve => setTimeout(resolve, 2000));

    button.classList.remove(
        'is-loading',
        'is-success',
        'is-error'
    );

    icon.className = 'btn-icon fa-solid fa-spinner';

    button.disabled = false;
}



const form = document.querySelector('.hero-form');

if (form) {
    form.addEventListener('submit', async function (event) {
        event.preventDefault();

        const name = form.querySelector('#name').value.trim();
        const email = form.querySelector('#email').value.trim();
        const workType = form.querySelector('#work_type').value.trim();

        if (!isValidName(name)) {
            alert('Invalid Name');
            return;
        }

        if (!isValidEmail(email)) {
            alert('Invalid Email');
            return;
        }

        if (!isRequired(workType)) {
            alert('Select a Service');
            return;
        }

        const button = form.querySelector('.quote-submit-btn');
        const icon = button.querySelector('.btn-icon');

        button.disabled = true;
        button.classList.remove('is-success', 'is-error');
        button.classList.add('is-loading');
        icon.className = 'btn-icon fa-solid fa-spinner';

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: new FormData(form)
            });

            button.classList.remove('is-loading');

            if (response.ok) {

                button.classList.add('is-success');

                icon.className =
                    'btn-icon fa-solid fa-envelope';

            } else {

                button.classList.add('is-error');

                icon.className =
                    'btn-icon fa-solid fa-xmark';
            }

            await resetButton(button, icon);

        } catch (error) {

            console.error(error);

            button.classList.remove('is-loading');

            button.classList.add('is-error');

            icon.className =
                'btn-icon fa-solid fa-xmark';

            await resetButton(button, icon);
        }
    });
}