document.addEventListener("DOMContentLoaded", () => {

    const form = document.querySelector('.signup-form');
    if (!form) return;

    const username = document.getElementById('username');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirm_password');
    const fullname = document.getElementById('fullname');
    const contact = document.getElementById('contact');
    const address = document.getElementById('address');
    const terms = document.getElementById('terms');

    let errorBox = document.createElement('div');
    errorBox.id = 'signupErrorBox';
    errorBox.style.color = 'red';
    errorBox.style.marginBottom = '10px';
    errorBox.style.fontSize = '14px';
    errorBox.style.textAlign = 'left';
    form.prepend(errorBox);

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        validateSignup();
    });

    function validateSignup() {
        const errors = [];
        const usernameValue = username?.value.trim() || '';
        const emailValue = email?.value.trim() || '';
        const passValue = password?.value || '';
        const confirmValue = confirmPassword?.value || '';
        const fullValue = fullname?.value.trim() || '';
        const contactValue = contact?.value.trim() || '';
        const addressValue = address?.value.trim() || '';

        
        if (!usernameValue) {
            errors.push('Username is required.');
        } else {
            const usernameRegex = /^[A-Za-z0-9_]+$/; // letters, numbers, underscore
            if (!usernameRegex.test(usernameValue)) errors.push('Username may only contain letters, numbers, and underscore.');
        }

        
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailValue) {
            errors.push('Email is required.');
        } else if (!emailRegex.test(emailValue)) {
            errors.push('Please enter a valid email address.');
        }

        
        if (!passValue) {
            errors.push('Password is required.');
        } else {
            if (passValue.length < 8) errors.push('Password must be at least 8 characters.');
            if (!/[A-Z]/.test(passValue)) errors.push('Password must contain at least one uppercase letter.');
            if (!/[0-9]/.test(passValue)) errors.push('Password must contain at least one number.');
            if (!/[!@#$%^&*(),.?\":{}|<>\\[\]\/;:'`~_+=\-]/.test(passValue)) errors.push('Password must contain at least one special character.');
        }

        
        if (passValue !== confirmValue) {
            errors.push('Confirm password does not match.');
        }

        
        if (!fullValue) {
            errors.push('Full name is required.');
        } else if (!/^[A-Za-z\s]+$/.test(fullValue)) {
            errors.push('Full name may only contain letters and spaces.');
        }

        
        if (!contactValue) {
            errors.push('Contact number is required.');
        } else if (!/^\d{11}$/.test(contactValue)) {
            errors.push('Contact number must be exactly 11 digits.');
        }

        
        if (!addressValue) {
            errors.push('Address is required.');
        }

        
        if (!terms?.checked) {
            errors.push('You must agree to the terms and conditions.');
        }


        if (typeof grecaptcha !== 'undefined') {
            const recaptchaResponse = grecaptcha.getResponse();
            if (!recaptchaResponse) errors.push('Please complete the CAPTCHA.');
        }

        if (errors.length) {
            errorBox.innerHTML = '<ul><li>' + errors.join('</li><li>') + '</li></ul>';
            return;
        }

        errorBox.textContent = '';
        form.submit();
    }

});
