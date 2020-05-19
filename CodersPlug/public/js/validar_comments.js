function validar(){

    // Inicio bloque captura de elementos del DOM
    let texto = document.querySelector('#texto');
    // Fin bloque captura de elementos del DOM

    // Inicio validaciones texto
    if (texto.value.length == 0){
        alert("El campo texto es requerido");
        return false;
    }
    if(texto.value.length > 20){
        alert("La longitud maxima del campo texto debe ser de 20 caracteres");
        return false;
    }
    // Fin validaciones texto

    // Fin bloque validaciones

    return true;
}
