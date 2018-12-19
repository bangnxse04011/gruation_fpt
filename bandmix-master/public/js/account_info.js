$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function () {

    $("#id_info").show();
    $("#change_pass").hide();

    /**
     * Method show hide when user click to button change pass
     */
    $(".pointer-user").click(function () {
        $("#id_info").hide();
        $("#change_pass").show();
    });

    /**
     * Method change password
     */
    $("#btnChangPass").click(function () {
        if ($("#change_Pass_Form").validationEngine('validate')) {
            $("#change_Pass_Form").submit();
        }
    });
});