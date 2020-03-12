$(document).ready(function(){
  $('select[name="account"]').on('change',function(){
    $('select[name="account"] option:selected').each(function () {
      elegido=$(this).val();
      $('input[name="nameaccount"]').val(elegido);
      $.get("/getflows", { elegido: elegido }, function(data){
          $("#table").parents("tr").remove();
          $("#table").html(data);
      });
    });
  });
});
