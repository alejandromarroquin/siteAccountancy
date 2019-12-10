$(document).ready(function(){
  jQuery.validator.messages.required = 'Esté campo es obligatorio.';
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $("#sendform").on('click', function () {
    var businessname=$('input[name="businessname"]').val();
    var rfc=$('input[name="rfc"]').val();
    var taxregime=$('select[name="taxregime"]').val();
    var phoneoffice=$('input[name="phoneoffice"]').val();
    var extension=$('input[name="extension"]').val();
    var cellphone=$('input[name="cellphone"]').val();
    var email=$('input[name="email"]').val();
    var street=$('input[name="street"]').val();
    var numint=$('input[name="numint"]').val();
    var numext=$('input[name="numext"]').val();
    var colony=$('input[name="colony"]').val();
    var city=$('input[name="city"]').val();
    var estate=$('input[name="estate"]').val();
    var contry=$('input[name="contry"]').val();
    var postalcode=$('input[name="postalcode"]').val();
    if($("#companyform").valid()){
      $.ajax({
         type:'POST',
         url:'/empresacreate',
         data:{businessname:businessname,rfc:rfc,taxregime:taxregime,phoneoffice:phoneoffice,extension:extension,cellphone:cellphone,email:email,street:street,numint:numint,numext:numext,colony:colony,city:city,estate:estate,contry:contry,postalcode:postalcode},
         success:function(data){
          if(data==1){
            Swal.fire(
              'Registrado!',
              'El cliente se registro correctamente.',
              'success'
            )
            $('input[name="businessname"]').val(null);
            $('input[name="rfc"]').val(null);
            $('input[name="taxregime"]').val(null);
            $('input[name="phoneoffice"]').val(null);
            $('input[name="extension"]').val(null);
            $('input[name="cellphone"]').val(null);
            $('input[name="email"]').val(null);
            $('input[name="street"]').val(null);
            $('input[name="numint"]').val(null);
            $('input[name="numext"]').val(null);
            $('input[name="colony"]').val(null);
            $('input[name="city"]').val(null);
            $('input[name="estate"]').val(null);
            $('input[name="contry"]').val(null);
            $('input[name="postalcode"]').val(null);
          }else{
            if(data==2){
              Swal.fire(
                'Error!',
                'Hay unproblema con el número telefónico.',
                'error'
              )
            }else{
              if(data==3){
                Swal.fire(
                  'Error!',
                  'El correo electrónico ya está en uso, porfavor ingrese uno distinto.',
                  'error'
                )
              }else{
                if(data==4){
                  Swal.fire(
                    'Error!',
                    'Hay unproblema con la dirección.',
                    'error'
                  )
                }else{
                  if(data==5){
                    Swal.fire(
                      'Error!',
                      'Algo salio mal, intentelo más tarde.',
                      'error'
                    )
                  }else{
                    if(data==6){
                      Swal.fire(
                        'Error!',
                        'Hay unproblema con la razón social o el RFC.',
                        'error'
                      )
                    }else{
                      Swal.fire(
                        'Error!',
                        'Algo salio mal, intentelo más tarde.',
                        'error'
                      )
                    }
                  }
                }
              }
            }
          }
         }
      });
    }
  });
});

//Función para validad el RFC
function rfcValido(rfc) {
    const re       = /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
    var   validado = rfc.match(re);

    if (!validado)  //Coincide con el formato general
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
      input.value=null;
    }
}


//Función para pasar a mayúsculas las letras ingresadas en un input
function aMayusculas(obj,id){
    obj = obj.toUpperCase();
    document.getElementById(id).value = obj;
}
