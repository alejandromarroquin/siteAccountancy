$(function () {
  $(document).on('click', '.delete', function (event) {
    elegido=$(this).val();
    $.get("/empresadelete", { elegido: elegido }, function(data){
      alert(data);
    });
  });
});

$(function () {
  $(document).on('click', '.edit', function (event) {
    elegido=$(this).val();
    $.get("/empresaupdate", { elegido: elegido }, function(data){
      alert(data);
    });
  });
});
