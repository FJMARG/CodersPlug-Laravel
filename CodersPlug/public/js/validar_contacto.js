function validar(){

    // Inicio bloque captura de elementos del DOM
    let nombre = document.querySelector('#nombre');
    let apellido = document.querySelector('#apellido');
    let email = document.querySelector('#email');
    let texto = document.querySelector('#texto');
    // Fin bloque captura de elementos del DOM

    // Inicio bloque expresiones regulares
    let regExString = /^[A-Za-z]+$/;
    let regExEmail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    // Fin bloque expresiones regulares

    // Inicio validaciones nombre
    if (nombre.value.length == 0){
        alert("El campo nombre es requerido");
        return false;
    }
    if(nombre.value.length < 3){
        alert("La longitud minima del campo nombre debe ser de 3 caracteres");
        return false;
    }
    if(!regExString.test(nombre.value)){
        alert("El campo nombre debe contener solo texto.");
        return false;
    }
    // Fin validaciones nombre

    // Inicio validaciones apellido
    if (apellido.value.length == 0){
        alert("El campo apellido es requerido");
        return false;
    }
    if(apellido.value.length < 3){
        alert("La longitud minima del campo apellido debe ser de 3 caracteres");
        return false;
    }
    if(!regExString.test(apellido.value)){
        alert("El campo apellido debe contener solo texto.");
        return false;
    }
    // Fin validaciones apellido

    // Inicio validaciones email
    if (email.value.length == 0){
        alert("El campo email es requerido");
        return false;
    }
    if (!regExEmail.test(email.value)){
        alert("El campo email no es valido");
        return false;
    }
    // Fin validaciones email

    // Inicio validaciones texto
    if (texto.value.length == 0){
        alert("El campo texto es requerido");
        return false;
    }
    if(texto.value.length < 10){
        alert("La longitud minima del campo texto debe ser de 10 caracteres");
        return false;
    }
    if(!regExString.test(texto.value)){
        alert("El campo texto debe contener solo texto.");
        return false;
    }
    // Fin validaciones texto

    // Fin bloque validaciones

    let resultado = confirm("Desea envia el formulario para contactarse?");
    if(resultado == true){
      return view('contact');
    }
    else{
      alert("El formulario no se ha enviado");
      return false;
    }
    return true;
}
