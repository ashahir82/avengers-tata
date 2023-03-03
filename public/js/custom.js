$(document).ready(function() {
    $("#labelUserID").show();
    $("#labelEmailID").hide();
    $("#isCitizen").show();
    $("#nonCitizen").hide();
    $("#isCountryID").show();
    $("#nonCountryID").hide();
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
            $("#isCitizen").show();
            $("#nonCitizen").hide();
            $("#isCountryID").show();
            $("#nonCountryID").hide();
            $("#emailField").show();
            $("#passportField").hide();
            $("#helperUserID").html('MyKad No. (e.g. 791014145061)');
            $("#helperName").html('As Per MyKad');
            $("#helperAddress").html('As Per MyKad');
        } else if (($("#citizenship").val() == 2)) {
            $("#labelUserID").show();
            $("#labelEmailID").hide();
            $("#isCitizen").hide();
            $("#nonCitizen").show();
            $("#isCountryID").show();
            $("#nonCountryID").hide();
            $("#emailField").show();
            $("#passportField").hide();
            $("#helperUserID").html('MyPR No. (e.g. 791014145061)');
            $("#helperName").html('As Per MyPR');
            $("#helperAddress").html('As Per MyPR');
        } else if (($("#citizenship").val() == 3)) {
            $("#labelUserID").hide();
            $("#labelEmailID").show();
            $("#isCitizen").hide();
            $("#nonCitizen").show();
            $("#isCountryID").hide();
            $("#nonCountryID").show();
            $("#emailField").hide();
            $("#passportField").show();
            $("#helperUserID").html('This email will be used as User ID');
        }
    });
});
