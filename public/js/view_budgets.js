$(document).ready(function(){
  jQuery.validator.messages.required = 'Esté campo es obligatorio.';
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('.addfixed').on('click',function(event){
    alert('si');
    var cont=$('input[name="cont"]').val();
    var newcont=(parseInt(cont)+1);
    var tr=$('<tr/>',{
      'id':'trfix'+newcont
    });
    var td1=$('<td/>',{});
    var td2=$('<td/>',{});
    var td3=$('<td/>',{});
    var td4=$('<td/>',{
      'class':'purchases'
    });
    var conceptfix=$('<input/>',{
      'type':'text',
      'name':'conceptfix[]'
    });
    var amountfix=$('<input/>',{
      'type':'text',
      'name':'amountfix[]',
      'id':'amount'+newcont,
      'onchange':'sumAmounts();'
    });
    var categoryfix=$('<select/>',{
      'name':'categoryfix[]'
    });
    var purchasesfix=$('<input/>',{
      'type':'checkbox',
      'name':'purchasesfix[]'
    });
    $('#trfix'+cont).after(tr);
    tr.append(td1);
    tr.append(td2);
    tr.append(td3);
    tr.append(td4);
    td1.append(conceptfix);
    td2.text('$');
    td2.append(amountfix);
    td3.append(categoryfix);
    td4.append(purchasesfix);

  });

  $('.addvar').on('click',function(event){
    alert('ok');
    var cont=$('input[name="cont"]').val();
    var newcont=(parseInt(cont)+1);
    var tr=$('<tr/>',{
      'id':'trvar'+newcont
    });
    var td1=$('<td/>',{});
    var td2=$('<td/>',{});
    var td3=$('<td/>',{});
    var td4=$('<td/>',{
      'class':'purchases'
    });
    var conceptvar=$('<input/>',{
      'type':'text',
      'name':'conceptvar[]'
    });
    var amountvar=$('<input/>',{
      'type':'text',
      'name':'amountvar[]',
      'id':'amount'+newcont,
      'onchange':'sumAmounts();'
    });
    var categorvar=$('<select/>',{
      'name':'categoryvar[]'
    });
    var purchasesvar=$('<input/>',{
      'type':'checkbox',
      'name':'purchasesvar[]'
    });
    $('#trvar'+cont).after(tr);
    tr.append(td1);
    tr.append(td2);
    tr.append(td3);
    tr.append(td4);
    td1.append(conceptvar);
    td2.text('$');
    td2.append(amountvar);
    td3.append(categoryvar);
    td4.append(purchasesvar);
    $('input[name="cont"]').val(newcont);
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
    var typebudget=$('input[name="typebudget"]:checked').val();
    var amount=$('#amountadd').val();
    if($("#budgetform").valid()){
      $.ajax({
         type:'POST',
         url:'/budgetcreate',
         data:{typebudget:typebudget,amount:amount},
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

  $('#alert').hide();

  $('#inicio').on('change',function(){
    if(new Date($('#fin').val()).getTime()<new Date($('#inicio').val()).getTime()){
      $('#alert').show();

    }else{
      $('#alert').hide();

    }
  });

  $('#fin').on('change',function(){
    if(new Date($('#fin').val()).getTime()<new Date($('#inicio').val()).getTime()){
      $('#alert').show();

    }else{
      $('#alert').hide();

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

function sumAmounts(){
  var sum=0;
  for (var i = 1; i <= $('input[name="cont"]').val(); i++) {
    sum=parseFloat(sum)+parseFloat($('#amount'+i).val());
  }
  alert(sum);
}

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
