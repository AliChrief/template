const signIn = document.getElementById("sign-in");
const signUp = document.getElementById("sign-up");
const error = document.getElementById("error")
const userInput = document.getElementById('check-user')
const passwordInput = document.getElementById('check-password')
const errorRemove = document.querySelectorAll('.error-remove')
console.log('ali')
// Register page
const register = () => {
    window.location.href='http://localhost/template/Gentium/backend/sign-up.php'
}

// Check login process
const checkLogin = () =>
{
    // Remove Error message
    errorRemove.forEach(input => {
     input.onfocus = () => {
        removeError()
     }
   })
    // Alert if some input fields are empty 
    if(userInput.value == '' || passwordInput.value == ''){
        alert('Please fill the required blanks')
    }
    else{
    //checking if user is logged in 
    const form = new FormData()
    form.append('user-input', userInput.value)
    
    fetch('http://localhost/template/Gentium/backend/sign-up.php',{

        method: 'POST',
        body: form
    })
    .then(response => { return response.json()})
}}


    
// sign-in button listener
signIn.addEventListener('click',checkLogin)
// sign-up button listener
signUp.addEventListener('click',register)

