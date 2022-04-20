
 function registrar() {
     var email = document.getElementById("email").value;
     var password = document.getElementById("contraseña").value;
     var emailrep = document.getElementById("emailrep").value;
     if (email == emailrep) {
         firebase.auth().createUserWithEmailAndPassword(email, password).catch(function (error) {
             // Handle Errors here.
             var errorCode = error.code;
             var errorMessage = error.message;
             // ...
         });

     }
    }