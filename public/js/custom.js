$(document).ready(function() {
    $("#labelUserID").show();
    $("#labelEmailID").hide();
    $("#emailField").show();
    $("#passportField").hide();
    $("#helperUserID").html('MyKad No. (e.g. 791014145061)');
    $("#helperName").html('As Per MyKad');
    $("#helperAddress").html('As Per MyKad');

    $('.js-example-basic-single').select2({
        theme: 'bootstrap-5'
    });

    $("#citizenship").on("change", function () {
        if ($("#citizenship").val() == 1) {
            $("#labelUserID").show();
            $("#labelEmailID").hide();
            $("#emailField").show();
            $("#passportField").hide();
            $("#helperUserID").html('MyKad No. (e.g. 791014145061)');
            $("#helperName").html('As Per MyKad');
            $("#helperAddress").html('As Per MyKad');
        } else if (($("#citizenship").val() == 2)) {
            $("#labelUserID").show();
            $("#labelEmailID").hide();
            $("#emailField").show();
            $("#passportField").hide();
            $("#helperUserID").html('MyPR No. (e.g. 791014145061)');
            $("#helperName").html('As Per MyPR');
            $("#helperAddress").html('As Per MyPR');
        } else if (($("#citizenship").val() == 3)) {
            $("#labelUserID").hide();
            $("#labelEmailID").show();
            $("#emailField").hide();
            $("#passportField").show();
            $("#helperUserID").html('This email will be used as User ID');
            $("#helperName").html('As Per Passport');
            $("#helperAddress").html('As Per Passport');
        }
    });
});
