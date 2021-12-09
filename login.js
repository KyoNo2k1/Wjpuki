document.getElementById("js-dangnhap-btn").onclick = loginForm;

function loginForm(){

    
    document.getElementById("js-modal-login").classList.add('open');

}

function offloginForm(){

    
    document.getElementById("js-modal-login").classList.remove('open');

}
function offRegisForm(){

    
    document.getElementById("js-modal-regis").classList.remove('open');

}

function onRegisForm(){
    document.getElementById("js-modal-login").classList.remove('open');

    document.getElementById("js-modal-regis").classList.add('open');
}