function generateOtp(length = 4) {
    return Array.from({ length }, () => Math.floor(Math.random() * 10)).join('');
}

function getOtp()
{ 

    otpgenrate=generateOtp();
    
    document.getElementById('otp').value = otpgenrate;

}