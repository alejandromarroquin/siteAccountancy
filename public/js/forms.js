$(document).ready(function(){
  if($('#date')){
    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    var date=new Date();
    $('#date').text(date.getDate() + " de " + meses[date.getMonth()] + " de " + date.getFullYear());
  }

  if($('#datetype2')){
    var date = new Date();
    $('#datetype2').val(date.getFullYear() + "/" + (date.getMonth() +1) + "/" + date.getDate());
  }

  if($('#datetype3')){
    var date = new Date();
    $('#datetype3').val(date.getFullYear() + "/" + (date.getMonth() +1) + "/" + date.getDate()  + "  " + date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds());
  }
});

function soloNumeros(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8){
      return true;
    }
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function soloLetras(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8){
		  return true;
    }
    patron =/[A-Za-z\s]/;
	  tecla_final = String.fromCharCode(tecla);
	  return patron.test(tecla_final);
}

function filterFloat(evt,input){
    // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
    var key = window.Event ? evt.which : evt.keyCode;
    var chark = String.fromCharCode(key);
    var tempValue = input.value+chark;
    if(key >= 48 && key <= 57){
        if(filter(tempValue)=== false){
            return false;
        }else{
            return true;
        }
    }else{
          if(key == 8 || key == 13 || key == 0) {
              return true;
          }else if(key == 46){
                if(filter(tempValue)=== false){
                    alert("Solo puede ingresar un punto decimal!");
                    return false;
                }else{
                    return true;
                }
          }else{
              alert("No puedes ingresar letras!");
              return false;
          }
    }
}

function filter(__val__){
    var preg = /^([0-9]+\.?[0-9]{0,2})$/;
    if(preg.test(__val__) === true){
        return true;
    }else{
       return false;
    }
}

function addDecimal(input){
  var value=input.value.trim();
  if(value.indexOf('.',0)<0){
    $(input).val(value.concat('.00'));
  }
}
