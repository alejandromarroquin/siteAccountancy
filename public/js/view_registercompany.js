//Función para habilitar e inhabilitar los input de información general
function completeGeneralInformation(){
  if($('input[name="checkcompletetel"]').prop('checked')){

    $("#phoneffice").prop('disabled', true);
    $("#extension").prop('disabled', true);
    $("#cellphone").prop('disabled', true);

    //Asignar valores de datos fiscales a datos generales
    $("#phoneffice").val($('input[name="phoneofficet"]').val());
    $("#extension").val($('input[name="extensiont"]').val());
    $("#cellphone").val($('input[name="cellphonet"]').val());

  }else{
    $("#phoneffice").prop('disabled', false);
    $("#extension").prop('disabled', false);
    $("#cellphone").prop('disabled', false);

    $("#phoneffice").val("");
    $("#extension").val("");
    $("#cellphone").val("");

  }

  if($('input[name="checkcompletemail"]').prop('checked')){
    $("#email").prop('disabled', true);

    //Asignar valores de datos fiscales a datos generales
    $("#email").val($('input[name="emailt"]').val());

  }else{
    $("#email").prop('disabled', false);
    $("#email").val("");

  }

  if($('input[name="checkcompletedir"]').prop('checked')){
    $("#street").prop('disabled', true);
    $("#numint").prop('disabled', true);
    $("#numext").prop('disabled', true);
    $("#colony").prop('disabled', true);
    $("#city").prop('disabled', true);
    $("#estate").prop('disabled', true);
    $("#country").prop('disabled', true);
    $("#postalcode").prop('disabled', true);

    //Asignar valores de datos fiscales a datos generales
    $("#street").val($('input[name="streett"]').val());
    $("#numint").val($('input[name="numintt"]').val());
    $("#numext").val($('input[name="numextt"]').val());
    $("#colony").val($('input[name="colonyt"]').val());
    $("#city").val($('input[name="cityt"]').val());
    $("#estate").val($('input[name="estatet"]').val());
    $("#country").val($('input[name="contryt"]').val());
    $("#postalcode").val($('input[name="postalcodet"]').val());

  }else{
    $("#street").prop('disabled', false);
    $("#numint").prop('disabled', false);
    $("#numext").prop('disabled', false);
    $("#colony").prop('disabled', false);
    $("#city").prop('disabled', false);
    $("#estate").prop('disabled', false);
    $("#country").prop('disabled', false);
    $("#postalcode").prop('disabled', false);

    $("#street").val("");
    $("#numint").val("");
    $("#numext").val("");
    $("#colony").val("");
    $("#city").val("");
    $("#estate").val("");
    $("#country").val("");
    $("#postalcode").val("");
  }
}

//Función para validad el RFC
function rfcValido(rfc) {
    const re       = /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
    var   validado = rfc.match(re);

    if (!validado)  //Coincide con el formato general del regex?
        return false;

    //Separar el dígito verificador del resto del RFC
    const digitoVerificador = validado.pop(),
          rfcSinDigito      = validado.slice(1).join(''),
          len               = rfcSinDigito.length,

    //Obtener el digito esperado
          diccionario       = "0123456789ABCDEFGHIJKLMN&OPQRSTUVWXYZ Ñ",
          indice            = len + 1;
    var   suma,
          digitoEsperado;

    if (len == 12) suma = 0
    else suma = 481; //Ajuste para persona moral

    for(var i=0; i<len; i++)
        suma += diccionario.indexOf(rfcSinDigito.charAt(i)) * (indice - i);
    digitoEsperado = 11 - suma % 11;
    if (digitoEsperado == 11) digitoEsperado = 0;
    else if (digitoEsperado == 10) digitoEsperado = "A";

    //El dígito verificador coincide con el esperado?
    if (digitoVerificador != digitoEsperado)
        return false;
    return rfcSinDigito + digitoVerificador;
}

//Mostrar si el RFC es incorrecto
function validarInput(input) {
    var rfc         = input.value.trim().toUpperCase(),
        resultado   = document.getElementById("resultado"),
        valido;

    var rfcCorrecto = rfcValido(rfc);   // ?? Acá se comprueba

    if (!rfcCorrecto) {
    	alert("Formato RFC incorrecto");
    }
}


//Función para pasar a mayúsculas las letras ingresadas en un input
function aMayusculas(obj,id){
    obj = obj.toUpperCase();
    document.getElementById(id).value = obj;
}
