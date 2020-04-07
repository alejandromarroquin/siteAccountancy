$(document).ready(function(){
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $("#updateform").on('click', function () {
    jQuery.validator.messages.required = 'Esté campo es requerido.';
    var idcompany=$('input[name="idcompany"]').val();
    var iduser=$('input[name="iduser"]').val();
    var company=$('select[name="company"]').val();
    var name=$('input[name="name"]').val();
    var lastname=$('input[name="lastname"]').val();
    var email=$('input[name="email"]').val();
    var password=$('input[name="password"]').val();
    if($("#userform").valid()){
      Swal.fire({
        title: 'Está seguro de actualizar el usuario?',
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
            url:'/userupdate',
            data:{idcompany:idcompany,iduser:iduser,company:company,name:name,lastname:lastname,email:email,password:password},
            success:function(data){
              if(data==1){
                Swal.fire(
                  'Actualizado!',
                  'El usuario se actualizó correctamente.',
                  'success'
                ).then((result)=>{
                  $(location).attr('href','/usuarios_consultar');
                });

              }else{
                Swal.fire(
                  'Error!',
                  'Algo salio mal, vuelva a intentarlo más tarde.',
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
