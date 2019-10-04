function completeGeneralInformation(){
  if($('input[name="checkcomplete"]').prop('checked')){

    $("#phoneffice").prop('disabled', true);
    $("#extension").prop('disabled', true);
    $("#cellphone").prop('disabled', true);
    $("#street").prop('disabled', true);
    $("#numint").prop('disabled', true);
    $("#numext").prop('disabled', true);
    $("#colony").prop('disabled', true);
    $("#city").prop('disabled', true);
    $("#estate").prop('disabled', true);
    $("#country").prop('disabled', true);
    $("#postalcode").prop('disabled', true);

    $("#phoneffice").val($('input[name="phoneofficet"]').val());
    $("#extension").val($('input[name="extensiont"]').val());
    $("#cellphone").val($('input[name="cellphonet"]').val());
    $("#street").val($('input[name="streett"]').val());
    $("#numint").val($('input[name="numintt"]').val());
    $("#numext").val($('input[name="numextt"]').val());
    $("#colony").val($('input[name="colonyt"]').val());
    $("#city").val($('input[name="cityt"]').val());
    $("#estate").val($('input[name="estatet"]').val());
    $("#country").val($('input[name="contryt"]').val());
    $("#postalcode").val($('input[name="postalcodet"]').val());

  }else{
    $("#phoneffice").prop('disabled', false);
    $("#extension").prop('disabled', false);
    $("#cellphone").prop('disabled', false);
    $("#street").prop('disabled', false);
    $("#numint").prop('disabled', false);
    $("#numext").prop('disabled', false);
    $("#colony").prop('disabled', false);
    $("#city").prop('disabled', false);
    $("#estate").prop('disabled', false);
    $("#country").prop('disabled', false);
    $("#postalcode").prop('disabled', false);

    $("#phoneffice").val("");
    $("#extension").val("");
    $("#cellphone").val("");
    $("#street").val("");
    $("#numint").val("");
    $("#numext").val("");
    $("#colony").val("");
    $("#city").val("");
    $("#estate").val("");
    $("#country").val("");
    $("#postalcode").val("");

  }
}