$(document).ready(function(){
  jQuery.validator.messages.required = 'Esté campo es obligatorio.';
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $('.code').qrcode({
    //render:"table"
    width: 110,
    height: 110,
    text: "aquivaloquedebedecirelqr"
  });

  $('.add').on('click',function(event){
    var cont=$('#cont').val();
    var divrow=$('<div/>',{
      'class':'row',
      'id':'inputs'
    });
    var divcol1=$('<div/>',{
      'class':'col-2'
    });
    var divcol2=$('<div/>',{
      'class':'col-1'
    });
    var divcol3=$('<div/>',{
      'class':'col'
    });
    var divcol4=$('<div/>',{
      'class':'col'
    });
    var divcol5=$('<div/>',{
      'class':'col'
    });
    var divcol6=$('<div/>',{
      'class':'col'
    });
    var divcol7=$('<div/>',{
      'class':'col'
    });
    var quantity=$('<input/>',{
      'class': 'form-control',
      'name':'name="quantity[]',
      'onchange':'inputChange(this);setSubtotal(this);setTotal();',
      'onkeypress':'return soloNumeros(event);',
      'required':'true',
      'id':'quantity'+cont
    });
    var iva=$('<input/>',{
      'type':'checkbox',
      'name':'applyiva',
      'onchange':'setIVA(this);setTotal();',
      'id':'applyiva'+cont
    });
    var unit=$('<input/>',{
      'class': 'form-control',
      'name':'name="unit[]',
      'required':'true',
      'id':'unit'+cont
    });
    var catalogcodeunits=$('<a/>',{
      'href':'http://pys.sat.gob.mx/PyS/catUnidades.aspx',
      'target':'blank',
      'class':'codesat'
    });
    var codeproduct=$('<input/>',{
      'class': 'form-control',
      'name':'name="codeproduct[]',
      'required':'true',
      'id':'codeproduct'+cont
    });
    var catalogcodeproducts=$('<a/>',{
      'href':'http://pys.sat.gob.mx/PyS/catPyS.aspx',
      'target':'blank',
      'class':'codesat'
    });
    var concept=$('<input/>',{
      'class': 'form-control',
      'name':'name="concept[]',
      'required':'true',
      'id':'concept'+cont
    });
    var unitprice=$('<input/>',{
      'class': 'form-control',
      'name':'name="unitprice[]',
      'onchange':'inputChange(this);addDecimal(this);setSubtotal(this);setTotal();',
      'onkeypress':'return filterFloat(event,this);',
      'required':'true',
      'id':'unitprice'+cont
    });
    var importe=$('<input/>',{
      'class': 'form-control',
      'name':'name="importe[]',
      'readonly':'',
      'id':'importe'+cont
    });
    $('#cont').val(parseInt(cont)+1);
    $('.table').append(divrow);
    divrow.append(divcol1);
    divrow.append(divcol2);
    divrow.append(divcol3);
    divrow.append(divcol4);
    divrow.append(divcol5);
    divrow.append(divcol6);
    divrow.append(divcol7);
    divcol1.append(quantity);
    divcol2.append(iva);
    divcol3.append(unit);
    catalogcodeunits.text('Consultar catálogo');
    divcol3.append(catalogcodeunits);
    divcol4.append(codeproduct);
    catalogcodeproducts.text('Consultar catálogo');
    divcol4.append(catalogcodeproducts);
    divcol5.append(concept);
    divcol6.append(unitprice);
    divcol7.append(importe);
  });

  $("#customer").on('change', function () {
    $("#customer option:selected").each(function () {
      elegido=$(this).val();
      $.get("/getcustomer", { elegido: elegido }, function(data){
          $('.businessnamecustomer').text($("#customer").val());
          $('.rfccustomer').text('RFC: '+data);
          $('input[name="rfccust"]').val(data);
      });
    });
  });

  $("#methodpayment").on('change', function () {
    $("#methodpayment option:selected").each(function () {
      elegido=$(this).val();
      $('#methodpay').text(elegido);
    });
  });

  $("#waypayment").on('change', function () {
    $("#waypayment option:selected").each(function () {
      elegido=$(this).val();
      $('#awaypay').text(elegido);
    });
  });

  $("#sendform").on('click', function () {
    var rfcsender=$('input[name="rfcsender"]').val();
    var businessname=$('input[name="businessname"]').val();
    var taxregime=$('input[name="taxregime"]').val();
    var street=$('input[name="street"]').val();
    var numExt=$('input[name="numExt"]').val();
    var colony=$('input[name="colony"]').val();
    var city=$('input[name="city"]').val();
    var state=$('input[name="state"]').val();
    var cp=$('input[name="cp"]').val();
    var condicspay=$('select[name="condicspay"]').val();
    var methodpayment=$('select[name="methodpayment"]').val();
    var currency=$('select[name="currency"]').val();
    var subtotal=$('input[name="subtotal"]').val();
    var total=$('input[name="total"]').val();
    var rfccust=$('input[name="rfccust"]').val();
    var quantity=$('input[name="quantity[]"]').val();
    var applyiva=$('input[name="applyiva[]"]').val();
    if($("#cfdiform").valid()){
      Swal.fire({
        title: 'Está seguro de generar el CFDI?',
        type: 'warning',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Confirmar',
        showCancelButton: true,
        reverseButtons: true,
        cancelButtonColor: '#929292'
      }).then((result)=>{
        if(result.value){
          Swal.fire({
            title: 'Se está generando la factura!',
            html: 'Esperé un mmento...',
            timer: 15000,
            onBeforeOpen: () => {
              Swal.showLoading()
              timerInterval = setInterval(() => {
              }, 100)
            },
            onClose: () => {
              clearInterval(timerInterval)
            }
          });
          $.ajax({
           type:'POST',
           url:'/cfdicreate',
           data:{rfcsender:rfcsender,businessname:businessname,taxregime:taxregime,street:street,numExt:numExt,colony:colony,city:city,state:state,cp:cp,condicspay:condicspay,methodpayment:methodpayment,currency:currency,subtotal:subtotal,total:total,rfccust:rfccust,quantity:quantity,applyiva:applyiva},
           success:function(data){
            if(data==1){
              Swal.fire(
                'Facturado!',
                'El CFDI se envío al correo electrónico del cliente.',
                'success'
              )
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
    }
  });
});

function setSubtotal(input){
  var id=$(input).attr('id');
  var num=id.charAt(id.length-1);
  if($('#unitprice'+num).val()!=''){
    var sum=0;
    var cont=$('#cont').val();
    for (var i = 1; i < cont; i++) {
      if($('#importe'+i).val()!=''){
        sum=sum+parseFloat($('#importe'+i).val());
      }
    }
    if(sum.toString().indexOf('.',0)<0){
      $('input[name="subtotal"]').val(sum+".00");
    }else{
      $('input[name="subtotal"]').val(sum);
    }
  }
}

function setIVA(checkbox){
  var value=checkbox.value
  var id=$(checkbox).attr('id');
  var num=id.charAt(id.length-1);
  if($('#'+id).prop('checked')){
    var iva=parseFloat($('#importe'+num).val())*0.16;
    if($('input[name="iva"]').val()!=''){
      $('input[name="iva"]').val(round(parseFloat($('input[name="iva"]').val())+iva,2));
    }else{
      $('input[name="iva"]').val(round(iva,2));
    }
  }else{
    if($('input[name="iva"]').val()!=''){
      $('input[name="iva"]').val(round(parseFloat($('input[name="iva"]').val())-(parseFloat($('#importe'+num).val())*0.16),2));
    }
  }
}

function setTotal(){
  var total=0;
  if($('input[name="iva"]').val()!=''){
    total=parseFloat($('input[name="iva"]').val())+parseFloat($('input[name="subtotal"]').val());
    if(total.toString().indexOf('.',0)<0){
      $('input[name="total"]').val(total+'.00');
    }else{
      $('input[name="total"]').val(total);
    }
  }else{
    total=parseFloat($('input[name="subtotal"]').val());
    if(total.toString().indexOf('.',0)<0){
      $('input[name="total"]').val(total+'.00');
    }else{
      $('input[name="total"]').val(total);
    }
  }
}

function inputChange(input){
  var value=input.value.trim();
  var id=$(input).attr('id');
  var cont=id.charAt(id.length-1);
  var quantity=$('#quantity'+cont).val();
  var unitprice=$('#unitprice'+cont).val();
  if(unitprice!=''){
    if(value.indexOf('.',0)<0){
      $('#importe'+cont).val((quantity*unitprice)+'.00');
    }else{
      $('#importe'+cont).val(round(quantity*unitprice,2));
    }
  }
}

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
