const workTypeBox = document.querySelector('.work-type-box');
const toggle = document.querySelector('.work-type-toggle');
const toggleText = document.querySelector('.work-type-toggle-text');
const dropdown = document.querySelector('.work-type-dropdown');
const searchInput = document.querySelector('.work-type-search');
const options = document.querySelectorAll('.work-type-options label');
const checkboxes = document.querySelectorAll('.work-type-options input[type="checkbox"]');

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

if (workTypeBox && toggle && dropdown) {
    toggle.addEventListener('click', () => {
        dropdown.classList.toggle('is-open');
        toggle.classList.toggle('is-open');
    });

    searchInput.addEventListener('input', () => {
        const searchValue = searchInput.value.toLowerCase();

        options.forEach(option => {
            const optionText = option.textContent.toLowerCase();

            option.style.display = optionText.includes(searchValue)
                ? 'flex'
                : 'none';
        });
    });

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            const selected = [...checkboxes]
                .filter(item => item.checked)
                .map(item => item.value);

            toggleText.textContent = selected.length
                ? `${selected.length} service selected`
                : 'Select services';
        });
    });

    document.addEventListener('click', event => {
        if (!workTypeBox.contains(event.target)) {
            dropdown.classList.remove('is-open');
            toggle.classList.remove('is-open');
        }
    });
}


const form = document.querySelector('.quote-page-form');

if (form) {
    form.addEventListener('submit', async function (event) {
        event.preventDefault();

        const name = form.querySelector('#name').value.trim();
        const email = form.querySelector('#email').value.trim();
        const phone = form.querySelector('#phone').value.trim();
        const address = form.querySelector('#address').value.trim();
        const city = form.querySelector('#city').value.trim();
        const zip = form.querySelector('#zip').value.trim();
        const services = [];

        form.querySelectorAll('input[name="services[]"]:checked').forEach(service => {
            services.push(service.value);
        });





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

            form.reset();
            toggleText.textContent = "Select services";

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