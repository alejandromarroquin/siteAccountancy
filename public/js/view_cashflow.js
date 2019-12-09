$(document).ready(function(){
  $("#confirmamount").on('change', function () {
    if($("#confirmamount").val()!=$("#amount").val()){
      Swal.fire({
        type: 'error',
        title: 'Las cantidades no coinciden!',
        text: 'Porfavor verifica que las cantidades sean iguales'
      });
      $("#confirmamount").val(null);
    }
  });
});
