$(document).ready(function(){
  jQuery.validator.messages.required = 'Esté campo es obligatorio.';
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  if($('input[name="totalhidd"]').val().indexOf('.',0)<0){
    $('input[name="total"]').val($('input[name="totalhidd"]').val()+'.00');
  }else{
    $('input[name="total"]').val($('input[name="totalhidd"]').val());
  }

  if($('input[name="reservedhidd"]').val().indexOf('.',0)<0){
    $('input[name="reserved"]').val($('input[name="reservedhidd"]').val()+'.00');
  }else{
    $('input[name="reserved"]').val($('input[name="reservedhidd"]').val());
  }

  if($('input[name="availablehidd"]').val().indexOf('.',0)<0){
    $('input[name="available"]').val($('input[name="availablehidd"]').val()+'.00');
  }else{
    $('input[name="available"]').val($('input[name="availablehidd"]').val());
  }

  $('.addfixed').on('click',function(event){
    var cont=$('input[name="contfix"]').val();
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
      'id':'amountfix'+newcont,
      'onchange':'sumAmounts();',
      'onkeypress':'return filterFloat(event,this);'
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
    var option=$('<option/>',{});
    categoryfix.append(option);
    option.text('Arrendamientos y alquileres');
    var option=$('<option/>',{});
    categoryfix.append(option);
    option.text('Reparaciones y mantenimientos');
    var option=$('<option/>',{});
    categoryfix.append(option);
    option.text('Servicios profesionales');
    var option=$('<option/>',{});
    categoryfix.append(option);
    option.text('Transportes');
    var option=$('<option/>',{});
    categoryfix.append(option);
    option.text('Primas de seguros');
    var option=$('<option/>',{});
    categoryfix.append(option);
    option.text('Servicios bancarios');
    var option=$('<option/>',{});
    categoryfix.append(option);
    option.text('Publicidad y propaganda');
    var option=$('<option/>',{});
    categoryfix.append(option);
    option.text('Suministros');
    var option=$('<option/>',{});
    categoryfix.append(option);
    option.text('Servicios exteriores');
    var option=$('<option/>',{});
    categoryfix.append(option);
    option.text('Impuestos y tributos');
    var option=$('<option/>',{});
    categoryfix.append(option);
    option.text('Sueldos y salarios');
    var option=$('<option/>',{});
    categoryfix.append(option);
    option.text('Intereses de préstamos');
    var option=$('<option/>',{});
    categoryfix.append(option);
    option.text('Intereses por anticipos de cobro');
    var option=$('<option/>',{});
    categoryfix.append(option);
    option.text('Otros gastos financieros');
    var option=$('<option/>',{});
    categoryfix.append(option);
    option.text('Principal de préstamos');
    td4.append(purchasesfix);
    $('input[name="contfix"]').val(newcont);
  });

  $('.addvar').on('click',function(event){
    var cont=$('input[name="contvar"]').val();
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
      'id':'amountvar'+newcont,
      'onchange':'sumAmounts();',
      'onkeypress':'return filterFloat(event,this);'
    });
    var categoryvar=$('<select/>',{
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
    var option=$('<option/>',{});
    categoryvar.append(option);
    option.text('Arrendamientos y alquileres');
    var option=$('<option/>',{});
    categoryvar.append(option);
    option.text('Reparaciones y mantenimientos');
    var option=$('<option/>',{});
    categoryvar.append(option);
    option.text('Servicios profesionales');
    var option=$('<option/>',{});
    categoryvar.append(option);
    option.text('Transportes');
    var option=$('<option/>',{});
    categoryvar.append(option);
    option.text('Primas de seguros');
    var option=$('<option/>',{});
    categoryvar.append(option);
    option.text('Servicios bancarios');
    var option=$('<option/>',{});
    categoryvar.append(option);
    option.text('Publicidad y propaganda');
    var option=$('<option/>',{});
    categoryvar.append(option);
    option.text('Suministros');
    var option=$('<option/>',{});
    categoryvar.append(option);
    option.text('Servicios exteriores');
    var option=$('<option/>',{});
    categoryvar.append(option);
    option.text('Impuestos y tributos');
    var option=$('<option/>',{});
    categoryvar.append(option);
    option.text('Sueldos y salarios');
    var option=$('<option/>',{});
    categoryvar.append(option);
    option.text('Intereses de préstamos');
    var option=$('<option/>',{});
    categoryvar.append(option);
    option.text('Intereses por anticipos de cobro');
    var option=$('<option/>',{});
    categoryvar.append(option);
    option.text('Otros gastos financieros');
    var option=$('<option/>',{});
    categoryvar.append(option);
    option.text('Principal de préstamos');
    td4.append(purchasesvar);
    $('input[name="contvar"]').val(newcont);
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
    var start=$('input[name="start"]').val();
    var end=$('input[name="end"]').val();
    var conceptfix=$('input[name="conceptfix[]"]').map(function(){return $(this).val();}).get();
    var conceptvar=$('input[name="conceptvar[]"]').map(function(){return $(this).val();}).get();
    var amountfix=$('input[name="amountfix[]"]').map(function(){return $(this).val();}).get();
    var amountvar=$('input[name="amountvar[]"]').map(function(){return $(this).val();}).get();
    var categoryfix=$('select[name="categoryfix[]"]').map(function(){return $(this).val();}).get();
    var categoryvar=$('select[name="categoryvar[]"]').map(function(){return $(this).val();}).get();
    var purchasesfix=$('input[name="purchasesfix[]"]').map(function(){
      if($(this).prop('checked')){
        $(this).val(1);
      }else{
        $(this).val(0);
      }
      return $(this).val();
    }).get();
    var purchasesvar=$('input[name="purchasesvar[]"]').map(function(){
      if($(this).prop('checked')){
        $(this).val(1);
      }else{
        $(this).val(0);
      }
      return $(this).val();
    }).get();
    var total=$('input[name="total"]').val();
    var cont=$('input[name="contfix"]').val();
    if($("#budgetform").valid()){
      $.ajax({
         type:'POST',
         url:'/budgetcreate',
         data:{typebudget:typebudget,start:start,end:end,conceptfix:conceptfix,conceptvar:conceptvar,amountfix:amountfix,amountvar:amountvar,categoryfix:categoryfix,categoryvar:categoryvar,purchasesfix:purchasesfix,purchasesvar:purchasesvar,total:total,cont:cont},
         success:function(data){
            if(data!=0){
              Swal.fire(
                'Registrado!',
                'El presupuesto se registro correctamente.',
                'success'
              ).then((result)=>{
                location.reload();
              });
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
});

function sumAmounts(){
  var sum=0;
  for (var i = 1; i <= $('input[name="contfix"]').val(); i++) {
    if($('#amountfix'+i).val()!=''){
      sum=sum+parseFloat($('#amountfix'+i).val());
    }
  }
  for (var i = 1; i <= $('input[name="contvar"]').val(); i++) {
    if($('#amountvar'+i).val()!=''){
      sum=sum+parseFloat($('#amountvar'+i).val());
    }
  }

  if(!isNaN(sum)){
    var sum=String(sum);
    if(sum.indexOf('.',0)<0){
      $('input[name="total"]').val(sum.concat(".00"));
    }else{
      $('input[name="total"]').val(round(parseFloat(sum),2));
    }
  }else{
    $('input[name="total"]').val(0);
  }
}

// Función para redondear al número de decimales que se desee
// Recibe como parametros el número que se desea redondear y
// el número de decimales que se desea
function round(num, decimales ) {
    var signo = (num >= 0 ? 1 : -1);
    num = num * signo;
    if (decimales === 0) //con 0 decimales
        return signo * Math.round(num);
    // round(x * 10 ^ decimales)
    num = num.toString().split('e');
    num = Math.round(+(num[0] + 'e' + (num[1] ? (+num[1] + decimales) : decimales)));
    // x * 10 ^ (-decimales)
    num = num.toString().split('e');
    return signo * (num[0] + 'e' + (num[1] ? (+num[1] - decimales) : -decimales));
}
