// alert('js khadama')

const form = document.querySelector('#signupForm')
const fullName = document.querySelector('#fname')
const email = document.querySelector('#email')
const pwd = document.querySelector('#pwd')
const Rpwd = document.querySelector('#Rpwd')

const fnameErrors = document.querySelector('#fnameErrors')
const emailErrors = document.querySelector('#emailErrors')
const pwdErrors = document.querySelector('#pwdErrors')
const RpwdErrors = document.querySelector('#RpwdErrors')

// console.log(form)
// console.log(fullName)
// console.log(email)
// console.log(pwd)
// console.log(Rpwd)

form.addEventListener('submit', e => {
    let errors = 0
    let pattern = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/
    if(fullName.value == ''){
        fnameErrors.textContent = 'full name is required'
        fullName.classList.add('validate')
        errors++
    }
    if(email.value == ''){
        emailErrors.textContent = 'Email is required'
        email.classList.add('validate')
        errors++
    }
    if(pwd.value == ''){
        pwdErrors.textContent = 'Password is required'
        pwd.classList.add('validate')
        errors++
    }
    if(Rpwd.value == ''){
        RpwdErrors.textContent = 'Password is required'
        Rpwd.classList.add('validate')
        errors++
    }
    if(!email.value.match(pattern)){
        emailErrors.textContent = 'Email is not valid'
        email.classList.add('validate')
        errors++
    }
    if(pwd.value !== Rpwd.value) {
        RpwdErrors.textContent = 'Passwords must be matched'
        Rpwd.classList.add('validate')
        errors++
    }
    if(errors > 0) {
        e.preventDefault()
        console.log(errors)
    }
})

