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
});
