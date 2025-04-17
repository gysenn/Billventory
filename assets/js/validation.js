let isvalid = true;

function fullname_validation() {
    isvalid = true;  // Reset isvalid for each validation
    const fullname = document.getElementById("fullname").value.trim();
    const errorMsg = document.getElementById("error_fullname");

    if (fullname === "") {
        errorMsg.textContent = "Full name is required.";
        isvalid = false;
    } else if (!/^[a-zA-Z\s]+$/.test(fullname)) {
        errorMsg.textContent = "Full name must contain only letters and spaces.";
        isvalid = false;
    } else if (fullname.length < 3) {
        errorMsg.textContent = "Full name must be at least 3 characters long.";
        isvalid = false;
    } else {
        errorMsg.textContent = "";
    }
    return isvalid;
}

function username_validation() {
    isvalid = true;
    const username = document.getElementById("username").value.trim();
    const errorMsg = document.getElementById("error_username");

    if (username === "") {
        errorMsg.textContent = "Username is required.";
        isvalid = false;
    } else if (!/^[a-zA-Z]/.test(username)) {
        errorMsg.textContent = "Username must start with a letter.";
        isvalid = false;
    } else if (username.length < 3) {
        errorMsg.textContent = "Username must be at least 3 characters long.";
        isvalid = false;
    } else if (!/^[a-zA-Z0-9_]{3,15}$/.test(username)) {
        errorMsg.textContent = "Invalid username.";
        isvalid = false;
    } else {
        errorMsg.textContent = "";
    }
    return isvalid;
}

function email_validation() {
    isvalid = true;
    const email = document.getElementById("email").value.trim();
    const errorMsg = document.getElementById("error_email");

    if (email === "") {
        errorMsg.textContent = "Email is required.";
        isvalid = false;
    } else if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
        errorMsg.textContent = "Invalid email.";
        isvalid = false;
    } else {
        errorMsg.textContent = "";
    }
    return isvalid;
}

function phonenumber_validation() {
    isvalid = true;
    const phonenumber = document.getElementById("phonenumber").value.trim();
    const errorMsg = document.getElementById("error_phonenumber");

    if (phonenumber === "") {
        errorMsg.textContent = "Phone number is required.";
        isvalid = false;
    } else if (phonenumber.length < 10) {
        errorMsg.textContent = "Phone number must contain 10 digits.";
        isvalid = false;
    } else if (!/^(98|97)\d{8}$/.test(phonenumber)) {
        errorMsg.textContent = "Invalid phone number.";
        isvalid = false;
    } else {
        errorMsg.textContent = "";
    }
    return isvalid;
}

function password_validation() {
    isvalid = true;
    const password = document.getElementById("password").value.trim();
    const errorMsg = document.getElementById("error_password");

    if (password === "") {
        errorMsg.textContent = "Password is required.";
        isvalid = false;
    } else if (password.length < 8) {
        errorMsg.textContent = "Password must be at least 8 characters long.";
        isvalid = false;
    } else {
        errorMsg.textContent = "";
    }
    return isvalid;
}

function confrimpassword_validation() {
    isvalid = true;
    const password = document.getElementById("password").value.trim();
    const confrimpassword = document.getElementById("confrimpassword").value.trim();
    const errorMsg = document.getElementById("error_confrimpassword");

    if (confrimpassword === "") {
        errorMsg.textContent = "Please confirm your password.";
        isvalid = false;
    } else if (confrimpassword.length < 8) {
        errorMsg.textContent = "Password must be at least 8 characters long.";
        isvalid = false;
    } else if (confrimpassword !== password) {
        errorMsg.textContent = "Confirm Password does not match.";
        isvalid = false;
    } else {
        errorMsg.textContent = "";
    }
    return isvalid;
}

function tandc_validation() {
    isvalid = true;
    const termandcondition = document.getElementById("termandcondition").checked;
    const errorMsg = document.getElementById("error_termandcondition");

    if (!termandcondition) {
        errorMsg.textContent = "You have to agree with terms and conditions to proceed.";
        isvalid = false;
    } else {
        errorMsg.textContent = "";
    }
    return isvalid;
}


