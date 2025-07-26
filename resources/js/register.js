document.getElementById('registerForm').addEventListener('submit', (e)=>{
    e.preventDefault()
    validationForm()
});

function validationForm(){
    let name = document.getElementById('name').value;
    let firstName = document.getElementById('firstName').value;
    let streetNumber = document.getElementById('streetNumber').value;
    let streetName = document.getElementById('streetName').value;
    let postcode = document.getElementById('postcode').value;
    let city = document.getElementById('city').value;
    let number = document.getElementById('number').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let password_confirmation = document.getElementById('password_confirmation').value;

    let error_name = document.getElementById('error-name').value;
    let error_firstName = document.getElementById('error-firstName').value;
    let error_streetNumber = document.getElementById('error-streetNumber').value;
    let error_streetName = document.getElementById('error-streetName').value;
    let error_postcode = document.getElementById('error-postcode').value;
    let error_city = document.getElementById('error-city').value;
    let error_number = document.getElementById('error-number').value;
    let error_email = document.getElementById('error-email').value;
    let error_password = document.getElementById('error-password').value;
    let error_password_confirmation = document.getElementById('error-password_confirmation').value;

    function emailCheck(email) {
        let regex = /^[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,}$/i
        // regex pour vérifier que le mail a bien un format email
        return regex.test(email);
    }

    function passwordCheck(password) {
        let regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[/@$!%*?&])[A-Za-z\d/@$!%*?&]{8,}$/i
        // regex pour vérifier que le mot de passe contient au minimum 8 caractères dont une majuscule, une minuscule, un chiffre et un caractère spécial
        return regex.test(password);
    }

    let isValid = true

    error_name.innerHTML = "";
    error_firstName.innerHTML = "";
    error_streetNumber.innerHTML =""; 
    error_streetName.innerHTML = "";
    error_postcode.innerHTML = "";
    error_city.innerHTML = "";
    error_number.innerHTML = "";
    error_email.innerHTML = "";
    error_password.innerHTML = "";
    error_password_confirmation.innerHTML = "";

    if(name === ""){
        error_name.innerHTML = "Le nom est obligatoire."
        isValid = false
    }
    if(firstName === ""){
        error_firstName.innerHTML = "Le prénom est obligatoire."
        isValid = false
    }
    if(streetNumber === ""){
        error_streetNumber.innerHTML = "Le numéro de rue est obligatoire."
        isValid = false
    }
    if(streetName === ""){
        error_streetName.innerHTML = "Le nom de votre rue est obligatoire."
        isValid = false
    }
    if(postcode === ""){
        error_postcode.innerHTML = "Le code postal est obligatoire."
        isValid = false
    }
    if(city === ""){
        error_city.innerHTML = "Le nom de votre ville est obligatoire."
        isValid = false
    }
    if(number === ""){
        error_number.innerHTML = "Le numéro de téléphone est obligatoire."
        isValid = false
    }
    if(email === ""){
        error_userMail.innerHTML = "L'adresse mail est obligatoire."
        isValid = false
    }
    if(!emailCheck(email)){
        error_userMail.innerHTML = "L'adresse mail entrée n'est pas valide."
        isValid = false
    }
    if(password === ""){
        error_password.innerHTML = "Le mot de passe est obligatoire."
        isValid = false
    }
    if(!passwordCheck(password)){
        error_password.innerHTML = "Le mot de passe n'est pas valide."
        isValid = false
    }
    if(password_confirmation !== password){
        error_password_confirmation.innerHTML = "Le mot de passe n'est pas identitque à celui entré au dessus."
        isValid = false
    }
    if(isValid){
        alert("Votre compte a bien été crée !")
        document.getElementById('name').value = ""
        document.getElementById('firstName').value = ""
        document.getElementById('streetNumber').value = ""
        document.getElementById('streetName').value = ""
        document.getElementById('postcode').value = ""
        document.getElementById('city').value = ""
        document.getElementById('number').value = ""
        document.getElementById('email').value = ""
        document.getElementById('password').value = ""
        document.getElementById('password_confirmation').value = ""
    }
}
