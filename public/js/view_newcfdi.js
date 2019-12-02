$(document).ready(function(){
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
    divcol1.append(quantity);
    divcol2.append(unit);
    unit.append(option);
    option.text('Selecciona unidad...');
    divcol3.append(concept);
    divcol4.append(unitprice);
    divcol5.append(importe);
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
