const form = document.querySelector(".form");

form.addEventListener("submit", (event) => {
    event.preventDefault();

    const fullname = document.querySelector("#fullname").value;
    const email = document.querySelector("#email").value;
    const phonenr = document.querySelector("#phonenr").value;
    const password = document.querySelector("#password").value;

    let formBool = {
        fullname: true,
        email: true,
        phonenr: true,
        password: true
    }

    const appendErrorMessage = (message, className) => {
        let errorDiv = document.getElementById(`${className}-error`);
        errorDiv.innerHTML = message
        let inputError = document.getElementById(className);
        inputError.className += " is-invalid";
    };

    const deleteErrorMessage = (className) => {
        let errorDiv = document.getElementById(`${className}-error`);
        errorDiv.innerHTML = ""; 
        let inputError = document.getElementById(className);
        inputError.className = "form-control";
    }

    if (fullname.trim() === '') {
        fullnameError = "Please fill in full name.";
        appendErrorMessage(fullnameError, "fullname");
        formBool.fullname = false;
    }
    else{
        deleteErrorMessage("fullname");
        formBool.fullname = true;
    }
    
    if (email.trim() === '') {
        emailError = "Please fill in email.";
        appendErrorMessage(emailError, "email");
        formBool.email = false;
    }
    else{
        deleteErrorMessage("email");
        formBool.email = true;
    }
    
    if (phonenr.trim() === '') {
        phonenrError = "Please fill in phone number.";
        appendErrorMessage(phonenrError, "phonenr");
        formBool.phonenr = false;
    }
    else{
        deleteErrorMessage("phonenr");
        formBool.phonenr = true;
    }
    
    if (password.trim() === '') {
        passwordError = "Please fill in password.";
        appendErrorMessage(passwordError, "password");
        formBool.password = false;
    }
    else{
        deleteErrorMessage("password");
        formBool.password = true;
    }

    const emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    if(!emailRegex.test(email)){
        emailRegexError = "Please enter a valid email.";
        appendErrorMessage(emailRegexError, "email");
        formBool.email = false;
    }
    else{
        deleteErrorMessage("email");
        formBool.email = true;
    }

    let ok=true;
    for(let i in formBool){
        if(formBool[i]===false){
            ok = false;
            return;
        }
    }

    form.submit();
})