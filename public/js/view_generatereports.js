$(document).ready(function(){
  $('#balancesheet').on('click',function(){
    $('#typereport').val(1);
  });
});

$(document).ready(function(){
  $('#generate').on('click',function(){
    var url='';
    if($('#typereport').val()==1){
      url='/generatebalancesheet';
    }
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
       type:'POST',
       url:'/generatebalancesheet',
       data:{rfc:1},
       success:function(data){
          alert(data);
       }
    });
  });
});

$(document).ready(function(){
  $('#alert').hide();
  $('#generate').attr("disabled", true);
  $('#inicio').on('change',function(){
    if(new Date($('#fin').val()).getTime()<new Date($('#inicio').val()).getTime()){
      $('#alert').show();
      $('#generate').attr("disabled", true);
    }else{
      $('#alert').hide();
      if($('#fin').val()!=""){
        $('#generate').attr("disabled", false);
      }
    }
  });
  $('#fin').on('change',function(){
    if(new Date($('#fin').val()).getTime()<new Date($('#inicio').val()).getTime()){
      $('#alert').show();
      $('#generate').attr("disabled", true);
    }else{
      $('#alert').hide();
      $('#generate').attr("disabled", false);
    }
  });
});
