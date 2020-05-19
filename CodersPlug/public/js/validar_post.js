function validar(){

    // Inicio bloque captura de elementos del DOM
    let titulo = document.querySelector('#titulo');
    let texto = document.querySelector('#texto');
    // Fin bloque captura de elementos del DOM

    // Inicio validaciones titulo
    if (titulo.value.length == 0){
        alert("El campo titulo es requerido");
        return false;
    }
    if(titulo.value.length <= 3 || titulo.value.length >= 10){
        alert("La longitud del titulo debe ser entre 3 y 10 caracteres");
        return false;
    }
    // Fin validaciones titulo

    // Inicio validaciones texto
    if (texto.value.length == 0){
        alert("El campo texto es requerido");
        return false;
    }
    if(texto.value.length > 100){
        alert("La longitud maxima del campo texto debe ser de 100 caracteres");
        return false;
    }
    // Fin validaciones texto

    // Fin bloque validaciones

    return true;
}
