$(document).ready(function(){
    $('#historial-tab').on('click',function(){
      $('.rowshistorial').remove();
      $.ajax({
         type:'GET',
         url:'/purchasesrequest',
         data:{valor:1},
         success:function(data){
            jQuery('#tbodyh').append(data);
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
        $(this).closest('tr').remove();
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
           data:{id:id,status:2},
           success:function(data){
              alert(data);
           }
        });
        $(this).closest('tr').remove();
    });
});
