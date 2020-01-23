var form = document.querySelector('form');
var name = document.querySelector('#form_name');
var email = document.querySelector('#form_email');
var message = document.querySelector('#form_message');

var nameLabel = document.querySelector('label[for="form_name"');
var emailLabel = document.querySelector('label[for="form_email"');
var messageLabel = document.querySelector('label[for="form_message"');

form.addEventListener('submit', function(e) {
    
    event.preventDefault();

    var nameValue = name.value;
    var emailValue = email.value;
    var messageValue = message.value;

    var nameError = document.querySelector('#name-error');
    var emailError = document.querySelector('#email-error');
    var messageError = document.querySelector('#message-error');

    var error = false;
    var data = {};
    
    var emailSent = document.querySelector('#email-sent');

    console.log(emailValue);

    if (nameError) {
        nameLabel.removeChild(nameError);
    }
    if (emailError) {
        emailLabel.removeChild(emailError);
    }
    if (messageError) {
        messageLabel.removeChild(messageError);
    }

    // check name value
    if (nameValue.length < 3) {
        error = true;
        nameError = document.createElement('span');
        nameError.id = 'name-error';
        nameError.classList.add('labelError');
        nameError.innerHTML = 'Veuillez entrer un nom de plus de 3 charatères.';
        nameLabel.appendChild(nameError);
    }
    else if (nameValue.length > 50) {
        error = true;
        nameError = document.createElement('span');
        nameError.id = 'name-error';
        nameError.classList.add('label-error');
        nameError.innerHTML = 'Veuillez entrer un nom de moins de 50 charatères.';
        nameLabel.appendChild(nameError);
    }

    // check email value    /^[^\s@]+@[^\s@]+\.[^\s@]+$/
    var emailRegex = /^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;
    
    // console.log(emailValue.test("^\S+@\S+$")); 
    if (!emailRegex.test(emailValue)) { 
        error = true;
        emailError = document.createElement('span'); 
        emailError.id = 'email-error';
        emailError.classList.add('label-error');
        // emailError.innerHTML = 'Veuillez entrer une adresse mail valide.';
        emailLabel.appendChild(emailError);
        console.log('lol');
    }

    // check message value
    if (messageValue.length < 5) {
        error = true;
        messageError = document.createElement('span');
        messageError.id = 'message-error';
        messageError.classList.add('label-error');
        messageError.innerHTML = 'Veuillez entrer au moins 5 charactères';
        messageLabel.appendChild(messageError);
    }
    else if (messageValue.length > 500) {        
        error = true;
        messageError = document.createElement('span');
        messageError.id = 'message-error';
        messageError.classList.add('label-error');
        messageError.innerHTML = 'Veuillez entrer de moins de 500 charactères';
        messageLabel.appendChild(messageError);
    }

    // everything is ok
    if (!error) {
        data = {
            'name': nameValue,
            'email': emailValue,
            'message': messageValue
        }

        fetch('/contact/json', {
            method: 'POST',
            body: JSON.stringify(data),
            headers: {
                "Content-Type": "application/json"
            }
        })
            .then( function (response) {
                return response.json();
            })
            .then( function (response) {
                if (response.reponse === 'ok') {
                    emailSent.innerHTML = "";
                    emailSent.innerHTML = response.message;
                    emailSent.hidden = false;
                    emailSent.classList.remove('text-light');
                    emailSent.classList.add('text-dark');
                }
                else {
                    console.log(response);
                    emailSent.innerHTML = "";
                    emailSent.innerHTML = response.message;
                    emailSent.hidden = false;
                    emailSent.classList.remove('text-light');
                    emailSent.classList.add('text-dark');
                }
            });
    }

});
