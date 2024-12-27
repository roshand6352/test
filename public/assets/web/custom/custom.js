function funTooltip() {
    $('[data-toggle="tooltip"]').tooltip()
}

function notificationToast(message, type) {
    if (type === 'success') {
        toastr.success(message)
    } else if (type === 'warning') {
        toastr.error(message)

    }
}

function floatOnly() {
    $('.float').keypress(function (event) {
        if ((event.which !== 46 || $(this).val().indexOf('.') !== -1) && (event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });
}

function integerOnly() {
    $('.integer').keypress(function (event) {
        if (event.which !== 8 && event.which !== 0 && (event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });
}

$('.integer').keypress(function (event) {
    if (event.which !== 8 && event.which !== 0 && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
});
$('.float').keypress(function (event) {
    if ((event.which !== 46 || $(this).val().indexOf('.') !== -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
});

function loaderView() {
    $.blockUI({
        message: '<div class="spinner-border text-info" role="status"><span class="sr-only"></span></div>',
        css: {
            padding: 0,
            margin: 0,
            width: "25%",
            top: "40%",
            left: "35%",
            textAlign: "center",
            color: "#000",
            border: "none",
            backgroundColor: "transparent",
            cursor: "wait",
            "z-index": "99999999"
        }
    });
    $(".blockOverlay").css('z-index', 99999999999)
}

function loaderHide() {
    setTimeout(function () {
        $.unblockUI();
    }, 100)
}

