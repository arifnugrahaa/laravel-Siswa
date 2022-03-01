$(document).ready(function(){

$('a[data-confirm]').click(function(){
    var href = $(this).attr('href');
    var url = window.location.origin ;
    $('#myModal').find('.modal-title').text('Konfirmasi');
    $('#myModal').find('.modal-body').text($(this).attr('data-confirm'));
    $('#myModal').find('.btn-custom').text('Batal');
    $('#myModal').modal('show');
    $('#dataConfirmOK').show();
    $('#dataConfirmOK').attr('href',href)
    return false;
});



$(".alert").delay(2000).slideUp(200, function() {
    $(this).alert('close');
});


});