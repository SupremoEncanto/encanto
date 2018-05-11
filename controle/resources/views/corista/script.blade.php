$(document).on("click", ".open-coristaEdit", function () {
    var coristaId = $(this).data('id');
    $(".modal-body #id").val( coristaId );
});