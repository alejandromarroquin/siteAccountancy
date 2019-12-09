$(document).ready(function(){
  jQuery.validator.messages.required = 'Esté campo es obligatorio.';
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $("#concept").on('change', function () {
    $("#concept option:selected").each(function () {
      elegido=$(this).val();
      $.get("/getamount", { elegido: elegido }, function(data){
          $('#amountconsult').val(data);
      });
    });
  });

  $("#sendform").on('click', function () {
    concept=$('#conceptadd').val();
    amount=$('#amountadd').val();
    if($("#budgetform").valid()){
      $.ajax({
         type:'POST',
         url:'/budgetcreate',
         data:{concept:concept,amount:amount},
         success:function(data){
            if(data!=0){
              Swal.fire(
                'Registrado!',
                'El presupuesto se registro correctamente.',
                'success'
              )
              $('#conceptadd').val(null);
              $('#amountadd').val(null);
              $('#confirmamountadd').val(null);
            }else{
              Swal.fire(
                'Error!',
                'Algo salio mal, intentelo mas tarde.',
                'error'
              )
            }
         }
      });
    }
  });

  $('#consult-tab').on('click',function(){
    $.ajax({
       type:'GET',
       url:'/getbudgets',
       data:{valor:1},
       success:function(data){
          $("#concept").html(data);
       }
    });
  });
});

function verifyamount(){
  if($("#amountadd").val()!=$("#confirmamountadd").val() && $("#confirmamountadd").val()!=''){
    Swal.fire({
      type: 'error',
      title: 'Las cantidades no coinciden!',
      text: 'Porfavor verifica que las cantidades sean iguales'
    });
    $("#confirmamountadd").val(null);
  }
}
