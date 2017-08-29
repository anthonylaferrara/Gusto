$(document).ready(function () {
    $("#userForm").hide();
    $("#restoForm").hide();
});

$("input[name='type']").change(function () {
    if ($(this).val() === "user") {
        $("#userForm").show();
        $("#restoForm").hide();
    }
    else if ($(this).val() === "resto") {

        $("#userForm").hide();
        $("#restoForm").show();
    }
});