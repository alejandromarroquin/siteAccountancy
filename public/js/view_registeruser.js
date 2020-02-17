$(document).ready(function(){
  jQuery.validator.messages.required = 'Esté campo es requerido.';
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('select[name="company"]').on('change',function(){
    if ($('select[name="company"]').val()==1) {
      $('select[name="typeuser"]').empty().append('<option value="1">Administrador interno</option>');
      $('select[name="typeuser"]').append('<option value="2">Administrador externo</option>');
      $('select[name="typeuser"]').append('<option value="3">Contador</option>');
      $('select[name="typeuser"]').append('<option value="4">Subcontador</option>');
      $('select[name="typeuser"]').append('<option value="5">Asistente</option>');
    }else{
      $('select[name="typeuser"]').empty().append('<option value="2">Administrador externo</option>');
      $('select[name="typeuser"]').append('<option value="3">Contador</option>');
      $('select[name="typeuser"]').append('<option value="4">Subcontador</option>');
      $('select[name="typeuser"]').append('<option value="5">Asistente</option>');
    }
  });

  $("#sendform").on('click', function () {
    var company=$('select[name="company"]').val();
    var name=$('input[name="name"]').val();
    var lastname=$('input[name="lastname"]').val();
    var email=$('input[name="email"]').val();
    var password=$('input[name="password"]').val();
    var typeuser=$('select[name="typeuser"]').val();
    if($("#userform").valid()){
      $.ajax({
         type:'POST',
         url:'/usercreate',
         data:{company:company,name:name,lastname:lastname,email:email,password:password,typeuser:typeuser},
         success:function(data){
           if(data==1){
             Swal.fire(
               'Registrado!',
               'El usuario se registro correctamente.',
               'success'
             ).then((result)=>{
               $(location).attr('href','/usuario_registrar');
             });
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
