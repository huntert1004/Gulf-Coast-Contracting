export function isValidName(name) {
    return /^[a-zA-Z\s'-]{2,100}$/.test(name);
}

export function isValidEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    return emailPattern.test(email);
}

export function isRequired(value) {
    return value !== '';
}