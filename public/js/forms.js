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

function addDecimal(nid1,nid2,nid3,nid4,nid5,input){
   var value=input.value.trim();
   var val=document.getElementById(nid4).value;
   var yup=parseFloat(value)*parseFloat(val);
   var check='#'+nid5;
   if(value.indexOf('.',0)<0){
     document.getElementById(nid1).value=value.concat(".00");
     document.getElementById(nid2).value=yup+".00";
     if($('"'+check+'"').prop('checked')){
       document.getElementById(nid3).value=(parseFloat(yup)*2)+".00";
     }else{
       alert("66666");
       document.getElementById(nid3).value=yup+".00";
     }

   }
}
