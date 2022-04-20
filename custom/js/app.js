 import {
     getAuth,
     createUserWithEmailAndPassword
 } from "firebase/auth";

 function registrar() {
     var email = document.getElementById("email").value;
     var password = document.getElementById("contraseña").value;
     var emailrep = document.getElementById("emailrep").value;
     if (email == emailrep) {

         const auth = getAuth();
         createUserWithEmailAndPassword(auth, email, password)
             .then((userCredential) => {
                 // Signed in
                 const user = userCredential.user;
                 // ...
             })
             .catch((error) => {
                 const errorCode = error.code;
                 const errorMessage = error.message;
                 // ..
             });
     }
 }