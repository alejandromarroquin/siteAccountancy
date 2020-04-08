$(document).ready(function(){
  jQuery.validator.messages.required = 'Esté campo es requerido.';
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
    var divrow1=$('<div/>',{
      'class':'row',
      'id':'inputs'
    });
    var divrow2=$('<div/>',{
      'class':'row',
      'id':'inputs'
    });
    var divrow3=$('<div/>',{
      'class':'row',
      'id':'row'
    });
    var divrow4=$('<div/>',{
      'class':'row',
      'id':'row'
    });
    var divcol01=$('<div/>',{
      'class':'col-2'
    });
    var divcol02=$('<div/>',{
      'class':'col-1'
    });
    var divcol03=$('<div/>',{
      'class':'col'
    });
    var divcol04=$('<div/>',{
      'class':'col'
    });
    var divcol05=$('<div/>',{
      'class':'col'
    });
    var divcol06=$('<div/>',{
      'class':'col'
    });
    var divcol07=$('<div/>',{
      'class':'col'
    });
    var divcol08=$('<div/>',{
      'class':'col'
    });
    var label1=$('<label/>');
    var label2=$('<label/>');
    var label3=$('<label/>');
    var label4=$('<label/>');
    var label5=$('<label/>');
    var label6=$('<label/>');
    var label7=$('<label/>');
    var label8=$('<label/>');

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
    var divcol8=$('<div/>',{
      'class':'col'
    });
    var quantity=$('<input/>',{
      'class': 'form-control',
      'name':'quantity[]',
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
      'name':'unit[]',
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
      'name':'codeproduct[]',
      'required':'true',
      'id':'codeproduct'+cont
    });
    var catalogcodeproducts=$('<a/>',{
      'href':'http://pys.sat.gob.mx/PyS/catPyS.aspx',
      'target':'blank',
      'class':'codesat'
    });
    var codintprod=$('<input/>',{
      'class': 'form-control',
      'name':'codintprod[]',
      'required':'true',
      'onchange':'culsultProduct(this);',
      'id':'codintprod'+cont
    });
    var concept=$('<input/>',{
      'class': 'form-control',
      'name':'concept[]',
      'required':'true',
      'id':'concept'+cont
    });
    var unitprice=$('<input/>',{
      'class': 'form-control',
      'name':'unitprice[]',
      'onchange':'inputChange(this);addDecimal(this);setSubtotal(this);setTotal();',
      'onkeypress':'return filterFloat(event,this);',
      'required':'true',
      'id':'unitprice'+cont
    });
    var importe=$('<input/>',{
      'class': 'form-control',
      'name':'importe[]',
      'readonly':'',
      'id':'importe'+cont
    });
    $('#cont').val(parseInt(cont)+1);

    $('.table').append(divrow3);
    divrow3.append(divcol01);
    divrow3.append(divcol02);
    divrow3.append(divcol03);
    divrow3.append(divcol04);

    divcol01.append(label1);
    divcol02.append(label2);
    divcol03.append(label3);
    divcol04.append(label4);

    label1.text('Cantidad');
    label2.text('IVA');
    label3.text('U. Medida');
    label4.text('Cod. Producto');

    $('.table').append(divrow1);
    divrow1.append(divcol1);
    divrow1.append(divcol2);
    divrow1.append(divcol3);
    divrow1.append(divcol4);

    divcol1.append(quantity);
    divcol2.append(iva);
    divcol3.append(unit);
    catalogcodeunits.text('Consultar catálogo');
    divcol3.append(catalogcodeunits);
    divcol4.append(codeproduct);
    catalogcodeproducts.text('Consultar catálogo');
    divcol4.append(catalogcodeproducts);

    $('.table').append(divrow4);
    divrow4.append(divcol05);
    divrow4.append(divcol06);
    divrow4.append(divcol07);
    divrow4.append(divcol08);

    divcol05.append(label5);
    divcol06.append(label6);
    divcol07.append(label7);
    divcol08.append(label8);

    label5.text('Código int. Prod.');
    label6.text('Descripción');
    label7.text('Precio unitario');
    label8.text('Importe');

    $('.table').append(divrow2);
    divrow2.append(divcol5);
    divrow2.append(divcol6);
    divrow2.append(divcol7);
    divrow2.append(divcol8);

    divcol5.append(codintprod);
    divcol6.append(concept);
    divcol7.append(unitprice);
    divcol8.append(importe);
    $('.table').append('<br><br>');
  });

  $("#customer").on('change', function () {
    $("#customer option:selected").each(function () {
      elegido=$(this).val();
      $.get("/getcustomer", { elegido: elegido }, function(data){
          $('.businessnamecustomer').text($("#customer").val());
          $('input[name="emailcustomer"]').val(data[0]);
          $('.rfccustomer').text('RFC: '+data[1]);
          $('input[name="rfccust"]').val(data[1]);
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
    var numcfdi=$('input[name="numcfdi"]').val();
    var customer=$('select[name="customer"]').val();
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
    var iva=$('input[name="iva"]').val();
    var total=$('input[name="total"]').val();
    var rfccust=$('input[name="rfccust"]').val();
    var emailcustomer=$('input[name="emailcustomer"]').val();
    var quantity=$('input[name="quantity[]"]');
    quantity=quantity.size();
    var quantitys=$('input[name="quantity[]"]').map(function(){return $(this).val();}).get();
    var codeproduct=$('input[name="codeproduct[]"]').map(function(){return $(this).val();}).get();
    var unit=$('input[name="unit[]"]').map(function(){return $(this).val();}).get();
    var unitprice=$('input[name="unitprice[]"]').map(function(){return $(this).val();}).get();
    var concept=$('input[name="concept[]"]').map(function(){return $(this).val();}).get();
    var importe=$('input[name="importe[]"]').map(function(){return $(this).val();}).get();
    var applyiva=$('input[name="applyiva[]"]').val();
    var waypayment=$('select[name="waypayment"]').val();
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
            timer: 70000,
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
           data:{numcfdi:numcfdi,customer:customer,rfcsender:rfcsender,businessname:businessname,taxregime:taxregime,street:street,numExt:numExt,colony:colony,city:city,state:state,cp:cp,condicspay:condicspay,waypayment:waypayment,methodpayment:methodpayment,currency:currency,subtotal:subtotal,iva:iva,total:total,rfccust:rfccust,quantity:quantity,quantitys:quantitys,applyiva:applyiva,emailcustomer:emailcustomer,codeproduct:codeproduct,unit:unit,unitprice:unitprice,concept:concept,importe:importe},
           success:function(data){
            if(data==1){

              Swal.fire(
                'Facturado!',
                'El CFDI se envío al correo electrónico del cliente.',
                'success'
              ).then((result)=>{
                location.reload();
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
      if(!isNaN(iva)){
          $('input[name="iva"]').val(round(parseFloat($('input[name="iva"]').val())+iva,2));
      }
    }else{
      if(!isNaN(iva)){
        $('input[name="iva"]').val(round(iva,2));
      }
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
      if(!isNaN(total)){
        $('input[name="total"]').val(total+'.00');
      }
    }else{
      if(!isNaN(total)){
        $('input[name="total"]').val(round(total,2));
      }
    }
  }else{
    total=parseFloat($('input[name="subtotal"]').val());
    if(total.toString().indexOf('.',0)<0){
      if(!isNaN(total)){
        $('input[name="total"]').val(total+'.00');
      }
    }else{
      if(!isNaN(total)){
        $('input[name="total"]').val(round(total,2));
      }
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

//Consulta los datos del producto a tráves del código ingresado
//Entradas: Recibe como parámetro el objeto input
function culsultProduct(input){
  elegido=input.value.trim();
  id=$(input).attr("id");
  num=id.substr(-1);
  $.get("/getproduct", { elegido: elegido }, function(data){
      var datos = JSON.parse(data);
      if(datos.length==0){
        alert('El producto no existe en la base de datos!')
      }else{
        $('#concept'+num).val(datos[0].description);
        $('#unitprice'+num).val(datos[0].unitprice);
        $('#unitprice'+num).trigger("change");
      }
  });
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
