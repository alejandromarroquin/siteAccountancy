$(document).ready(function(){
  jQuery.validator.messages.required = 'Esté campo es requerido.';
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('input[name="date"]').on('change',function(){
    alert($('input[name="date"]').val());
  });

  $('select[name="accountdebit"]').on('change',function(){
    $('select[name="accountdebit"] option:selected').each(function () {
      elegido=$(this).val();
      $.get("/gettSubaccountdeb", { elegido: elegido }, function(data){
          $('select[name="subaccountdebit"]').html(data);
      });
    });
  });

  $('select[name="accountcredit"]').on('change',function(){
    $('select[name="accountcredit"] option:selected').each(function () {
      elegido=$(this).val();
      $.get("/gettSubaccountdeb", { elegido: elegido }, function(data){
          $('select[name="subaccountcredit"]').html(data);
      });
    });
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
    var accountdebit=$('select[name="subaccountdebit"]').val();
    var accountcredit=$('select[name="subaccountcredit"]').val();
    var typeflow=$('select[name="typeflow"]').val();
    var activity=$('select[name="activity"]').val();
    var concept=$('input[name="concept"]').val();
    var amount=$('input[name="amount"]').val();
    if($("#cashflowform").valid()){
      $.ajax({
         type:'POST',
         url:'/movementscreate',
         data:{accountdebit:accountdebit,accountcredit:accountcredit,concept:concept,amount:amount,activity:activity,typeflow:typeflow},
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

function diaSemana() {
  var x = document.getElementById("fecha");
  let date = new Date(x.value.replace(/-+/g, '/'));

  let options = {
    month: 'long',
    day: 'numeric',
    year: 'numeric'
  };
  console.log(date.toLocaleDateString('es-MX', options));

}
