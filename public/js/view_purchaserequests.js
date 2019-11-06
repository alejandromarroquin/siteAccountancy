$(document).ready(function(){
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $(".Ok").click(function(e){
        e.preventDefault();
        var id = $(this).val();
        $.ajax({
           type:'POST',
           url:'/purchaseupdate',
           data:{id:id,status:1},
           success:function(data){
              alert(data);
           }
        });
    });
});

$(document).ready(function(){
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $(".noOk").click(function(e){
        e.preventDefault();
        var id = $(this).val();
        $.ajax({
           type:'POST',
           url:'/purchaseupdate',
           data:{id:id,status:3},
           success:function(data){
              alert(data);
           }
        });
    });
});
