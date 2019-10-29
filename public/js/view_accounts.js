$(document).ready(function(){
  $("#account").on('change', function () {
    $("#account option:selected").each(function () {
      elegido=$(this).val();
      $.get("/getaccount", { elegido: elegido }, function(data){
          $("#subaccount").html(data);
      });
    });
  });
});

$(document).ready(function(){
  $('#agregar').on('click',function(){
    $("#subaccount option:selected").each(function () {
      elegido=$(this).val();
      $.get("/accountscreate", { elegido: elegido }, function(data){
          jQuery('#tbody').append(data);
      });
    });
  });
});

$(function () {
    $(document).on('click', '.borrar', function (event) {
        elegido=$(this).val();
        $.get("/accountsdelete", { elegido: elegido }, function(data){

        });
        event.preventDefault();
        $(this).closest('tr').remove();
    });
});
