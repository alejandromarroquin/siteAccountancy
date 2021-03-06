$(document).ready(function(){
  jQuery.validator.messages.required = 'Esté campo es requerido.';
  $("#account").on('change', function () {
    $("#account option:selected").each(function () {
      elegido=$(this).val();
      $.get("/getaccount", { elegido: elegido }, function(data){
          $("#subaccount").html(data);
      });
    });
  });

  $('#agregar').on('click',function(){
    $("#subaccount option:selected").each(function () {
      elegido=$(this).val();
      debtor=$('input[name="debtor"]').val();
      idsubsubaccount=$('input[name="idsubsubaccount"]').val();
      namesubsubaccount=$('input[name="namesubsubaccount"]').val();
      if(debtor==''){
        debtor=0;
      }
      creditor=$('input[name="creditor"]').val();
      if(creditor==''){
        creditor=0;
      }
      if($("#accountcatalogform").valid()){
        $.get("/accountscreate", { elegido: elegido,debtor:debtor,creditor:creditor,idsubsubaccount:idsubsubaccount,namesubsubaccount:namesubsubaccount }, function(data){
            if(data!=0){
              jQuery('#tbody').append(data);
              Swal.fire(
                'Agregado!',
                'La cuenta se agregó correctamente.',
                'success'
              ).then((result)=>{
                location.reload();
              });
            }else{
              Swal.fire(
                'Error!',
                'Algo salio mal, verifique que la cuenta no haya sido ya registrada.',
                'error'
              )
            }
        });
      }
    });
  });

  $('.delete').on('click',function(){
    event.preventDefault();
    elegido=$(this).val();
    Swal.fire({
      title: 'Está seguro de eliminar la cuenta?',
      text: "No se podrán revertir los cambios!",
      type: 'warning',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Confirmar',
      cancelButtonText: 'Cancelar',
      showCancelButton: true,
      reverseButtons: true,
      cancelButtonColor: '#929292'
    }).then((result) => {
      if (result.value) {
        $.get("/accountsdelete", { elegido: elegido }, function(data){
          if(data==1){
            Swal.fire(
              'Eliminado!',
              'La cuenta se eliminó correctamente.',
              'success'
            )
          }else{
            Swal.fire(
              'Error!',
              'Algo salio mal, intente más tarde.',
              'error'
            )
          }
        });
        $(this).closest('tr').remove();
      }
    });
  });
});
