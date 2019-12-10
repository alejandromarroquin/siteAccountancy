$(document).ready(function(){
  jQuery.validator.messages.required = 'Esté campo es obligatorio.';
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
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
