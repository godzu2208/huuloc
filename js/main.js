

// Tài khoản
const username = document.getElementById('username');
const password = document.getElementById('password');
const email  = document.getElementById('email');
const phone = document.getElementById('phone');
const form1  = document.getElementById('form-1');
const form2  = document.getElementById('form-2');



function showError (input , message) {
    const parent  = input.parentElement.parentElement ;
    const small   = parent.querySelector('small') ;
    parent.classList.add('error');
    small.innerText = message ;
}

function showSuccess (input , message) {
    const parent  = input.parentElement.parentElement ;
    const small   = parent.querySelector('small') ;
    parent.classList.remove('error');
    small.innerText = ''
}

function isEmail(email)  {
    return  /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/ .test(email);

}

// Đăng nhập

form1.addEventListener('submit' , e => {
    e.preventDefault();

    checkInputs();
})

function checkInputs () {
    // nhận value  từ  input

    // const  usernameValue = username.value.trim();
    // const  phoneValue = phone.value.trim();
    const  emailValue = email.value.trim();
    const  passwdValue = password.value.trim();

    // email

    if (emailValue === '') {
        showError (email, 'Email không được  bỏ  trống')
    } else if (!isEmail(emailValue)) {
        showError (email , 'Email không  hợp  lệ')
    } else {
        showSuccess(email)
    }

    // password 

    if  (passwdValue === '') {
        showError(password, 'Password không được  bỏ  trống')
    }else if (passwdValue.length < 8 ){
        showError(password, 'Password không đúng')
    }else {
        showSuccess (password)
    }

}







 













