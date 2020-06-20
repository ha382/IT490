const email = document.getElementById('email');
const Rpassword = document.getElementById('Rpassword');
const RCpassword = document.getElementById('RCpassword');
const registerForm = document.getElementById('register');
const errorElement = document.getElementById('error');

registerForm.addEventListener('keyup', (e)=>{
    let messages = [];
    
    if(Rpassword.value != RCpassword.value){
        messages.push('passwords do not match!')
    }
    if(messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    } else {
        errorElement.innerText = '';
    }
})

/*
registerForm.addEventListener('submit', (e)=>{
    let messages = [];
    if(email.value == '' | email.value == null){
        messages.push('email is required')
    }

    if(messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }
})
*/

