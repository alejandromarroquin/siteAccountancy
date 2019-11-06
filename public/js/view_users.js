$(function () {
  $(document).on('click', '.delete', function (event) {
    event.preventDefault();
    elegido=$(this).val();
    $.get("/userdelete", { elegido: elegido }, function(data){
      alert(data);
    });
    $(this).closest('tr').remove();
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
