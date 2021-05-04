// const formLogin = document.getElementById("formLogin")
// const inputLogin = document.getElementById("inputLogin")
// const msjNombreUsuario = document.getElementById("msjNombreUsuario")
// const msjPassword = document.getElementById("msjPassword")
// const arrayDeInputLogin = document.querySelectorAll("#formLogin .grupo-login input")

// const validateFormLogin = {
//     name: false,
//     password: false
// }

// const mensajesError = {
//     msjNombre: "El nombre no es valido",
//     msjApellido: "El apellido no es valido",
//     msjDocumento: "El numero de documento no es valido",
//     msjTelefono: "El numero de telefono no es valido",
//     msjMail: "La direccion de correo no es valido",
//     msjNombreUsuario: "El nombre de usuario no es valido",
//     msjPassword: "El password no es valido"
// }

// const validarPassword = (password) => {
//     let retorno = false
//     const passwordRegex = /(?=(.*[0-9]))(?=.*[a-z])(?=(.*[A-Z]))(?=(.*)).{8,}/
//     if (passwordRegex.test(password)) retorno = true
//     return retorno
// }

// const validarUsername = (username) => {
//     let retorno = false
//     const usernameRegex = /[A-Za-z0-9_\-]{3,16}/
//     if (usernameRegex.test(username))
//         retorno = true
//     return retorno
// }

// const validateEmail = (email) => {
//     let retorno = false
//     const emailRegex = /^(([^<>()\[\]\\.,:\s@"]+(\.[^<>()\[\]\\.,:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
//     if (emailRegex.test(email)) retorno = true
//     return retorno
// }

// const validateName = (name) => {
//     let retorno = false
//     const nameRegex = /[a-zA-Z\s]{3,16}/
//     if (nameRegex.test(name)) retorno = true
//     return retorno
// }

// const validateDNI = (dni) => {
//     let retorno = false
//     const dniRegex = /^(\d{2}\.{1}?\d{3}\.?\d{3})|(\d{2}\s{1}?\d{3}\s?\d{3})$/
//     if (dniRegex.test(dni)) retorno = true
//     return retorno
// }

// const validateTel = (tel) => {
//     let retorno = false
//     const telRegex = /^(\d{2}?[\s\.-]?\d{4}[\s\.-]?\d{4})$/
//     if (telRegex.test(tel)) retorno = true
//     return retorno
// }

// const recorrevalidateForm = (json) => {
//     const valuesvalidateFormLogin = Object.values(json)
//     const indexvalidateFormLogin = valuesvalidateFormLogin.findIndex(value => value == false)
//     return indexvalidateFormLogin
// }

// const formValido = (btnInput) => {
//     let retorno = false
//     if (recorrevalidateForm(validateFormLogin) == -1) {
//         retorno = true
//         btnInput.removeAttribute("disabled")
//     } else {
//         btnInput.setAttribute("disabled", true)
//     }
//     return retorno
// }

// formLogin.addEventListener("submit", (e) => {
//     e.preventDefault()
//     formValido(inputLogin)
//     formLogin.submit()
// })

// arrayDeInputLogin.forEach(element => element.addEventListener("change", () => {
//     if (element.getAttribute("id") == "nombre") {
//         const valNombreUsuario = element.value
//         if (valNombreUsuario.trim().length > 0 && validarUsername(valNombreUsuario)) {
//             validateFormLogin.name = true
//             msjNombreUsuario.textContent = ""
//         } else {
//             msjNombreUsuario.textContent = mensajesError.msjNombreUsuario
//             validateFormLogin.name = false
//         }
//     } else if (element.getAttribute("id") == "password") {
//         const valPassword = element.value
//         if (valPassword.trim().length > 0 && validarPassword(valPassword)) {
//             validateFormLogin.password = true
//             msjPassword.textContent = ""
//         } else {
//             msjPassword.textContent = mensajesError.msjPassword
//             validateFormLogin.password = false
//         }
//     }
//     formValido(inputLogin)
// }))

// arrayDeInputLogin.forEach(element => element.addEventListener("keyup", () => {
//     if (element.getAttribute("id") == "nombre") {
//         const valNombreUsuario = element.value
//         if (valNombreUsuario.trim().length > 0 && validarUsername(valNombreUsuario)) {
//             validateFormLogin.name = true
//             msjNombreUsuario.textContent = ""
//         } else {
//             msjNombreUsuario.textContent = mensajesError.msjNombreUsuario
//             validateFormLogin.name = false
//         }
//     } else if (element.getAttribute("id") == "password") {
//         const valPassword = element.value
//         if (valPassword.trim().length > 0 && validarPassword(valPassword)) {
//             validateFormLogin.password = true
//             msjPassword.textContent = ""
//         } else {
//             msjPassword.textContent = mensajesError.msjPassword
//             validateFormLogin.password = false
//         }
//     }
//     formValido(inputLogin)
// }))

// arrayDeInputLogin.forEach(element => element.addEventListener("focusout", () => {
//     formValido(inputLogin)
// }))

// arrayDeInputLogin.forEach(element => element.addEventListener("focusout", () => {
//     formValido(inputLogin)
// }))


// const formRegister = document.getElementById("formRegister")
// const inputRegister = document.getElementById("inputRegister")
// const arrayDeInputRegister = document.querySelectorAll("#formRegister .grupo-login input")

// const msjNombreRegister = document.getElementById("msjNombreRegister")
// const msjApellidoRegister = document.getElementById("msjApellidoRegister")
// const msjDocumentoRegister = document.getElementById("msjDocumentoRegister")
// const msjTelefonoRegister = document.getElementById("msjTelefonoRegister")
// const msjNombreUsuarioRegister = document.getElementById("msjUsuarioRegister")
// const msjEmailRegister = document.getElementById("msjEmailRegister")
// const msjPasswordRegister = document.getElementById("msjPasswordRegister")

// const validateFormRegister = {
//     nombre: false,
//     apellido: false,
//     documento: false,
//     telefono: false,
//     usuario: false,
//     email: false,
//     password: false
// }

// formRegister.addEventListener("submit", (e) => {
//     e.preventDefault()
//     formValido(inputRegister)
//     formRegister.submit()
// })

// arrayDeInputRegister.forEach(element => element.addEventListener("change", () => {
//     if (element.getAttribute("id") == "nombreRegister") {
//         const valNombre = element.value
//         if (valNombre.trim().length > 0 && validateName(valNombre)) {
//             validateFormRegister.nombre = true
//             msjNombreRegister.textContent = ""
//         } else {
//             msjNombreRegister.textContent = mensajesError.msjNombre
//             validateFormRegister.nombre = false
//         }
//     } else if (element.getAttribute("id") == "apellidoRegister") {
//         const valApellido = element.value
//         if (valApellido.trim().length > 0 && validateName(valApellido)) {
//             validateFormRegister.apellido = true
//             msjApellidoRegister.textContent = ""
//         } else {
//             msjApellidoRegister.textContent = mensajesError.msjApellido
//             validateFormRegister.apellido = false
//         }
//     } else if (element.getAttribute("id") == "documentoRegister") {
//         const valDni = element.value
//         if (valDni.trim().length > 0 && validateDNI(valDni)) {
//             validateFormRegister.documento = true
//             msjDocumentoRegister.textContent = ""
//         } else {
//             msjDocumentoRegister.textContent = mensajesError.msjDocumento
//             validateFormRegister.documento = false
//         }
//     } else if (element.getAttribute("id") == "telefonoRegister") {
//         const valTel = element.value
//         if (valTel.trim().length > 0 && validateTel(valTel)) {
//             validateFormRegister.telefono = true
//             msjTelefonoRegister.textContent = ""
//         } else {
//             msjTelefonoRegister.textContent = mensajesError.msjTelefono
//             validateFormRegister.telefono = false
//         }
//     } else if (element.getAttribute("id") == "usuarioRegister") {
//         const valUser = element.value
//         if (valUser.trim().length > 0 && validarUsername(valUser)) {
//             validateFormRegister.usuario = true
//             msjNombreUsuarioRegister.textContent = ""
//         } else {
//             msjNombreUsuarioRegister.textContent = mensajesError.msjNombreUsuario
//             validateFormRegister.usuario = false
//         }
//     } else if (element.getAttribute("id") == "emailRegister") {
//         const valEmail = element.value
//         if (valEmail.trim().length > 0 && validateEmail(valEmail)) {
//             validateFormRegister.email = true
//             msjEmailRegister.textContent = ""
//         } else {
//             msjEmailRegister.textContent = mensajesError.msjMail
//             validateFormRegister.email = false
//         }
//     } else if (element.getAttribute("id") == "passwordRegister") {
//         const valPassword = element.value
//         if (valPassword.trim().length > 0 && validarPassword(valPassword)) {
//             validateFormRegister.password = true
//             msjPasswordRegister.textContent = ""
//         } else {
//             msjPasswordRegister.textContent = mensajesError.msjPassword
//             validateFormRegister.password = false
//         }
//     }
//     formValido(inputRegister)
// }))

// arrayDeInputRegister.forEach(element => element.addEventListener("keyup", () => {
//     if (element.getAttribute("id") == "nombreRegister") {
//         const valNombre = element.value
//         if (valNombre.trim().length > 0 && validateName(valNombre)) {
//             validateFormRegister.nombre = true
//             msjNombreRegister.textContent = ""
//         } else {
//             msjNombreRegister.textContent = mensajesError.msjNombre
//             validateFormRegister.nombre = false
//         }
//     } else if (element.getAttribute("id") == "apellidoRegister") {
//         const valApellido = element.value
//         if (valApellido.trim().length > 0 && validateName(valApellido)) {
//             validateFormRegister.apellido = true
//             msjApellidoRegister.textContent = ""
//         } else {
//             msjApellidoRegister.textContent = mensajesError.msjApellido
//             validateFormRegister.apellido = false
//         }
//     } else if (element.getAttribute("id") == "documentoRegister") {
//         const valDni = element.value
//         if (valDni.trim().length > 0 && validateDNI(valDni)) {
//             validateFormRegister.documento = true
//             msjDocumentoRegister.textContent = ""
//         } else {
//             msjDocumentoRegister.textContent = mensajesError.msjDocumento
//             validateFormRegister.documento = false
//         }
//     } else if (element.getAttribute("id") == "telefonoRegister") {
//         const valTel = element.value
//         if (valTel.trim().length > 0 && validateTel(valTel)) {
//             validateFormRegister.telefono = true
//             msjTelefonoRegister.textContent = ""
//         } else {
//             msjTelefonoRegister.textContent = mensajesError.msjTelefono
//             validateFormRegister.telefono = false
//         }
//     } else if (element.getAttribute("id") == "usuarioRegister") {
//         const valUser = element.value
//         if (valUser.trim().length > 0 && validarUsername(valUser)) {
//             validateFormRegister.usuario = true
//             msjNombreUsuarioRegister.textContent = ""
//         } else {
//             msjNombreUsuarioRegister.textContent = mensajesError.msjNombreUsuario
//             validateFormRegister.usuario = false
//         }
//     } else if (element.getAttribute("id") == "emailRegister") {
//         const valEmail = element.value
//         if (valEmail.trim().length > 0 && validateEmail(valEmail)) {
//             validateFormRegister.email = true
//             msjEmailRegister.textContent = ""
//         } else {
//             msjEmailRegister.textContent = mensajesError.msjMail
//             validateFormRegister.email = false
//         }
//     } else if (element.getAttribute("id") == "passwordRegister") {
//         const valPassword = element.value
//         if (valPassword.trim().length > 0 && validarPassword(valPassword)) {
//             validateFormRegister.password = true
//             msjPasswordRegister.textContent = ""
//         } else {
//             msjPasswordRegister.textContent = mensajesError.msjPassword
//             validateFormRegister.password = false
//         }
//     }
//     formValido(inputRegister)
// }))

// arrayDeInputRegister.forEach(element => element.addEventListener("focusout", () => {
//     formValido(inputRegister)
// }))

// arrayDeInputRegister.forEach(element => element.addEventListener("focusout", () => {
//     formValido(inputRegister)
// }))


// const fondoModal = document.getElementById('fondo-modal');
// const cerrarModal = document.querySelector('.contenedor-form-modal span');
// const agregar = document.getElementById("linkRegister")

// const funcionEntrada = (element) => element.style.display = 'flex';

// const funcionSalida = (element) => element.style.display = 'none';

// const validaExistencia = (element) => {
//     let retorno = false;
//     if (element != null && element != undefined) {
//         retorno = true;
//     }
//     return retorno;
// };

// if (validaExistencia(agregar)) {
//     agregar.addEventListener('click', () => {
//         funcionEntrada(fondoModal);
//     });
// }
// if (validaExistencia(cerrarModal)) {
//     cerrarModal.addEventListener('click', () => {
//         funcionSalida(fondoModal)
//     });
// }

// addEventListener('click', (e) => {
//     if (fondoModal == e.target) {
//         funcionSalida(fondoModal);
//     }
// });

// const logoBlanco = document.getElementById("logoBlanco")
// const tituloLogin = document.querySelector(".text-login h2")
// const parrafoLogin = document.querySelector(".text-login p")

// addEventListener("load", () => {
//     logoBlanco.classList.add("logoBlanco-focus-in")
//     setTimeout(() => {
//         tituloLogin.classList.add("text-login-enfasis")
//         parrafoLogin.classList.add("text-login-enfasis")
//     }, 1500)
// })