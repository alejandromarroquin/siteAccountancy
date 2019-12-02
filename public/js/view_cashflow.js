

$(document).ready(function(){
  $("#confirmamount").on('change', function () {
    if($("#confirmamount").val()!=$("#amount").val()){
      $("#confirmamount").val(null);
    }
  });
});
