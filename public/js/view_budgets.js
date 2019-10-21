function verifyamount(){
  if($("#amount").val()!=$("#confirmamount").val()){
    Swal.fire({
      type: 'error',
      title: 'Las cantidades no coinciden!',
      text: 'Porfavor verifica que las cantidades sean iguales'
    });
    $("#confirmamount").val(null);
  }
}
