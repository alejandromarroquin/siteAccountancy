$(document).ready(function(){
  $('#balancesheet').on('click',function(){
    var url=url='/generatebalancesheet';
    $('#dates').attr('action', url);
  });

  $('#statementresult').on('click',function(){
    var url=url='/generatestatementresult';
    $('#dates').attr('action', url);
  });

  $('#trialbalance').on('click',function(){
    var url=url='/generatetrialbalance';
    $('#dates').attr('action', url);
  });

  $('#cashflow').on('click',function(){
    var url=url='/generatecashflow';
    $('#dates').attr('action', url);
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
