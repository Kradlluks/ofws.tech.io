const form = document.getElementById('formlogin');
const logintc = document.getElementById('logintc');
const passtc = document.getElementById('passtc');

formlogin.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
});



function checkInputs() {

    const logintcValue = logintc.value.trim();
    const passtcValue = passtc.value.trim();
    if (logintcValue === '') {
        setErrorFor(logintc, "Login não pode estar em branco");
    } else {
        setSuccessFor('logintc');
    }

}

function setErrorFor(input, mensage) {
    const formControl = input.parentElement;
    cons small = formControl.querySelector('small');
}


function myfunction() {
    var x = document.getElementById("passtc");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function validate() {

    var password = document.getElementById('passtc');
    var length = document.getElementById("length");

    if (password.ariaValueMax.length >= 5) {
        alert("Login Realizado com Sucesso !!!");
        return false;
    } else {

        alert("Login Falhou tenta de novo !!!");
    }



}