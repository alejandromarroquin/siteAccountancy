$(document).ready(function(){
  $("#account").on('change', function () {
    $("#account option:selected").each(function () {
      elegido=$(this).val();
      $.get("/getaccount", { elegido: elegido }, function(data){
          $("#subaccount").html(data);
      });
    });
  });
});

$(document).ready(function(){
  $("#confirmamount").on('change', function () {
    if($("#confirmamount").val()!=$("#amount").val()){
      $("#confirmamount").val(null);
    }
  });
});
