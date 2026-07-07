const workTypeBox = document.querySelector('.work-type-box');
const toggle = document.querySelector('.work-type-toggle');
const toggleText = document.querySelector('.work-type-toggle-text');
const dropdown = document.querySelector('.work-type-dropdown');
const searchInput = document.querySelector('.work-type-search');
const options = document.querySelectorAll('.work-type-options label');
const checkboxes = document.querySelectorAll('.work-type-options input[type="checkbox"]');

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