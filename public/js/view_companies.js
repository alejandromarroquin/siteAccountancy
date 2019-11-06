$(function () {
  $(document).on('click', '.delete', function (event) {
    event.preventDefault();
    elegido=$(this).val();
    $.get("/empresadelete", { elegido: elegido }, function(data){
      alert(data);
    });
    $(this).closest('tr').remove();
  });
});

$(document).ready(function(){
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
