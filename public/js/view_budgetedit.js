$(document).ready(function(){
  $('#alert').hide();

  $('#inicio').on('change',function(){
    if(new Date($('#fin').val()).getTime()<new Date($('#inicio').val()).getTime()){
      $('#alert').show();

    }else{
      $('#alert').hide();

    }
  });
});
