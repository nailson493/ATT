var btnlogin = document.getElementById('btnlogin');
var inputemail = document.getElementById('email');
var inputsenha = document.getElementById('senha');

// get Valores
btnlogin.addEventListener('click', function (){
    create(email.value, senha.value);
});

//manda para o fireBase
function create(email, senha){
    var data = {
        email: email,
        senha: senha
    };

    return firebase.database().ref().child('users/').push(data);
}