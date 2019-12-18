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
      'class':'col'
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
    var quantity=$('<input/>',{
      'class': 'form-control',
      'name':'name="quantity[]',
      'onchange':'inputChange(this);',
      'onkeypress':'return soloNumeros(event);',
      'id':'quantity'+cont
    });
    var unit=$('<select/>',{
      'class': 'form-control',
      'name':'name="unit[]',
      'id':'unit'+cont
    });
    var codeproduct=$('<input/>',{
      'class': 'form-control',
      'name':'name="codeproduct[]',
      'id':'codeproduct'+cont
    });
    var codesat=$('<a/>',{
      'href':'http://pys.sat.gob.mx/PyS/catPyS.aspx',
      'target':'blank',
      'class':'codesat'
    });
    var option=$('<option/>',{
      'class': 'form-control',
      'name':'name="unit[]',
      'id':'unit'+cont
    });
    var concept=$('<input/>',{
      'class': 'form-control',
      'name':'name="concept[]',
      'id':'concept'+cont
    });
    var unitprice=$('<input/>',{
      'class': 'form-control',
      'name':'name="unitprice[]',
      'onchange':'inputChange(this);addDecimal(this);',
      'onkeypress':'return filterFloat(event,this);',
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
    divcol1.append(quantity);
    divcol2.append(unit);
    divcol3.append(codeproduct);
    codesat.text('consultar catálogo');
    divcol3.append(codesat);
    unit.append(option);
    option.text('Selecciona unidad...');
    divcol4.append(concept);
    divcol5.append(unitprice);
    divcol6.append(importe);
  });

  $("#customer").on('change', function () {
    $("#customer option:selected").each(function () {
      elegido=$(this).val();
      $.get("/getcustomer", { elegido: elegido }, function(data){
          $('.businessnamecustomer').text($("#customer").val());
          $('.rfccustomer').text('RFC: '+data);
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
        $.ajax({
           type:'POST',
           url:'/cfdicreate',
           data:{rfcsender:rfcsender},
           success:function(data){
            if(data==1){
              Swal.fire(
                'Registrado!',
                'El CFDI se generó correctamente.',
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
      });
    }
  });

});

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
