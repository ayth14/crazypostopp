$(document).ready(function () {
    let errorsVal = document.querySelectorAll('#error-msg') 
    for (let i = 0; i < errorsVal.length; i++) {
        setTimeout(() => {
            errorsVal[i].textContent = "";
        }, 3000);
    }
});
