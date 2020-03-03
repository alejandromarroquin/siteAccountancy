$(function(){
  $('#download').on('click',function(){
    Swal.fire({
      position: 'top-end',
      type: 'success',
      title: 'Descarga correcta',
      showConfirmButton: false,
      timer: 1500
    });
  });
});
