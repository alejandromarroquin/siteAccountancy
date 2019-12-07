$(document).ready(function(){
    $('#historial-tab').on('click',function(){
      $('.rowshistorial').remove();
      $.ajax({
         type:'GET',
         url:'/purchasesrequest',
         data:{valor:1},
         success:function(data){
            jQuery('#tbodyh').append(data);
         }
      });
    });

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    
    $(".Ok").click(function(e){
        e.preventDefault();
        var id = $(this).val();
        Swal.fire({
          title: 'Esta seguro de aprobar la solicitud?',
          text: "No se podrán revertir los cambios!",
          type: 'warning',
          confirmButtonColor: '#3085d6',
          confirmButtonText: 'Confirmar',
          showCancelButton: true,
          cancelButtonColor: '#929292'
        }).then((result) => {
          if (result.value) {
            $.ajax({
               type:'POST',
               url:'/purchaseupdate',
               data:{id:id,status:1}
            });
            $(this).closest('tr').remove();
          }
        });
    });

    $(".noOk").click(function(e){
        e.preventDefault();
        var id = $(this).val();
        Swal.fire({
          title: 'Esta seguro de rechazar la solicitud?',
          text: "No se podrán revertir los cambios!",
          type: 'warning',
          confirmButtonColor: '#3085d6',
          confirmButtonText: 'Confirmar',
          showCancelButton: true,
          cancelButtonColor: '#929292'
        }).then((result) => {
          if (result.value) {
            $.ajax({
               type:'POST',
               url:'/purchaseupdate',
               data:{id:id,status:2}
            });
            $(this).closest('tr').remove();
          }
        });
    });
});
