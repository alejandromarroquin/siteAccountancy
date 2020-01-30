$(document).ready(function(){
  jQuery.validator.messages.required = 'Esté campo es requerido.';
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

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

  $("#sendform").on('click', function () {
    var accountdebit=$('select[name="accountdebit"]').val();
    var accountcredit=$('select[name="accountcredit"]').val();
    var concept=$('input[name="concept"]').val();
    var amount=$('input[name="amount"]').val();
    if($("#cashflowform").valid()){
      $.ajax({
         type:'POST',
         url:'/movementscreate',
         data:{accountdebit:accountdebit,accountcredit:accountcredit,concept:concept,amount:amount},
         success:function(data){
          if(data==1){
            Swal.fire(
              'Registrado!',
              'El cliente se registro correctamente.',
              'success'
            ).then(function(){
              $(location).attr('href','/flujo_capital');
            });
          }else{
              Swal.fire(
                'Error!',
                'Algo salio mal, intentelo más tarde.',
                'error'
              )
            }
          }
      });
    }
  });
});
