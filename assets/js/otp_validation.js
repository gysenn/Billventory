let isvalid = true;

function otp_validation() {
    isvalid = true;  // Reset isvalid for each validation
    const otp_code = document.getElementById("otp_code").value.trim();
    const errorMsg = document.getElementById("error_otpCode");

    if (otp_code === "") {
        errorMsg.textContent = "OTP Code is required.";
        isvalid = false;
    } else {
        errorMsg.textContent = "";
    }

    return isvalid;
}

document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("form").addEventListener("submit", function(event) {
        isvalid = true;  // Reset before form submission  

        const otp_code = document.getElementById("otp_code").value.trim();
        const errorMsg = document.getElementById("error_otpCode");

        if (!otp_validation()) {
            alert("Please fill in all required fields.");
            event.preventDefault();
        }
    });
});

function generateOtp(length = 4) {
    return Array.from({ length }, () => Math.floor(Math.random() * 10)).join('');
}

function getOtp()
{

    otpgenrate=generateOtp();
    
    document.getElementById('otp').innerText = otpgenrate;
}