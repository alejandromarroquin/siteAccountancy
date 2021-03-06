$(document).ready(function(){
  jQuery.validator.messages.required = 'Esté campo es requerido.';

  var endpoint_sepomex  = "http://api-sepomex.hckdrk.mx/query/";
  var method_sepomex = 'info_cp/';
  var cp = $('input[name="postalcode"]').val();
  var variable_string = '?type=simplified';
  var url = endpoint_sepomex + method_sepomex + cp + variable_string;
  $.get(url).done(function( data ) {
    for(var i = 0; i < data.response.asentamiento.length; i++) {
      $('select[name="colony"]').append('<option>'+data.response.asentamiento[i]+'</option>');
    }
  });

  $("#updateform").on('click', function () {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var taxid=$('input[name="taxid"]').val();
    var emailid=$('input[name="emailid"]').val();
    var addressid=$('input[name="addressid"]').val();
    var phoneid=$('input[name="phoneid"]').val();
    var contactid=$('input[name="contactid"]').val();
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
      Swal.fire({
        title: 'Está seguro de actualizar la empresa?',
        type: 'warning',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Confirmar',
        showCancelButton: true,
        reverseButtons: true,
        cancelButtonColor: '#929292'
      }).then((result) => {
        if (result.value) {
          $.ajax({
            type:'POST',
            url:'/empresaupdate',
            data:{taxid:taxid,emailid:emailid,addressid:addressid,phoneid:phoneid,contactid:contactid,responsible:responsible,positionresponsible:positionresponsible,businessname:businessname,rfc:rfc,taxregime:taxregime,phoneoffice:phoneoffice,extension:extension,cellphone:cellphone,email:email,web:web,street:street,numint:numint,numext:numext,colony:colony,city:city,estate:estate,contry:contry,postalcode:postalcode},
            success:function(data){
              if(data==1){
                Swal.fire(
                  'Actualizado!',
                  'El cliente se actualizó correctamente.',
                  'success'
                ).then((result)=>{
                  $(location).attr('href','/empresas_consultar');
                });

              }else{
                Swal.fire(
                  'Error!',
                  'Algo salio mal, intente más tarde.',
                  'error'
                )
              }
            }
          });
        }
      });
    }
  });
});
