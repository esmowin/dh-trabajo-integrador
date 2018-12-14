//
// fullName
// nickname
// country
// email
// password1
// password2
// avatar
// window.onload = function() {
//   var validateForm() {
//     return false;
//   }
//
//   // Creo las funciones con las cuales voy a hacer las validaciones
//
//   var validarCampoVacio = function() {
//     if (this.value.trim() == "") {
//       this.classList.add("is-invalid");
//       this.parentElement.querySelector(".invalid-feedback").innerText = "Campo obligatorio";
//       return false;
//     } else {
//       this.classList.remove("is-invalid");
//       this.parentElement.querySelector(".invalid-feedback").innerText = "";
//       return true;
//     }
//   }
//
//   var validarEmail = function() {
//
//     var regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//
//     if (this.value !== "") {
//       if (!regexEmail.test(this.value)) {
//         this.classList.add("is-invalid");
//         this.parentElement.querySelector(".invalid-feedback").innerText = "Formato inválido";
//         return false;
//       } else {
//         this.classList.remove("is-invalid");
//         this.parentElement.querySelector(".invalid-feedback").innerText = "";
//         return true;
//       }
//     }
//   }
//
//   var validarSoloNumeros = function() {
//     if (this.value !== "") {
//       if (isNaN(this.value)) {
//         this.classList.add("is-invalid");
//         this.parentElement.querySelector(".invalid-feedback").innerText = "Este campo solo acepta números";
//         return false;
//       } else {
//         this.classList.remove("is-invalid");
//         this.parentElement.querySelector(".invalid-feedback").innerText = "";
//         return true;
//       }
//     }
//   }
//
//   var validarMin4Car = function() {
//
//     if (this.value !== "") {
//
//       if (this.value.length < 4) {
//         this.classList.add("is-invalid");
//         this.parentElement.querySelector(".invalid-feedback").innerText = "La contraseña debe tener 4 caracteres como mínimo";
//         return false;
//       } else {
//         this.classList.remove("is-invalid");
//         this.parentElement.querySelector(".invalid-feedback").innerText = "";
//         return true;
//       }
//     }
//   }
//
//   var validarPassIguales = function() {
//
//     if (primeraVezPassword == 1) {
//       primeraVezPassword = 0;
//     } else {
//
//       if (this == inputPassword) {
//         var laOtraPass = inputRePassword;
//       } else {
//         var laOtraPass = inputPassword;
//       }
//
//       if (this.value !== "" && this.value.length > 3) {
//         if (this.value !== laOtraPass.value) {
//           this.classList.add("is-invalid");
//           this.parentElement.querySelector(".invalid-feedback").innerText = "Las contraseñas ingresadas no coinciden";
//           return false;
//         } else {
//           this.classList.remove("is-invalid");
//           this.parentElement.querySelector(".invalid-feedback").innerText = "";
//           laOtraPass.classList.remove("is-invalid");
//           laOtraPass.parentElement.querySelector(".invalid-feedback").innerText = "";
//           return true;
//         }
//       }
//     }
//
//   }
//
//   var validarCamposVaciosTodos = function() {
//
//     var i = 0;
//
//     this.forEach(function(elemento) {
//       if (!validarCampoVacio.call(elemento)) {
//         i++;
//       }
//     });
//
//     if (i != 0) {
//       return false;
//     } else {
//       return true;
//     }
//   }
//
//
//   // Validaciones ON-TIME
//
//   // Valido si hay algún campo vacío
//
//   var formulario = document.querySelector(".contact-form");
//   var elementosFormulario = formulario.elements;
//
//   var elementosFormularioArray = Array.from(elementosFormulario);
//   elementosFormularioArray.pop();
//
//   elementosFormularioArray.forEach(function(elemento) {
//     elemento.addEventListener("blur", validarCampoVacio);
//   });
//
//   // Valido si el formato del email es correcto
//
//   var inputEmail = document.querySelector("#email");
//   inputEmail.addEventListener("blur", validarEmail);
//
//   // Valido si el teléfono tiene solo números
//
//   var inputTelefono = document.querySelector("#phone");
//   inputTelefono.addEventListener("blur", validarSoloNumeros);
//
//   // Valido si las passwords tienen 4 letras como mínimo
//
//   var inputPassword = document.querySelector("#password");
//   inputPassword.addEventListener("blur", validarMin4Car);
//
//   var inputRePassword = document.querySelector("#rePassword");
//   inputRePassword.addEventListener("blur", validarMin4Car);
//
//   // Valido si las dos passwords ingresadas coinciden
//
//   var primeraVezPassword = 1;
//
//   inputPassword.addEventListener("blur", validarPassIguales);
//   inputRePassword.addEventListener("blur", validarPassIguales);
//
//
//   // Validación FINAL (cuando el usuario hace click en ENVIAR) y procesamiento de datos
//
//   formulario.addEventListener("submit", function(evento){
//
//     // console.log("Entré en el SUBMIT!");
//
//     evento.preventDefault();
//
//     var errores = [];
//
//     errores.push(validarCamposVaciosTodos.call(elementosFormularioArray));
//     errores.push(validarEmail.call(inputEmail));
//     errores.push(validarSoloNumeros.call(inputTelefono));
//     errores.push(validarMin4Car.call(inputPassword));
//     errores.push(validarMin4Car.call(inputRePassword));
//     errores.push(validarPassIguales.call(inputPassword));
//     errores.push(validarPassIguales.call(inputRePassword));
//
//     var falsos = 0;
//
//     errores.forEach(function(elemento) {
//       if (elemento === false) {
//         falsos++;
//       }
//     })
//
//     if (falsos == 0) {
//
//       var body = document.querySelector("body");
//       body.innerHTML = "<h2>Gracias por registrarte!</h2><ul></ul>";
//
//       var lista = document.querySelector("ul");
//
//       var itemLista = document.createElement("li");
//       itemLista.innerHTML = "<u>Nombre completo</u>: " + elementosFormularioArray[0].value;
//       lista.append(itemLista);
//
//       itemLista = document.createElement("li");
//       itemLista.innerHTML = "<u>Correo electrónico</u>: " + elementosFormularioArray[1].value;
//       lista.append(itemLista);
//
//       itemLista = document.createElement("li");
//       itemLista.innerHTML = "<u>Teléfono de contacto</u>: " + elementosFormularioArray[2].value;
//       lista.append(itemLista);
//
//       itemLista = document.createElement("li");
//       itemLista.innerHTML = "<u>País de nacimiento</u>: " + elementosFormularioArray[5].value;
//       lista.append(itemLista);
//
//     } else {
//       // console.log('Algún campo no fue completado correctamente');
//     }
//
//   });
//
// }
