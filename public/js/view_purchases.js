$(document).ready(function(){
  $('select[name="category"]').on('change', function () {
    $('select[name="category"] option:selected').each(function () {
      var category=$(this).val();
      var url='/amountcategory/'+category;
      $.get(url).done(function( data ) {
        $('input[name="budget"]').val(parseFloat(data[0]));
        $('input[name="reserved"]').val(parseFloat(data[1]));
      });
    });
  });

  $("#sendform").on('click', function () {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var date=$('input[name="date"]').val();
    var category=$('select[name="category"]').val();
    var reserved=$('input[name="reserved"]').val();
    var concept=$('input[name="concept"]').val();
    var unitcost=$('input[name="unitcost"]').val();
    var quantity=$('input[name="quantity"]').val();
    var subtotal=$('input[name="subtotal"]').val();
    var iva=$('input[name="iva"]').val();
    var total=$('input[name="total"]').val();
    if($('select[name="category"]').val()!=0){
      if($("#purchaseform").valid()){
        $.ajax({
           type:'POST',
           url:'/purchasecreate',
           data:{date:date,category:category,reserved:reserved,concept:concept,unitcost:unitcost,quantity:quantity,subtotal:subtotal,iva:iva,total:total},
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
    }else{
      alert('Selecciona una categoría.');
    }
  });
});

//Función para validar select de categorias
function validateCategory(){
  var i=$('select[name="category"] > option').length;
  if(i<=1){
    Swal.fire(
      'No hay presupuesto para compras!',
      'Comuniquese con la persona encargada.',
      'warning'
    )
  }
}

//Calcular el iva
function ivavalidate(){
  if($('#unitcost').val()!=''){
    if($('input[name="checkiva"]').prop('checked')){
      $('#iva').val(round($('#subtotal').val()*0.16,2));
      setTotal();
    }else{
      $('#iva').val(null);
      setTotal();
    }
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

  if(parseFloat($('input[name="budget"]').val())-parseFloat($('input[name="reserved"]').val())<parseFloat($('#total').val())){
    Swal.fire(
      'Rechazado!',
      'No hay suficiente presupuesto para está compra.',
      'warning'
    )
  }
}

function addDecimal(nid1,nid2,nid3,nid4,nid5,input){
   var value=input.value.trim();
   var val=document.getElementById(nid4).value;
   var yup=parseFloat(value)*parseFloat(val);
   var check='#'+nid5;
   if(value.indexOf('.',0)<0){
     document.getElementById(nid1).value=value.concat(".00");
     document.getElementById(nid2).value=yup+".00";
     if($(check).prop('checked')){
       document.getElementById(nid3).value=(parseFloat(yup)*2)+".00";
     }else{
       document.getElementById(nid3).value=yup+".00";
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
