$(document).ready(function(){
  $('#balancesheet').on('click',function(){
    var url='/generatebalancesheet';
    $('#dates').attr('action', url);
  });

  $('#statementresult').on('click',function(){
    var url='/generatestatementresult';
    $('#dates').attr('action', url);
  });

  $('#trialbalance').on('click',function(){
    var url='/generatetrialbalance';
    $('#dates').attr('action', url);
  });

  $('#cashflow').on('click',function(){
    var url='/generatecashflow';
    $('#dates').attr('action', url);
  });

  $('#periodpoliciesincome').on('click',function(){
    var url='/generateperiodpiliciesincome';
    $('#dates').attr('action', url);
  });

  $('#periodpoliciesexpenses').on('click',function(){
    var url='/generateperiodpiliciesexpenses';
    $('#dates').attr('action', url);
  });

  $('#periodpoliciesdaily').on('click',function(){
    var url='/generateperiodpiliciesdaily';
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
