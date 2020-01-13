$(document).ready(function(){
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
