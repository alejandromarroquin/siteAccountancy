$(document).ready(function(){
  jQuery.validator.messages.required = 'Esté campo es requerido.';

  $('input[name="rfc"]').on('change', function () {
    rfc=$('input[name="rfc"]').val();
    estructura=/^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
    if(!estructura.test(rfc)){
      Swal.fire(
        'RFC no valido!',
        'La estructura del RFC no es correcta.',
        'warning'
      ).then((result)=>{
        $('input[name="rfc"]').val(null);
      });
    }

    if($("#taxregime").val()!=0){
      var taxregime=$("#taxregime").val();
      var url='/validaterfc/'+taxregime;
      $.get(url).done(function( data ) {
        if(data==1){
           $('input[name="typetaxregime"]').val();
           if($('input[name="rfc"]').val().length==12){
             Swal.fire(
               'RFC no valido!',
               'La longitud del RFC no es correcta.',
               'warning'
             ).then((result)=>{
               $('input[name="rfc"]').val(null);
             });
           }
         }else{
           if(data==2){
             if($('input[name="rfc"]').val().length==13){
               Swal.fire(
                   'RFC no valido!',
                   'La longitud del RFC no es correcta.',
                   'warning'
                ).then((result)=>{
                   $('input[name="rfc"]').val(null);
                })
             }
           }
         }
      });
    }

  });

  $("#taxregime").on('change', function () {
    $("#taxregime option:selected").each(function () {
      var taxregime=$(this).val();
      var url='/validaterfc/'+taxregime;
      $.get(url).done(function( data ) {
        if(data==1){
           $('input[name="typetaxregime"]').val();
           if($('input[name="rfc"]').val().length==12){
             Swal.fire(
               'RFC no valido!',
               'La longitud del RFC no es correcta.',
               'warning'
             ).then((result)=>{
               $('input[name="rfc"]').val(null);
             });
           }
         }else{
           if(data==2){
             if($('input[name="rfc"]').val().length==13){
               Swal.fire(
                   'RFC no valido!',
                   'La longitud del RFC no es correcta.',
                   'warning'
                ).then((result)=>{
                   $('input[name="rfc"]').val(null);
                })
             }
           }
         }
      });
    });
  });

  $('input[name="postalcode"]').on('change', function () {
    var endpoint_sepomex  = "http://api-sepomex.hckdrk.mx/query/";
    var method_sepomex = 'info_cp/';
    var cp = $('input[name="postalcode"]').val();
    var variable_string = '?type=simplified';
    var url = endpoint_sepomex + method_sepomex + cp + variable_string;
    $('select[name="colony"]').empty();
    $.get(url).done(function( data ) {
      for(var i = 0; i < data.response.asentamiento.length; i++) {
        $('select[name="colony"]').append('<option>'+data.response.asentamiento[i]+'</option>');
      }
      $('input[name="city"]').val(data.response.municipio);
      $('input[name="estate"]').val(data.response.estado);
      $('input[name="contry"]').val(data.response.pais);
    });
  });

  $("#sendform").on('click', function () {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var responsible=$('input[name="responsible"]').val();
    var positionresponsible=$('input[name="positionresponsible"]').val();
    var businessname=$('input[name="businessname"]').val();
    var rfc=$('input[name="rfc"]').val();
    var taxregime=$('select[name="taxregime"]').val();
    var phoneoffice=$('input[name="phoneoffice"]').val();
    var extension=$('input[name="extension"]').val();
    var cellphone=$('input[name="cellphone"]').val();
    var email=$('input[name="email"]').val();
    var web=$('input[name="web"]').val();
    var street=$('input[name="street"]').val();
    var numint=$('input[name="numint"]').val();
    var numext=$('input[name="numext"]').val();
    var colony=$('select[name="colony"]').val();
    var city=$('input[name="city"]').val();
    var estate=$('input[name="estate"]').val();
    var contry=$('input[name="contry"]').val();
    var postalcode=$('input[name="postalcode"]').val();
    if($("#companyform").valid()){
      $.ajax({
         type:'POST',
         url:'/empresacreate',
         data:{responsible:responsible,positionresponsible:positionresponsible,businessname:businessname,rfc:rfc,taxregime:taxregime,phoneoffice:phoneoffice,extension:extension,cellphone:cellphone,email:email,web:web,street:street,numint:numint,numext:numext,colony:colony,city:city,estate:estate,contry:contry,postalcode:postalcode},
         success:function(data){
          if(data==1){
            Swal.fire(
              'Registrado!',
              'El cliente se registro correctamente.',
              'success'
            )
            $('input[name="responsible"]').val(null);
            $('input[name="positionresponsible"]').val(null);
            $('input[name="businessname"]').val(null);
            $('input[name="rfc"]').val(null);
            $('input[name="taxregime"]').val(null);
            $('input[name="phoneoffice"]').val(null);
            $('input[name="extension"]').val(null);
            $('input[name="cellphone"]').val(null);
            $('input[name="email"]').val(null);
            $('input[name="web"]').val(null);
            $('input[name="street"]').val(null);
            $('input[name="numint"]').val(null);
            $('input[name="numext"]').val(null);

            $('input[name="city"]').val(null);
            $('input[name="estate"]').val(null);
            $('input[name="postalcode"]').val(null);
          }else{
              Swal.fire(
                'Error!',
                'Algo salio mal, intentelo más tarde.',
                'error'
              )
            }
          }
      });
    }
  });
});

//Función para pasar a mayúsculas las letras ingresadas en un input
function aMayusculas(obj,id){
    obj = obj.toUpperCase();
    document.getElementById(id).value = obj;
}
