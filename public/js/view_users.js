$(function () {
  $(document).on('click', '.delete', function (event) {
    elegido=$(this).val();
    $.get("/userdelete", { elegido: elegido }, function(data){
      alert(data);
    });
  });
});

$(function () {
  $(document).on('click', '.edit', function (event) {
    elegido=$(this).val();
    $.get("/userupdate", { elegido: elegido }, function(data){
      alert(data);
    });
  });
});
