$(function(){
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $('#download').on('click',function(){
    $.ajax({
       type:'POST',
       url:'/downloadtrialbalance',
       data:{cont:1}
    });
    Swal.fire({
      position: 'top-end',
      type: 'success',
      title: 'Descarga correcta',
      showConfirmButton: false,
      timer: 1500
    });
  });
});
