$(document).ready(function(){
    $('input[name="cer"]').on('change',function(){
      if($('input[name="cer"]').val()!=null){
        var fileName = this.files[0].name;
        var ext = fileName.split('.');
        ext = ext[ext.length-1];
        switch (ext) {
          case 'cer':
          break;
          default:
            Swal.fire(
              'Error!',
              'Extensión del archivo inválida.',
              'error'
            ).then(function(){
              $('input[name="cer"]').val(null);
            });
          break;
        }
      }
    });

    $('#btn-enviar').on('click',function(){
      alert($('#txt-content').val());
      console.log($('#txt-content').val());
    });

    $('#btn-obtenerhtml').on('click',function(){
      alert($('.estructura').html());
    });

    $('input[name="commercial"]').on('change',function(){
      if($('input[name="commercial"]').val()!=null){
        if($('input[name="commercial"]').width()!=500 && $('input[name="commercial"]').height()!=180){
          Swal.fire(
            'Error!',
            'La imagen no tiene las dimensiones recomendadas.',
            'error'
          )
        }
      }
    });

    $('input[name="key"]').on('change',function(){
      if($('input[name="key"]').val()!=null){
        var fileName = this.files[0].name;
        var ext = fileName.split('.');
        ext = ext[ext.length-1];
        switch (ext) {
          case 'pem':
          break;
          default:
            Swal.fire(
              'Error!',
              'Extensión del archivo inválida.',
              'error'
            ).then(function(){
              $('input[name="key"]').val(null);
            });
          break;
        }
      }
    });

    $('input[name="brand"]').on('change',function(){
      if($('input[name="brand"]').val()!=null){
        var fileName = this.files[0].name;
        var fileSize = this.files[0].size;
        var ext = fileName.split('.');
        ext = ext[ext.length-1];
        switch (ext) {
          case 'png':
            $('#tamanoArchivo').text(fileSize+" bytes en "+ext);
          break;
          case 'jpg':
            $('#tamanoArchivo').text(fileSize+" bytes "+ext);
          break;
          case 'jpeg':
            $('#tamanoArchivo').text(fileSize+" bytes "+ext);
          break;
          default:
            Swal.fire(
              'Error!',
              'Extensión del archivo inválida.',
              'error'
            ).then(function(){
              $('input[name="brand"]').val(null);
            });
          break;
        }
      }
    });

    $('#template1').css({'background':'#2299B9'});
    $('#template2').css({'background':'#2299B9'});
    $('#template3').css({'background':'#2299B9'});
    var numtemp=$('input[name="numtemplate"]').val();
    $('#template'+numtemp).css({'background':'white','border':'1px solid gray','color':'black'});
    $('#template'+numtemp).text('Seleccionado');
    $('#template'+numtemp).attr("disabled", true);

});

function selectTemplate(button){
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  var idconfig=$('input[name="idconfig"]').val();
  var id=$(button).attr("id");
  var numid=id.charAt(id.length-1);
  $('#'+id).css({'background':'white','border':'1px solid gray','color':'black'});
  $('#'+id).text('Seleccionado');
  $('#'+id).attr("disabled", true);
  $.ajax({
   type:'POST',
   url:'/updatetemplate',
   data:{numid:numid,idconfig:idconfig},
   success:function(data){
    if(data==1){
      Swal.fire(
        'Actualizado!',
        'La plantilla se actualizó correctamente.',
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
  if(numid==1){
    $('#template2').css({'background':'#38A6C1','border':'1px solid gray','color':'white'});
    $('#template2').text('Seleccionar');
    $('#template2').attr("disabled", false);

    $('#template3').css({'background':'#38A6C1','border':'1px solid gray','color':'white'});
    $('#template3').text('Seleccionar');
    $('#template3').attr("disabled", false);
  }else{
    if(numid==2){
      $('#template1').css({'background':'#38A6C1','border':'1px solid gray','color':'white'});
      $('#template1').text('Seleccionar');
      $('#template1').attr("disabled", false);

      $('#template3').css({'background':'#38A6C1','border':'1px solid gray','color':'white'});
      $('#template3').text('Seleccionar');
      $('#template3').attr("disabled", false);
    }else{
      $('#template1').css({'background':'#38A6C1','border':'1px solid gray','color':'white'});
      $('#template1').text('Seleccionar');
      $('#template1').attr("disabled", false);

      $('#template2').css({'background':'#38A6C1','border':'1px solid gray','color':'white'});
      $('#template2').text('Seleccionar');
      $('#template2').attr("disabled", false);
    }
  }
}

function DragDropBrand(brand,drop){
  var brand=document.getElementById(brand);
  var drop=document.getElementById(drop);

  brand.ondragstart=function(e){
    //Guarda el id del elemento para transferirlo al elemento drop
    //Content es una clave que permite acceder al valor accinado
    e.dataTransfer.setData("content",e.target.id);
  }
  drop.ondragover=function(e){
    //Cancelar el evento que impide que podamos soltar el elemento drag
    e.preventDefault();
  }
  drop.ondrop=function(e){
    //Obtenermos los datos a tráves de la clave content en este caso el id
    var id=e.dataTransfer.getData("content");
    e.target.appendChild(document.getElementById(id));
  }

}

function DragDropSenderInf(senderinfo,drop){
  var senderinfo=document.getElementById(senderinfo);
  var drop=document.getElementById(drop);

  senderinfo.ondragstart=function(e){
    //Guarda el id del elemento para transferirlo al elemento drop
    //Content es una clave que permite acceder al valor accinado
    e.dataTransfer.setData("content",e.target.id);
  }
  drop.ondragover=function(e){
    //Cancelar el evento que impide que podamos soltar el elemento drag
    e.preventDefault();
  }
  drop.ondrop=function(e){
    //Obtenermos los datos a tráves de la clave content en este caso el id
    var id=e.dataTransfer.getData("content");
    e.target.appendChild(document.getElementById(id));
  }

}

function DragDropSenderTable(brand,drop){
  var brand=document.getElementById(brand);
  var drop=document.getElementById(drop);

  brand.ondragstart=function(e){
    //Guarda el id del elemento para transferirlo al elemento drop
    //Content es una clave que permite acceder al valor accinado
    e.dataTransfer.setData("content",e.target.id);
  }
  drop.ondragover=function(e){
    //Cancelar el evento que impide que podamos soltar el elemento drag
    e.preventDefault();
  }
  drop.ondrop=function(e){
    //Obtenermos los datos a tráves de la clave content en este caso el id
    var id=e.dataTransfer.getData("content");
    e.target.appendChild(document.getElementById(id));
  }

}

function DragDropSenderCommercial(brand,drop){
  var brand=document.getElementById(brand);
  var drop=document.getElementById(drop);

  brand.ondragstart=function(e){
    //Guarda el id del elemento para transferirlo al elemento drop
    //Content es una clave que permite acceder al valor accinado
    e.dataTransfer.setData("content",e.target.id);
  }
  drop.ondragover=function(e){
    //Cancelar el evento que impide que podamos soltar el elemento drag
    e.preventDefault();
  }
  drop.ondrop=function(e){
    //Obtenermos los datos a tráves de la clave content en este caso el id
    var id=e.dataTransfer.getData("content");
    e.target.appendChild(document.getElementById(id));
  }

}


window.onload=function(){
  DragDropBrand("brand","section1");
  DragDropBrand("brand","section2");
  DragDropBrand("brand","elements");
  DragDropSenderInf("senderinfo","section1");
  DragDropSenderInf("senderinfo","section2");
  DragDropSenderInf("senderinfo","elements");
  DragDropSenderTable("table","section3");
  DragDropSenderInf("table","elements");
  DragDropSenderCommercial("commercial","section3");
  DragDropSenderCommercial("commercial","elements");
}
