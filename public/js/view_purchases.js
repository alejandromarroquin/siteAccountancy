//Calcular el iva
function ivavalidate(){
  if($('input[name="checkiva"]').prop('checked') && $('#unitcost').val()!=''){
    $('#iva').val(round($('#subtotal').val()*0.16,2));
    setTotal();
  }else{
    $('#iva').val(null);
    setTotal();
  }
}

//Función para calcular el subtotal de la compra
function setSubtotal(){
  $("#subtotal").val(round(parseFloat($("#unitcost").val())*parseFloat($("#quantity").val()),2));
  if($("#subtotal").val().indexOf('.',0)<0){
    $("#subtotal").val($("#subtotal").val().concat(".00"));
  }
  setTotal();
}

//Función para calcular el total de la compra
function setTotal(){
  if($('#unitcost').val()!=''){
    if($('input[name="checkiva"]').prop('checked')){
      $('#total').val(round(parseFloat($('#subtotal').val())+parseFloat($('#iva').val()),2));
      if($("#total").val().indexOf('.',0)<0){
        $("#total").val($("#total").val().concat(".00"));
      }
    }else{
      $('#total').val(parseFloat($('#subtotal').val()));
      if($("#total").val().indexOf('.',0)<0){
        $("#total").val($("#total").val().concat(".00"));
      }
    }
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
