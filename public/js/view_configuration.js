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
      cadena=$('#txt-content').val();
      $.get("/createtemplate", { cadena: cadena },function(data){
        alert(data);
        
      });
    });

    $('#btn-obtenerhtml').on('click',function(){
      
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
          $('.brandtemplate').attr("src", "{{'storage/Company/'.session('rfc').'/Brand/'.'brand'.session('rfc').'.png'}}");
          $('.commercialtemplate').attr("src", "{{'storage/Company/'.session('rfc').'/Commercial/commercial'.session('rfc').'.png'}}");
          $('.lrfc').append('{{$rfc_emisor}}');
          $('.lbusinessname').append('{{$businessname}}');
          $('.lstreet').append('{{$street}}');
          $('.lconony').append('No.{{$numext}} {{$colony}}');
          $('.lcity').append('{{$city}}, {{$state}}. {{$cp}}');
          $('.table').append('@for($cont;$cont<$cantproducts;$cont++)<div style="width:100%; display:flex;justify-content: space-between;"><div style="width:16.6%;"><div style="width:100%; display:flex;justify-content: center;">{{$codeproduct[$cont]}}</div></div><div style="width:16.6%;"><div style="width:100%; display:flex;justify-content: center;">{{$quantity[$cont]}}</div></div><div style="width:16.6%;"><div style="width:100%; display:flex;justify-content: center;">{{$unit[$cont]}}</div></div><div style="width:16.6%;"><div style="width:100%; display:flex;justify-content: center;">{{$concept[$cont]}}</div></div><div style="width:16.6%;"><div style="width:100%; display:flex;justify-content: center;">{{$unitprice[$cont]}}</div></div><div style="width:16.6%;"><div style="width:100%; display:flex;justify-content: center;">{{$import[$cont]}}</div></div></div>@endfor');
          cadena=$('.estructura').html();
          console.log(cadena);
          idconfig=$('input[name="idconfig"]').val();
          $.get("/createtemplate", { cadena: cadena,idconfig:idconfig },function(data){
            if(data==1){
              Swal.fire(
                'Actualizado!',
                'La plantilla se actualizó correctamente.',
                'success'
              )
              location.reload();
            }else{
              Swal.fire(
                'Error!',
                'Algo salio mal, intente más tarde.',
                'error'
              ).then((result)=>{
                location.reload();
              });
            }
          });
        }
      });
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

function DragDropSenderCommercial(commercial,drop){
  var commercial=document.getElementById(commercial);
  var drop=document.getElementById(drop);

  commercial.ondragstart=function(e){
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
  DragDropSenderCommercial("commercial","section4");
  DragDropSenderCommercial("commercial","elements");
}
