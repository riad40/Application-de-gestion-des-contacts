// alert('js khadama')

const form = document.querySelector('#updateForm')
const fullName = document.querySelector('#fname')
const email = document.querySelector('#email')
const phone = document.querySelector('#phone')
const city = document.querySelector('#city')

const fnameErrors = document.querySelector('#fnameErrors')
const emailErrors = document.querySelector('#emailErrors')
const phoneErrors = document.querySelector('#phoneErrors')
const cityErrors = document.querySelector('#cityErrors')

form.addEventListener('submit', e => {
    let phoneLenght = phone.value
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
    if(phone.value == ''){
        phoneErrors.textContent = 'Phone number is required'
        phone.classList.add('validate')
        errors++
    }
    if(city.value == ''){
        cityErrors.textContent = 'City is required'
        city.classList.add('validate')
        errors++
    }
    if(!email.value.match(pattern)){
        emailErrors.textContent = 'Email is not valid'
        email.classList.add('validate')
        errors++
    }
    if(phoneLenght.length < 10){
        phoneErrors.textContent = 'phone nubmber must be at least 10 digits'
        phone.classList.add('validate')
        errors++
    }
    if(errors > 0) {
        e.preventDefault()
        console.log(errors)
    }
})