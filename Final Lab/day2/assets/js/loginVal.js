document.addEventListener("DOMContentLoaded", () => {

    const loginBtn = document.getElementById("loginBtn");
    const email = document.getElementById("email");
    const password = document.getElementById("password");
  

    let errorBox = document.createElement("div");
    errorBox.id = "errorBox";
    errorBox.style.color = "red";
    errorBox.style.marginBottom = "10px";
    errorBox.style.fontSize = "14px";
    errorBox.style.textAlign = "left";
    document.querySelector(".login-form").prepend(errorBox);

  
    
    document.querySelector(".login-form").addEventListener("submit", function(e) {
        e.preventDefault();
        validateLogin();
    });


    function validateLogin() {
        let emailValue = email.value.trim();
        let passValue = password.value.trim();

        errorBox.textContent = "";

        
        if (emailValue === "" || passValue === "") {
            errorBox.textContent = "⚠ All fields are required!";
            return;
        }

        
        if (passValue.length < 8) {
            errorBox.textContent = "⚠ Password must be at least 8 characters!";
            return;
        }


        const hasUppercase = /[A-Z]/.test(passValue);
        const hasNumber = /[0-9]/.test(passValue);
        const hasSpecial = /[!@#$%^&*(),.?\":{}|<>\\[\]\/;:'`~_+=\-]/.test(passValue);

        if (!hasUppercase) {
            errorBox.textContent = "⚠ Password must contain at least one uppercase letter!";
            return;
        }

        if (!hasNumber) {
            errorBox.textContent = "⚠ Password must contain at least one number!";
            return;
        }

        if (!hasSpecial) {
            errorBox.textContent = "⚠ Password must contain at least one special character!";
            return;
        }

       
        if (!emailValue.includes("@") || !emailValue.includes(".")) {
            errorBox.textContent = "⚠ Please enter a valid email!";
            return;
        }

        
        errorBox.textContent = "";
        const form = document.querySelector('.login-form');
        if (form) form.submit();
    }

});