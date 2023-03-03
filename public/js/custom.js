$(document).ready(function() {
    $('.js-example-basic-single').select2({
        theme: 'bootstrap-5'
    });

    $("#citizenship").on("change", function () {
        if ($("#citizenship").val() == 1) {
            $("#labelUserID").show();
            $("#labelEmailID").hide();
            $("#emailField").show();
            $("#passportField").hide();
        } else if (($("#citizenship").val() == 2)) {
            $("#labelUserID").show();
            $("#labelEmailID").hide();
            $("#emailField").show();
            $("#passportField").hide();
        } else if (($("#citizenship").val() == 3)) {
            $("#labelUserID").hide();
            $("#labelEmailID").show();
            $("#emailField").hide();
            $("#passportField").show();
        }
    });
});
