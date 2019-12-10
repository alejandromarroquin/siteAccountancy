$(function () {
  $(document).on('click', '.delete', function (event) {
    event.preventDefault();
    elegido=$(this).val();
    Swal.fire({
      title: 'Está seguro de eliminar el usuario?',
      text: "No se podrán revertir los cambios!",
      type: 'warning',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Confirmar',
      showCancelButton: true,
      reverseButtons: true,
      cancelButtonColor: '#929292'
    }).then((result) => {
      if (result.value) {
        $.get("/userdelete", { elegido: elegido }, function(data){
          if(data==1){
            Swal.fire(
              'Eliminado!',
              'El usuario se eliminó correctamente.',
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

$(function () {
  $(document).on('click', '.edit', function (event) {
    elegido=$(this).val();
    $.get("/useredit", { elegido: elegido }, function(data){
      alert(data);
    });
  });
});
