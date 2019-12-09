$(document).ready(function(){
  $('.delete').on('click',function(){
    event.preventDefault();
    elegido=$(this).val();
    Swal.fire({
      title: 'Esta seguro de eliminar la empresa?',
      text: "No se podrán revertir los cambios!",
      type: 'warning',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Confirmar',
      showCancelButton: true,
      cancelButtonColor: '#929292'
    }).then((result) => {
      if (result.value) {
        $.get("/empresadelete", { elegido: elegido });
        $(this).closest('tr').remove();
      }
    });
  });

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  
  $(".edit").click(function(e){
    e.preventDefault();
    var rfc = $(this).val();
    $.ajax({
      type:'POST',
      url:'/empresaupdate',
      data:{rfc:rfc},
      success:function(data){
        alert(data);
      }
    });
  });
});