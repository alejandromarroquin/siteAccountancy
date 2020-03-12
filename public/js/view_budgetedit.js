$(document).ready(function(){

  $('#updateform').on('click',function(){
    jQuery.validator.messages.required = 'Esté campo es requerido.';
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var idbudget=$('input[name="idbudget"]').val();
    var typebudget=$('input[name="typebudget"]:checked').val();
    var start=$('input[name="start"]').val();
    var end=$('input[name="end"]').val();
    var idexpensefix=$('input[name="idexpensefix[]"]').map(function(){return $(this).val();}).get();
    var idexpensevar=$('input[name="idexpensevar[]"]').map(function(){return $(this).val();}).get();
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
      Swal.fire({
        title: 'Está seguro de actualizar la empresa?',
        type: 'warning',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Confirmar',
        showCancelButton: true,
        reverseButtons: true,
        cancelButtonColor: '#929292'
      }).then((result) => {
        if (result.value) {
          $.ajax({
            type:'POST',
            url:'/budgetupdate',
            data:{idbudget:idbudget,idexpensefix:idexpensefix,idexpensevar:idexpensevar,typebudget:typebudget,start:start,end:end,conceptfix:conceptfix,conceptvar:conceptvar,amountfix:amountfix,amountvar:amountvar,categoryfix:categoryfix,categoryvar:categoryvar,purchasesfix:purchasesfix,purchasesvar:purchasesvar,total:total,cont:cont},
            success:function(data){
              if(data==1){
                Swal.fire(
                  'Actualizado!',
                  'El usuario se actualizó correctamente.',
                  'success'
                ).then((result)=>{
                  $(location).attr('href','/budget');
                });
              }else{
                Swal.fire(
                  'Error!',
                  'Algo salio mal, vuelva a intentarlo más tarde.',
                  'error'
                )
              }
            }
          });
        }
      });
    }
  });

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

  $('#alert').hide();

  $('#inicio').on('change',function(){
    if(new Date($('#fin').val()).getTime()<new Date($('#inicio').val()).getTime()){
      $('#alert').show();
    }else{
      $('#alert').hide();
    }
  });
});

function sumAmounts(){
  var sumfix=0;
  $('input[name="amountfix[]"]').map(function(){
    sumfix=sumfix+parseFloat($(this).val());
    return sumfix;
  }).get();
  var sumvar=0;
  $('input[name="amountvar[]"]').map(function(){
    sumvar=sumvar+parseFloat($(this).val());
    return sumvar;
  }).get();
  sum=sumfix+sumvar;
  if(!isNaN(sum)){
    var count=String(sum);
    if(count.indexOf('.',0)<0){
      $('input[name="total"]').val(count.concat(".00"));
    }else{
      $('input[name="total"]').val(round(parseFloat(count),2));
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
