function validar(){
    
    // Inicio bloque captura de elementos del DOM
    let nombre = document.getElementById('nombre');
    let apellido = document.getElementById('apellido');
    let email = document.getElementById('email');
    let rol = document.getElementById('rol');
    let sexo = document.getElementsByName('sexo');
    let password = document.getElementById('password');
    let pregunta = document.getElementById('pregunta');
    let respuesta = document.getElementById('respuesta');
    // Fin bloque captura de elementos del DOM
    
    // Inicio bloque expresiones regulares
    let regExString = /^[A-Za-z]+$/;
    let regExEmail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    // Fin bloque expresiones regulares
    
    // Inicio bloque validaciones
    // Inicio validaciones rol
    if (rol.value.length == 0){
        alert("El campo rol es requerido");
        return false;
    }
    if (!((rol.value == 1)||(rol.value == 2)||(rol.value == 3))){
        alert("El campo rol debe contener un valor entre 1 y 3 -> 1: Coder, 2: Recruiter, 3: Enterprise");
        return false;
    }
    // Fin validaciones rol
    
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

    // Inicio validaciones respuesta
    if (respuesta.value.length == 0){
        alert("El campo respuesta es requerido");
        return false;
    }
    if (respuesta.value.length < 2){
        alert("El campo respuesta debe tener un minimo de 2 caracteres");
        return false;
    }
    // Fin validaciones respuesta

    // Inicio validaciones pregunta
    if (pregunta.value.length == 0){
        alert("El campo pregunta es requerido");
        return false;
    }
    if (!((pregunta.value == 1)||(pregunta.value == 2)||(pregunta.value == 3)||(pregunta.value == 4)||(pregunta.value == 5))){
        alert("El campo pregunta debe contener un valor entre 1 y 5");
        return false;
    }
    // Fin validaciones pregunta

    // Inicio validaciones sexo
    if (!((sexo[0].checked)||(sexo[1].checked))){
        alert("El campo sexo es requerido");
        return false;
    }
    if(!((sexo[0].value == "F")||(sexo[0].value == "M")||(sexo[1].value == "F")||(sexo[1].value == "M"))){
        alert("El campo sexo debe contener los valores F o M -> F: Femenino, M: Masculino");
        return false;
    }
    // Fin validaciones sexo

    // Inicio validaciones password
    if (password.value.length == 0){
        alert("El campo password es requerido");
        return false;
    }
    if (password.value.length < 6){
        alert("El campo password debe tener un minimo de 6 caracteres");
        return false;
    }
    // Fin validaciones password
    // Fin bloque validaciones

    return true;
}