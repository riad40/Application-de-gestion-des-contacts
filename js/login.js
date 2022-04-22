// alert('js khdama')

const form = document.querySelector('#loginForm')
const email = document.querySelector('#email')
const pwd = document.querySelector('#pwd')
const emailErrors = document.querySelector('#emailErrors')
const pwdErrors = document.querySelector('#pwdErrors')

// console.log(form)
// console.log(email)
// console.log(pwd)
// console.log(emailErrors)
// console.log(pwdErrors)


form.addEventListener('submit', e => {
    let errors = 0
    let pattern = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+(\.[a-zA-Z0-9]{2,})+$/
    if (email.value == '') {
        emailErrors.textContent = 'Email is required'
        email.classList.add('validate')
        errors++
    }
    if (pwd.value == '') {
        pwdErrors.textContent = 'Password is required'
        pwd.classList.add('validate')
        errors++
    }
    if(!email.value.match(pattern)) {
        emailErrors.textContent = 'Email is not valid'
        email.classList.add('validate')
        errors++
    }
    if (errors > 0) {
        e.preventDefault()
        // console.log(errors)
    }
})